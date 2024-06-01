<?php

namespace App\Http\Controllers;

use App\Models\EtudiantFSJES;
use App\Models\FSJESFiliere;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantFSJESController extends Controller
{
    
    public function create()
{
    $filiere = FSJESFiliere::all();
    return view('fsjes.app', compact('filiere'));
}

public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'birthdate' => 'required|date',
        'sexe' => 'required|string|max:10',
        'cni' => 'required|string|max:255|unique:fsjes.etudiants,cni',
        'cne' => 'required|string|max:255|unique:fsjes.etudiants,cne',
        'email' => 'required|string|email|max:255|unique:fsjes.etudiants,email',
        'tel' => 'required|string|max:20',
        'adresse' => 'required|string|max:255',
        'ville' => 'required|string|max:255',
        'photo' => 'nullable|image|max:1024',
        'anneebac' => 'required|integer',
        'seriebac' => 'required|string|max:255',
        'filiere_id' => 'required|integer',
    ]);

    // Créer l'inscription
    $code = '24' . str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);

    // Ensure the code is unique
    while (EtudiantFSJES::where('code', $code)->exists()) {
        $code = '24' . str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
    }

    // Create the student record
    $student = new EtudiantFSJES($request->all());
    $student->statut = 'En attente';
    $student->code = $code;
    $student->user_id = Auth::id();
    $student->save();

    $pdf = Pdf::loadView('student_pdf', compact('student'));

    // Save the PDF to a file
    $pdfPath = storage_path('app/public/student_' . $student->id . '.pdf');
    $pdf->save($pdfPath);

    // Provide a link for the student to download the PDF
    return redirect()->back()->with('success', 'Votre inscription a été soumise.')->with('pdf_url', asset('storage/student_' . $student->id . '.pdf'));
}

}