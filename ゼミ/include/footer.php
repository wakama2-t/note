<footer>
    <hr id="header">
    <div class="parent">
    <?php
        if($page){
            include("table.php");
            $prev=$page-1;
            $next=$page+1;
            
            if($prev > 0){
                echo("<div class="."footer_prev"."><a href=".$prev.".html".">[prev: ".$table[$prev]."]</a></div>");
            }else{
                echo("&nbsp;"); 
            }
            if($next <= $page_max ){
                echo("<div class="."footer_next"."><a href=".$next.".html".">[next: ".$table[$next]."]</a></div>");
            }
        }
    ?>
    </div>
    <div style="text-align: right">
        <a href="../index.html">[homeに戻る]</a>
    </div>
</footer>