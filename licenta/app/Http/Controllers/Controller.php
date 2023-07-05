<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Redirects the user based on the submit event, displaying an alert
     *
     * @param  mixed $class The name of the class, used to prefix the route and the alert. The dot '.' must be replaced in the alert with forward slash '/'
     * because while using subfolders in the language folder, the separator is '/'
     * @param  mixed $method The name of the method, used to get the language line, according to the action (create, edit, destroy...)
     * @param  \App\Models\Model  $model The model is responsible for retreving the value of the resource, that will be displayed in the alert
     * @param $langFolder, if the language translation is in another folder
     * @return mixed $name The input name
     */

    public function redirectWithStatus(/*$route = '', */$class, $method, $model, $name, $langFolder = FALSE)
    {
        if (request()->has('save')) {
            return redirect()->route($class . '.edit', $model)
                ->with('success', __($langFolder . '/' . Str::of($class)->replace('.', '/') . '.alert.' . $method . '.success', [$name => $model->$name]));
        }
        elseif (request()->has('save_and_close')) {
            return redirect()->route($class . '.index')
                ->with('success', __($langFolder . '/' . Str::of($class)->replace('.', '/') . '.alert.' . $method . '.success', [$name => $model->$name]));
        }

        // Default value (no save or save_and_close submit button) redirect back
        return redirect()->back()
            ->with('success', __($langFolder . '/' . Str::of($class)->replace('.', '/') . '.alert.' . $method . '.success', [$name => $model->$name]));
    }

    public function checkOrderRights($order, $orderStatus)
    {
        if (auth()->user()->id !== $order->user_id) {
            abort(404);
        }

        if ($order->order_status_id !== $orderStatus) {
            abort(404);
        }
    }

    public function checkOrderStatus($order, $orderStatus)
    {
        if ($order->order_status_id !== $orderStatus) {
            abort(404);
        }
    }

}
