<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Conseil;
use App\Models\Activite;

class ProjectController extends Controller
{
    

    public function login()
    {
        return view('Login');
    }

    public function register()
    {
        return view('Register');
    }

    public function RegisterPg(Request $request)
    {
        $var=$request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:utilisateurs',
            'password' => 'required|min:6',
        ]);

        Utilisateur::create($var);


        return redirect('/Login');
    }

    public function LoginPg(Request $req)
    {
        $User = Utilisateur::all();

        $email = $req->input("email");
        $inputpassword = $req->input("password");


    
        foreach ($User as $user) {
            if ($user->email == $email) {
                if ($user->password == $inputpassword) {
                    $req->session()->put('id_user',$user->id);

                    $IDCONN = $req->session()->get('id_user');                    
                    $User = Utilisateur::all();
                    foreach ($User as $user) {
                        if ($user->id == $IDCONN)
                            return redirect()->route('activiteRec');
                    }
                } else
                    return view("/Login", ["error" => "Password incorrect"]);
            }
        }

        return view("/Login", ["error" => "Email introuvable"]);
    }

    public function Accueil()
    {
        return view('Accueil');
    }

    public function Conseils()
    {
        $conseil = Conseil::all(); // Fetch all conseils from the database
        return view('Conseil', ["conseil" => $conseil]); // Pass data to the view
    }   

    public function afficheractivite()
    {
        return view('AjouterActivite');
    }

    public function ajouteractivite(Request $req)
    {
        $IDCONN = $req->session()->get('id_user');
        $var=$req->validate([
            'type' => 'required',
            'details' => 'required',
            'quantite_co2' => 'required',
            'date' => 'required',
        ]);

        $var['utilisateur_id'] = $IDCONN;


       Activite::create($var);

       return redirect()->route('activiteRec');
    }

    public function activiteRec()
    {
        $act = Activite::all();
        return view('Accueil', ["Act" => $act]);
    }
    
}
