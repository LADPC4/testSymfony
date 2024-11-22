<?php

namespace App\Controller;

use App\Model\Employees;
use App\Repository\EmployeesRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/employees')]
class EmployeeApiController extends AbstractController
{
    #[Route('', methods:['GET'])]
    public function getEmployee(EmployeesRepository $repository): Response
    {
        
        $employee = $repository->findAll();
        
            // return new Response(json_encode($employee))
            return $this->json($employee);
    }

    #[Route('/{id<\d+>}', methods:['GET'])]
    public function get(int $id, EmployeesRepository $repository): Response
    {
        $sddEmployees = $repository->find($id);

        if (!$sddEmployees){
            throw $this->createNotFoundException('Employee is non-existent!');
        }

        return $this->json($sddEmployees);
    }

}
