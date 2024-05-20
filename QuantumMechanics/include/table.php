<?php
$table=[
    "", //ページ番号とindexを対応させるため
    "Schr&ouml;dinger方程式",
    "定常問題",
    "物理量と固有値方程式",
    "球面調和関数",
    "行列/状態ベクトル",
    "摂動論, 変分法",
    "スピン"
];
$page_max=count($table)-1; //0番目を潰したから1引く

if($flag){
    echo("<h3>目次</h3>");
    echo("<ul>");
    for($i=1;$i<=$page_max;$i++){
        echo("<li>");
        echo("<a href=".$i.".html><h4>".$table[$i]."</h4></a>");
        echo("</li>");
    }
    echo("</ul>");
    $flag=false;
}
?>