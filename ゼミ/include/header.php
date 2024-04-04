<harder>
    <div style="text-align: center">
    <a href="home.html"><h1 id = "title">箱玉系の数理</h1></a>
    </div>

    <hr id="header">
    <?php  
        if($page){
            include("table.php");
            echo("<h2 id ="."subtitle".">".$table[$page]."</h2>");
            echo("<hr id="."header2".">");
        }
    ?>

</header>