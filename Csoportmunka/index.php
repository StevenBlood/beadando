<?php
$movies = [
    ['title'=>'Verdák','image'=>'film_kepek/verdak.jpg','desc'=>'Élete legnagyobb versenyére tartva egy nagyképű újonc versenyautó egy lepukkant kisvárosban reked, és rájön, hogy a győzelem nem minden az életben.'],
    ['title'=>'Uncharted','image'=>'film_kepek/Uncharted.jpg','desc'=>'Az utcai tapasztalatokkal bíró Nathan Drake-t felkéri a tapasztalt kincskereső, Victor "Sully" Sullivan, hogy találja meg Ferdinand Magellan vagyonát, amelyet az 500 évvel ezelőtt a Moncada-ház elveszített.'],
    ['title'=>'Harcosok klubja','image'=>'film_kepek/harcosok_klubja.jpg','desc'=>'Egy álmatlanságban szenvedő irodai dolgozó és egy laza, könnyelmű szappankészítő titkos harci klubot alapítanak, amely idővel sokkal többré válik.'],
    ['title'=>'Galaxys Őrzői','image'=>'film_kepek/A_galaxis_őrzői.jpg','desc'=>'Egy csoport intergalaktikus bűnözőnek össze kell fognia, hogy megállítson egy fanatikus harcost, akinek az a terve, hogy megtisztítsa az univerzumot.'],
    ['title'=>'Amerikai Pite','image'=>'film_kepek/amerikai_pite.jpg','desc'=>'Négy tizenéves fiú megállapodást köt, hogy a bál estjére elveszítik a szüzességüket.'],
    ['title'=>'Shrek','image'=>'film_kepek/shrek.jpg','desc'=>'Egy gonosz úr mesebeli lényeket száműz egy mogorva ogre mocsarába, aki egy küldetésre kell, hogy induljon, és meg kell mentenie egy hercegnőt az úr számára, hogy visszakaphassa a földjét.'],
    ['title'=>'Horrorra Akadva','image'=>'film_kepek/Horrorra_akadva_5.jpg','desc'=>'Egy évvel azután, hogy megszabadultak attól a férfi holttestétől, akit véletlenül megöltek, egy csapat ostoba tinédzsert egy ügyetlen sorozatgyilkos kezd el követni.'],
    ['title'=>'Alien','image'=>'film_kepek/alien.jpg','desc'=>'Amikor egy rejtélyes űrhajó lezuhan a Földre, egy fiatal nő és egy összeverbuvált katonai csapat sorsdöntő felfedezést tesz, amely szembeállítja őket a bolygó legnagyobb fenyegetésével.'],
    ['title'=>'Deadpool','image'=>'film_kepek/deadpool.jpg','desc'=>'Egy szarkasztikus zsoldos kísérleti beavatkozáson esik át, aminek következtében halhatatlanná, de szörnyen eltorzulttá válik, és elindul, hogy megtalálja azt a férfit, aki tönkretette a külsejét.'],
    ['title'=>'Elkúrtuk','image'=>'film_kepek/elkurtuk.jpg','desc'=>'2006-ban Budapesten valami összetört. Az akkor tizenhat éves Magyar Köztársaság vezetőjének kiszivárgott "őszödi beszéde" alapjaiban rengette meg az emberek demokráciába és a kommunizmus utáni rendszerváltozásba vetett hitét.'],
    ['title'=>'Kung Fu Panda','image'=>'film_kepek/Kungfupanda.jpg','desc'=>'Mindenki meglepetésére – beleértve saját magát is – Pót, a túlsúlyos és ügyetlen pandát választják a Béke Völgye védelmezőjének. Hamarosan próbára is teszik alkalmasságát, mivel a völgy ősellensége úton van.'],
    ['title'=>'Démonok között: Utolsó rítusok','image'=>'film_kepek/demonok_kozott.jpg','desc'=>'A paranormális nyomozók, Ed és Lorraine Warren, egy utolsó, rémisztő üggyel néznek szembe, amelyben titokzatos lényekkel kell szembeszállniuk.'],
    ['title'=>'Jumanji: Vár a dzsungel','image'=>'film_kepek/jumanji.jpg','desc'=>'Négy tinédzsert beszippant egy varázslatos videojáték, és egyetlen esélyük a kijutásra, ha összefognak, és együtt végigjátsszák a játékot.'],
    ['title'=>'Alkonyat','image'=>'film_kepek/twilight.jpg','desc'=>'Amikor Bella Swan a Csendes-óceán északnyugati részén fekvő kisvárosba költözik, beleszeret Edward Cullenbe, a titokzatos osztálytársába, aki felfedi előtte, hogy valójában egy 108 éves vámpír.'],
    ['title'=>'28 nappal később','image'=>'film_kepek/28_nappal_kesobb.jpg','desc'=>'Négy héttel azután, hogy egy rejtélyes, gyógyíthatatlan vírus elterjed az Egyesült Királyságban, néhány túlélő megpróbál menedéket találni.'],
    ['title'=>'A halálkártya','image'=>'film_kepek/tarot.jpg','desc'=>'Amikor egy baráti társaság meggondolatlanul megszegi a jóslás szent szabályát, akaratlanul is szabadjára enged egy kimondhatatlan gonoszt, amely a megátkozott kártyákba volt zárva. Egyesével szembesülnek a sorsukkal, és halálos versenyfutásba kezdenek az életükért.'],
    ['title'=>'Nagyfiúk','image'=>'film_kepek/nagyfiuk.jpg','desc'=>'Miután középiskolai kosáredzőjük elhunyt, öt jó barát és egykori csapattárs újra összejön a július negyedikei hosszú hétvégére.'],
    ['title'=>'Joker','image'=>'film_kepek/joker.jpg','desc'=>'Arthur Fleck, egy bulikon fellépő bohóc és sikertelen stand-up komikus, nyomorúságos életet él beteg édesanyjával. Ám amikor a társadalom kitaszítja és torzszülöttnek bélyegzi, úgy dönt, hogy átadja magát a káosz életének Gotham Cityben.'],
    ['title'=>'A holnap háborúja','image'=>'film_kepek/holnap_haboruja.jpg','desc'=>'Egy családapa a 2051-es évbe utazik, hogy csatlakozzon egy világméretű háborúhoz egy halálos idegen faj ellen.']
];

function e($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    header('Content-Type: application/json; charset=utf-8');
    $file = __DIR__ . '/ratings.json';
    if (!file_exists($file)) file_put_contents($file, json_encode([]));

    $image_id = filter_input(INPUT_POST, 'image_id', FILTER_SANITIZE_STRING);
    $rating = filter_input(INPUT_POST, 'rating', FILTER_VALIDATE_INT, [
        'options' => ['min_range'=>1,'max_range'=>5]
    ]);

    if(!$image_id || !$rating){
        echo json_encode(['ok'=>false]);
        exit;
    }

    $data = json_decode(file_get_contents($file), true) ?: [];
    $data[$image_id][] = $rating;
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

    echo json_encode(['ok'=>true]);
    exit;
}
?>
