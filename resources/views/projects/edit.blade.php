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
                    <select name="status" id="project-name" class="form-control" selected="{{ $project->status }}">
                        <option value="Write">Write</option>
                        <option value="Rewrite">Rewrite</option>
                        <option value="Build">Build</option>
                        <option value="Rebuild">Rebuild</option>
                        <option value="Validate">Validate</option>
                        <option value="Audit">Audit</option>
                        <option value="Pend">Pend</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="project-owner" class="col-sm-3 control-label">Owner</label>
                    <select name="status" id="project-owner" class="form-control" selected="{{ $project->owner_id }}>
                        <option value="">Select Owner:</option>
                        <option value="1">Admin(Mike)</option>
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