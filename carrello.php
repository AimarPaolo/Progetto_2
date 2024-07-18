<?php
    if (isset($_REQUEST['skipass']) && isset($_REQUEST['counter1']) && isset($_REQUEST['calendario'])) {
        $skipass = $_REQUEST['skipass'];
        $counter1 = intval($_REQUEST['counter1']); 
        $calendario = $_REQUEST['calendario'];

        $nomeCookie = 'carrello_skipass';
        $nuovoElemento = "$skipass,$counter1,$calendario";

        // Verifica se il cookie esiste già
        if (isset($_COOKIE[$nomeCookie])) {
            $carrello = $_COOKIE[$nomeCookie];
            $trovato = false;

            $elementi = explode(';', $carrello);
            foreach ($elementi as $elemento) {
                list($itemSkipass, $itemQuantita, $itemCalendario) = explode(',', $elemento);

                // Controlla se l'elemento corrente corrisponde al nuovo elemento
                if ($itemSkipass === $skipass && $itemCalendario === $calendario) {
                    $itemQuantita += $counter1;
                    $elemento = "$itemSkipass,$itemQuantita,$itemCalendario";
                    $trovato = true;
                    break;
                }
            }
            if (!$trovato) {
                $elementi[] = $nuovoElemento; 
            }
            $carrello = implode(';', $elementi);
        } else {
            $carrello = $nuovoElemento;
        }

        //Setto il timer del cookie a 10 ore, permettendo così all'utente di cambiare le quantità acquistata ed aggiungere altri articoli
        setcookie($nomeCookie, $carrello, time() + 36000);
    } else {
        echo "<p>Alcuni parametri sono mancanti.</p>";
    }
?>
