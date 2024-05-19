<?php if($_POST["ADI"]=="b191210023@sakarya.edu.tr" && $_POST["PAROLA"]=="b191210023")
			{
        echo"Hoşgeldiniz ".$_POST["ADI"];
        echo"<br>Girişiniz onaylandı.";
            }
             else{
        echo "Girdiğiniz kullanıcı adı veya şifre hatalı.";
        header("refresh:2; login.html");
                 }    
        ?>