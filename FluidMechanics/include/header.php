<harder>
    <div style="text-align: center">
    <a href="home.html"><h1 id = "title">流体力学</h1></a>
    </div>

    <hr id="header">
    <?php  
        if($page){
            include("table.php");
            echo("<h2 id ="."subtitle".">".$page.". ".$table[$page]."</h2>");
            echo("<hr id="."header2".">");
        }
        if($title){
            echo("<h2 id ="."subtitle".">".$title."</h2>");
            echo("<hr id="."header2".">");
        }
    ?>

</header>