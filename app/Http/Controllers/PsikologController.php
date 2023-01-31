<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
use Illuminate\Http\Request;

class PsikologController extends Controller
{
    // Show New Psikolog Form
    public function register() {
        return view('dashboard.psikolog.register-psikolog');
    }

    // Create/Store New Psikolog Data
    public function create(Request $request)
    {
        $formFields = $request->validate([
            'name'=> 'required',
            'sipp'=> 'required',
            'education'=> 'required',
            'tags' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('psikolog', 'public');
        }

        //create psikolog
        Psikolog::create($formFields);

        return redirect('/sp/dashboard')->with('message','Data berhasil ditambahkan');
    }

    // Show Psikolog Data Edit Form
    public function edit() {
        return view('dashboard.psikolog.edit-psikolog');
    }

    // Update Data Psikolog
    public function update(Request $request, Psikolog $psikolog) {
        $formFields = $request->validate([
            'name'=> 'required',
            'sipp'=> 'required',
            'education'=> 'required',
            'tags' => 'required',
        ]);

        $psikolog->update($formFields);

        return back()->with('message', 'Data psikolog berhasil diubah');
    }

    // Delete Psikolog Data
    public function destroy(Psikolog $psikolog) {
        $psikolog->delete();

        return redirect('/sp/dashboard')->with('message', 'Data psikolog berhasil dihapus');
    }
}
