@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
 

        <!-- New Project Form -->
        <form action="{{ url('projects') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Project Name -->
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="project-name" class="col-sm-3 control-label">Project Name</label>
                    <input type="text" name="name" id="project-name" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="project-status" class="col-sm-3 control-label">Status</label>
                    <select name="status" id="project-name" class="form-control">
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
                    <select name="status" id="project-owner" class="form-control">
                        <option value="">Select Owner:</option>
                        <option value="1">Admin(Mike)</option>
                    </select>
                </div>
            </div>

            <!-- Add Project Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Project
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Projects -->
    @if (count($projects) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Projects
            </div>

            <div class="panel-body">
                <table class="table table-striped project-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Project</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <!-- Project Name -->
                                <td class="table-text">
                                    <div>{{ $project->name }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                    <form action="{{ url('project/'.$project->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-project-{{ $project->id }}" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection