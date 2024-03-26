<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function showEmployee() {
        $name = "Juan Dela Cruz";
        $age = 30;
        $department = "Human Resources";
    
        return view('employee', compact('name', 'age', 'department'));
    }
    
}
