@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Project Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ProjectManagement.create') }}">
                    Add New Project
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">

        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date Created</th>
                <th scope="col">Status</th>
                <th scope="col">Full Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($Project as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>
                        @if($project->status == 'deleted')
                            <div class="badge text-bg-danger">Deleted</div>
                        @elseif($project->status == 'in_progress')
                            <div class="badge text-bg-warning">In Progress</div>
                        @elseif($project->status == 'active')
                            <div class="badge text-bg-success">Active</div>
                        @endif
                    </td>
                    <td>{{ $project->first_name }} {{ $project->last_name }}</td>
                    <td>
                        <form action="{{ route('ProjectManagement.destroy', $project->id) }}" method="POST">
                            <a class="btn btn-info"
                                href="{{ route('ProjectManagement.show', $project->id) }}">
                                Show
                            </a>

                            <a class="btn btn-primary"
                                href="{{ route('ProjectManagement.edit', $project->id) }}">
                                Edit
                            </a>

                            {{-- @csrf
                            @method('DELETE')
                            --}}

                            {{ csrf_field() }}
                           {{ method_field('DELETE') }}


                            {{-- <button type="submit" class="btn btn-danger">
                                Edit Status
                            </button> --}}

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    {!! $Project->links() !!}
@endsection
