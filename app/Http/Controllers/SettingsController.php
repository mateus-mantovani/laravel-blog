<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{

	public function __construct()
	{
		$this->middleware('admin');
	}

	public function index()
    {
        return view('admin.settings.update')->with('setting', Setting::first());
    }


    public function update(Request $request)
    {
        $this->validate($request, [
        	'site_name' => 'required',
	        'contact_number' => 'required',
	        'contact_email' => 'required',
	        'address' => 'required'
        ]);

        $setting = Setting::first();

        $setting->fill($request->all());

        $setting->save();

        Session::flash('success', 'Settings Updated!');

        return redirect()->back();
    }
}
