<?php 

namespace App\Controller;

use App\Repository\EmployeesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeeController extends AbstractController
{
    #[Route('/employees/{id<\d+>}', name: 'app_employee_show')]
    public function show(int $id, EmployeesRepository $repository): Response
    {
        $sddEmployee = $repository->find($id);

        if (!$sddEmployee){
            throw $this->createNotFoundException('This employee is non-existent!');
        }

        return $this->render('employees/show.html.twig',[
            'sddEmployee' => $sddEmployee,
        ]);
    }
}