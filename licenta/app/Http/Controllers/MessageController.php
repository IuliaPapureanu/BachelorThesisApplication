<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\CreateMessageRequest;
use App\Mail\ContactMe;
use App\Mail\MessageEmail;
use App\Models\Company;
use App\Models\Message;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
class MessageController extends Controller
{
    public function create(){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');

        $allTags = Tag::getTags()->get();
        return view('messages.create',[
            'message'=>new Message(),
            'allTags'=>$allTags
        ]);
    }

    public function store(CreateMessageRequest $request){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');

        $request->validate(['subject' => 'required']);
        $request->validate(['tag_id' => 'required']);
        $tag= $request->tag_id;
        $companies = Company::getByTag($tag)->get();

        foreach ($companies as $company){
            $message = Message::create([
                'subject' => $request->subject,
                'content'=>$request->message_content,
                'company_id' => $company->id,
            ]);

            Mail::to($company->admin_email)->queue(new MessageEmail($message->content,$message->subject));
//            Mail::to($company->admin_email)->send(new MessageEmail($message->content,$message->subject));
        }

        return redirect()->route('messages.create')->with('message', 'Message sent successfully');
    }

    public function sendMonthlyReport(Company $company){

    }
}
