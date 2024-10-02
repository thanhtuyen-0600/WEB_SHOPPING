<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country; 
use Auth;


class CountryController extends Controller
{
    public function index()
    {
        $country = Country::all();  
        // dd($country);
        return view('admin.country.index', compact('country'));
    }

    public function creater()
    {
        return view('admin.country.creater');
    }

    public function insert(Request $request)
    {
        $data = new Country;  
      
        $data->name = $request->name;
        $data->save();

        if($data) 
        {
            return redirect('admin/country/list');
        }
    }

    public function edit($id)
    {
        $data = Country::findOrFail($id);  
        return view('admin.country.edit', compact('data'));
    }

    public function update(Request $request, $id)  
    {
        $country = Country::findOrFail($id);  
        $data = $request->all();

        if($country->update($data)) {
            return redirect('admin/country/list');
        }
    }

    public function delete($id)
    {
        $data = Country::findOrFail($id);  
        $data->delete();

        if($data) {
            return redirect('admin/country/list');
        }
    }
}
