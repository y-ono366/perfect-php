PHPスクリプトを実行

<?php
/*
 * サンプルPHPスクリプト
 */

$number = rand(); //乱数取得

if ($number%2 == 0){
    echo $number,"は偶数です。",PHP_EOL;
}
else {
    echo $number,"は奇数です。",PHP_EOL;
}

?>
PHPスクリプト終わり
