$(document).ready(function(){

    // Empecher le modal de se décrancher au click exterieure


    getSpecialiteByNiveauEtude()
    getNiveauEtudeByfiliere();
    sendModalFormData();

    $(document).on('submit','form#form-inscription',function(e){
        e.preventDefault();
        //ajax
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            dataType: "json",
            data : $(this).serialize(),
            success:function(response){
                console.log(response);
                if (response.error == true) {
                    getFormErrors(response);
                } else {
                    getInfoInscription(response);
                    $("#modal-inscription").modal();
                }

            },
            fail:function(error){
                alert(error);
            }
        })

    })

});

function getSpecialiteByNiveauEtude(){
    //var filiereSelect = ;
    $("select#niveauetude_etablissement").on('change',function(e){
        e.preventDefault();
        var idfiliereSelected = $("select#option_filiere_etablissement").find('option:selected').val();
        var idNiveauEtude = $(this).find('option:selected').val();
        var idEtablissement = $("select#option_filiere_etablissement").attr('data-etablissement');

        console.log(idfiliereSelected);
        console.log(idEtablissement);
        console.log(idNiveauEtude);



        $.ajax({
            url:"/app_dev.php/inscription/"+idEtablissement+"/"+idfiliereSelected+"/"+idNiveauEtude+"/option",
            method:"GET",
            dataType:"json",
            success:function(response){
                //console.log(response);
                var specialite = $("select#specialite_etablissement");
                $(specialite).empty();

                for (var i = 0; i<response.length ; i++) {
                   $option = $("<option></option>");
                   $option.text(response[i].libelle);
                   $option.val(response[i].id);

                   $(specialite).append($option);

                }


            //fail:function(error){
            //    alert(error);
            //}
            }

        })
    })
}

function getNiveauEtudeByfiliere(){
    //var filiereSelect = ;
    $("select#option_filiere_etablissement").on('change',function(e){
        e.preventDefault();
        var idfiliereSelected = $(this).find('option:selected').val();
        var idEtablissement = $(this).attr('data-etablissement');

        //console.log(idfiliereSelected);


        $.ajax({
            url:"/app_dev.php/inscription/"+idEtablissement+"/"+idfiliereSelected+"/niveauEtude",
            method:"GET",
            dataType:"json",
            success:function(response){
                //console.log(response);


                var niveauEtude = $("select#niveauetude_etablissement").find('option');
                $(niveauEtude).empty();

                for (var i = 0; i<response.length ; i++) {
                   $option = $("<option></option>");
                   $option.text(response[i].libelle);
                   $option.val(response[i].id);

                   $(niveauEtude).after($option);

                }


            //fail:function(error){
            //    alert(error);
            //}
            }

        })
    })
}

function getInfoInscription(response){
    //filiereserie
    var filiere = response['filiere']['libelle'];
    var filiereId = response['filiere']['id'];

    $('div#modal-inscription').find('input[name ="filiere"]').val(filiere);
    $('div#modal-inscription').find('input#filiere_id').val(filiereId);

    var specialite = response['specialite']['libelle'];
    var specialiteId = response['specialite']['id'];
    $('div#modal-inscription').find('input[name ="specialite"]').val(specialite);
    $('div#modal-inscription').find('input#specialite_id').val(specialiteId);

    var niveauEtude = response['niveauEtude']['libelle'];
    var niveauEtudeId = response['niveauEtude']['id'];
    $('div#modal-inscription').find('input[name ="niveauEtude"]').val(niveauEtude);
    $('div#modal-inscription').find('input#niveauetude_id').val(niveauEtudeId);

    //var fichiers = response['fichiers_joints'];
    //console.log(fichiers);

    //var fichiers_id = response['fichiers_id']['id'];
    //$('div#modal-inscription').find('input[name ="fichiers"]').val(fichiers);
    //$('div#modal-inscription').find('input#fichiers_id').val(fichiers_id);
    for( var key in response.data.apprenant){
        console.log(key +"===>" +response.data.apprenant[key]);
        if(key == 'dateNaissance'){
            //console.log((data[key]['day']+'-'+data[key]['month']+'-'+data[key]['year']));
            $('div#modal-inscription').find('input[name ="'+key+'"]').val(response.data.apprenant[key]['day']+'-'+response.data.apprenant[key]['month']+'-'+response.data.apprenant[key]['year']);
            if(response.data.apprenant[key]['day']< 10){
            $('div#modal-inscription').find('input[name ="'+key+'"]').val('0'+response.data.apprenant[key]['day']+'-'+response.data.apprenant[key]['month']+'-'+response.data.apprenant[key]['year']);
            }
            if(response.data.apprenant[key]['month']< 10){
            $('div#modal-inscription').find('input[name ="'+key+'"]').val(response.data.apprenant[key]['day']+'-'+'0'+response.data.apprenant[key]['month']+'-'+response.data.apprenant[key]['year']);
            }
            if(response.data.apprenant[key]['day']< 10 && response.data.apprenant[key]['month']< 10){
            $('div#modal-inscription').find('input[name ="'+key+'"]').val('0'+response.data.apprenant[key]['day']+'-'+'0'+response.data.apprenant[key]['month']+'-'+response.data.apprenant[key]['year']);

            }
        }
        else {
            $('div#modal-inscription').find('input[name ="'+key+'"]').val(response.data.apprenant[key]);
        }

        if(key == 'tuteur'){
            for(var index in response.data.apprenant[key]){
                console.log(index +"===>" +response.data.apprenant[key][index]);
                $('div#modal-inscription').find('input[name ="tuteur_'+index+'"]').val(response.data.apprenant[key][index]);
            }
        }
    }
}

function getFormErrors(response){

    for( var key in response.data){
        console.log(key +"===>" +response.data[key][0]);

            var $span = $('<span></span>').html(response.data[key][0]);
            console.log($span );
            $('form#form-inscription').find('input[name ="apprenant['+key+']"]').after($span);

        if(key == 'tuteur'){
            for(var index in response.data[key]){
                var $span = $('<span></span>').html(response.data[key][index][0]);
                console.log(index +"===>" +response.data[key][index][0]);
                $('form#form-inscription').find('input[name ="apprenant[tuteur]['+index+']"]').after($span);
            }
        }
    }
}

function sendModalFormData(){
    $("div#modal-inscription #submit").on('click',function(e){
        e.preventDefault();
        alert("fdhg");
        var idEtablissement = $('form#form-modal').data('etablissement');
        var idFiliereSelected = $('form#filiere').data('filiere');
        console.log('idFiliereSelected '+filiere );


        //var ob = {'data' : 'fdhgdkjf'};
        //ajax
        $.ajax({
            url: "/app_dev.php/inscription/"+idEtablissement+"/data",
            method: 'POST',
            dataType: "json",
            data : $("form#form-modal").serialize(),
            success:function(response){
                console.log("response");
                /*var nom = response.data.apprenant.nom;
                //$("#modal-inscription").find("label#apprenant-nom").html(nom);
                getInfoInscription(response.data.apprenant);
                $("#modal-inscription").modal();*/

            },
            fail:function(error){
                alert(error);
            }
        })

    })

}


// function ajax : get matieres by prof
/**
 * Class : EnseignerSecondaire
 *
 */


/*function recupErrorByInscription(){

    $(":submit").on('click',function(e){

        $.ajax({
            url:$('form').attr('action'),
            method:$('form').attr('method'),
            dataType:"json",
            success:function(response){

                $("div.flash-notice").html(response.matiere);
                console.log(response);


            },
            fail:function(error){
                alert(error);
            }
        })

    });

}


}


function getErrorByInscription(){
    $(document).on('submit','form#form_programme_cours_secondaire_new',function(e){
        e.preventDefault();

        $.ajax({
            url:"/app_dev.php/programmecourssecondaire/new",
            method: $(this).attr('method'),
            dataType:"json",
            data: $(this).serialize(),
            success:function(response){
                console.log(response);

            },
            fail:function(error){
                alert(error);
            }
        })

    });

}*/
