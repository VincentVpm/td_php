<?php
class User
{

    // Attributs
    public $login;
    public $prenom;
    public $password;

    public static $marque = "citroen";

    // Fonctions > Méthodes

    public function login() {
        // Se connecter
        echo "il se connecte";
    }
}

$toto = new User();
$toto->login();

User::$test;