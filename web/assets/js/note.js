$(document).ready(function(){
  // chargement des notes
  $(".a-note").on('click', function(e) {
    // recuperer l'id de l'apprenant
    var id_apprenant = $('input#idApprenant').attr('data-idApprenant');
      $.ajax({
          type: "POST",
          url: "/safeSchool/web/app_dev.php/note/apprenant/"+id_apprenant,
          dataType: 'json',
          success : function(response){
            var objects = response['notes'],
                ets = response['ets'];

              for (var i = 0; i < objects.length; i++) {
                  var ttr = $('<tr></tr>'),
                      ttd1 = $('<td class="tdCredit"></td>'),
                      ttd2 = $('<td></td>'),
                      ttd3 = $('<td></td>'),
                      ttd4 = $('<td></td>'),
                      ttd5 = $('<td></td>'),
                      ttd6 = $('<td></td>'),
                      ttd7 = $('<td></td>'),
                      interos = [],
                      devoirs = [],
                      partiels = [],
                      compos = [],
                      matiere = objects[i]['matiere'],
                      notesOfMatieres = objects[i]['notes']
                      ;

                      for (var j = 0; j < notesOfMatieres.length; j++) {
                        var note = notesOfMatieres[j];
                        if (note.typeNote == 'intero') {
                          interos.push(note.note);
                        }
                        else if (note.typeNote == 'devoir') {
                          devoirs.push(note.note);
                        }
                        else if (note.typeNote == 'compo') {
                          compos.push(note.note);
                        }
                        else if (note.typeNote == 'partiel') {
                          partiels.push(note.note);
                        }
                      }

                      $(ttd1).html(matiere.credit);
                      $(ttd2).html(matiere.codeMatiere);
                      ttd3 = affichageNote(interos,ttd3);
                      ttd4 = affichageNote(devoirs,ttd4);
                      ttd5 = affichageNote(partiels,ttd5);
                      ttd6 = affichageNote(compos,ttd6);
                      $(ttr).append(ttd1).append(ttd2).append(ttd3).append(ttd4).append(ttd5).append(ttd6).append(ttd7);
                      $(".tbody-note").append(ttr);

                      var moy = calculeMoyenne(ets,interos,devoirs,compos,partiels);
                      ttd7 = affichageMoyenne(moy,ttd7);
                  $('.tdCredit').css("color", "blue");

          // envoie la moyenne a la methode getApprenantMoyenne du controller de Note
          var url = "/safeSchool/web/app_dev.php/note/moyenne";
          console.log(id_apprenant,moy,matiere,url);
          sendMoyenne(id_apprenant,moy,matiere,url);
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
            else if (note <= 14) {
              $(ttd).css("background-color", "palegreen");
              $(ttd).css("color", "blue");
            }

            else if (note > 14 & note <= 20){
              $(ttd).css("background-color", "green");
              $(ttd).css("color", "white");
            }

    }

// affichage des notes selon leurs types
function affichageNote(tab,td) {
    var td0 = $('<td> </td>');
    if (tab.length == 0) {
      $(td).html('VIDE!');
      $(td).css('color','rgb(210,204,209)');
    }

    else {
      $(td).html(tab[0]);
      colorierNotes(tab[0],td);
      for (var k = 1; k < tab.length; k++) {
              var tdsup = $('<td> </td>');
              $(tdsup).append(tab[k])
              $(td).append(td0).append(tdsup);
              colorierNotes(tab[k],tdsup);
          }
    }
        return $(td);
}

// affiche et colorie la moyenne
function affichageMoyenne(moy,ttd){
  $(ttd).html(moy);
  if (moy <= 5) {
          $(ttd).css("background-color", "red");
        }

        else if (moy <12) {
          $(ttd).css("background-color", "orange");
        }
        else if (moy <= 14) {
          $(ttd).css("background-color", "palegreen");
          $(ttd).css("color", "blue");
        }

        else if (moy > 14 & moy <= 20){
          $(ttd).css("background-color", "green");
          $(ttd).css("color", "white");
        }
        return $(ttd);
}

// comme son nom l'indique
function moyennesArithmetique(tab){
  return somme(tab)/tab.length;
}

// juste la somme des elements d'un tableau
function somme(tabl){
  var somme = 0;
  for (var l = 0; l < tabl.length; l++) {
    somme = somme + tabl[l];
  }
  return somme;
}

// si un tableau n'a pas de valeur elle lui donne la valeur 0 (pour eviter les NaN)
function isNotANumber(tableau) {
    if (tableau.length == 0) {
      tableau.push(0);
    }

  return tableau;
}

// calcule la moyenne par matiere selon le type d'etablissement
function calculeMoyenne(ets,interos,devoirs,compos,partiels){
  var moyenne;
  if (ets.niveauEtablissement == 'secondaire') {
    var moyinteros = moyennesArithmetique(interos),
        sommedevoirs = somme(devoirs);
        moyenne = (moyinteros + sommedevoirs)/3;
        console.log('moy devoir:'+moydevoirs,'moy interos:'+moypartiels);
  }
  else if (ets.niveauEtablissement == 'universite') {
    var moyinteros = moyennesArithmetique(interos),
        moydevoirs = moyennesArithmetique(devoirs),
        moypartiels = moyennesArithmetique(partiels);
        if (isNaN(moyinteros)) {
          //console.log('moy devoir:'+moydevoirs,'moy partiel:'+moypartiels);
          moyenne = (moydevoirs*ets.pourcentageDevoir)+(moypartiels*ets.pourcentagePartiel);
          //console.log('moyenne: '+moyenne);
        }
        else if (isNaN(moydevoirs)) {
          //console.log('moy intero:'+moyinteros,'moy partiel:'+moypartiels);
          moyenne = (moyinteros*ets.pourcentageTP)+(moypartiels*ets.pourcentagePartiel);
          //console.log('moyenne: '+moyenne);
        }
        else if (isNaN(moypartiels)) {
          //console.log('moy intero:'+moyinteros, 'moy devoir:'+moydevoirs);
          moyenne = (moyinteros*ets.pourcentageTP)+(moydevoirs*ets.pourcentageDevoir);
          //console.log('moyenne: '+moyenne);
        }

        else if (isNaN(interos) && isNaN(devoirs)) {
          moyenne = moypartiels*ets.pourcentagePartiel;
        }

        else if (isNaN(interos) && isNaN(partiels)) {
          moyenne = moydevoirs*ets.pourcentageDevoir;
        }

        else if (isNaN(devoirs) && isNaN(partiels)) {
          moyenne = moyinteros*ets.pourcentageTP;
        }
        else {
          moyenne = (moyinteros*ets.pourcentageTP)+(moydevoirs*ets.pourcentageDevoir)+(moypartiels*ets.pourcentagePartiel);
        //  console.log('moy intero:'+moyinteros, 'moy devoir:'+moydevoirs,'moy partiel:'+moypartiels,'moyenne:'+moyenne);
        //  console.log('moyenne: '+moyenne);
        }
  }
  return moyenne;
}

// envoie des donnees a une fonction du controller
function sendMoyenne(apprenant,moyenne,matiere,url){

  var info = {
    id_apprenant: apprenant,
    moyenne: moyenne,
    id_matiere: matiere.id
  }
console.log(info);
  $.ajax({
    type: "POST",
    data: info,
    url: url,
    dataType: 'json',
    success : function(response){
      console.log(response);
    }
  });
}

});
