<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class EquipsController

{
    private $equips = array(
    array("codi" => 1, "nom" => "Equip Roig", "cicle" => "DAW", "curs" => "22/23", "membres" => ["Elena", "Vicent", "Joan", "Maria"]),
    array("codi" => 2, "nom" => "Equip Roig", "cicle" => "DAW", "curs" => "22/23", "membres" => ["Carlos", "Laura", "Pablo", "Ana"]),
    array("codi" => 3, "nom" => "Equip Roig", "cicle" => "DAW", "curs" => "22/23", "membres" => ["David", "Sara", "Hector", "Isabel"]),
    array("codi" => 4, "nom" => "Equip Roig", "cicle" => "DAW", "curs" => "22/23", "membres" => ["Marc", "Natalia", "Alex", "Marta"]),
    );
    #[Route('/equips/{codi}', name: 'app_equips')]
    public function fitxa($codi)
    {
    $resultat = array_filter($this->equips,
    function($contacte) use ($codi)
    {
    return $contacte["codi"] == $codi;
    });
    if (count($resultat) > 0)
    {
    $resposta = "";
    $resultat = array_shift($resultat); 
    $resposta .= "<ul><li>" . $resultat["nom"] . "</li>" .
    "<li>" . $resultat["cicle"] . "</li>" .
    "<li>" . $resultat["curs"] . "</li></ul>";
    "<li>Membres: <ul>";

            foreach ($resultat["membres"] as $membre) {
                $resposta .= "<li>" . $membre . "</li>";
            }
    return new Response("<html><body>$resposta</body></html>");
    }
    else
    return new Response("Equip no trobat");
    }
    }
