<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- link:css + tab で雛形表示 --}}
    {{-- assetを書くことで、publicフォルダの中身ですよという指示になる。 --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    {{-- {{ 変数 }}でタグ内で変数が使える。 --}}
    <h1>計算アプリ</h1>

    {{-- MessageControllerで設定したキーansToShow  ['ansToShow' => ????????]に入ったものを表示 --}}
    <h2>{{ $ansToShow }}</h2>

</body>
</html>