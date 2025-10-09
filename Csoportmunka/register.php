<?php
session_start();

    $hibak = [];
    $siker = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nev = $_POST['felhasznalonev'] ?? '';
    $emailcim = $_POST['emailcim'] ?? '';
    $jelszo= $_POST['jelszo'] ?? '';
    
    if(strlen($nev)< 3 ){
        $hibak[] = "A felhasználónévnek legalább 3 karakter hosszúnak kell lennie!";
    }

    if(!filter_var($emailcim, FILTER_VALIDATE_EMAIL)){
        $hibak[] = "Érvénytelen e-mail cím.";
    }

    if(strlen($jelszo) < 8){
        $hibak[] = "A jelszónak minimum 8 karakter hosszúságúnak kell lennie.";
    }
    if(!preg_match("/[A-Z]/",$jelszo))
        $hibak[]="A jelszónak tartalmaznia kell legalább egy nagybetűt.";
    
    if (!preg_match("/[a-z]/", $jelszo)) {
        $hibak[] = "A jelszónak tartalmaznia kell legalább egy kisbetűt.";
    }
    if (!preg_match("/[0-9]/", $jelszo)) {
        $hibak[] = "A jelszónak tartalmaznia kell legalább egy számot.";
    }
    if (!preg_match("/[^a-zA-Z0-9]/", $jelszo)) {
        $hibak[] = "A jelszónak tartalmaznia kell legalább egy speciális karaktert.";
    }

     if (empty($hibak)) {
        $sikeresReg = " Sikeres regisztráció!";
        
         $felhasznalo = [
        'felhasznalonev' => $nev,
        'email' => $emailcim,
        'jelszo' => password_hash($jelszo, PASSWORD_DEFAULT)
        
    ];
    
    $allomany = 'felhasznalok.json';
    if(file_exists($allomany)){
        $adatok = json_decode(file_get_contents($allomany), true);
    
    } else{
        $adatok = [];
    }

    $adatok[] = $felhasznalo;
     file_put_contents($allomany, json_encode($adatok, JSON_PRETTY_PRINT));
     header("Location: login.php");
     exit;
    
    }
} 
