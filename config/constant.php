<?php 
    define("NBR_PAGE",4);
    define("WEB_ROUTE" , "http://localhost:8001/");
    define("ROUTE_DIR" , str_replace('public' ,'',$_SERVER['DOCUMENT_ROOT']));
            //connexion avec la base de donnee
            define("HOST_DB","127.0.0.1",);
            define('PASSWORD_DB','');
            define("USER_BD","root");
            define("DBNAME","ratrap");
            define('CHAINE_DE_CONNECTION','mysql:dbname=ratrap;host='.HOST_DB,PASSWORD_DB);
            define("UPLOAD_DIR" , ROUTE_DIR. 'public/image/');
            

?>