<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    function index(Request $request): Response
    {
        // Récupère le paramètre 'name' de la requête, ou 'Inconnu' si non défini pour éviter une TypeError si name est null
        return new Response('Bonjour ' . $request->query->get('name', 'Inconnu'));
    }
}
