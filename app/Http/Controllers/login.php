<?php
if (!Auth::id()){
    if ($request->isMethod('post')){
        if ($request->has(['email', 'password'])){
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                $data['redirect'] = '/profile/'.Auth::id();
            } else {
                $data['error'] = 'Your login attempt failed';
            }
        } else {
            $data['error'] = 'Form is incomplete';
        }   
    }
} else {
    $data['redirect'] = '/';
}