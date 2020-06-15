<?php
$uid = Auth::id();

if ($uid && $request->isMethod('post') && $request->has('inter')){
    $intr = $request->input('inter');

    $intrs = '';
    $arr = explode(',', $intr);
    foreach ($arr as $val){
        $val = substr(trim($val),0,20);
        if (strlen($val) > 0 && preg_match('/^[a-z0-9\s]+$/i', $val)){
            $intrs .= ucwords($val).',';
        }
    }
    DB::update('update users set interests = CONCAT(interests, ?) where id = ?', [$intrs, $uid]);

    $data['redirect'] = '/profile/'.Auth::id();
} else {
    $data['redirect'] = '/';
}