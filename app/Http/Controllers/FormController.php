<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users_investisseurs;
use App\Models\users_startups;


class FormController extends Controller
{
        public function store(Request $request)
        {

        //dd($request);
        /* Validez les données (exemple de règles de validation)
        $request = $validate->validate([
            'first_name' => 'required|string|max:255',
            'lastname'      => 'required|string|max:255',
            'email'         => 'required|email|unique:users,email', // Vérifiez l'unicité de l'email dans la table users
            'motdepasse'     => 'required|motdepasse|unique:users,motdepasse', 
            ' repete motdepasse'  => 'required| repete motdepasse|unique:users, repete motdepasse', 
            'ville' => 'required|string|max:255',
            'pays dorigine' => 'required|string|max:255',
            'pays dorigine' => 'required|string|max:255',


            // Ajoutez d'autres règles de validation ici

        ]);*/

        // Stockez les données dans la base de données
        $users_investisseurs = new users_investisseurs();
        $users_investisseurs->nom = $request->input('first_name');
        $users_investisseurs->prenom = $request->input('lastname');
        $users_investisseurs->email = $request->input('email');
        $users_investisseurs->pays_dorigine = $request->input('pays_origine');
        $users_investisseurs->ville = $request->input('ville');
        $users_investisseurs->motdepasse = bcrypt($request->input('password'));
        //$users_investisseurs->repete_motdepasse = bcrypt($request->input('password'));
        $users_investisseurs->ville = $request->input('genre');





        // Remplissez d'autres champs ici
        $users_investisseurs->save();

        return redirect()->back()->with('success', 'Votre inscriptions a été soumises avec succès.');
        //return view('inscription-investisseurs');


        }

        public function startups(Request $request)
    {

        // Stockez les données dans la base de données
        $user_startups = new users_user_startups();
        $user_startups->Nom_du_porteur = $request->input('Nom du porteur');
        $user_startups->Email = $request->input('Email');
        $user_startups->email = $request->input('email');
        $user_startups->Pays_dorigine = $request->input('Pays_origine');
        $user_startups->Ville_residence = $request->input('Ville_residence');
        $user_startups->Lastname = $request->input('Prenom');
        $user_startups->Telephone = $request->input('Telephone');
        $user_startups->Projet = $request->input('Joindre_la_presentation_du_projet');
        $user_startups->Pacourir = $request->input('Pacourir');
        $user_startups->Homme = $request->input('Je_suis_un_homme');
        $user_startups->Femme = $request->input('Je_suis_une_femme');






        //$user_startups->motdepasse = bcrypt($request->input('password'));
        //$users_investisseurs->repete_motdepasse = bcrypt($request->input('password'));
        $user_startups->ville = $request->input('genre');

    }


}
