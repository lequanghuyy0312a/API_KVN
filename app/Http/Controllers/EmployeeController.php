<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function getEmployee() {
        $listEmployees = DB::select("select * from employee");
      
        return response()->json(['listEmployees' => $listEmployees]);          
    }
}
