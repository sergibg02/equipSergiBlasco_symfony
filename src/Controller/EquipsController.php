<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipsController extends AbstractController
{
    private $equips = [
        ["codi" => 1, "nom" => "Equip Roig", "cicle" => "DAW", "curs" => "22/23", "membres" => ["Elena", "Vicent", "Joan", "Maria"]],
        ["codi" => 2, "nom" => "Equip Verd", "cicle" => "DAW", "curs" => "22/23", "membres" => ["Carlos", "Laura", "Pablo", "Ana"]],
        ["codi" => 3, "nom" => "Equip Blau", "cicle" => "DAW", "curs" => "22/23", "membres" => ["David", "Sara", "Hector", "Isabel"]],
        ["codi" => 4, "nom" => "Equip Groc", "cicle" => "DAW", "curs" => "22/23", "membres" => ["Marc", "Natalia", "Alex", "Marta"]],
    ];

    #[Route('/equips/{codi}', name: 'app_equips', requirements: ['codi' => '\d+'])]
    public function fitxa($codi)
    {
        $resultat = array_filter($this->equips, function($equip) use ($codi) {
            return $equip["codi"] == $codi;
        });

        if (count($resultat) > 0) {
            return $this->render('equips/index.html.twig', ['equip' => array_shift($resultat)]);
        } else {
            return $this->render('equips/index.html.twig');
        }
    }
}
