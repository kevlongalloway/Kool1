<?php
namespace App\Http\Controllers;

use App\Org;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminOrgController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

   
    
    
    
   
}
