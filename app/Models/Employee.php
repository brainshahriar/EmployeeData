<?php

namespace App\Models;
use CodeIgniter\Model;
class Employee extends Model
{
      protected $table='employee';
      protected $primaryKey='Id';
      protected $allowedFields=[
                'first name',
                'last name',
                'phone',
                'email',
                'designation',
         
      ];
}
?>