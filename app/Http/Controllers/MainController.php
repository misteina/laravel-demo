<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller{
    public function __invoke(Request $request){

        $path = explode('/', $request->path())[0];

        if (empty($path)) $path = 'home';

        $data = [];
        if (file_exists('/home/enyinna/LaravelApp/app/Http/Controllers/'.$path.'.php')){
            
            include_once $path.'.php';

            if (!array_key_exists('redirect', $data)){
                $content = view($path, $data)->render();
            } else {
                return redirect($data['redirect']);
            }
        } else {
            $content = view('404', $data)->render();
        }
        return view('layout', ['content' => $content]);
    }
}
