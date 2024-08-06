<?php



# EN-TETE DE PAGE COMMUN A TOUTES LES PAGES DU SITE
// Inclusion de header.php
require_once './inc/header.php';


#  Système de routage pour inclusion de la page demandée par l'utilisateur 

# Récupération de la page à afficher
$page = $_GET['page'] ?? 'home';

# Inclusion du fichier de configuration 
require_once './config/config.php';

# Enregistrement de toutes les pages dans le tableau des pages autorisées
# Si la page n’est pas contenu dans ce tableau  => redirection vers la page par d'erreur (404) 
$authorizedPages = ['home', 'about', 'contact', 'products','product','category','accessories', 'promotions', '404'];
$page = in_array($page, $authorizedPages) ? $page : '404';


// Inclusion de la page demandée
require_once './pages/' . $page . '.php';


# PIED DE PAGE COMMUN A TOUTES LES PAGES DU SITE
// Inclusion de footer.php
require_once './inc/footer.php';