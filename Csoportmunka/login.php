<?php
session_start();

if (isset($_SESSION['bejelentkezve']) && $_SESSION['bejelentkezve'] == true) {
    header("Location: lista.php");
    exit;
}
    $hibak = [];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $felhasznalonev = $_POST['felhasznalonev'] ?? '';
        $jelszo = $_POST['jelszo'] ?? '';

        $allomany = 'felhasznalok.json';

        if(file_exists($allomany)){
            $felhasznalok = json_decode(file_get_contents($allomany), true);
            
            $sikeres = false;

            foreach($felhasznalok as $felhasznalo) {
                if(
                    $felhasznalo['felhasznalonev'] === $felhasznalonev && 
                    password_verify($jelszo, $felhasznalo['jelszo'])
                ){
                    $_SESSION['bejelentkezve'] = true;
                    $_SESSION['felhasznalonev'] = $felhasznalonev; 
                    header("Location: lista.php");
                    exit;
                }
            }

            $hibak[] = "Hibás felhasználónév vagy jelszó";
        }else
            {
                $hibak[] = "Nincs elérhető felhasználói adat"; 
            }
            
        }
    ?>

<?php
echo  isset($_SESSION['bejelenkezve']) && $_SESSION['bejelenkezve'] == true;
?>
<form method="POST" action="">
    Felhasználónév: <input type="text" name="felhasznalonev"><br>
    Jelszó: <input type="password" name="jelszo"><br>
    <input type="submit" value="Bejelentkezés">
</form>

<?php
if (!empty($hibak)) {
    foreach ($hibak as $hiba) {
        echo $hiba;
    }
}
?>