<?php
$data = [];
$query = $request->input('q');

$len = strlen($query);

if (!empty($query) && $len > 4 && $len < 15){

    $q = '"' . $query . '"';

    $result = DB::select('SELECT id, name, sex, city FROM users WHERE MATCH(interests) AGAINST(? IN BOOLEAN MODE)', [$q]);

    $data['query'] = $query;
    $data['result'] = $result;
} else {
    $data['redirect'] = '/';
}