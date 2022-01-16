<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilityController extends Controller
{
    public function index()
    {
        
        // 取得した値をビュー「book/index」に渡す
        return view('Utility/index');
    }
    public function trim(Request $request)
    {
        #入力されてデータを変数に代入
        $res = $request->input('urltext');
        
        //抽出する
        $isMatch = preg_match('/https:\/\/.*video\/.*.(?=\?)/', $res, $trimText);
        if (!$isMatch) return view('Utility/index',['message' => "not match"]);

        // var_dump($isMatch);

        // 取得した値をビュー「book/index」に渡す
        return view('Utility/index',['message' => $trimText[0]]);
    }
}
