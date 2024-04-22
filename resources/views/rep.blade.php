<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponses</title>
</head>
<body>
    <!-- <h1>Réponses aux questions</h1>

    <h2>Question 1: Liste des plats d’une catégorie donnée ($categorie)</h2>
    @foreach($platsDeCategorie as $plat)
        {{ $plat->id }} - {{ $plat->intitulé }} - {{ $plat->prix }}<br>
    @endforeach

    <h2>Question 2: Le titre de la catégorie d’un plat donné ($plat)</h2>
    {{ $titreCategorie }}

    <h2>Question 3: La composition d’un plat donné ($plat)</h2>
    @foreach($compositionPlat as $composant)
        {{ $composant->libelle }} - {{ $composant->quantite }} {{ $composant->unité }}<br>
    @endforeach

    <h2>Question 4: Les commandes « en cours » d’un serveur donné ($serveur)</h2>
    @foreach($commandesEnCours as $commande)
        Commande ID: {{ $commande->id }} - Table: {{ $commande->numero_table }}<br>
    @endforeach

    <h2>Question 5: Les plats d’une commande donnée ($commande)</h2>
    @foreach($platsDeCommande as $plat)
        {{ $plat->id }} - {{ $plat->intitulé }} - {{ $plat->prix }}<br>
    @endforeach

    <h2>Question 6: Les plats à préparer pour toutes les commandes « en cours »</h2>
    @foreach($platsATraiter as $plat)
        {{ $plat->id }} - {{ $plat->intitulé }}<br>
    @endforeach

    <h2>Question 7: Les commandes en état « servi » et non payées</h2>
    @foreach($commandesServiesNonPayees as $commande)
        Commande ID: {{ $commande->id }} - Table: {{ $commande->numero_table }}<br>
    @endforeach

    <h2>Question 8: Les commandes où on a demandé plus de 5 plats différents</h2>
    @foreach($commandesPlusDe5Plats as $commande)
        Commande ID: {{ $commande->id }} - Nombre de plats: {{ $commande->plats->count() }}<br>
    @endforeach

    <h2>Question 9: Le montant total à payer pour une commande donnée ($commande)</h2>
    Montant total: {{ $montantTotal }}

    <h2>Question 10: Le nombre total des commandes qui ont été affectées hier à un serveur donné ($serveur)</h2>
    Nombre de commandes hier: {{ $nombreCommandesHier }} -->
</body>
</html>
