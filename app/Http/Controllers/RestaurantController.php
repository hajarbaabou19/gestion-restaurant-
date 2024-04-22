<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Plat;
use App\Models\Serveur;
use App\Models\Commande;

class RestaurantController extends Controller
{
    public function afficherReponses()
    {
        // Réponse à la question 1
        $categorie = Categorie::first();
        $platsDeCategorie = Plat::where('categorie_id', $categorie->id)->get();

        // Réponse à la question 2
        $plat = Plat::first();
        $titreCategorie = $plat->categorie->titre;

        // Réponse à la question 3
        $compositionPlat = $plat->composants;

        // Réponse à la question 4
        $serveur = Serveur::first();
        $commandesEnCours = $serveur->commandes()->where('etat', 'en cours')->get();

        // Réponse à la question 5
        $commande = Commande::first();
        $platsDeCommande = $commande->plats;

        // Réponse à la question 6
        $platsAPreparer = Commande::where('etat', 'en cours')->pluck('id')->toArray();
        $platsATraiter = Plat::whereIn('commande_id', $platsAPreparer)->get();

        // Réponse à la question 7
        $commandesServiesNonPayees = Commande::where('etat', 'servi')->where('payé', false)->get();

        // Réponse à la question 8
        $commandesPlusDe5Plats = Commande::has('plats', '>', 5)->get();

        // Réponse à la question 9 (assumant que le montant total d'une commande est calculé à partir des prix des plats)
        $montantTotal = $commande->plats->sum('prix');

        // Réponse à la question 10
        $hier = now()->subDay();
        $nombreCommandesHier = Serveur::whereDate('date_embauche', $hier)->withCount('commandes')->first()->commandes_count;

        return view('rep', compact('platsDeCategorie', 'titreCategorie', 'compositionPlat', 'commandesEnCours', 'platsDeCommande', 'platsATraiter', 'commandesServiesNonPayees', 'commandesPlusDe5Plats', 'montantTotal', 'nombreCommandesHier'));
    }
}


