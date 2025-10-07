# Funkcionális specifikáció (hasonlo mint a kovspec)
## jelenlegi helyzet leírása
Csapatunk tagjai rengeteg filmet fogyasztanak. Bár különöböző közösségi appokat használnak arra, hogy ezeket megvitassák, mégsincs egy olyan weboldal ahol ezeket tudnák értékelni ezzel listázva kedvenceiket. Ezért szeretnénk egy olyan oldalt készíteni ahol erre lehetőséget kapunk. A filmek nagyon sokat tesznek hozzá az életünkhöz így nem is volt kérdés hogy projektünknek is ezt szeretnénk választani.
## Vágyalomrendszer leírása
Szeretnénk egy egyszerű, jól karbantartható filmértékelő portált fejleszteni Laravelben. A portál fő célja, hogy a felhasználók egy adatbázisból betöltött filmeket értékelhessenek és listázhassák.
Fontos követelmények:
• Webalkalmazás Laravel backenddel (PHP) és SQL alapú adatbázissal (relációs, skálázható séma).
• Frontend reszponzív, minden képernyőmérethez alkalmazkodik (CSS + modern JS/TypeScript szükség szerint).
## Jelenlegi üzleti folyamatok modellje
Szeretnénk egy filmértékelő portált létrehozni, mert sok filmrajongó számára nehéz átlátni a rengeteg filmet és kritikát az interneten. Gyakran időigényes megtalálni azokat a filmeket, amelyek igazán érdeklik a felhasználót. Egy központi platform, ahol a felhasználók értékelhetik a filmeket, láthatják mások véleményét, és könnyen szűrhetnek műfaj, értékelés vagy egyéb szempontok szerint, nagyban megkönnyíti a döntést. 
## Igényelt üzleti folyamatok modellje
Weboldalunkon felhasználóink értékelhetik a filmeket pontszámokkal.A rendszer három különböző szerepkörbe sorolja a látogatókat – Admin, Felhasználó és Látogató –, és ezek a rangok eltérő hozzáférést biztosítanak a weboldal funkcióihoz, például az értékelések kezeléséhez vagy filmadatok szerkesztéséhez.
## Követelménylista
| Id  | Modul       | Név                     | Leírás |
|-----|------------|------------------------|--------|
| F1  | Felület    | Bejelentkezés           | A felhasználók itt tudnak bejelentkezni a rendszerbe, ha filmeket szeretnének értékelni vagy saját értékeléseiket kezelni. |
| F2  | Felület    | Filmek                  | A felhasználók az oldal megnyitása után a Filmek oldalon találják magukat, ahol megtekinthetik az aktuális filmek listáját, értékeléseiket, és bejelentkezés után interakcióba léphetnek velük. |
| F3  | Felület    | Profil                  | A felhasználók módosíthatják saját profiljukat, láthatják az általuk adott értékeléseket, kedvenceket és interakcióikat a filmekkel kapcsolatban. |
| F4  | Felület    | Értékelés létrehozása   | A felhasználók értékelhetik a filmeket pontszámokkal. |
| F5  | Felület    | Regisztráció            | A felhasználók itt hozhatnak létre saját fiókot, amely lehetővé teszi számukra az értékelések beküldését és a profiljuk testreszabását. |
| F6  | Modifikáció| Jelszó módosítása       | A felhasználók módosíthatják jelszavukat a régi jelszó megadásával és az új jelszó megadásával. |
| F7  | Modifikáció| Felhasználó módosítása  | A felhasználók módosíthatják saját felhasználónevüket és egyéb profiladataikat.|
| F8 | Jogosultság| Jogosultsági szintek    | - Admin: filmek törlése, értékelések moderálása<br>- Felhasználó: filmek megtekintése, saját értékelések létrehozása<br>|

## Használati esetek
Admin: Feladata a rendszer felügyelete, karbantartása, tesztelése. Ebből következően minden szerepkörbe be tud lépni, hogy ellenőrizze azok hibamentes üzemelését. 
FELHASZNÁLÓ: Jogában áll az oldalon megjelenő minden tartalom megtekintése, valamit ezekre adhat értékeléseket.
## Megfeleltetés, hogyan fedik le a használati eseteket a követelmények
M1 Bejelentkezés: A felhasználók bejelentkezhetnek a rendszerbe, ami előfeltétele a filmek értékelésének és interakcióknak.   

M2 Filmek: A kezdőképernyőként szolgáló modul biztosítja a felhasználóknak az aktuális filmek listájának megtekintését. Bejelentkezés után értékelhetik a filmeket.  

M3 Profil: A felhasználók módosíthatják saját profiljukat, láthatják az általuk adott értékeléseket és követhetik tevékenységüket. Ez növeli a személyre szabhatóságot és javítja a felhasználói élményt.  

M4 Regisztráció: A regisztráció lehetővé teszi a felhasználók számára saját fiók létrehozását, ami teljes hozzáférést biztosít az értékelések létrehozásához és a profil testreszabásához.  

M5 Jelszó módosítása: A felhasználók bármikor megváltoztathatják jelszavukat, növelve ezzel fiókjuk biztonságát.  

M6 Felhasználó módosítása: A felhasználónév vagy profiladatok módosítása lehetővé teszi a profil további személyre szabását.
## Screenshots
## Forgatókönyvek 

## Funkció - követelmény megfeleltetése
## Fogalomszótár
- ADMIN (adminisztrátor) Oldal kezelője, lehetősége van tartalom törlésére.
- USER (felhasználó) Oldal fiókkal rendelkező felhasználója.
- CONTENT (tartalom)
