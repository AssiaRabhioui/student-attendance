<?php

const PUBLIC_PASS = __DIR__;
const APP_PASS = PUBLIC_PASS.'/..';
const  VIEWS_PASS = APP_PASS.'/views';

include '../db/queries.php';

$title = '';


switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
        $title = 'Page d’accueil';
        include VIEWS_PASS.'/home.php';
        break;
    case '/presences':
        $title = 'Prendre les présences';
        include VIEWS_PASS.'/attendances/index.php';
        break;
    case '/etudiants':
        $title = 'Tous les étudiants';
        include VIEWS_PASS.'/students/index.php';
        break;
    default:
        $title = '404';
        include VIEWS_PASS.'/404.php';
}
