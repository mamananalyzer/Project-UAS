<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Employee;
use App\User;
use Illuminate\Http\Request;


class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('admins.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $formInput=$request->except('picture');

        $this->validate($request,[
            'name' => 'required',
            'role' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jabatan' => 'required',
            // 'jabatan' => 'required|unique:products',
            'dept' => 'required',
            'npwp' => 'required',
            'grade' => 'required',
            'cabang' => 'required',
            'bulan' => 'required',
            'gajipokok' => 'required',
            'makan' => 'required',
            'transport' => 'required',
            'absen' => 'required',
        ]);

        $image=$request->picture;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images/', $imageName);
            $formInput['picture']=$imageName;
        }

        Employee::create($formInput);

        $this->validate($request,[
            'name' => 'required',
            'role' => 'required',
            'nik' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create(request(['name', 'role', 'nik', 'email', 'password']));

        auth()->login($user);

        // dd($request->all());
        return redirect('/admins')->with('status',
        'Terima kasih sudah menginput data, data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin, Employee $employee)
    {
        return view('admins.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
