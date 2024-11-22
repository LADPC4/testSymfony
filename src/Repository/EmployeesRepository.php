<?php 

namespace App\Repository;

use App\Model\Employees;
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
                'Contract of Service'
            ),
            new Employees(
                2,
                'Zabrina Lazaro',
                'Technical Assistant I',
                'Contract of Service'
            ),
            new Employees(
                3,
                'Raven FLores',
                'Technical Assistant II',
                'Contract of Service'
            ),
            new Employees(
                4,
                'Jonathan Fontanilla',
                'Information Technology Officer II',
                'Permanent'
            ),
            new Employees(
                5,
                'Maria Clarisse Ligunas-Roque',
                'Information Technology Officer III',
                'Permanent'
            ),
            new Employees(
                6,
                'Miguel Karlo Macariola',
                'Information System Researcher III',
                'Permanent'
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