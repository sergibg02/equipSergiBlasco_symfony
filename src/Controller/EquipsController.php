<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ServeiDadesEquips;

class EquipsController extends AbstractController
{
    private $equips;
    public function __construct(ServeiDadesEquips $dades)
    {
    $this->equips = $dades->get();
    }

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
