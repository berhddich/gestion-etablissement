<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all students from the database
        $students = \App\Models\Student::all();

        // Return the view with the students data
        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
{
    // Validation des données
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255|email|unique:students,email',
        'phone' => 'required|numeric',
        'section' => 'required|max:255',
        'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
    ]);

    // Gestion du téléchargement d'image
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $destinationPath = 'images/';
        $profileImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $validatedData['image'] = $profileImage;
    }

    // Création de l'étudiant dans la base de données
     Student::create($validatedData);

    // Redirection après l'ajout
    return redirect()->route('students.index')->with('success', 'Student added successfully!');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
