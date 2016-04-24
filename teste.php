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
        
       
        $u = new User();
        
        echo($u->toJson());
        ?>
        
    </body>
</html>
