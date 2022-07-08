<?php
class Prijava{
    public $id;
    public $predmet;
    public $katedra;
    public $sala;
    public $datum; 

    public function __construct($id=null, $predmet=null, $katedra=null, $sala=null, $datum=null){
        $this->$id = $id;
        $this->$predmet = $predmet;
        $this->$katedra = $katedra;
        $this->$sala = $sala;
        $this->$datum = $datum;
    }
    public static function getAll(mysqli $conn){
        $query="SELECT * FROM prijave";
        return $conn->query($query);
    }

    public static function getById($id,mysqli $conn){
        $query="SELECT * FROM prijave WHERE id=$id"; 
        $myArray = array();
        if ($rezultat = $conn->query($query)){
            while($red = $rezultat->fetch_array()){
                $myArray[]=$red;
            }
        }
    }
    public static function delteById($id,mysqli $conn){
        $query="DELETE * FROM prijave WHERE id=$id";
        return $conn->query($query);
    }
    public static function add(Prijava $prijava,mysqli $conn){
        $q = "INSERT INTO prijave(predmet,katedra,sala,datum) VALUES ('$prijava->predmet','$prijava->katedra','$prijava->sala',$prijava->datum')";

    }
    public function update(mysqli $conn){
        $q = "UPDATE prijave set predmet = '$this->predmet', katedra = '$this->katedra', sala = '$this->sala', datum = '$this->datum'";
        return $conn->query($q);
    }


}
?>