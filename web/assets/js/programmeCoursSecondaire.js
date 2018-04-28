$(document).ready(function () {
    // call getMatiereByProf
    //getMatieresByProf();
    //getAllSousClasseByProfOrMatiere();
    //getProfesseurByClasseAndMatiere()
    //getMatieresBySousClasse();
    //getMatiereByClasseAndProfesseur();
    //getProfesseurByClasseAndMatiere();
    //getProfBySousClasse();
    //getErrorBySalle();
    //recupErrorByEnseignerSecondaire();


    // var profSelect = $("select#programme_cours_secondaire_profEnseigner");
    // profSelect.on('change',function(e){
    //     e.preventDefault();
    //     var idProfSelected = $(this).find('option:selected').val();
    //     console.log(idProfSelected);
    //     //ajax
    //     $.ajax({
    //         url:"/app_dev.php/programmecourssecondaire/"+idProfSelected+"/matiereProf",
    //         method:"GET",
    //         dataType:"json",
    //         success:function(response){
    //             //$("a#"+id_exploit).find("span").html("");
    //             //$("a#"+idProfSelected).find("span").html(response);
    //             console.log(response);
    //         },
    //         fail:function(error){
    //             alert(error);
    //         }
    //     })
    //})
    getMatiereEnseignerByProf();
    // sousClasse select
    var sousClasseSelect = $("select#programme_cours_enseigner"),
        profSelect = $("select#programme_cours_profEnseigner");
    matiereSelect = $("select#programme_cours_matiereEnseigner");
    sousClasseSelect.on('change', function (e) {
        e.preventDefault();
        var idSousClasseSelected = $(this).find('option:selected').val() || 'null',
            idEtablissement = $("select#programme_cours_matiereEnseigner").attr('data-etablissement'),
            idMatiere = $("select#programme_cours_matiereEnseigner").find('option:selected').val() || 'null',
            idProfSelect = $("select#programme_cours_profEnseigner").find('option:selected').val() || 'null';


        var object = {
            idSousClasseSelected: idSousClasseSelected,
            idEtablissement: idEtablissement,
            idProfSelected: 'null',
            idMatiereSelected: 'null'
        };

        var elementTypeObject = {
            prof: 'prof',
            matiere: 'matiere'
        };

        var selectObject = {
            profSelect: profSelect,
            matiereSelect: matiereSelect
        };
        console.log(idSousClasseSelected);
        //getAllMatieresAndProfBySousClasse(object,selectObject,elementTypeObject);
        getProfAndMatiereBySousClasse(object, selectObject, elementTypeObject);
        //getAllSousClasseByProfOrMatiere(object,selectObject,elementTypeObject)
        //getProfesseurByClasseAndMatiere(object,selectObject.profSelect,elementTypeObject.prof);


    });

    // matiere select
    var matiereSelect = $("select#programme_cours_matiereEnseigner");
    sousClasseSelect = $("select#programme_cours_enseigner"),
        profSelect = $("select#programme_cours_profEnseigner");
    matiereSelect.on('change', function (e) {
        e.preventDefault();
        var idMatiereSelected = $(this).find('option:selected').val(),
            idSousClasseSelected = $(sousClasseSelect).find('option:selected').val() || 'null',
            idEtablissement = $("select#programme_cours_matiereEnseigner").attr('data-etablissement'),
            idMatiere = $("select#programme_cours_matiereEnseigner").find('option:selected').val() || 'null',
            idProfSelect = $("select#programme_cours_profEnseigner").find('option:selected').val() || 'null';

        var object = {
            idSousClasseSelected: 'null',
            idEtablissement: idEtablissement,
            idProfSelected: 'null',
            idMatiereSelected: idMatiere
        };

        var elementTypeObject = {
            prof: 'prof',
            sousClasse: 'sousClasse'
        };

        var selectObject = {
            profSelect: profSelect,
            sousClasseSelect: sousClasseSelect
        };
        console.log(idMatiereSelected);
        //getAllProfAndSousClasseByMatiere(object,selectObject,elementTypeObject);
        getProfAndMatiereBySousClasse(object, selectObject, elementTypeObject);
        //getProfesseurByClasseAndMatiere(object,selectObject.prof,elementTypeObject.prof);


    });

    // profSelect

    var profSelect = $("select#programme_cours_profEnseigner");
    matiereSelect = $("select#programme_cours_matiereEnseigner");
    sousClasseSelect = $("select#programme_cours_enseigner"),
        profSelect.on('change', function (e) {
            e.preventDefault();
            var idProfSelect = $(this).find('option:selected').val(),
                idSousClasseSelected = $(sousClasseSelect).find('option:selected').val() || 'null',
                idEtablissement = $("select#programme_cours_matiereEnseigner").attr('data-etablissement'),
                idMatiere = $("select#programme_cours_matiereEnseigner").find('option:selected').val() || 'null';
            //idProfSelect = $("select#programme_cours_profEnseigner").find('option:selected').val() || 'null';
            console.log('idprof =>', idProfSelect,
                'idMatiere => ', idMatiere,
                'idSousClasseSelected =>', idSousClasseSelected);

            var object = {
                idSousClasseSelected: idSousClasseSelected,
                idEtablissement: idEtablissement,
                idProfSelected: idProfSelect,
                idMatiereSelected: idMatiere
            };

            var elementTypeObject = {
                matiere: 'matiere',
                sousClasse: 'sousClasse'
            };

            var selectObject = {
                matiereSelect: matiereSelect,
                sousClasseSelect: sousClasseSelect

            };
            //console.log(idProfSelected);
            getProfAndMatiereBySousClasse(object, selectObject, elementTypeObject);
            //getAllMatiereAndSousClasseByProf(object,selectObject,elementTypeObject);


        });
});

// function ajax : get matieres by prof
/**
 * Class : EnseignerSecondaire
 *
 */

// SousClasse functions

function getAllMatieresAndProfBySousClasse(object, selectObject, elementTypeObject) {
    getProfBySousClasse(object, selectObject.profSelect, elementTypeObject.prof);
    getMatieresBySousClasse(object, selectObject.matiereSelect, elementTypeObject.matiere);
}

function getAllProfAndSousClasseByMatiere(object, selectObject, elementTypeObject) {
    getProfesseurByClasseAndMatiere(object, selectObject.profSelect, elementTypeObject.prof);
    //getProfByMatiere(object,selectObject.profSelect,elementTypeObject.prof);
    getSousClasseByMatiere(object, selectObject.sousClasseSelect, elementTypeObject.sousClasse);

}

function getAllMatiereAndSousClasseByProf(object, selectObject, elementTypeObject) {
    getMatiereByProf(object, selectObject.matiereSelect, elementTypeObject.matiere);
    getSousClasseByProf(object, selectObject.sousClasseSelect, elementTypeObject.sousClasse);
}

/**
 * fonction généric ajax qui prend en parametre l'url , element ( les objets select qui seront rempli en fonction de l'elementType)
 * elementType  qui reçoit les valeurs : (soit prof,matiere, sousClasse)
 */



function ajax(url, element, elementType) {

    $.ajax({
        url: url,
        method: "GET",
        dataType: "json",
        success: function (response) {
            console.log(response);
            var elementSelectProf = element.profSelect;
            var elementSelectMatiere = element.matiereSelect;
            var elementSelectSousClasse = element.sousClasseSelect;

            //var $elementSelectProfOption = $(elementSelectProf).find("option:eq(0)");

            $(elementSelectProf).find("option:gt(0)").remove();
            $(elementSelectMatiere).find("option:gt(0)").remove();
            //$(elementSelectSousClasse).find("option:gt(0)").remove();
            //console.log(response.profs.length);
            if (response.profs !== null) {

                console.log('prof not null');

                $.each(response.profs, function (index, value) {
                    console.log("function ajax gen");
                    $option = $("<option></option>");
                    if (elementType.prof == 'prof') {
                        $option.text(value.nom);
                        $option.val(value.id);
                        $(elementSelectProf).append($option);
                        //$elementSelectProfOption.after($option);
                    }
                });
            }


            if (response.profMatiereSousclasse !== null) {
                console.log('profMatiereSousclasse not null');
                $(elementSelectProf).empty();
                $.each(response.profMatiereSousclasse, function (index, value) {
                    console.log("function ajax gen");
                    $option = $("<option></option>");
                    console.log(value);
                    //alert("khlhl");
                    $option.text(value.nom);
                    $option.val(value.id);
                    $(elementSelectProf).append($option);
                });
            }

            //if (Array.isArray(response.matieresProfSousclasse)) {

            if (response.matieres !== null) {

                $.each(response.matieres, function (index, value) {
                    console.log("function ajax gen");
                    $option = $("<option></option>");
                    if (elementType.matiere == 'matiere' || elementType.sousClasse == 'sousClasse') {
                        $option.text(value.libelle);
                        $option.val(value.id);
                        $(elementSelectMatiere).append($option);
                    }
                });
            }
            //if (Array.isArray(response.matieresProfSousclasse)) {

            if (response.matieresProfSousclasse !== null) {
                $(elementSelectMatiere).empty();
                $.each(response.matieresProfSousclasse, function (index, value) {

                    console.log("function ajax gen");
                    console.log(value);

                    $option = $("<option></option>");
                    $option.text(value.libelle);
                    $option.val(value.id);
                    $(elementSelectMatiere).append($option);
                });
            }

            if (response.sousclasse_by_prof !== null) {
                $(elementSelectSousClasse).empty();
                $.each(response.sousclasse_by_prof, function (index, value) {
                    console.log("function ajax gen");
                    $option = $("<option></option>");
                    console.log(value);
                    //alert("khlhl");
                    $option.text(value.libelle);
                    $option.val(value.id);
                    $(elementSelectSousClasse).append($option);
                });
            }

            if (response.sousclasse_by_matiere_and_prof !== null) {
                $(elementSelectSousClasse).empty();
                $.each(response.sousclasse_by_matiere_and_prof, function (index, value) {
                    console.log("function ajax gen");
                    $option = $("<option></option>");
                    console.log(value);
                    //alert("khlhl");
                    $option.text(value.libelle);
                    $option.val(value.id);
                    $(elementSelectSousClasse).append($option);
                });
            }


        },
        fail: function (error) {
            alert(error);
        }
    })

}

/**
 * Fonction qui prend en parametre un object (l'object SousClasse) au choix du quel l'evenement se preoduit, l'element
 *element ( les objets select qui seront rempli en fonction de l'elementType)
 * elementType  qui reçoit les valeurs : (soit prof,matiere, sousClasse)
 */

function getProfBySousClasse(object, element, elementType) {

    var url = "/app_dev.php/programmecours/" + object.idEtablissement + "/" + object.idSousClasseSelected + "/prof_sous_classe";
    ajax(url, element, elementType);
}

function getProfAndMatiereBySousClasse(object, element, elementType) {
    console.log(object.idEtablissement);
    console.log(object.idMatiereSelected);
    console.log(object.idProfSelected);
    console.log(object.idSousClasseSelected);
    var url = "/app_dev.php/programmecours/" + object.idEtablissement + "/" + object.idProfSelected + "/" + object.idMatiereSelected + "/matiere_sous_classe/" + object.idSousClasseSelected;
    console.log(url);
    ajax(url, element, elementType);


}


/**
 *  Fonction qui prend en parametre un object (l'object SousClasse) au choix du quel l'evenement se preoduit, l'element
 *  element ( les objets select qui seront rempli en fonction de l'elementType)
 *  elementType  qui reçoit les valeurs : (soit prof,matiere, sousClasse)
 */

function getMatieresBySousClasse(object, element, elementType) {
    var url = "/app_dev.php/programmecours/" + object.idEtablissement + "/" + object.idSousClasseSelected + "/matiere_sous_classe";
    ajax(url, element, elementType);
}

//deux fonctions qui s'executent au choix de prof

function getMatiereByProf(object, element, elementType) {
    var url = "/app_dev.php/programmecours/" + object.idEtablissement + "/" + object.idProfSelected + "/matiere_prof";
    ajax(url, element, elementType);
}

function getSousClasseByProf(object, element, elementType) {
    var url = "/app_dev.php/programmecours/" + object.idEtablissement + "/" + object.idProfSelected + "/sousClasse_prof";
    ajax(url, element, elementType);
}


//les deux fonctions agissant sur l'evevenement qui est au choix de la matiere


function getSousClasseByMatiere(object, element, elementType) {
    var url = "/app_dev.php/programmecours/" + object.idEtablissement + "/" + object.idMatiereSelected + "/sousClasse_matiere";
    ajax(url, element, elementType);
}

function recupErrorByEnseignerSecondaire() {

    $(":submit").on('click', function (e) {

        $.ajax({
            url: $('form').attr('action'),
            method: $('form').attr('method'),
            dataType: "json",
            success: function (response) {

                $("div.flash-notice").html(response.matiere);
                console.log(response);


            },
            fail: function (error) {
                alert(error);
            }
        })

    });

}

function getProfesseurByClasseAndMatiere(object, element, elementType) {

    var url = "/app_dev.php/programmecours/" + object.idEtablissement + "/" + object.idMatiereSelected + "/prof";
    if (object.idSousClasseSelected !== '') {
        url = "/app_dev.php/programmecours/" + object.idEtablissement + "/" + object.idMatiereSelected + "/prof/" + object.idSousClasseSelected;
        console.log('false :' + object.idSousClasseSelected);
    }
    console.log('sousClasse =>' + object.idSousClasseSelected);
    ajax(url, element, elementType);
}

function getAllSousClasseByProfOrMatiere(object, element, elementType) {
    var idEtablissement = $("select#programme_cours_matiereEnseigner").attr('data-etablissement');
    var matiereSelect = $("select#programme_cours_matiereEnseigner");
    var profSelect = $("select#programme_cours_profEnseigner");
    var sousClasseSelect = $("select#programme_cours_enseigner");

    matiereSelect.on('change', function (e) {
        e.preventDefault();
        var idMatiereSelected = $(this).find('option:selected').val();
        console.log(idMatiereSelected);
        console.log(idEtablissement);
        var url = "/app_dev.php/programmecours/" + idEtablissement + "/" + idMatiereSelected + "/sousClasse_matiere";
        ajax(url, sousClasseSelect);
    });

    profSelect.on('change', function (e) {
        e.preventDefault();
        var idProfSelected = $(profSelect).find('option:selected').val();


        console.log(idEtablissement);

        var url = "/app_dev.php/programmecours/" + idEtablissement + "/" + idProfSelected + "/sousClasse_prof";

        ajax(url, sousClasseSelect);
    });
}

// fonction generique ajax

function getMatiereByClasseAndProfesseur() {
    var sousClasseSelect = $("select#programme_cours_enseigner");
    var profSelect = $("select#programme_cours_profEnseigner");
    profSelect.on('change', function (e) {
        e.preventDefault();
        var idSousClasseSelected = $(sousClasseSelect).find('option:selected').val();
        var idProfSelected = $(this).find('option:selected').val();
        var idEtablissement = $("select#programme_cours_matiereEnseigner").attr('data-etablissement');
        console.log(idSousClasseSelected);
        console.log(idProfSelected);
        console.log(idEtablissement);
        var url = "/app_dev.php/programmecours/" + idEtablissement + "/" + idSousClasseSelected + "/" + idProfSelected + "/matiere";
        if (!idSousClasseSelected) {
            url = "/app_dev.php/programmecours/" + idEtablissement + "/" + idProfSelected + "/matiere_prof";
        }

        $.ajax({
            url: url,
            method: "GET",
            dataType: "json",
            success: function (response) {
                console.log(response);
                var matiereSelect = $("select#programme_cours_matiereEnseigner");
                $(matiereSelect).empty();

                $.each(response, function (index, value) {
                    console.log("strong");
                    $option = $("<option></option>");
                    $option.text(value.libelle);
                    $option.val(value.id);
                    $(matiereSelect).append($option);
                });
            },
            fail: function (error) {
                alert(error);
            }
        })

    });
}

function getErrorBySalle() {
    $(document).on('submit', 'form#form_programme_cours_secondaire_new', function (e) {
        e.preventDefault();

        $.ajax({
            url: "/app_dev.php/programmecourssecondaire/new",
            method: $(this).attr('method'),
            dataType: "json",
            data: $(this).serialize(),
            success: function (response) {
                console.log(response);

            },
            fail: function (error) {
                alert(error);
            }
        })

    });

}


//enseigner function

function getMatiereEnseignerByProf() {
    //var filiereSelect = ;
    $("select#enseigner_etablissementProf").on('change', function (e) {
        e.preventDefault();
        //var idfiliereSelected = $("select#option_filiere_etablissement").find('option:selected').val();
        var idProfSelected = $(this).find('option:selected').val();
        var idEtablissement = $("select#enseigner_etablissementProf").attr('data-etablissement');
        console.log(idProfSelected);
        console.log(idEtablissement);
        //console.log(idNiveauEtude);

        $.ajax({
            url: "/app_dev.php/enseigner/" + idEtablissement + "/" + idProfSelected + "/prof_matiere",
            method: "GET",
            dataType: "json",
            success: function (response) {
                //console.log(response);

                var matiere = $("select#enseigner_matiere");
                $(matiere).empty();

                for (var i = 0; i < response.length; i++) {
                    $option = $("<option></option>");
                    $option.text(response[i].libelle);
                    $option.val(response[i].id);

                    $(matiere).append($option);

                }


                //fail:function(error){
                //    alert(error);
                //}
            }

        })
    })
}
