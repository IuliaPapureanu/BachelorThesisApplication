<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\CreateTagRequest;
use App\Http\Requests\EditCompanyRequest;
use App\Models\Company;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TagController extends Controller
{
    //
    public function index(){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
//                dd(Auth::user()->id);
        $tags = Tag::getTags()->get();
        return view('tags.index',
            compact(
                'tags',
            )
        );
    }
    public function create(){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        return view('tags.create',[
            'tag'=>new Tag
        ]);
    }

    public function store(CreateTagRequest $request){

        $tag = Tag::create([
            'name' => $request->name
        ]);

        return $this->redirectWithStatus('tags', 'create', $tag, 'title');
    }

    public function edit(Tag $tag){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        $newTag = $tag;
        return view('tags.edit',[
            'tag'=>$newTag
        ]);
    }

    public function update(CreateTagRequest $request, Tag $tag){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        $tag->update([
            'name' => $request->name
        ]);
        return $this->redirectWithStatus('tags', 'update', $tag, 'title');
    }
    public function destroy(Tag $tag)
    {
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        $tag->delete();
        return $this->redirectWithStatus('tags', 'destroy', $tag, 'title');
    }
}
