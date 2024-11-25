<?php 

namespace App\Repository;

use App\Model\Employees;
use App\Model\EmployeeStatusEnum;
use Psr\Log\LoggerInterface;

class EmployeesRepository
{
    public function __construct(private LoggerInterface $logger)
    {
        
    }

    public function findAll(): array
    {
        $this->logger->info('SDD employees list retrieved!');
        
        return [
            new Employees(
                1,
                'Lance Adrian De Pasion',
                'Technical Assistant I',
                EmployeeStatusEnum::COS,
            ),
            new Employees(
                2,
                'Zabrina Lazaro',
                'Technical Assistant I',
                EmployeeStatusEnum::COS,
            ),
            new Employees(
                3,
                'Raven FLores',
                'Technical Assistant II',
                EmployeeStatusEnum::COS,
            ),
            new Employees(
                4,
                'Jonathan Fontanilla',
                'Information Technology Officer II',
                EmployeeStatusEnum::PERMANENT,
            ),
            new Employees(
                5,
                'Maria Clarisse Ligunas-Roque',
                'Information Technology Officer III',
                EmployeeStatusEnum::PERMANENT,
            ),
            new Employees(
                6,
                'Miguel Karlo Macariola',
                'Information System Researcher III',
                EmployeeStatusEnum::PERMANENT,
            ),
        ];
    }

    public function find(int $id): ?Employees
    {
        foreach ($this->findAll() as  $sddEmployees){
            if ($sddEmployees->getId() === $id){
                return $sddEmployees;
            }
        }

        return null;
    }
}