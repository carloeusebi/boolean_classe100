<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter');
        if ($filter) $students = Student::where('name', 'LIKE', "%$filter%")->get();
        else $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = new Student();
        return view('students.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'surname' => 'required|string'
            ],
            [
                'name.required' => 'Il nome è obbligatorio',
                'surname.required' => 'Il cognome è obbligatorio'
            ]
        );
        $data = $request->all();
        $student = new Student;
        $student->name = $data['name'];
        $student->surname = $data['surname'];
        $student->save();

        return to_route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'surname' => 'required|string'
            ],
            [
                'name.required' => 'Il nome è obbligatorio',
                'surname.required' => 'Il cognome è obbligatorio'
            ]
        );

        $data = $request->all();
        $student->update($data);
        return to_route('students.show', $student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return to_route('students.index');
    }
}
