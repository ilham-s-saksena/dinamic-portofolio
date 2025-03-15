<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function userDashboard(){
        $template = Template::all();
        return view('user.dashboard', compact('template'));
    }
    public function adminDashboard(){return view('admin.dashboard');}

    public function form(Request $request) {
        $template_id = $request->input('template');
        $template = Template::find($template_id);
        return view('user.form', compact('template'));
    }
}
