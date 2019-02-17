<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Soal;

class AdminController extends Controller
{
    public function index() {
        $data = User::all();
        return view('admin',compact('data'));
    }
    public function edit($id) {
        $edit = User::find($id);
        return view('edit',compact('edit'));
    }
    public function update(Request $request, $id) {
        $users = User::find($id);
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        $users->update($data);
        return redirect('/admin');
    }
    public function destroy($id) {
        User::destroy($id);
        return redirect('/admin');
    }
    public function roles() {
        $users = User::all(); 
        $roles = Role::all();
        return view('role',compact('users','roles'));
    }

    public function addRole(Request $request) {
        $user_id = $request->input('user_id');
        $role_id = $request->input('role_id');
        $user = User::find($user_id);
        $user->roles()->attach($role_id);
        return redirect('admin/role');
    }
    public function deleteRole($id) {
        Role::destroy($id);
        return redirect('admin/role');
    }
    public function payment() {
        $users = Role::where('name','User')->first()->users()->orderBy('name','desc')->get();
        return view('payment',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */

    public function verifPayment(Request $request, $id) {
        $users = User::find($id);
        //dd($users);
        $data = [
            'verified' => $request->input('verified')
        ];
        //dd($data);
        $users->update($data);
        return redirect('admin/payment');
    }

    // SOAL

    public function soal() {
        $soal = Soal::all();
        return view('soal',compact('soal'));
    }

    public function soalEdit($id) {
        $editSoal = Soal::find($id);
        return view('editSoal',compact('editSoal'));
    }

    public function updateSoal(Request $request, $id) {
        $soals = Soal::find($id);
        $data = [
            'id_soal' => $request->input('id_soal'),
            'path' => $request->input('path'),
        ];
        $soals->update($data);
        return redirect('/admin/soal');
    }
    

    public function destroySoal($id) {
        Soal::destroy($id);
        return redirect('/admin/soal');
    }

    public function addSoal(Request $request)
    {
        // Soal::create($request->only('title','content','user_id'));
        $this->validate($request, [
            'id_soal' => 'required',
            'path' => 'required|file|mimes:pdf',
        ]);

        if($request->hasFile('path')) {
            $fileExt = $request->file('path')->getClientOriginalName();
            $fileName = pathinfo($fileExt,PATHINFO_FILENAME);
            $ext = $request->file('path')->getClientOriginalExtension();
            $store = $fileName. '.' .$ext;
            $upload = $request->file('path')->move(public_path('soal'),$store);
        } else {

        }

        $soal = new Soal;
        $soal->id_soal = $request->input('id_soal');
        $soal->path = $store;
        $soal->save();

        return back()->with('success', 'File Uploaded Successfully');
    
    
    }

}
