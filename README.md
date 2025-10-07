# Kis projekt beadandó
## 1. A Rendszer célja
Filmértékelő, és filmajánló portál

A projektünk célja egy iMDB-hez hasonló, filmekre épülő webalkalmazás létrehozása, amely hatékony információkeresést biztosít a felhasználóknak, és értékelhetik a kedvenc filmjeiket.
Projektünk alapját képzi, hogy a felhasználók be tudjanak regisztrálni a rendszerünkbe alapvető adatokkal, majd egy gyors bejelentkezést követően, hozzáférjenek a filmadatbázishoz. 
Az oldal elsődleges funkciója a filmek adatlapjainak megjelenítése, ahol a látogatók alapvető információkat, leírást és értékeléseket találhatnak. Minden filmhez lehetőség lesz értékelést adni csillagokkal vagy pontszámmal.
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
- filmek megtekintése kéről  
- filmek értékelése  
- filmek hozzáadása
- 
Felhasználó
- bejelentkezés  
- filmek megtekintése borítókép alapján  
- filmek értékelése
  
Látogató  
- Regisztráció  

##K övetelmények
### Funckionális követelmények
- Felhasználók adatainak tárolása (felhasználónév, jelszó, email)
- Webes környezeten működőképes
- A webes felület gördülékenyen kommunikál a hozzárendelt adatbázissal
### Nem funkcionális követelmények
- Felhasználók nem férhetnek hozzá más felhasználók személyes adataihoz csak a felhasználónevüket és profilképüket láthatják
- Webes felületen kezel adatbázist
- A felhasználók nem módosíthatják más felhaszálók értékeléseit
- Használatához telepítés nem szükséges, különböző kiegészítők használata nélkül is elérhető

## 2.4 Mérföldkövek
Rendszerterv kialakítása  
Weboldal fejlesztésének megkezdése

## 3. Folyamatok modellje (átbeszéljük, példa)

Rendszerünkbe regisztráció szükséges, melyet egy bejelentkezés követ. A látogató ezután fog hozzáférést kapni weboldalunkhoz, ahol rögtön a filmadatbázisunkkal találja szembe magát. 
Itt felhasználói (regisztrált felhasználó) jogosultságot kapnak az oldalra látogatók.

Üzleti folyamatok:

Regisztrációnkhoz szükség lesz egy teljes névre, email címre, és egy jelszóra. Ezt követően a bejelentkezés oldalon az email címet, és a jelszót kérjük, a bejelentkezés gombra kattintva elérhetjük a weboldalt. Ha a bejelentkezés vagy a regisztráció sikertelen, hibaüzenetben jelezzük.

Üzleti folyamatok a felhasználók számára:
 
Oldalunk regisztráció hiányában nem működik. A felhasználó a weboldalon a kedvenc filmjei között böngészhet, és azokat értékelheti 1-10-ig terjedő pont(vagy csillag ?)rendszerben.
(???? többet nem tudok hozzáírni, ez még ahhoz kis projekt)

