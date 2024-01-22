<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ServeiDadesEquips;


class IniciController extends AbstractController
{
    private $serveiDadesEquips;

    public function __construct(ServeiDadesEquips $serveiDadesEquips)
    {
        $this->serveiDadesEquips = $serveiDadesEquips;
    }
    #[Route('/', name: 'inici')]
    public function index(): Response
    {
        $equips = $this->serveiDadesEquips->get();

        return $this->render('inici/index.html.twig', [
            'equips' => $equips,
        ]);
    }
}
