# Kis projekt beadandó
## 1. A Rendszer célja
Filmértékelő, és filmajánló portál

A projektünk célja egy iMDB-hez hasonló, filmekre épülő webalkalmazás létrehozása, amely hatékony információkeresést biztosít a felhasználóknak, és ahol értékelhetik a kedvenc filmjeiket.
Projektünk alapját képzi, hogy a felhasználók be tudjanak regisztrálni a rendszerünkbe alapvető adatokkal, ha kell tudjanak jelszót módosítani, illetve felhasználónevet, majd egy gyors bejelentkezést követően, hozzáférjenek a filmadatbázishoz. 
Innenstől az oldal elsődleges funkciója és célja a filmek adatlapjainak megjelenítése, ahol a látogatók alapvető információkat, leírást és értékeléseket találhatnak. Minden filmhez lehetőség lesz értékelést adni csillagokkal vagy pontszámmal.
## 2. Projektterv 
### Projektmunkások és felelősségek (ezeket ábeszéljük még, példa)
Frontend: 
- Filipcsei István Koppány  
- Veres Dóra  
Feladatuk:  Hatékonyan kialakítják a felhasználók számára látható felületet, a weboldalt stílusozzák, megfeleltetik a backendnek.

Backend: 
- Varga Erik  
- Veres Dóra  
Feladatuk:  adatbázis szerkezetéért, struktúrájának kialakításáért felelősek, megfeleltetik a frontendnek.

Tesztelés: 
- Filipcsei István Koppány  
- Varga Erik
Feladatuk:  esetlegesen felmerülő hibák kijavítása, projektünk tesztelésért felelősek mielőtt kiadásra kerül.

## Üzleti folyamatok modellje
Adminisztrátor  

- bejelentkezés
- filmek megtekintése borítóképről
- filmek értékelése  
- filmek hozzáadása
- 
Felhasználó
- bejelentkezés  
- filmek megtekintése borítókép alapján  
- filmek értékelése
  
Látogató  
- Regisztráció  

## Követelmények
### Funckionális követelmények
- Felhasználók adatainak tárolása (felhasználónév, jelszó, email)
- A webes környezeten működőképes legyen
- A webes felület gördülékenyen kommunikáljon a hozzárendelt adatbázissal
### Nem funkcionális követelmények
- Felhasználók nem férhetnek hozzá más felhasználók személyes adataihoz csak a felhasználónevüket és profilképüket láthatják
- Webes felületen kezel adatbázist
- A felhasználók nem módosíthatják más felhaszálók értékeléseit
- Használatához telepítés nem szükséges, különböző kiegészítők használata nélkül is elérhető egyszerű internetkapcsolattal.

## Funkcionális terv
### Rendszerszereplők
Admin
- a rendszer felügyelete az elsődleges feladata, ennek tesztelésére minden szerepkörbe be tud lépni, hogy ellenőrizze azok hibamentes üzemelését
Felhasználó
- jogában áll regisztrációt követően oldalunkra bejelentkezni, megtekinteni filmadatbázisunkat, és ezekre visszajelzést adni
Látogató
- csak regisztráció után érhető el számára weboldalunk

## Fizikai környezet
- Projetkünk weboldalra készül, internethozzáférés szükséges.
- Futtatáshoz semmilyen telepítés nem szükséges.

## Architekturális terv
Backend Server 

Frontend kliens

## Adatbázis terv (DBML/dbdiagram.io)
###Táblák
Felhasználók (id, name, email, password, created_at)
Filmek (id, title, director, category, released, description, created_at)
Értékelések (id, rating, user_id, movie_id, created_at)
Kommentek (id, comment, user_id, movie_id, parent, created_at)
Kategóriák (id, name)

[Vizuális Adatbázis Diagram Megtekintése](https://dbdiagram.io/d/Webshop-terv-68d53597d2b621e422e34d8d)
## Implementációs terv

# Tesztterv
## Telepítési terv
## Karbantartási terv 
Weboldalunkat aktívan karbantartjuk és figyeljük hogy az esetleges hibák kijavításra kerüljenek. 

## Rendszeres karabantartás 

## 2.4 Mérföldkövek
Rendszerterv kialakítása  
Követelményspecifikáció megírása
