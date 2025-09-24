<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

// TODO-7-2 Créer une méthode "order" dans le contrôleur "BookController" basé sur la méthode "index" qui
//      renvoie uniquement les livres ayant une quantité <= à 0

// TODO-8-10 Envoyer les auteurs sur la page "create" depuis la méthode "create" de "BookController"
// TODO-8-13 Ajouter la validation du champ auteur dans la méthode "store" de "BookController"

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('welcome', ['users' => $users]);
    }
}
