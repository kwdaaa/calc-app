<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controllerを継承したMessageController
class MessageController extends Controller
{

    public function calc($num1, $operator, $num2)
    {
        // calc関数の引数$num1をint型（数字の型）に変換して、$num1Int変数にいれる。
        // calc関数の引数$num2をint型（数字の型）に変換して、$num2Int変数にいれる。
        $num1Int = (int) $num1;
        $num2Int = (int) $num2;


        // swich文で、operatorに入る値によって処理を切り替える。
        switch ($operator) {
                // additionの場合
            case 'addition':
                return view('calcs.show', ['ansToShow' => $num1Int + $num2Int]);
                break;

                // subtractionの場合
            case 'subtraction':
                return view('calcs.show', ['ansToShow' => $num1Int - $num2Int]);
                break;

                // multiplicationの場合
            case 'multiplication':
                return view('calcs.show', ['ansToShow' => $num1Int * $num2Int]);
                break;

                // divisionの場合
            case 'division':
                return view('calcs.show', ['ansToShow' => $num1Int / $num2Int]);
                break;

                // その他の値が入った場合
            default:
                return view('calcs.show', ['ansToShow' => '演算子が正しくありません']);
                break;
        }
    }
}
