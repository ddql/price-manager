<?php   

        // обнуляем все куки, которые были заданы в процессе авторизации и переводим на главную страницу
        
        setcookie("login", "", time()-60*60*24*30, "/");
        setcookie("dc", "", time()-60*60*24*30, "/");   
        header('Location: /'); 
?>