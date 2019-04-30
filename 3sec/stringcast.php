<?php
// stringcast.php
if(!isset($argv[1])) {
    exit;
}
$num  = $argv[1]; //引数は文字列型

if($num == 100) { //文字列100は整数100へとキャストされた後、比較演算子が実行
    echo "整数100 argv is 100",PHP_EOL;
}elseif($num === 200 ){ //文字列200は文字列200と厳密比較
    echo "整数100と厳密比較 argv is 200",PHP_EOL;
}elseif($num === "200" ){ //文字列200は文字列200と厳密比較
    echo "文字列200と厳密比較 argv is 200",PHP_EOL;
}else{
    echo "argv is not 100",PHP_EOL;
}
