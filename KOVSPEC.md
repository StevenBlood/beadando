# Követelmény specifikáció
## Áttekintés  
Projektünk célja fejleszteni egy filmértékelő portált ahol a felhasználók kedvükre értékelhetik a filmeket. Ehhez egy regisztráció lesz szükséges az oldalunkon majd azt követi egy gyors bejelentkezés, és sikeres bejelentkezés esetén már hozzá is férhetnek filmadatbázisunkhoz.
## Jelenlegi helyzet leírása
Csapatunk tagjai rengeteg filmet fogyasztanak. Bár különöböző közösségi appokat használnak arra, hogy ezeket megvitassák, mégsincs egy olyan weboldal ahol ezeket tudnák értékelni ezzel listázva kedvenceiket. Ezért szeretnénk egy olyan oldalt készíteni ahol erre lehetőséget kapunk.
## Vágyalomrendszer
Olyan weboldal létrehozása mely számítógépről is elérhető. Hogy a lehető legszebben tudjuk ezt kivitelezni a Laravel keresztrendszerét használjuk, adatbázissal. Szeretnénk admin, és felhasználói jogosultsággal dolgozni, egyértelműen a fejlesztők lesznek az adminok, a látogatóink pedig megkapják a regisztrált felhasználó jogot mellyel filmjeinket tudják majd értékelni.
## A jelenlegi üzleti folyamatok modellje
Regisztráció - Látogatóink képesek legyenek oldalunkra beregisztrálni melyeket mi biztonságosan eltárolunk, adataikat tudják módosítani.
Adminisztrátorok keresése: Probléma és hibajelentés esetén, az adminok eléréseit lehet megtekinteni.
## Igényelt üzleti folyamatok modellje 
- Saját profil szerkesztése- regisztrált felhasználóink élhetnek azzal a lehetőséggel, hogy módosítják saját adataikat
## Követelménylista 
| ID  | Modul         | Név                    | Leírás |
|-----|----------------|------------------------|--------|
| 1  | Felület        | Bejelentkezés          | A felhasználók itt tudnak bejelentkezni a rendszerbe, ha bejegyzést szeretnének létrehozni. Probléma esetén üzenetet küldeni a rendszert karbantartóknak, illetve a saját profiljával felmerült problémákat javíthatja, ez lehet elfelejtett vagy jelszó. |
| 2  | Felület        | Filmek borítóképe      | A felhasználók megtekinthetik filmadatbázisunkat, filmek borítóképét, és az értékelés helyét. |
| 3  | Felület        | Kategóriák             | A felhasználók választani tudnak a megtekinteni kívánt tartalmak között, itt megjelennek formátum és tartalom szerint szétbontva. |
| 4  | Felület        | Profil                 | A felhasználók a saját profiljuk módosításait eszközölhetik, láthatóvá válnak az adott bejegyzésekre küldött interakciók, pontozások is. |
| 6  | Felület        | Regisztráció           | A felhasználók ezen az oldalon tudnak saját fiókot létrehozni a rendszerben, így jogokat kapnak filmek értékelésére. |
| 7  | Modifikáció    | Jelszó módosítása      | A felhasználónak lehetősége van módosítani saját jelszavát, megadva a régi majd az új verziót. |
| 8  | Modifikáció    | Felhasználó módosítása | A felhasználónak lehetősége van saját felhasználónevének módosítására. |
| 9  | Jogosultság    | Jogosultsági szintek   | - **Admin:** bejegyzések törlése<br>- **Felhasználó:** tartalmak megtekintése, filmek értékelése <br> |
## Fogalomtár 
ADMIN - (angol: admin) Az oldal adminisztrálásáért felelős személy


