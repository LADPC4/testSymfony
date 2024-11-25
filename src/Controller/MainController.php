<?php

namespace App\Controller;

use App\Repository\EmployeesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(EmployeesRepository $employeesRepository): Response
    {
        $sddEmployees = $employeesRepository->findAll();
        $sddEmployee = $sddEmployees[array_rand($sddEmployees)];

        return $this->render('main/homepage.html.twig',[
            'sddEmployee' => $sddEmployee,
            'sddEmployees' => $sddEmployees,
        ]);
    }
}
