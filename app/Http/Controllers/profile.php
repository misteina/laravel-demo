<?php
$uid = explode('/', $request->path())[1];

$user = DB::table('users')->select('name','sex','city','interests')->where('id', $uid)->first();

if (!empty($user->interests)){
    $intr = array_filter(explode(',', $user->interests));
} else {
    $intr = $user->interests;
}

$data = [
    'path' => $uid,
    'name' => $user->name,
    'sex' => $user->sex,
    'city' => $user->city,
    'interests' => $intr,
];
