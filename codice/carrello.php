<?php
    include("aperturaSessioni.php");
    /*in questo caso utilizzo le variabili di sessione per variare dal progetto 1. Per la mail utilizzo l'ultima inserita dall'utente.
    Il carrello funzionerà e manterrà in memoria gli acquisti fino a quando non viene chiuso il browser. Può creare problemi in caso
    di erronea chiusura del browser (bisogna riselezionare tutti i biglietti) ma è sicuramente uno strumento più sicuro dei cookie
    in quanto non può essere modificato direttamente lato client*/  
    if(!isset($_SESSION["giornaliero"])){
        $_SESSION["giornaliero"] = 0;
    }
    if(!isset($_SESSION["pomeridiano"])){
        $_SESSION["pomeridiano"] = 0;
    }
    if(!isset($_SESSION["settimanale"])){
        $_SESSION["settimanale"] = 0;
    }
    if(!isset($_SESSION["stagionale"])){
        $_SESSION["stagionale"] = 0;
    }
    if (isset($_REQUEST['skipass']) && isset($_REQUEST['counter1'])) {
        if(!isset($_REQUEST['calendario'])){
            if(isset($_SESSION["calendario"])){
                if(isset($_SESSION["email"])){
                    $email = $_SESSION["email"];
                }elseif(isset($_REQUEST["email"])){
                    $_SESSION["email"] = trim($_REQUEST["email"]);
                    $email = $_SESSION["email"];
                }else{
                    echo "<p>Errore nell'email</p>";
                }
                $skipass = $_REQUEST['skipass'];
                $counter1 = intval($_REQUEST['counter1']); 
                if($skipass == "giornaliero"){
                    $_SESSION["giornaliero"] += $counter1;
                }elseif($skipass == "pomeridiano"){
                    $_SESSION["pomeridiano"] += $counter1;
                }elseif($skipass == "settimanale"){
                    $_SESSION["settimanale"] += $counter1;
                }elseif($skipass == "stagionale"){
                    $_SESSION["stagionale"] += $counter1;
                }
            }else{
                echo "<p>Alcuni parametri sono mancanti.</p>"; 
            }
        }else{
            if(isset($_SESSION["email"])){
                $email = $_SESSION["email"];
            }elseif(isset($_REQUEST["email"])){
                $_SESSION["email"] = trim($_REQUEST["email"]);
                $email = $_SESSION["email"];
            }else{
                echo "<p>Errore nell'email</p>";
            }
            $skipass = $_REQUEST['skipass'];
                $counter1 = intval($_REQUEST['counter1']); 
                $calendario = $_REQUEST['calendario'];

                if($skipass == "giornaliero"){
                    $_SESSION["giornaliero"] += $counter1;
                }elseif($skipass == "pomeridiano"){
                    $_SESSION["pomeridiano"] += $counter1;
                }elseif($skipass == "settimanale"){
                    $_SESSION["settimanale"] += $counter1;
                }elseif($skipass == "stagionale"){
                    $_SESSION["stagionale"] += $counter1;
                }
                //in questo caso setto il giorno del calendario ed impedisco all'utente di prenotare altri giorni fino a quando non preme sul 
                //pulsante prenota per un'altra data o chiude il browser e ritorna 
                $_SESSION["calendario"] = $calendario;
        }
    } else {
        echo "<p>Alcuni parametri sono mancanti.</p>";
    }
    echo "<h3>Valori degli Skipass:</h3>";
    echo "<p>Giornaliero: " . $_SESSION["giornaliero"] . "</p>";
    echo "<p>Pomeridiano: " . $_SESSION["pomeridiano"] . "</p>";
    echo "<p>Settimanale: " . $_SESSION["settimanale"] . "</p>";
    echo "<p>Stagionale: " . $_SESSION["stagionale"] . "</p>";
    
    if (isset($_SESSION["calendario"])) {
        echo "<p>Data selezionata: " . $_SESSION["calendario"] . "</p>";
    }
        echo "<p>Stai utilizzando l'email: $email</p>"
    
   
?>
