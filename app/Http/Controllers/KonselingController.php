<?php

namespace App\Http\Controllers;

use App\Models\Konseling;
use App\Models\Psikolog;
use Illuminate\Http\Request;

class KonselingController extends Controller
{
    // Show Konseling Form
    public function konseling() {
        return view('conseling.conseling', [
            'psikologs' => Psikolog::all()
        ]);
    }

    // User Payment
    public function payment(Request $request) {
        $formFields = $request->validate([
            'jadwal' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Konseling::create($formFields);

        return redirect('/')->with('message', 'Pambayaran berhasil');
    }

    // Show Conseling Details
    public function details(Psikolog $psikolog) {
        return view('conseling.details', [
            'psikolog' => $psikolog
        ]);
    }
}
