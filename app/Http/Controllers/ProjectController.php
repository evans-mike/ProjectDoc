<?php

namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
	protected $tasks;

    public function __construct(ProjectRepository $projects)
    {
        $this->middleware('auth');
        $this->projects = $projects;
    }

    public function index(Request $request)
	{
	    return view('projects.index', [
            'projects' => $this->projects->forUser($request->user()),
        ]);
	}

	public function store(Request $request)
	{
	    $this->validate($request, [
	    	'name' => 'required|max:255',
	    	'owner' => 'required|max:255',
    	]);

	    $request->user()->projects()->create([
        'name' => $request->name,
    	]);

    	return redirect('/projects');
	}	

	public function destroy(Request $request, Project $project)
    {
        $this->authorize('destroy', $project);
        $project->delete();
        return redirect('/projects');
    }
}
