@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Note</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary"
                    href="{{ route('ProjectManagement.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Problems!</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ProjectManagement.update', $Project->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Project title...">
            </div>
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" class="form-control" placeholder="Project Description...">
            </div>
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="first_name" class="form-control" placeholder="First Name...">
            </div>
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name...">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Project status:</strong>
                <select name="status" class="form-select">
                    @php
                    $statuses = ['active', 'deleted', 'in_progress'];
                    @endphp
                    @foreach ($statuses as $status)
                        @if($status === $Project->status)
                            <option selected value="{{ $status }}">{{ $status }} </option>
                        @else
                            <option value="{{ $status }}">{{ $status }} </option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>
</form>

@endsection
