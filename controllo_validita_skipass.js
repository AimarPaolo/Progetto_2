function validateForm(f1){
    const form1 = document.getElementById(f1);
    let data_acquistata = form1.calendario.value;
    if(data_acquistata == ""){
        window.alert("Prima di acquistare devi selezionare una data");
        return false;
    }
    /*creo un array date per prendere la data odierna (mi basta prendere il giorno anno e mese, non necessariamente anche altri dati*/
    const data_odierna = new Date();
    let giorno = data_odierna.getDate();
    let mese = data_odierna.getMonth();
    let anno = data_odierna.getFullYear();
    /*mi creo un array che prende la stringa e la divide in anno, mese, giorno ---> 0, 1, 2 */
    let array = form1.calendario.value.split("-")
    /*mi stampo un attimo il giorno per controllare che effettivamente i valori scelti siano quelli corretti */
    /*console.log(anno);
    console.log(giorno); 
    console.log(array[1]);*/
    /*Ora controllo che la data selezionata sia quella corretta e non sia già passata */7
    console.log(array[0]);
    console.log(anno);
    console.log(array[1]);
    console.log(mese);
    console.log(array[2]);
    console.log(giorno);
    if(parseInt(array[0]) < parseInt(anno)){
        window.alert("L'anno inserito è già passato, seleziona una data a partire da oggi.");
        return false;
    }else if(parseInt(array[1]) < parseInt(mese+1)){
        window.alert("L'anno inserito è corretto, ma non il mese. Controlla di aver inserito il mese corretto");
    }else if(parseInt(array[2]) < parseInt(giorno)){
        window.alert("Il giorno inserito è già passato, inseriscine un altro.")
        return false;
    }else{
        window.alert("okk");
        return true;
    }




}