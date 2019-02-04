<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
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
        $users = User::all();
        return view('payment',compact('users'));
    }
}
