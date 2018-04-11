$(document).ready(function(){
  // postSchool function
  postSchoolInfo();
//
var $statut_etablissement = $("select#etablissement_statutEtablissement");
$statut_etablissement.find("option:gt(0)").hide();
    $("#etablissement_pourcentagePartiel").css("visibility", "hidden");
    $("#etablissement_pourcentageDevoir").css("visibility", "hidden");
    $("#etablissement_pourcentageTP").css("visibility", "hidden");


  /***** ZONES SCRIPTES  *******/

// tableau de correspondance niveau-----statut

var statuts_lycee = ['Agricole','Technigue'];
var statuts_secondaire = ['Privé','Public'];
var statuts_universite = ['Ecole','faculté','Institut'];



  // ecoute du select de niveau

  $("select#etablissement_niveauEtablissement").on('change', function(){

  var $selected_niveau =  $("select#etablissement_niveauEtablissement option:selected").text();
  if ($selected_niveau == "Lycée") {
    //$statut_etablissement.find("option").remove();
    // $.each(statuts_lycee,function(key, statut_lycee){
    //   $statut_etablissement.append("<option value="+statut_lycee+">"+statut_lycee+"</option>");
    // })
    $statut_etablissement.find("option:gt(0)").hide();
    $statut_etablissement.find("option:selected").hide();

    $statut_etablissement.find("option:eq(1)").show();
    $statut_etablissement.find("option:eq(2)").show();

      $("#etablissement_pourcentageDevoir").css("visibility", "visible");
      $("#etablissement_pourcentageTP").css("visibility", "visible");
  }

  else if ($selected_niveau == "Secondaire") {
    $statut_etablissement.find("option:gt(0)").hide();
    $statut_etablissement.find("option:selected").hide();

    $statut_etablissement.find("option:eq(3)").show();
    $statut_etablissement.find("option:eq(4)").show();

      $("#etablissement_pourcentageDevoir").css("visibility", "visible");
      $("#etablissement_pourcentageTP").css("visibility", "visible");

  }

  else if ($selected_niveau == "Université") {
    $statut_etablissement.find("option:gt(0)").hide();
    $statut_etablissement.find("option:selected").hide();
    $statut_etablissement.find("option:gt(4)").show();

      $("#etablissement_pourcentageDevoir").css("visibility", "visible");
      $("#etablissement_pourcentageTP").css("visibility", "visible");
      $("#etablissement_pourcentagePartiel").css("visibility", "visible");

    //$statut_etablissement.find("option:eq(0)").hide();
  }


  // ecoute du select de statut

  $("select#etablissement_statutEtablissement").on('change', function(){

    var selected_statut = $("select#etablissement_statutEtablissement option:selected").text();

    if ($selected_niveau == "Secondaire" && selected_statut == "Privé") {

        $("#etablissement_categorieEtablissement").css("visibility", "visible");

    }

    else {
      $("#etablissement_categorieEtablissement").css("visibility", "hidden");
      //alert(selected_statut);

    }

  }).trigger("change");


}).trigger("change");




// Liste des etablissements

var divAllEtablissement = $("div.div-toutContenuEtablissement");

divAllEtablissement.on('click', function(e){
  e.preventDefault();
  var niveaux = ['Secondaire','Lycée','Université'];
  var statuts = ['Privé', 'Public', 'Agricole', 'Technique','Ecole','Faculté','Institut'];
  var categories = ['Laïc','Catholique','Protestant','Coranique','Social','Neant'];

  var selected_target = e.target;
  var selected_id = selected_target.id;


    // s'il s'agit d'un statut
  if ($.inArray(selected_id, statuts) != -1) {
    var div_niveau_id = $(selected_target).parent().parent().parent().parent().parent().parent().attr('id');
    var div_container = $("."+div_niveau_id+selected_id).attr('class');
      //alert(div_niveau_id);
 // s'il s'agit du statut privé en particulier
    if (selected_id == statuts[0]) {
    //  $("."+div_container).removeClass(div_ecole);
     loadEtablissementsByCriteria(niveaux[0], statuts[0], categories[0],div_container);

    }

    else {
    var categorie = '';
    loadEtablissementsByCriteria(niveaux[0], statuts[1],categories[5],div_container);
  //  $("."+div_container).html("Désolé, nous sommes en travaux. Merci!!");

    }

  }

  if ($.inArray(selected_id, categories) != -1) {


    var div_container =  $("."+niveaux[0]+statuts[0]).attr('class');

      $("#div-menu-categorie").find("a").removeClass("active");
      $("#"+selected_id).addClass("active");

    loadEtablissementsByCriteria(niveaux[0], statuts[0], selected_id,div_container);

  }

});


/***********  ZONE  FONCTIONS  *************/

// fonction pour liste des etablissements selon les caracteristiques
function loadEtablissementsByCriteria(niveau, statut, categorie,container){
  $.ajax({
    type : "GET",
    url : "/safeSchool/web/app_dev.php/etablissement/liste/"+niveau+"/"+statut+"/"+categorie,
    success : function(object){
      $("."+container).find("div").empty();

      for (var i = 0; i < object.length; i++) {

        //creation des elements
        var   div_ecole = $('<div></div>').addClass('row c-div-ecole'),
              em_carte = $('<em><a class="a-carte">Voir sur la carte</a></em>'),
              p_nomEcole = $('<p class="p-nomEcole"></p>'),
              p_adresseEcole = $('<p class="p-adresseEcole"></p>'),
              div_nomEcole = $('<div></div>').addClass('col-md-3 c-div-nomEcole'),
              div_img =  $('<div></div>').addClass('col-md-3 c-div-imgEcole'),
              img_ets = $('<img>'),
              div_carte = $('<div></div>').addClass('col-md-2 div-carte'),
              url = "../../uploads/etablissement/"+object[i].photoCouvertureEtablissement;
            //  div_row = $("<div></div>").addClass("row c-div-ecole");

        //imbrication (creation de l'architecture)
        $(em_carte).addClass('em-carte');
        $(div_carte).append(em_carte);
        div_ecole.removeClass('row c-div-ecole');
        div_ecole.addClass('row c-div-ecole');
        p_nomEcole.html(object[i].nom);
        p_adresseEcole.html(object[i].adresseRue+" "+object[i].adresseVille);
        $(img_ets).attr('src',url).attr('width','265px').attr('height','115px');

    //  console.log(object[i].photoCouvertureEtablissement);

        div_nomEcole.append(p_nomEcole).append(p_adresseEcole);
        div_img.append(img_ets);
        div_ecole.append(div_img).append(div_nomEcole).append(div_carte);

        $("."+container).append(div_ecole);

      }

    }
  });
}

function postSchoolInfo(){
  $(document).on('submit','form#form-school-final-registration',function(e){
      e.preventDefault();
     $.ajax({
          method      : $(this).attr( 'method' ),
          url         : $(this).attr('action'),
          data        : $(this).serialize(),
          dataType    : "json"
        })
         .done (function(data, status, object) {
           if (data.message == "Success") {
             alert(data.userN + "\n" + data.etab);
           }
           else{
             alert("wrong");
           }
           //window.location.href = 'http://localhost:8000/login';
           //if(data.error) $('div.has-error').html(data.message);
          })
          .fail(function(data, status, object){
              console.log(data);
          });
  });
}

});
