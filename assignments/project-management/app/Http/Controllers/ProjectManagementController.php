<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\ProjectManagement;

class ProjectManagementController extends Controller
{
   public function index()
    {
        $Project = ProjectManagement::latest()->paginate(5);

        return view('index', compact('Project'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        ProjectManagement::create(array_merge($request->all(), ['status' => 'active']));

        $Project = ProjectManagement::latest()->paginate(5);

        return view('index', compact('Project'))
        ->with('i', (request()->input('page', 1) -1) * 5)
        ->with('sucess', 'Project updated sucessfully!');
    }

    public function show($id)
    {
        $Project = ProjectManagement::find($id);
        return view('show', compact('Project'));
    }

    public function edit($id)
    {
        $Project = ProjectManagement::find($id);
        return view('edit', compact('Project', 'id'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'status' => 'required'
        ]);

        $Project = ProjectManagement::find($id);
        $Project->title = request('title');
        $Project->description = request('description');
        $Project->first_name = request('first_name');
        $Project->last_name = request('last_name');
        $Project->status = request('status');
        $Project->save();

        $Project = ProjectManagement::latest()->paginate(5);

        return view('index', compact('Project'))
        ->with('i', (request()->input('page', 1) -1) * 5);

    }

    public function destroy($id)
    {
        $Project = ProjectManagement::find($id);
        if($Project->status === 'active'){
            $Project->status = 'deleted';
        }else{
            $Project->status  = 'active';
        }
        $Project->save();

        $Project = ProjectManagement::latest()->paginate(5);

        return view('index', compact('Project'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }

}
