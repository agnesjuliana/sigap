<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'ADMIN')->get();
        return view('dashboard.admin.user', compact('users'));
    }
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $role = 'ADMIN';
        $temp = explode(" ", $name);
        $password = $temp[0] . "123";
        $passwordHash = Hash::make($password);

        try {
            $user = new User;
            $user->name = $name;
            $user->email = $email;
            $user->password = $passwordHash;
            $user->role = $role;
            $user->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('admin.user')->with('success', 'Record added!');
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        try {
            $user = User::find($id);
            $user->name = $name;
            $user->email = $email;
            $user->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('admin.user')->with('success', 'Record updated');;
    }

    public function destroy($id)
    {
        try {
            User::destroy($id);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('admin.user')->with('success', 'Record destroyed!');;
    }
}
