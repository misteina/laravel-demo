<?php
if (!Auth::id()){
    $data = [];
    if ($request->isMethod('post')){

        if ($request->has(['id', 'email', 'password', 'vpassword', 'name', 'sex', 'city'])){

            Validator::make($request->all(), [
                    'id' => 'required|min:3|max:15|alpha',
                    'email' => 'required|email',
                    'password' => 'required|max:15|min:4|same:vpassword',
                    'vpassword' => 'required',
                    'name' => 'required|alpha|min:3|max:15',
                    'sex' => 'required|in:Male,Female',
                    'city' => 'required|regex:/^[A-Za-z\s]+$/'
                ],
                [
                    'same' => 'The password fields do not match.'
                ]
            )->validate();

            $fields = $request->only(['id', 'email', 'password', 'name', 'sex', 'city']);
            $fields['password'] =  Hash::make($fields['password']);
            $fields['name'] = ucwords($fields['name']);
            $fields['interests'] = '';
            $fields['id'] = strtolower($fields['id']);

            $status = DB::table('users')->insert($fields);
            if ($status){
                Auth::loginUsingId($fields['id']);

                $data['redirect'] = '/profile/'.Auth::id();
            } else {
                $data['error'] = 'An error was encountered';
            }
        } else {
            $data['error'] = 'Form is incomplete';
        }
    }
} else {
    $data['redirect'] = '/';
}