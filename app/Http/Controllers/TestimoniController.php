<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    // Create New Testimoni
    public function create(Request $request) {
        $formFields = $request->validate([
            'testimoni' => 'required'
        ]);

        if ($request->hasFile('testimoni')) {
            $formFields['testimoni'] = $request->file('testimoni')->store('testimoni', 'public');
        }

        Testimoni::create($formFields);

        return redirect('/sp/dashboard')->with('message', 'Testimoni berhasil disimpan!');
    }

    // Delete Testimoni
    public function destroy(Testimoni $testimoni) {
        $testimoni->delete();

        return redirect('/sp/dashboard')->with('message', 'Testimoni berhasil dihapus!');
    }
}
