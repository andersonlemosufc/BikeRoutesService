<?php

    include_once 'model/Event.class.php';
    include_once 'dao/EventDAO.class.php';
    include_once 'model/JsonParser.class.php';
    
    //EVENT
    function add_event($json){
        $event = JsonParser::toEvent($json);
        $dao = new EventDAO();
        $res = $dao->insert($event);
        $dao->close();
        $res = "{\"events\":[" . $event->toJson() . "]}";
        return $res;
    }
    
    function update_event($json){
        $event = JsonParser::toEvent($json);
        $dao = new EventDAO();
        $dao->update($event);
        $dao->close();
        $res = "{\"events\":[" . $event->toJson() . "]}";
        return $res;
    }
    
    function remove_event($id){
        $dao = new EventDAO();
        $res = $dao->delete($id);
        $dao->close();
        return "{\"ints\" : [".((int)$res)."]}";
    }
    
    function find_event_by_id($id){
        $dao = new EventDAO();
        $event = $dao->findById($id);
        $dao->close();
        if($event==null) $res = "{\"events\":[]}";
        else $res = "{\"events\":[" . $event->toJson() . "]}";
        return $res;
    }
    
    function find_block_events($pos, $len){
        $dao = new EventDAO();
        $events = find_block($dao->findAll(), $pos, $len);
        $dao->close();
        $res = "{\"events\":". JsonParser::encondeObjectArray($events). "}";
        return $res;
    }
    
    function find_all_events(){
        $dao = new EventDAO();
        $events = $dao->findAll();
        $dao->close();
        $res = "{\"events\":". JsonParser::encondeObjectArray($events). "}";
        return $res;
    }
    
    function update_user_event($idE, $idU, $confirmed){
        $dao = new UserEventDAO();
        $ue = $dao->findById($idU, $idE);
        if($ue == null) $res = $dao->insert ($idU, $idE, ((int)$confirmed));
        else $res = $dao->update ($idU, $idE, ((int)$confirmed));
        $dao->close();
        return "{\"ints\" : [".((int)$res)."]}";
    }
    
    function invite($idE, $idU, $confirmed){
        $dao = new UserEventDAO();
        $ue = $dao->findById($idU, $idE);
        if($ue == null) $res = $dao->insert ($idU, $idE, ((int)$confirmed));
        else $res = 1;
        $dao->close();
        return "{\"ints\" : [".((int)$res)."]}";
    }
    
    function find_users_event($idE, $confirmed){
        $dao = new UserDAO();
        if($confirmed) $l = $dao->findByEventConfirmed($idE);
        else $l = $dao->findByEventInvited($idE);
        $dao->close();
        $res = "{\"users\":". JsonParser::encondeObjectArray($l). "}";
        return $res;
    }
    
    function find_block_users_event($idE, $confirmed, $pos, $len){
        $dao = new UserDAO();
        if($confirmed) $l = $dao->findByEventConfirmed($idE);
        else $l = $dao->findByEventInvited($idE);
        $dao->close();
        $res = "{\"users\":". JsonParser::encondeObjectArray(find_block($l, $pos, $len)). "}";
        return $res;
    }

?>