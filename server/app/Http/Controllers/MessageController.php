<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controllerを継承したMessageController
class MessageController extends Controller
{

    public function calc($num1, $what, $num2)
    {
        // calc関数の引数$num1をint型（数字の型）に変換して、$num1Int変数にいれる。
        // calc関数の引数$num2をint型（数字の型）に変換して、$num2Int変数にいれる。
        $num1Int = (int) $num1;
        $num2Int = (int) $num2;

        // 足し算した値を$additionAns変数にいれる。
        // 引き算した値を$subtractionAns変数にいれる。
        // 掛け算した値を$multiplicationAns変数にいれる。
        // 割り算した値を$divisionAns変数にいれる。
        $additionAns = $num1Int + $num2Int;
        $subtractionAns = $num1Int - $num2Int;
        $multiplicationAns = $num1Int * $num2Int;
        $divisionAns = $num1Int / $num2Int;

        // その他の値が入った場合
        $errorAns = '演算子が正しくありません';


        // swich文で、whatに入る値によって処理を切り替える。
        switch ($what) {
                // additionの場合
            case 'addition':
                return view('calcs.show', ['ansToShow' => $additionAns]);
                break;

                // subtractionの場合
            case 'subtraction':
                return view('calcs.show', ['ansToShow' => $subtractionAns]);
                break;

                // multiplicationの場合
            case 'multiplication':
                return view('calcs.show', ['ansToShow' => $multiplicationAns]);
                break;

                // divisionの場合
            case 'division':
                return view('calcs.show', ['ansToShow' => $divisionAns]);
                break;

                // その他の値が入った場合
            default:
                return view('calcs.show', ['ansToShow' => $errorAns]);
                break;
        }
    }
}
