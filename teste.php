<!DOCTYPE html>
<html>
    <head>
        <title>BYKE ROUTES</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php

        include_once 'model/Event.class.php';
        include_once 'dao/EventDAO.class.php';
        include_once 'model/JsonParser.class.php';
        include_once 'util.php';
        include_once './actions_event.php';
        
        send_mail_retrieve_password("andersonlemos.ufc@gmail.com", "PALMEIRAS");
        
        /*$idU=7  ;
        $distance="";
        $type="";
        $specification="Caminhada";
        $date="";
        $hour="";
        $latitude="";
        $longitude="";
        
        $s = search_available_to_user($idU, $distance, $type, $specification, $date, $hour, $latitude, $longitude);
        $l = JsonParser::toEventArray(substr($s, 10, -1));
        
        foreach($l as $a)
            hey($a->__toString()."<br>");
         */
        ?>
        
    </body>
</html>
