<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
	protected $projects;

    public function __construct(ProjectRepository $projects)
    {
        $this->middleware('auth');
        $this->projects = $projects;
    }

    public function index(Request $request)
	{
	    $projects = Project::all();

	    return view('projects.index', compact('projects'));

	}

	public function store(Request $request)
	{
	    $this->validate($request, [
	    	'name' => 'required|max:255',
    	]);

	    $request->user()->projects()->create([
        	'name' => $request->name,
          'repository' => $request->repository,
        	'status' => $request->status_cd,
        	'owner_id' => $request->owner_id,
    	]);

    	return redirect('/projects');
	}	

	public function edit(Project $project)
	{
		$project = $this->projects->find($project->id);
		return view ('projects.edit', compact('project'));
	}

	public function update(Request $request, Project $project)
	{

		$project->update($request->all());

		return redirect('/projects');
	}


	public function destroy(Request $request, Project $project)
    {
        $this->authorize('destroy', $project);

        $project->delete();

        return redirect('/projects');
    }
}
