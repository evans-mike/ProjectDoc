<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
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
	    $projects = Project::all();

	    return view('projects.index', compact('projects'));

	    // return view('projects.index', [
     //        'projects' => $this->projects->forUser($request->user()),
     //    ]);
	}

	public function show(Project $project) 
	// Good example of route-model binding
	{
		return view ('projects.show', compact('project'));
	}

	public function store(Request $request)
	{
	    $this->validate($request, [
	    	'name' => 'required|max:255',
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
