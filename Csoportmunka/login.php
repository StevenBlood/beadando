<?php
session_start();

$hibak = [];
$bejelentkezve = $_SESSION['bejelentkezve'] ?? false;

// 1. Ha a felhasználó már be van jelentkezve, irányítsuk át azonnal.
if ($bejelentkezve === true) {
    header("Location: lista.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 2. HELYES MEZŐNEVEK BEOLVASÁSA: email és password a HTML űrlapról
    $email_vagy_nev = $_POST['email'] ?? ''; 
    $jelszo_input = $_POST['password'] ?? ''; 

    $allomany = 'felhasznalok.json';

    if (file_exists($allomany)) {
        $felhasznalok = json_decode(file_get_contents($allomany), true);
        $belepett = false;

        foreach ($felhasznalok as $felhasznalo) {
            
            // 3. Ellenőrzés: Az email címet és a felhasználónevet is ellenőrizhetjük bejelentkezéskor.
            // A regisztrációs kód emailt és nevet is tárolt.
            $azonosito_talalat = (
                $felhasznalo['email'] === $email_vagy_nev ||
                $felhasznalo['felhasznalonev'] === $email_vagy_nev 
            );
            
            // 4. Jelszó ellenőrzése hash ellen
            if ( $azonosito_talalat && password_verify($jelszo_input, $felhasznalo['jelszo']) ) {
                
                $_SESSION['bejelentkezve'] = true;
                $_SESSION['felhasznalonev'] = $felhasznalo['felhasznalonev']; // Mentsük a nevet a sessionbe
                
                // SIKERES BEJELENTKEZÉS UTÁN ÁTIRÁNYÍTÁS:
                header("Location: lista.php");
                exit;
            }
        }
        
        // 5. Ha a ciklus végéig nem történt átirányítás, hibát dobunk.
        $hibak[] = "Hibás e-mail cím/felhasználónév vagy jelszó.";
        
    } else {
        $hibak[] = "Nincs regisztrált felhasználó a rendszerben."; 
    }
}

// 6. Hibák mentése session-be és visszatérés a formra
if (!empty($hibak)) {
    $_SESSION['login_hibak'] = $hibak;
}

// 7. Vissza a bejelentkezési oldalra (ahol a hibaüzeneteket meg kell jeleníteni)
header("Location: login_form.html");
exit;

// A KÓD VÉGE. NINCS HTML, Nincs ECHO. Csak átirányítás.
?>