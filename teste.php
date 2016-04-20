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
        
        $json = "{\"description\":\"descrição\",\"gender\":\"MALE\",\"id\":0,\"image\":\"\",\"mail\":\"andersonlemos.ufc@live.com\",\"name\":\"Anderson\",\"password\":\"senha\"}";
        
        $t = true;
        $f = false;
        $i = ((int)$t);
        $j = ((int)$f);
        
        hey($t);
        hey($f);
        hey($i);
        hey($j);
        
        //$a = evento(6);
        
        //$json = $a->toJson();
        
        //hey($json."<br>");
        
        //$l = JsonParser::toUser($json);
        
        //hey($l->__toString());
        
        
        /*$type = new EventType(0, EventType::OTHER, "correr");
        $date = "2006-01-01 10:20:20";
        $departure = new Location(0, 20, 100, "MG");
        $arrival = new Location(0, 333, 0, "MN");
        $description = "wendell";
        $secret = false;
        $organizer = usuario(8);
        $over = false;
        $g = [usuario(6), usuario(1)];
        $u = [usuario(8)];

        $e = new Event(5, $type, $date, $departure, $arrival, $description, $secret, $organizer, $over, $g, $u);

        $dao = new EventDAO();
        $l = $dao->findAll();
        $dao->close();

        //hey($r, "r: ");
        //if($e!=null){
        foreach($l as $e){
            hey($e->__toString());
            echo("guests: ");
            foreach ($e->getGuests() as $g) echo($g->getId()." ");
            echo("<br> users: ");
            foreach ($e->getUsers() as $i) echo($i->getId()." ");
            echo("<br>=========================<br>");
        }
        //else hey("nulo");
         
         */

        ?>
        
    </body>
</html>
