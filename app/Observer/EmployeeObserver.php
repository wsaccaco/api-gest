<?php

namespace App\Observers;

use App\Employee;

class EmployeeObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function creating(Employee $employee)
    {
        $employee->doc_type = "DNI";
        $employee->save();
    }
}