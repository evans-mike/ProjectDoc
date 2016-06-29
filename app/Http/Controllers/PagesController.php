<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home() 
    {
    	return view ('welcome');
    }

    public function createUser() 
    {
    	return view('createUser');
	}

	public function createProject() 
	{
    	return view('createProject');
	}

	public function userProjects() 
	{
	    return view('userProjects');
	}

	public function editProject() 
	{
	    return view('editProject');
	}

	public function projectTransactions() 
	{
	    return view('projectTransactions');
	}


}
