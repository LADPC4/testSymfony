<?php 

namespace App\Model;

enum EmployeeStatusEnum: string
{
    case PERMANENT = 'Permanent';
    case COS = 'COS';
    case JO = 'JO';
}
