$(document).ready(function(){

  // chargement des notes
  $(".a-note").on('click', function(e) {
      $.ajax({
          type: "POST",
          url: "/safeSchool/web/app_dev.php/apprenant/matieres",
          success: function (object) {
              var ttrV = $('<tr></tr>'),
                  ttdV = $('<td></td>'),
                  cv = 0;
              //console.log(object);
              for (var i = 0; i < object.length; i++) {

                  var ttr = $('<tr></tr>'),
                      ttd1 = $('<td></td>'),
                      ttd2 = $('<td></td>'),
                      ttd3 = $('<td></td>'),
                      ttd4 = $('<td></td>'),
                      ttd5 = $('<td></td>'),
                      ttd6 = $('<td class="tdCredit"></td>');

                    recuperationNote("1",object[i].codeMatiere,object[i].credit,ttd2,ttd3,ttd4,ttd5,cv);
                  //console.log(sumEtNbr);

                  $(ttd6).html(object[i].credit);
                  $(ttd1).html(object[i].codeMatiere);
                  $(ttr).append(ttd6).append(ttd1).append(ttd2).append(ttd3).append(ttd4).append(ttd5);
                  $(".tbody-note").append(ttr);


                  $('.tdCredit').css("color", "blue");

                  $(".tbody-note").append(ttrV);



              }

          }
      });
  });

// fonction qui colorie les notes selon leurs valeurs
    function colorierNotes(note,ttd)
    {
      if (note <= 5) {
              $(ttd).css("background-color", "red");
            }

            else if (note <10) {
              $(ttd).css("background-color", "orange");
            }
            else if (note < 14) {
              $(ttd).css("background-color", "palegreen");
              $(ttd).css("color", "blue");
            }

            else {
              $(ttd).css("background-color", "green");
              $(ttd).css("color", "white");
            }
    }



// affichage des notes selon leurs types et calcule des moyennes
function affichageNote(resp,td2,td3,td4,td5,credit) {
    var td0 = $('<td> </td>'),
    sumEtNbr = {},somme=0,nbr=0;
    for (var i = 0; i < resp.length; i++) {
        if (isNaN(resp[i].note)) {
        somme = somme + 0;
        nbr++;
        }
        else {


            var tdsup = $('<td></td>');

            if (resp[i].typeNote == "interro") {
                $(tdsup).html(resp[i].note).append(td0);
                $(td2).append(tdsup);
                colorierNotes(resp[i].note,tdsup);

            }
            else if (resp[i].typeNote == "devoir") {
                $(tdsup).html(resp[i].note).append(td0);
                $(td3).append(tdsup);
                colorierNotes(resp[i].note,tdsup);


            }
            else if (resp[i].typeNote == "partiel") {
                $(tdsup).html(resp[i].note).append(td0);
                $(td4).append(tdsup);
                colorierNotes(resp[i].note,tdsup);

            }
            somme = somme + resp[i].note;
            nbr++;
        }
    }
    moyenne = somme/nbr;
    affichageMoyenne(moyenne,td5,credit);

}

function affichageMoyenne(moy,td5,credit) {

        var moyenneDeValidation = 12;
    $(td5).html(moyenne);
    if (isNaN(moyenne)){
        $(td5).html("Vide!");
    }
    else {
        if (moy < moyenneDeValidation)
            $(td5).append("</br>Non Validée");
        else{
            $(td5).append("</br>Validée");
           // console.log(credit);
        }

       // console.log(credit);

    }
}

//recupération notes
    function recuperationNote(id_apprenant,matiere,matiereCredit,td2,td3,td4,td5,cv) {
      id_apprenant = 2;
        $.ajax({
            type: "GET",
            url: "/safeSchool/web/app_dev.php/apprenant/note/" + id_apprenant + "/" + matiere,
            success: function (response) {
               affichageNote(response,td2,td3,td4,td5,matiereCredit);

            }

        });


    }


});

