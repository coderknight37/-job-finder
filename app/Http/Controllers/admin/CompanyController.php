<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Company;
use Exception;

use Illuminate\Support\Facades\File;
class CompanyController extends Controller
{

    public function logout() {
        Auth("company")->logout();
        return redirect()->route("welcome");
    }
    public function index()
    {
        return view('admin.pages.company.index', [
            'compaines' => Company::all(),
        ]);
    }


    public function create()
    {
        return view("admin.pages.company.create");
    }


    public function store(Request $request)
    {
       $logo = $request->file("logo");
       $cover = $request->file("cover");
       $logo_name_gen = hexdec(uniqid());
       $cover_name_gen = hexdec(uniqid());
       $logoExtension = strtolower($logo->getClientOriginalExtension());
       $coverExtension = strtolower($cover->getClientOriginalExtension());
       $logo_name = "$logo_name_gen.$logoExtension";
       $cover_name = "$cover_name_gen.$coverExtension";

       $logo->move(public_path("Administrator/company/logo"), $logo_name);
       $cover->move(public_path("Administrator/company/cover"), $cover_name);
        Company::create([
            "name"  => request()->input("name"),
            "email"  => request()->input("email"),
            "address"  => request()->input("address"),
            "password"  => bcrypt(request()->input("password")),
            "website"  => request()->input("website"),
            "phone"  => request()->input("phone"),
            "description"  => request()->input("description"),
            "logo"          => $logo_name,
            "cover_photo"     => $cover_name,
            "admin_id" => auth("admin")->id(),
        ]);

        return redirect()->route('admin.company.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $company = Company::find($id);


        return view("admin.pages.company.edit", compact("company"));
    }


    public function update(Request $request, $id)
    {
        //
        try {
            $company = Company::find($id);

            $logo = request()->file("logo");
            $cover = $request->file("cover");
            File::delete(public_path("Administrator/company/cover/" . $company->cover_photo));
            File::delete(public_path("Administrator/company/logo/" . $company->logo));
            $logo_name_gen = hexdec(uniqid());
            $cover_name_gen = hexdec(uniqid());
            $logoExtension = strtolower($logo->getClientOriginalExtension());
            $coverExtension = strtolower($cover->getClientOriginalExtension());
            $logo_name = "$logo_name_gen.$logoExtension";
            $cover_name = "$cover_name_gen.$coverExtension";
            $logo->move(public_path("Administrator/company/logo"), $logo_name);
            $cover->move(public_path("Administrator/company/cover"), $cover_name);
            $company->update([
                            "name"  => request()->input("name"),
                            "email"  => request()->input("email"),
                            "address"  => request()->input("address"),
                            "password"  => bcrypt(request()->input("password")),
                            "website"  => request()->input("website"),
                            "phone"  => request()->input("phone"),
                            "description"  => request()->input("description"),
                            "cover_photo"     => $cover_name,
                            "logo"     => $logo_name,
                        ]);


            // if ($logo === null || $cover === null) {

            //     if ($logo === null && $cover === null) {
            //         $company->update([
            //             "name"  => request()->input("name"),
            //             "email"  => request()->input("email"),
            //             "address"  => request()->input("address"),
            //             "password"  => bcrypt(request()->input("password")),
            //             "website"  => request()->input("website"),
            //             "phone"  => request()->input("phone"),
            //             "description"  => request()->input("description"),
            //         ]);
            //     }

            //     if ($logo === null) {

            //         $oldCover = $request->file("cover");
            //         $cover_name_gen = hexdec(uniqid());
            //         $coverExtension = strtolower($oldCover->getClientOriginalExtension());
            //         $cover_name = "$cover_name_gen.$coverExtension";
            //         File::delete(public_path("Administrator/company/cover/" . $company->cover_photo));
            //         request()->file("cover")->move(public_path("Administrator/company/cover"), $cover_name);
            //         $company->update([
            //             "name"  => request()->input("name"),
            //             "email"  => request()->input("email"),
            //             "address"  => request()->input("address"),
            //             "password"  => bcrypt(request()->input("password")),
            //             "website"  => request()->input("website"),
            //             "phone"  => request()->input("phone"),
            //             "description"  => request()->input("description"),
            //             "cover_photo"     => $cover_name,
            //         ]);
            //     }
            //     else {
            //         $oldLogo = $request->file("logo");

            //         $logo_name_gen = hexdec(uniqid());

            //         $logoExtension = strtolower($oldLogo->getClientOriginalExtension());

            //         $logo_name = "$logo_name_gen.$logoExtension";

            //         File::delete(public_path("Administrator/company/logo/" . $company->logo));
            //         request()->file("logo")->move(public_path("Administrator/company/logo"), $logo_name);
            //         $company->update([
            //             "name"  => request()->input("name"),
            //             "email"  => request()->input("email"),
            //             "address"  => request()->input("address"),
            //             "password"  => request()->input("password") === null ? $company->password : bcrypt(request()->input("password")),
            //             "website"  => request()->input("website"),
            //             "phone"  => request()->input("phone"),
            //             "description"  => request()->input("description"),
            //             "logo"     => $logo_name,
            //             "admin_id" => auth("admin")->id(),
            //         ]);
            //     }
            // }

            return redirect()->route('admin.company.index');
        }
        catch(Exception $e) {
            return redirect()->withErrors(["error" => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
        try {
            $company = Company::find($id);

            File::delete(public_path("Administrator/company/logo/" . $company->logo));
            File::delete(public_path("Administrator/company/cover/" . $company->cover_photo));
            $company->forceDelete();
            return redirect()->route("admin.company.index");
        }

        catch(Exception $e) {
            return redirect()->withErrors(["error" => $e->getMessage()]);
        }
    }


}
