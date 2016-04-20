<?php

class Location{

    private $id;
    private $latitude;
    private $longitude;
    private $address;

    public function __construct($id, $latitude, $longitude, $address) {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->address = $address;
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function __toString() {
        return "Location{" .
                "id=".$this->id.
                ", latitude=" . $this->latitude .
                ", longitude=" . $this->longitude .
                ", address='" . $this->address . '\'' .
                '}';
    }
    
    public static function fromArray($m){
        return new Location($m['id'], $m['latitude'], $m['longitude'], $m['address']);
    }
    
    public function toArray(){
        return array(
            'id' => $this->id,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'address' => $this->address
        );
    }

    public function toJson(){
        return json_encode($this->toArray());
    }
    
}

?>