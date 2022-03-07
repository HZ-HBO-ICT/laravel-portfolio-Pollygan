<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::all();
        return view('grades.index', compact('grades', 'grades'));
    }

    public function create()
    {
        return view('grades.create');
    }

    public function store()
    {
        request()->validate([
            'course_name'=> 'required',
            'EC'=> 'required',
            'test_name'=> 'required',
            'best_grade'=> 'numeric|min:0|max:10',

        ]);
        $grade = new Grade();
        $grade->course_name = request('course_name');
        $grade->EC = request('EC');
        $grade->test_name = request('test_name');
        $grade->best_grade = request('best_grade');
        $grade->save();

        return redirect('/grades');
    }

    public function edit($id)
    {
        $grade = Grade::find($id);
        return view('grades.edit', ['grade' => $grade]);
    }

    public function update($id)
    {
        request()->validate([
            'course_name'=> 'required',
            'EC'=> 'required',
            'test_name'=> 'required',
            'best_grade'=> 'numeric|min:0|max:10',

        ]);

        $grade = Grade::find($id);
        $grade->course_name = request('course_name');
        $grade->EC = request('EC');
        $grade->test_name = request('test_name');
        $grade->best_grade = request('best_grade');
        $grade->save();
        return redirect('/grades/' . $grade->id);
    }

    public function destroy($id)
    {
        $grade = Grade::find($id);
        $grade->delete();

        return redirect('/grades');
    }
}
