<!-- 2章　変数とデータ型 -->

<!-- 【実際に変数を使ってみよう】 -->
<?php
echo "【実際に変数を使ってみよう】";
echo '<br>';
$message = "Hello World!";
var_dump($message);

$x = 8;
$y = 5.55;
echo '<br>';
var_dump($x);
echo '<br>';
var_dump($y);
?>

<!-- 【論理値(trueとfalseの真偽値)】 -->
<?php
echo '<br>';
echo "【論理値】";
echo '<br>';
$flag = true;
var_dump($flag)
?>

<!-- 【NULL型(変数の中に何も入っていないこと)】 -->
<?php
echo '<br>';
echo "【NULL型】";
echo '<br>';
$emp = null;
var_dump($emp);
?>

<!-- 【日本語をvar_dumpすると...】 -->
<?php
echo '<br>';
echo "【日本語をvar_dumpすると...】";
echo '<br>';
$en_words = 'Hello World';
var_dump($en_words);
echo '<br>';
$ja_words = 'こんにちは';
var_dump($ja_words);
?>

<!-- 【IT用語　SESに向けて準備しよう】 -->
<?php
echo "<br>";
echo "【IT用語　SESに向けて準備しよう】";
echo "<br>";
echo "1.API" . "<br>";
echo "API(Application Programming Interface(何かをつなぐもの))とは、ソフトウェアやアプリケーションの一部を外部に公開することにより、第三者が開発したソフトウェアと機能を共有できるようにするもの。機能を拡張させ、さらに便利に使えるようにすることができる。" . "<br>";
echo "2.SVN" . "<br>";
echo "SVN(Apache Subversion)とは、バージョン管理システムの一つで、変更履歴を残すことができるもの。" . "<br>";
?>
