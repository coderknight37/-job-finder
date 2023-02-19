<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ScientificDegree;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.user.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $sciences = ScientificDegree::all();



        return view("admin.pages.user.create", compact("sciences"));
    }


    public function store(Request $request)
    {
        request()->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email"],
            "science" => ["required"],
            "password" => ["required"]

        ]);

        User::create([
            "name"  => request()->input("name"),
            "email"  => request()->input("email"),
            "password" => bcrypt(request()->input("password")),
            "scientific_degree_id"  => request()->input("science"),
        ]);

        return redirect()->route("admin.user.index");

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


    public function edit($id)
    {
        $user = User::find($id);
        $sciences = ScientificDegree::all();
        return view("admin.pages.user.edit", compact("user", "sciences"));
    }

    public function update($id)
    {
        request()->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email"],
            "science" => ["required"],
        ]);

        $user = User::find($id);
        if (request()->input("password") === null) {
            $user->update([
                "name"  => request()->input("name"),
                "email"  => request()->input("email"),
                "scientific_degree_id"  => request()->input("science"),
            ]);
        }
        else {
            $user->update([
                "name"  => request()->input("name"),
                "email"  => request()->input("email"),
                "scientific_degree_id"  => request()->input("science"),
                "password" => bcrypt(request()->input("password")),
            ]);
        }
        return redirect()->route("admin.user.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = User::find($id);
            $user->forceDelete();
            return redirect()->back();
        }

        catch(Exception $e) {
            return redirect()->withErrors(["error" => $e->getMessage()]);
        }
    }

    public function logout() {
        Auth("web")->logout();
        return redirect()->route("welcome");
    }
}
