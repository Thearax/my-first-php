<html>
    <head><meta charset="utf-8"></head>
    <body>
        <h4 style="margin:0 400px;padding:10px">មេលេខគុណ</h4>
    <?php
            /*$num=20;

            for($num=20;$num>0;$num--){
                echo"the numer is:$num<br>";
            }*/

            echo"<table border='1';cellpadding='1';>";
                echo"<tr>";
                        for($n=1;$n<10; $n++){
                            echo"<td style='padding:12px'>";
                                echo"<h2 style='background:#DDA0DD; text-align:center'>$n</h2>";
                                for ($num=1;$num<11;$num++){
                                    echo "<div>$n x $num =".$num * $n."</div>";
                                }
                            echo"</td>";    
                        }   
                echo"</tr>";   
            echo"</table>";
            ?>
    </body>
</html>

