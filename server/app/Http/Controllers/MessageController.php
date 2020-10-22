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
                // additionの場合 $ansToShow 変数の中に計算結果をいれる。
            case 'addition':
                $ansToShow = $num1Int + $num2Int;
                break;

                // subtractionの場合 $ansToShow 変数の中に計算結果をいれる。
            case 'subtraction':
                $ansToShow = $num1Int - $num2Int;
                break;

                // multiplicationの場合 $ansToShow 変数の中に計算結果をいれる。
            case 'multiplication':
                $ansToShow = $num1Int * $num2Int;
                break;

                // divisionの場合 $ansToShow 変数の中に計算結果をいれる。
            case 'division':
                $ansToShow = $num1Int / $num2Int;
                break;

                // その他の値が入った場合
            default:
                $ansToShow =  '演算子が正しくありません';
                break;
        }

        // 計算結果が入った $ansToShow を ansToShowキーに入れて「show.blade.php」でキーを使って計算結果を呼び起こす。
        return view('calcs.show', ['ansToShow' => $ansToShow]);
    }
}
