<?php
session_start();

$hibak = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nev = $_POST['username'] ?? '';
    $emailcim = $_POST['email'] ?? '';
    $jelszo = $_POST['password'] ?? '';
    $jelszo_megerosites = $_POST['password_confirm'] ?? '';
    $szuletesi_datum = $_POST['szulDatum'] ?? '';

    $allomany = 'users.json';
    $adatok = file_exists($allomany) ? json_decode(file_get_contents($allomany), true) : [];

    // --- Egyediség ellenőrzése ---
    foreach ($adatok as $f) {
        if ($f['username'] === $nev) {
            $hibak[] = "Ez a felhasználónév már foglalt!";
            break;
        }
    }
    foreach ($adatok as $f) {
        if ($f['email'] === $emailcim) {
            $hibak[] = "Ezzel az e-mail címmel már regisztráltak!";
            break;
        }
    }

    // --- Validációk ---
    if (strlen($nev) < 3) {
        $hibak[] = "A felhasználónévnek legalább 3 karakter hosszúnak kell lennie!";
    }

    if (!filter_var($emailcim, FILTER_VALIDATE_EMAIL)) {
        $hibak[] = "Érvénytelen e-mail cím.";
    }

    if ($jelszo !== $jelszo_megerosites) {
        $hibak[] = "A két jelszó nem egyezik meg!";
    }
    
    if (strlen($jelszo) < 8) {
        $hibak[] = "A jelszónak minimum 8 karakter hosszúságúnak kell lennie.";
    }
    if (!preg_match("/[A-Z]/", $jelszo)) {
        $hibak[] = "A jelszónak tartalmaznia kell legalább egy nagybetűt.";
    }
    if (!preg_match("/[a-z]/", $jelszo)) {
        $hibak[] = "A jelszónak tartalmaznia kell legalább egy kisbetűt.";
    }
    if (!preg_match("/[0-9]/", $jelszo)) {
        $hibak[] = "A jelszónak tartalmaznia kell legalább egy számot.";
    }
    if (!preg_match("/[^a-zA-Z0-9]/", $jelszo)) {
        $hibak[] = "A jelszónak tartalmaznia kell legalább egy speciális karaktert.";
    }

    // --- Sikeres regisztráció ---
    if (empty($hibak)) {
        $felhasznalo = [
            'username' => $nev,
            'email' => $emailcim,
            'password' => password_hash($jelszo, PASSWORD_DEFAULT),
            'szulDatum' => $szuletesi_datum
        ];
        
        $adatok[] = $felhasznalo;
        file_put_contents($allomany, json_encode($adatok, JSON_PRETTY_PRINT));
        
        // Sikeres regisztráció után átirányítás a bejelentkezési oldalra
        header("Location: login_form.html?regsuccess=1");
        exit;
    } 
    
    // --- Hibás regisztráció ---
    $_SESSION['hibak'] = $hibak;
    $_SESSION['input'] = ['username' => $nev, 'email' => $emailcim];
    header("Location: register_form.html");
    exit;
}
?>