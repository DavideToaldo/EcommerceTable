// MS- 1
var MS1m100=0.15, MS1_100=0.14, MS1_200=0.13, MS1_400=0.12, MS1_800=0.11;

// MS- 2
var MS2m100=0.19, MS2_100=0.17, MS2_200=0.16, MS2_400=0.15, MS2_800=0.13;

// MS- 3
var MS3m100=0.20, MS3_100=0.18, MS3_200=0.17, MS3_400=0.16, MS3_800=0.14;

let $nomeArticolo = prompt("Inserisci il nome articolo");

switch ($nomeArticolo){

    case 'MS-1':
    case 'MS -1':
    case 'MS- 1':
    case 'MS - 1':
    case 'MS1':
    case 'MS 1':

    case 'Ms-1':
    case 'Ms -1':
    case 'Ms- 1':
    case 'Ms - 1':
    case 'Ms1':
    case 'Ms 1':

    case 'ms-1':
    case 'ms -1':
    case 'ms- 1':
    case 'ms - 1':
    case 'ms1':
    case 'ms 1':

    var num = prompt("INSERISCI LA QUANTITA' DI CONFEZIONI DA COMPRARE");
            if(!isNaN(num)){
                if(num < 100){
                    var Tot= (num * 10) * MS1m100;
                    console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                }else if(num >= 100){
                    if(num < 200){
                        var Tot= (num * 10) * MS1_100;
                        console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                    }else if(num >= 200){
                        if(num < 400){
                            var Tot= (num * 10) * MS1_200;
                            console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                        }else if(num >= 400){
                            if(num < 800){
                                var Tot= (num * 10) * MS1_400;
                                console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                            }else if(num >= 800){
                                var Tot= (num * 10) * MS1_800;
                                console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                            }
                        }
                    }
                }
            }else{
                console.log("NON E' UN NUMERO");
            }
    
        break;
    
    case 'MS-2':
    case 'MS -2':
    case 'MS- 2':
    case 'MS - 2':
    case 'MS2':
    case 'MS 2':

    case 'Ms-2':
    case 'Ms -2':
    case 'Ms- 2':
    case 'Ms - 2':
    case 'Ms2':
    case 'Ms 2':

    case 'ms-2':
    case 'ms -2':
    case 'ms- 2':
    case 'ms - 2':
    case 'ms2':
    case 'ms 2':

        var num = prompt("INSERISCI LA QUANTITA' DI CONFEZIONI DA COMPRARE");
            if(!isNaN(num)){
                if(num < 100){
                    var Tot= (num * 10) * MS2m100;
                    console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                }else if(num >= 100){
                    if(num < 200){
                        var Tot= (num * 10) * MS2_100;
                        console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                    }else if(num >= 200){
                        if(num < 400){
                            var Tot= (num * 10) * MS2_200;
                            console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                        }else if(num >= 400){
                            if(num < 800){
                                var Tot= (num * 10) * MS2_400;
                                console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                            }else if(num >= 800){
                                var Tot= (num * 10) * MS2_800;
                                console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                            }
                        }
                    }
                }
            }else{
                console.log("NON E' UN NUMERO");
            }

        break;

    case 'MS-3':
    case 'MS -3':
    case 'MS- 3':
    case 'MS - 3':
    case 'MS3':
    case 'MS 3':

    case 'Ms-3':
    case 'Ms -3':
    case 'Ms- 3':
    case 'Ms - 3':
    case 'Ms3':
    case 'Ms 3':

    case 'ms-3':
    case 'ms -3':
    case 'ms- 3':
    case 'ms - 3':
    case 'ms3':
    case 'ms 3': 

        var num = prompt("INSERISCI LA QUANTITA' DI CONFEZIONI DA COMPRARE");
            if(!isNaN(num)){
                if(num < 100){
                    var Tot= (num * 10) * MS3m100;
                    console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                }else if(num >= 100){
                    if(num < 200){
                        var Tot= (num * 10) * MS3_100;
                        console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                    }else if(num >= 200){
                        if(num < 400){
                            var Tot= (num * 10) * MS3_200;
                            console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                        }else if(num >= 400){
                            if(num < 800){
                                var Tot= (num * 10) * MS3_400;
                                console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                            }else if(num >= 800){
                                var Tot= (num * 10) * MS3_800;
                                console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                            }
                        }
                    }
                }
            }else{
                console.log("NON E' UN NUMERO");
            }

        break;

    default:
        console.log("SOLO I PRIMI 3 ARTICOLI")
}

//la stringha sottostante serve per stampare il risultato in dollari
//console.log(new Intl.NumberFormat('en-CA',{style: 'currency', currency: 'CAD'}).format(Tot));
//la stringha sottostante serve per stampare il risultato in sterline
//nella stringa qua sotto il simbolo delle sterline è messo prima della cifra(en)
//console.log(new Intl.NumberFormat('en-GB',{style: 'currency', currency: 'GBP'}).format(Tot));
//nella stringa qua sotto il simbolo delle sterline è messo dopo della cifra(de)
//console.log(new Intl.NumberFormat('de-GB',{style: 'currency', currency: 'GBP'}).format(Tot));

// IL RISULTATO CHE ANDRA' SPEDITO AL CARRELLO, UNA VOLTA FINITO TUTTO, E' QUELLO CHE ORA VIENE FORMATTATO E STAMPATO