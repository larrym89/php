@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Project</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary"
                    href="{{ route('ProjectManagement.index')}}">
                    Back
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3>{{ $Project->title }}</h3>
            </div>
            <div class="form-group">
                <strong>Name:</strong>{{ $Project->first_name}} {{ $Project->last_name}}
            </div>
            <div class="form-group">
                <strong>Description:</strong>
                @if ($Project->status === 'active')
                    {{ $Project->description }}
                @else
                    <del> {{ $Project->description }} </del>
                @endif
            </div>
            <div class="form-group">
                <strong>Status:</strong>
                @if ($Project->status === 'active')
                    Active
                @else
                    Deleted
                @endif
            </div>
        </div>
    </div>

@endsection
