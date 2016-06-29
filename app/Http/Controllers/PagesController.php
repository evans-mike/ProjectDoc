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
    	return view('pages.createUser');
	}

	public function createProject() 
	{
    	return view('pages.createProject');
	}

	public function userProjects() 
	{
	    return view('pages.userProjects');
	}

	public function editProject() 
	{
	    return view('pages.editProject');
	}

	public function projectTransactions() 
	{
	    return view('pages.projectTransactions');
	}


}
