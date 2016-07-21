@extends ('layouts.app')

@section ('content')

	<h1>Edit the Project</h1>

	<!-- New Project Form -->
        <form action="{{ url("projects/$project->id") }}" method="POST" class="form-horizontal">
        	{{ method_field('PATCH') }}
        	{{ csrf_field() }}

            <!-- Project Name -->
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="project-name" class="col-sm-3 control-label">Project Name</label>
                    <input type="text" name="name" id="project-name" class="form-control" value="{{ $project->name }}">
                </div>
                <div class="col-sm-6">
                    <label for="project-status" class="col-sm-3 control-label">Status</label>
                    <select name="status" id="project-name" class="form-control" selected="{{ $project->status_cd }}">
                        <option value="1">Write</option>
                        <option value="2">Build</option>
                        <option value="7">Rewrite</option>
                        <option value="3">Rebuild</option>
                        <option value="4">Validate</option>
                        <option value="5">Audit</option>
                        <option value="8">Pend</option>
                        <option value="6">Closed</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="project-owner" class="col-sm-3 control-label">Owner</label>
                    <select name="owner" id="project-owner" class="form-control" selected="{{ $project->owner_id }}>
                        <option value="">Select Owner:</option>
                        <option value="1">Admin</option>
                    </select>
                </div>
            </div>

            <!-- Add Project Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Update Project
                    </button>
                </div>
            </div>
        </form>
    </div>

@stop