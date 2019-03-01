var MS1minore100=0.99;
var MS1_100=0.79;
var MS1_200=0.70;
var MS1_400=0.60;
var MS1_800=0.48;

var num = prompt("INSERISCI LA QUANTITA' DI CONFEZIONI DA COMPRARE");
    if(!isNaN(num)){
      if(num < 100){
        
        // il numero 25 corrisponde alla quantità per confezione
        
        var Tot= (num * 10) * MS1minore100;
        
        //la stringa sottostante serve per la formattazione dei dati
        
        console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot));
        
        //la stringha sottostante serve per stampare il risultato in dollari
        
        //console.log(new Intl.NumberFormat('en-CA',{style: 'currency', currency: 'CAD'}).format(Tot));
        
        //la stringha sottostante serve per stampare il risultato in sterline
        //nella stringa qua sotto il simbolo delle sterline è messo prima della cifra(en)
        
        //console.log(new Intl.NumberFormat('en-GB',{style: 'currency', currency: 'GBP'}).format(Tot));
        
        //nella stringa qua sotto il simbolo delle sterline è messo dopo della cifra(de)
        
        //console.log(new Intl.NumberFormat('de-GB',{style: 'currency', currency: 'GBP'}).format(Tot));
        
      }else{
        if(num >= 100){
          if(num < 200){
            var Tot= (num * 10) * MS1_100;
            console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
          }else{
            if(num >= 200){
              if(num < 400){
                var Tot= (num * 10) * MS1_200;
                console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
              }else{
                if(num >= 400){
                  if(num < 800){
                    var Tot= (num * 10) * MS1_400;
                    console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                  }else{
                    if(num >= 800){
                      var Tot= (num * 10) * MS1_800;
                      console.log(new Intl.NumberFormat('de-DE',{style: 'currency', currency: 'EUR'}).format(Tot)); 
                    }else{
                      console.log(ERRORE);
                    }
                  }
                }else{
                  console.log(ERRORE);
                }
              }
            }else{
              console.log(ERRORE);
            }
          }
        }else{
          console.log(ERRORE);
        }
      }
    }else{
        alert("RIPROVA, QUESTO NON E' UN NUMERO!")
    }

// IL RISULTATO CHE ANDRA' SPEDITO AL CARRELLO, UNA VOLTA FINITO TUTTO, E' QUELLO CHE ORA VIENE FORMATTATO E STAMPATO