<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
use Illuminate\Http\Request;

class PsikologController extends Controller
{
    // Show New Psikolog Form
    public function register() {
        return view('dashboard.register-psikolog');
    }

    // Create/Store New Psikolog Data
    public function create(Request $request)
    {
        $formFields = $request->validate([
            'name'=> 'required',
            'sipp'=> 'required',
            'education'=> 'required',
        ]);

        //createpsikolog$psikolog
        $psikolog = Psikolog::create($formFields);

        return redirect('/sp/dashboard')->with('message','Data berhasil ditambahkan');
    }

    // Show Psikolog Data Edit Form
    public function edit() {
        return view('dashboard.edit-psikolog');
    }

    // Update Data Psikolog
    public function update(Request $request, Psikolog $psikolog) {
        $formFields = $request->validate([
            'name'=> 'required',
            'sipp'=> 'required',
            'education'=> 'required',
        ]);
    }

    // Delete Psikolog Data
    public function destroy(Psikolog $psikolog) {
        $psikolog->delete();

        return redirect('/sp/dashboard')->with('message', 'Data psikolog berhasil dihapus');
    }
}
