<?php

use vendor\jdl\App\Dispatcher;

echo "<h1>" . $projet->getNom_projet() . "</h1>";

if ($isAdmin) {
    echo "<p>(ADMIN)</p>";
    echo '<a href=' . Dispatcher::generateUrl('ParticipeController', 'addUtilisateurToProjet') . '&id_projet=' . $projet->getId_projet() . '>Ajouter un participant</a><br>';
}

echo '<a href=' . Dispatcher::generateUrl('TacheController', 'createTache') . '&id_projet=' . $projet->getId_projet() . '>Créer une nouvelle tâche</a><br>';
if ($isAdmin) {
    echo '<a style="color: red;" href=' . Dispatcher::generateUrl('ProjetController', 'displaySupprProjet') . '&id_projet=' . $projet->getId_projet() . '>Supprimer le projet</a><br>';
    echo '<a style="color: red;" href=' . Dispatcher::generateUrl('ProjetController', 'updateProjet') . '&id_projet=' . $projet->getId_projet() . '>Modifier le projet</a><br>';
    
}
echo "<ul>";
// echo '<a href=' . Dispatcher::generateUrl('projetController', 'updateProjet', ['id_projet' => $projet->getId_projet()]) . '><button>Modifier</button></a>';
// echo '<a href="' . Dispatcher::generateUrl('projetController', 'displaySupprProjet', ['id_projet' => $projet->getId_projet()]) . '"><button>Supprimer</button></a>';
foreach ($users as $user) {
    echo '<li>' . $user->getNom_utilisateur() . '</li>';
}
echo "</ul>";
echo "<ul>";echo '<br>';

foreach ($taches as $tache) {
    if ($projet->getId_utilisateur() === $_SESSION['id']) {
        echo '<li><a href=' . Dispatcher::generateUrl("TacheController", "displayTache", ['id_projet' => $projet->getId_projet(), "id_tache" => $tache->getId_tache(), "id_utilisateur" => $tache->getId_utilisateur(), "id_priorite" => $tache->getId_priorite(), "id_cdv" => $tache->getId_cdv()]) . '>' . $tache->getTitre_tache() . '</a></li>
        <button><a href=' . Dispatcher::generateUrl('tacheController', 'displaySupprTache', ['id_tache' => $tache->getId_tache(), 'id_projet' => $projet->getId_projet()]) . '>Supprimer</a></button>
        <button><a href=' . Dispatcher::generateUrl('tacheController', 'updateTache', ['id_tache' => $tache->getId_tache(), 'id_projet' => $projet->getId_projet()]) . '>Modifier</a></button>';

    }
}
echo "</ul>";
