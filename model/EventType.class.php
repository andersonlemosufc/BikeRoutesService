<?php

class EventType {

    const BIKE = 0;
    const HIKE = 1;
    const RUN = 2;
    const OTHER = 3;

    private $especification;
    private $type;
    private $id;

    public function __construct($id, $type, $especification) {
        $this->id = $id;
        $this->especification = $especification;
        $this->type = $type;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getEspecification() {
        return $this->especification;
    }

    public function setEspecification($especification) {
        $this->especification = $especification;
    }

    public static function getEventType($type) {
        if ($type == "BIKE")
            return EventType::BIKE;
        if ($type == "HIKE")
            return EventType::HIKE;
        if ($type == "RUN")
            return EventType::RUN;
        return EventType::OTHER;
    }

    public static function toString($type) {
        if ($type == EventType::BIKE)
            return "BIKE";
        if ($type == EventType::HIKE)
            return "HIKE";
        if ($type == EventType::RUN)
            return "RUN";
        return "OTHER";
    }

    public function __toString() {
        return "EventType{" .
                "id=" . $this->id .
                ", type='" . EventType::toString($this->type) . '\'' .
                ", especification='" . $this->especification . '\'' .
                '}';
    }
    
    public function toJson(){
        return json_encode($this->toArray());
    }
    
    public static function fromArray($m){
        return new EventType($m['id'], EventType::getEventType($m['type']), $m['especification']);
    }


    public function toArray(){
        return array(
            'id' => $this->id,
            'type' => EventType::toString($this->type),
            'especification' => $this->especification
        );
    }

}

?>