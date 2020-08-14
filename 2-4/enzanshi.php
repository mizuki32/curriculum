<!-- 2章　演算子 -->
<?php
// 代入演算子
echo "【代入演算子】";
echo '<br>';
$x = 20;
echo '<br>';

// 連結演算子
echo "【連結演算子】";
echo '<br>';
echo "Hello" . "world";
echo '<br>';
$hello = "Hello";
$world = "World!!";
echo $hello.$world;
echo '<br>';

// 四則演算子
echo "【四則演算子】";
echo '<br>';
echo 2908 + 123;
echo '<br>';
echo 20 - 12;
echo '<br>';
echo 100 * 2;
echo '<br>';
echo 30 / 2;
echo '<br>';
echo 13 % 3;
echo '<br>';

// 単項演算子
echo "【単項演算子】";
echo '<br>';
// $x = $x + 1
$x++;
echo $x;
echo '<br>';

// $x = $x - 1
$x = 20;
$x--;
echo $x;
echo '<br>';

// $x = $x + 5
$x = 20;
$x += 5;
echo $x;
echo '<br>';

// $x = $x * 5
$x = 20;
$x *= 5;
echo $x;
echo '<br>';

// $x = $x - 5
$x = 20;
$x -= 5;
echo $x;
echo '<br>';

// $x = $x / 5
$x = 20;
$x /= 5;
echo $x;
echo '<br>';

// $x = $x / 3の余り
$x = 20;
$x %= 3;
echo $x;
echo '<br>';

// IT用語
echo "【IT用語】";
echo '<br>';
echo "１.エビデンス";
echo '<br>';
echo "エビデンスとは、システム開発のテスト工程などで、システムが正しく動作している、あるいは不具合が生じたことを示す証拠となる書類やデータのなどのこと。";
echo '<br>';
echo "2.バッチ";
echo '<br>';
echo "バッチとは、「1回分にまとめる」という意味で、処理目的ごとに区切り、その区切りごとに順次実行していく処理のこと。また、あらかじめまとめられた処理を一度に行うおこと。";
echo '<br>';
echo "3.MVCモデル";
echo '<br>';
echo "MVCモデルとは、Model, View, Controllarのことで「アプロケーション設計」の機能を整理するための概念で構造の乱れを防ぐ。 " . '<br>' . "モデルでは、システム内の設計や機能をどうするかがここで行われる。" . '<br>' . "ビューでは、実際に表示したり入力する機能の処理を行う。" . '<br>' . "コントローラーでは、ユーザーの入力に基づきモデルとビューを制御する。";
echo '<br>';

?>