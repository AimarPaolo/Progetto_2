<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <title>attività estive programmate</title>
        <meta name="author" content="Paolo Aimar">
        <meta name="keywords" lang="it" content="html">
        <meta name="description" content="Pagina di acquisto dei biglietti">
        <!--in questo caso faccio un refresh della pagina ogni minuto per aggiornarla, le operazioni dell'utente non sono molte quindi ha 
        senso aggiornarla ogni minuto-->
        <meta http-equiv="refresh" content="600">
        <link rel="stylesheet" href="Home_ESP2.css">
        <!--per il momento inserisco il riferimento della pagina ma non so ancora se sia necessario utilizzare il codice js per controllare i dati-->
        <script src="home_ESP2.js"></script>
    </head>
    <body>
        <div class="navbar">
            <!--In questo caso dichiaro una classe attiva in modo da cambiare ogni volta il colore e far capire in modo più chiaro all'utente
            in quale pagina si trova-->
            <!--utilizzo un menù per collegare le pagine, volendo si potevano anche utilizzare altri bottoni ma l'utente potrebbe rimanere 
            leggermente confuso. Meglio utilizzare oggetti più intuitivi che aiutino il cliente a capire come spostarsi-->
            <a  class="attiva"href="home.php">Home</a>
            <a href="#">Aggiornamenti impianti</a>
            <a href="#">Iscriviti ad una attività</a>
            <a href="#">Acquisto skipass</a>
            <div class="dropdown">
                <button class="dropbtn">Esperienze
                </button>
                <div class="dropdown-content">
                    <a href="attivita_estive.html">Estive</a>
                    <a href="#">Invernali</a>
            </div>
        </div>
    </div> 
    <h1>Home page artesina</h1>
    <!--divido in paragrafi la pagina assegnando a quelli più particolari un capitoletto per aiutare e guidare l'utente nella lettura del sito-->
    <h2>Introduzione</h1>
    <p>
    Artesina è una rinomata stazione sciistica situata nelle Alpi Marittime, nella regione del Piemonte, Italia. 
    Parte del comprensorio sciistico Mondolè Ski, che include anche Prato Nevoso e Frabosa Soprana, Artesina offre una vasta 
    gamma di attività sia per gli amanti degli sport invernali che per coloro che cercano altre forme di svago e divertimento in montagna. 
    Questa località incantevole è una meta ideale per famiglie, gruppi di amici e sportivi, grazie alla varietà di esperienze che può 
    offrire durante tutto l'anno.
    <img id="forest_home" src="../immagini/forest_home.jpeg" alt="caricamento immagine bosco">
    </p>
    <h2>Sci e Snowboard</h2>
    <p>
    Artesina è particolarmente apprezzata dagli sciatori e snowboarder di tutti i livelli grazie alle sue piste ben curate e ai 
    moderni impianti di risalita. Il comprensorio Mondolè Ski offre oltre 130 chilometri di piste, di cui una parte significativa è
    situata ad Artesina. Le piste variano da quelle adatte ai principianti, con dolci pendii e ampie curve, a quelle più impegnative 
    per gli sciatori esperti, garantendo così divertimento e sfide per tutti. Le condizioni della neve sono generalmente ottime, 
    grazie anche all'efficace sistema di innevamento artificiale.
    </p>
    <h2>Servizi e Accolienza</h2>
    <p>
        Artesina offre anche una gamma completa di servizi per rendere il soggiorno confortevole e piacevole:
        <a class="link" href="https://www.booking.com/searchresults.it.html?
        ss=artesina&ssne=Sella+della+Turra
        &ssne_untouched=Sella+della+Turra&highlighted_hotels=9055831&efdco=1&label=New_Italian_IT_IT_21439071025-UNZN0NGydu*b2jBBcXOAlgS640938613103%3Apl%3Ata%3Ap1%3Ap2%3Aac%
        3Aap%3Aneg&sid=939ffecf1ef7632c3a6caa8bc5ec1b88&aid=318615&lang=it&sb=1&src_elem
        =sb&src=searchresults&dest_id=9055831
        &dest_type=hotel&ac_position=0&ac_click_type=b&ac_langcode=it&ac_suggestion_list_length=5&
        search_selected=true&search_pageview_id=28166932482600a9&ac_meta=GhAyODE2NjkzMjQ4MjYwMGE5IAAoATICaXQ6CGFydGVzaW5hQABKAFAA&group_adults=2&
        no_rooms=1&group_children=0">Hotel e appartamenti</a>: Diverse opzioni di alloggio, dagli hotel accoglienti agli appartamenti per famiglie.
        Ristoranti e rifugi: Ampia scelta di locali dove gustare la cucina tipica piemontese e piatti internazionali.
        Negozi di noleggio attrezzature: Tutto il necessario per sci e snowboard, oltre a attrezzature per altre attività sportive.
        Scuole di sci: Lezioni per tutte le età e livelli, con maestri qualificati.
    </p>
    <h2>Intrattenimento</h2>
    <p>
    Artesina organizza durante tutto l'anno una serie di eventi e manifestazioni che arricchiscono l'esperienza dei visitatori, 
    rendendo la località non solo un luogo per praticare sport, ma anche un centro di divertimento e socializzazione. 
    Gli eventi sono progettati per attrarre un pubblico variegato, dai più piccoli agli adulti, e includono attività culturali, 
    sportive e di intrattenimento che creano un'atmosfera vivace e coinvolgente.
    Durante la stagione invernale, Artesina si anima con numerosi appuntamenti che arricchiscono l'offerta sportiva. 
    Le competizioni sportive, sia per dilettanti che per professionisti, attirano partecipanti e spettatori da tutta la regione 
    e oltre.
    Le festività natalizie portano le strade e le piazze della località a riempirsi di luci e decorazioni, creando un’atmosfera 
    magica e festosa. Fiaccolate sugli sci, con suggestive discese notturne in cui i partecipanti sciano con torce accese, creano 
    un effetto visivo spettacolare lungo le piste innevate. Questi eventi sono spesso accompagnati da musica e fuochi d’artificio, 
    aggiungendo un tocco di meraviglia alle serate invernali.
    Durante l'estate, Artesina continua a essere un centro di attività grazie a una serie di eventi che valorizzano le bellezze naturali 
    e culturali della zona. Festival dedicati alla montagna includono escursioni guidate, workshop di fotografia naturalistica, laboratori 
    di botanica e incontri con esperti di fauna selvatica. Questi festival sono un’opportunità per scoprire la biodiversità locale e 
    apprendere tecniche di sopravvivenza in montagna. Gare di mountain bike, aperte a ciclisti amatoriali e professionisti, mettono alla 
    prova abilità e resistenza su percorsi che attraversano boschi e sentieri montani. Eventi gastronomici, come fiere e sagre, celebrano 
    i prodotti tipici del Piemonte, offrendo ai visitatori la possibilità di degustare specialità culinarie, assistere a showcooking 
    e partecipare a laboratori di cucina. Concerti e spettacoli all’aperto, organizzati in scenari naturali suggestivi, come i prati alpini
    o le rive dei laghi, offrono momenti di relax e divertimento sotto le stelle.
    Artesina pone grande attenzione alle famiglie, con una serie di attività dedicate ai bambini. 
    Club per bambini e animazione, attivi durante le vacanze scolastiche, organizzano attività giornaliere che includono giochi all’aperto, 
    laboratori creativi e cacce al tesoro. Animatori esperti intrattengono i più piccoli, permettendo ai genitori di godere di un po’ di 
    tempo libero. Spettacoli di magia e burattini incantano i bambini, offrendo spettacoli di intrattenimento che stimolano la loro 
    immaginazione e creatività. Laboratori educativi insegnano ai bambini nozioni sulla natura, l’ecologia e la sostenibilità attraverso 
    giochi e esperimenti pratici.
    </p>
    <!--inserito un logo che, una volta premuto, riporta alla pagina home del sito, verrà inserito in tutte le altre pagine del sito 
    in modo da dare la possibilità agli utenti di riaccedere alla pagina senza utilizzare la nav bar-->
    <a id="logo" href="home.php"><img src="../immagini/logo.jpg" alt="caricamento logo artesina"></a>
    <!--inserisco un footer per contattare la reception di artesina per avere informazioni-->
    <footer>
            <a href="mailto:info@artesina.it"><div>info@artesina.it</div></a>
            <a href="callto:+390174242000"><div>+39 0174 242000</div></a>
    </footer>
    </body>
