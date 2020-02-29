<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;
use App\Models\UpdateModel;

class ProjectController extends Controller
{
    public function home()
    {
        $data = ProjectModel::orderBy('created_at', 'desc')->get();
        return view('home')->with('data', $data);
    }
    public function projectenpage()
    {
        $data = ProjectModel::orderBy('created_at', 'desc')->get();
        return view('project.allprojects')->with('data', $data);
    }
    public function createget()
    {
        return view('project.make');
    }

    public function createpost(Request $request)
    {
        $request->validate([
            'projectname' => 'required|max:100',
            'beschrijving' => 'required|max:500',
        ]);

        $aanvraag = new ProjectModel;
        $aanvraag->projectname = $request->input('projectname');;
        $aanvraag->beschrijving = $request->input('beschrijving');
        $aanvraag->save();

        return redirect('/dashboard')->with('success', "Joepie! Je heb een nieuwe project gemaakt!");

    }

    public function project($id)
    {
        $data['project'] = ProjectModel::find($id);
        $data['blogpost'] = UpdateModel::where('project_id', $id)->orderBy('created_at', 'desc')->get();
        return view('project.project')->with('data', $data);
    }

    public function changeproject($id)
    {
        $data = ProjectModel::find($id);
        return view('project.change')->with('data', $data);
    }

    public function changepost(Request $request, $id)
    {
        $request->validate([
            'projectname' => 'required|max:100',
            'beschrijving' => 'required|max:500',
        ]);

        $aanvraag = ProjectModel::find($id);
        $aanvraag->projectname = $request->input('projectname');;
        $aanvraag->beschrijving = $request->input('beschrijving');
        $aanvraag->save();

        return redirect('/dashboard')->with('success', "Je hebt het project succesvol aangepast!");

    }
}
