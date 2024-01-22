<?php
namespace App\Service;
class ServeiDadesEquips
{
    private $equips = [
        ["codi" => 1, "nom" => "Equip Roig", "cicle" => "DAW", "curs" => "22/23", "membres" => ["Elena", "Vicent", "Joan", "Maria"],"imatge" => "1.jpg"],
        ["codi" => 2, "nom" => "Equip Verd", "cicle" => "DAW", "curs" => "22/23", "membres" => ["Carlos", "Laura", "Pablo", "Ana"],"imatge" => "2.jpg"],
        ["codi" => 3, "nom" => "Equip Blau", "cicle" => "DAW", "curs" => "22/23", "membres" => ["David", "Sara", "Hector", "Isabel"],"imatge" => "3.jpg"],
        ["codi" => 4, "nom" => "Equip Groc", "cicle" => "DAW", "curs" => "22/23", "membres" => ["Marc", "Natalia", "Alex", "Marta"],"imatge" => "4.png"],
    ];
public function get()
{
return $this->equips;
}
}
?>