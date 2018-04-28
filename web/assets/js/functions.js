$(document).ready(function() {
  var filemanager = $("div.filemanager"),
  	breadcrumbs = $('.breadcrumbs'),
    fileList = filemanager.find('.data'),
    dir_root = '/home/Project_symfony/safeSchool/web/Drive',
      user,
      elementLi,
      targetElement,
      elementclicked,
      filePath,
      pathname,
      fileType,
      dbElement,
      fileP,
      sub,
      breadcrumbsUrls = [],
      currentFolderPath,
      chemin,
      fichier,
      srcpath,
      elementname,
      sourcepath,
      elmentname,
      whatTodo,
      actionToDo,
      countElement,
      Urlpreview,
      imageTable = ["png","jpg"],
      videoTable = ["mp4","3gp","jpeg","mp3","wav"],
      textTable = ["pdf","txt","html","docx","doc","odt","vcf"];

      //UrlTable =[];
      $("#dropdown-menu-ul1").on('click',function(e){
        e.preventDefault();
        $("#store-titre-a form").removeClass('hidden-form');
        $("#buttom-annuler").removeClass('hidden');
      });
      $("#buttom-annuler").on('click',function(){
          $("#input-directory").val("");
        $("#store-titre-a form").addClass('hidden-form') ;
        $("#buttom-annuler").addClass('hidden') ;
      });

      $('[data-toggle="tooltip"]').tooltip();
      $(".div-file-center").mCustomScrollbar();

      $("#details").on('click',function(e){
        e.preventDefault();
        if ($("#details").hasClass('displayInfo')) {
            $("#details").removeClass('displayInfo');
            $(".div-file-right").addClass('hidden');
        }
        else {
          $("#details").addClass('displayInfo');
          $(".div-file-right").removeClass('hidden');
        }
      });

      //default getDrive
      $.get("/app_dev.php/mediatheque/find/MEDIATHEQUE",function(data) {
         breadcrumbsUrls = generateBreadcrumbs("MEDIATHEQUE");
    		render(data);
          dir_root = dir_root+"/"+data.user ;
          user = data.user;
        fichier = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le dossier ouvert </div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">dossier</div></div><div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">MEDIATHEQUE</div></div>'
        +'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">Nombre d\'éléments:</div><div class="col-md-8 col-xs-8 div-info-c2">'+countElement+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">~/</div></div>'+'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="icon folder full div-info-icon"></div></div>');
         fichier.appendTo(".div-file-right");
         currentFolderPath ="MEDIATHEQUE";
        var response = [data],
          currentPath = '';

        var folders = [],
          files = [];
             });


     //function copy
     $('#copy').on('click',function(e){
         e.preventDefault();
         if (filemanager.find('a').hasClass('clicked')) {
        sourcepath = srcpath ;
        elmentname = elementname ;
        if ($("#div-menu-right1").find('div').hasClass('actionToDo')) {
         $("#div-menu-right1").find('div').removeClass('actionToDo');
        }
       $("#copy").addClass('actionToDo');
       whatTodo = "copy";

     }
     else {
       alert("sélection  un dossier ou un fichier d'abord");
     }
      });


      //function move
      $('#move').on('click',function(e){
        e.preventDefault();
        if (filemanager.find('a').hasClass('clicked')) {
       sourcepath = srcpath ;
       elmentname = elementname ;
       if ($("#div-menu-right1").find('div').hasClass('actionToDo')) {
        $("#div-menu-right1").find('div').removeClass('actionToDo');
       }
      $("#move").addClass('actionToDo');
      whatTodo = "move";
    }
    else {
      alert("sélection  un dossier ou un fichier d'abord");
    }
       });


    //function rename
    $('#rename').on('click',function(e){
        e.preventDefault();
      if (filemanager.find('a').hasClass('clicked')) {
      //  $("#a-rename").attr("data-target", "");
     $("button#button-modal-submit").click(function(){
       var modalrename = $('div#renameModal .modal-body');
         var newname = modalrename.find('input').val();
         var destpath = dirForNewFolder(srcpath);
        var currentpath = dirForNewFolder(destpath,"last");
        var extentions = destpath.split('.').slice(0);
        var extention = extentions[extentions.length-1];
         if(newname !=""){
         var  dataElement = {
             sourcepathdir: srcpath,
             destpathdir:newname,
             actionToDo:"rename"
           };

          $.ajax({
             type: "POST",
             data: dataElement,
             url: "/app_dev.php/mediatheque/rename/"+dataElement,
             success : function(response){
             $("#renameModal").modal('hide');
             $(".div-file-right").empty();
             render(response);
              breadcrumbsUrls = generateBreadcrumbs(destpath);
               fichier = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le dossier ouvert </div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">dossier</div></div><div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">'+currentpath+'</div></div>'+'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">Nombre d\'éléments:</div><div class="col-md-8 col-xs-8 div-info-c2">'+countElement+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">'+destpath+'</div></div>'+'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'
               +'<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="icon folder full div-info-icon"></div></div>');
                fichier.appendTo(".div-file-right");
                  },
             error: function(jqXHR, textStatus, errorThrown) {
                 alert("une erreur s'est produite !"+jqXHR+textStatus+errorThrown);
                  }
                });
                 }
         });

       }
       else {
         alert("sélection  un dossier ou un fichier d'abord");
       }

     });

     $('#popupconfirmation').dialog({
       autoOpen: false,
       width: 400,
       modal: true,
       show: { effect: "blind", duration: 10 },
       dialogClass: 'dialogstyleperso'
     });

     //function delete
     $('#remove').on('click',function(e){
         e.preventDefault();

         if (filemanager.find('a').hasClass('clicked')) {
           $("#popupconfirmation").dialog({

              buttons: [
                   {
                      "class": 'ui-state-warning',
                       text: "Oui",
                       icons: {
                        primary: "ui-icon-heart"
                        },
                       click: function () {
                         $(this).dialog("close");
                         var destpath = dirForNewFolder(srcpath);
                          var currentpath = dirForNewFolder(destpath,"last");

                       var dataElement = {
                       sourcepathdir: srcpath,
                       destpathdir: destpath,
                           actionToDo:"remove"
                     };

                     $.ajax({
                       type : "POST",
                       data: dataElement,
                       url : "/app_dev.php/mediatheque/remove/"+dataElement,
                       success : function(response){
                         console.log(dataElement);
                       $(".div-file-right").empty();
                         render(response);
                          breadcrumbsUrls = generateBreadcrumbs(destpath);
                           fichier = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le dossier ouvert </div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">dossier</div></div><div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">'+currentpath+'</div></div>'+'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">Nombre d\'éléments:</div><div class="col-md-8 col-xs-8 div-info-c2">'+countElement+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">'+destpath+'</div></div>'+'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'
                           +'<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="icon folder full div-info-icon"></div></div>');
                            fichier.appendTo(".div-file-right");
                       },
                       error: function(jqXHR, textStatus, errorThrown) {
                   }
                   });
                       }
                   },
                   {   "class": 'ui-state-information',
                       text: "Non",
                       click: function () {
                           $(this).dialog("close");
                       }
                   }
               ]
           }).dialog("open");
           $("#popupinformation").prev().addClass('ui-state-information');
           $("#popupinformation").prev().addClass('ui-state-warning');

   }
   else {
     alert("sélection  un dossier ou un fichier d'abord");
   }

     });

     // function paste
       $('#paste').on('click',function(e){
           e.preventDefault();
           if ($("#div-menu-right1").find('div').hasClass('actionToDo')) {
             var check ;
            var  dataElt = {
              destdir: currentFolderPath,
              fileforchecking: elmentname
              };
            $.ajax({
              type: "POST",
              data: dataElt,
              url: "/app_dev.php/mediatheque/check/"+dataElt,
              success : function(response){
                check = response.check ;
                if (check === false) {
             var  dataElement = {
                 sourcepathdir: sourcepath,
                 destpathdir: currentFolderPath,
                 actionToDo:whatTodo
               };
               $.ajax({
                 type: "POST",
                 data: dataElement,
                 url: "/app_dev.php/mediatheque/"+whatTodo+"/"+dataElement,
                 success : function(response){
                 $(".actionToDo").removeClass('actionToDo');
                 $(".div-file-right").empty();
                 render(response);
                  breadcrumbsUrls = generateBreadcrumbs(currentFolderPath);
                   fichier = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le dossier ouvert </div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">dossier</div></div><div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">'+dirForNewFolder(currentFolderPath,"last")+'</div></div>'
                   +'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">Nombre d\'éléments:</div><div class="col-md-8 col-xs-8 div-info-c2">'+countElement+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">'+currentFolderPath+'</div></div>'
                   +'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="icon folder full div-info-icon"></div></div>');
                    fichier.appendTo(".div-file-right");
                    sourcepath = "" ;
                    elmentname = "" ;

                },
                error: function(jqXHR, textStatus, errorThrown) {
                  alert("une erreur s'est produite !"+jqXHR+textStatus+errorThrown);
                }
            });

          }
          else if (check === true) {
            alert("L'élément existe, voulez le remplacer ?");
          }
              },
             error: function(jqXHR, textStatus, errorThrown) {
               alert("une erreur s'est produite !"+jqXHR+textStatus+errorThrown);
             }
         });
        }
        else {
          alert("cliquer sur l'action à excécuter d'abord !!!");
        }

       });

// bottom restaure

$("#restaure").on('click',function(e){
   e.preventDefault();
   var Corbeille = false ;
   console.log(elementclicked);
   var drivepath = elementclicked ;
   var path = drivepath.split('/').slice(0);

   for(var i=0;i<path.length;i++){
     if(path[i]==="Corbeille"){
       Corbeille = true ;
     }
   }

   if(Corbeille){
     var  dataElt = {
         elementclicked: elementclicked
     };
     $.ajax({
       type: "POST",
       data: dataElt,
       url: "/app_dev.php/mediatheque/restaure/"+dataElt,
       success : function(response){
      //   render(response);
    },
      error: function(jqXHR, textStatus, errorThrown) {
        alert("une erreur s'est produite !"+jqXHR+textStatus+errorThrown);
      }
     });
   }

});

    //create a new folder
    $("#buttom-create").on('click',function(e){
        e.preventDefault();
        var folderTocreate = $("#input-directory").val();

        if (folderTocreate === "") {

        }
        else {
            var check ;
            var  dataElt = {
                destdir: currentFolderPath,
                fileforchecking: folderTocreate
            };
            $.ajax({
                type: "POST",
                data: dataElt,
                url: "/app_dev.php/mediatheque/check/"+dataElt,
                success : function(response){
                    check = response.check ;
                    if (check === false) {
                        var dataElement = {
                            sourcepathdir:currentFolderPath,
                            destpathdir:folderTocreate,
                            actionToDo:"create"
                        };
                        var currentpath = dirForNewFolder(currentFolderPath,"last");
                        $.ajax({
                            type: "POST",
                            url: "/app_dev.php/mediatheque/create/"+dataElement,
                            data : dataElement,
                            success : function(response){
                                $(".div-file-right").empty();
                                $("#input-directory").val("");
                                $("#store-titre-a form").addClass('hidden-form') ;
                                $("#buttom-annuler").addClass('hidden') ;
                                render(response);
                                breadcrumbsUrls.push(drivepath);
                                breadcrumbsUrls = generateBreadcrumbs(currentFolderPath);
                                fichier = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le dossier ouvert </div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">dossier</div></div><div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">'+currentpath+'</div></div>'+'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">Nombre d\'éléments:</div><div class="col-md-8 col-xs-8 div-info-c2">'+countElement+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">'+currentFolderPath+'</div></div>'+'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+
                                    '<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="icon folder full div-info-icon"></div></div>');
                                fichier.appendTo(".div-file-right");
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                alert("une erreur s'est produite !"+jqXHR+textStatus+errorThrown);
                            }
                        });
                    }
                    else {
                        alert(folderTocreate+" existe, Changer de nom ! ");
                    }
                }
            });
        }
    });

//click on Mon Disque
    $("#div-monDisque").on('click',function (e) {
        e.preventDefault();

        $.get("/app_dev.php/mediatheque/find/MEDIATHEQUE",function(data) {
            $(".div-file-right").empty();
            breadcrumbsUrls = generateBreadcrumbs("MEDIATHEQUE");
            render(data);
            fichier = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le dossier ouvert </div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">dossier</div></div><div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">MEDIATHEQUE</div></div>'
                +'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">Nombre d\'éléments:</div><div class="col-md-8 col-xs-8 div-info-c2">'+countElement+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">~/</div></div>'+'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="icon folder full div-info-icon"></div></div>');
            fichier.appendTo(".div-file-right");
            currentFolderPath ="MEDIATHEQUE";
            var response = [data],
                currentPath = '';
        });

    });

//click on Corbeille
    $("#div-corbeille").on('click',function(e){
        e.preventDefault();
        drivepath = "MEDIATHEQUE/Corbeille" ;
//currentFolderPath = drivepath ;
        $(".div-file-right").empty();
        $.ajax({
            type: "POST",
            url: "/app_dev.php/mediatheque/find/"+drivepath,
            data : drivepath,
            success : function(response){
                breadcrumbsUrls = generateBreadcrumbs("Corbeille");
                render(response);
                fichier = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le dossier ouvert </div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">dossier</div></div>'+'<div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">Corbeille</div></div>'+'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">Nombre d\'éléments:</div><div class="col-md-8 col-xs-8 div-info-c2">'+countElement+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">'+"Corbeille"+'</div></div>'+'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+
                    '<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="icon folder full div-info-icon"></div></div>');
                fichier.appendTo(".div-file-right");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("une erreur s'est produite !"+jqXHR+textStatus+errorThrown);
            }
        });

    });



           //block click sur filemanager
       filemanager.on('click',function(e){
         e.preventDefault();

         setTimeout(function(){
         targetMain(e);
            var  drivepath = target(e);
      if (drivepath != "null") {
        elementclicked = drivepath ;
       if (filemanager.find('a').hasClass('clicked')) {
           //récupération du chemin source et du nom de l'élément
              srcpath = drivepath ;
             elementname = dirForNewFolder(drivepath,"last");

        var nomcli = $("a[href='"+drivepath+"']").attr('title');
        var typecli = $("a[href='"+drivepath+"']").attr('class');
        var iconcli = $("a[href='"+drivepath+"'] span:first").attr('class');
        var detailscli = $("a[href='"+drivepath+"'] span:last").text();
        var detailcli = detailscli.split(' ').slice(0);
        var clidetail = detailcli[0];
        var  clitype = typecli.split(' ').slice(0);
        if (clitype[0] === 'folders') {
          var elementType = "dossier" ;
          var clidetails = "Nombre d'éléments" ;
        }
        else {
          var elementType = "fichier" ;
          var clidetails = "Taille" ;
          for (var i = 1; i < detailcli.length; i++) {
            clidetail = clidetail+"  "+ detailcli[i];
          }
        }
        var fichierclick = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le '+elementType+' sélectionné</div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">'+elementType+'</div></div>'+'<div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">'+nomcli+'</div></div>'
        +'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">'+clidetails+':</div><div class="col-md-8 col-xs-8 div-info-c2">'+clidetail+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">'+srcpath+'</div></div>'+'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="div-info-icon '+iconcli+'"></div></div>');
        fichierclick.appendTo(".div-file-right");
         }
       else {
         fichier.appendTo(".div-file-right");
       }
          }
       },
        280);
      });


     //block doubleclick sur filemanager
     filemanager.on('dblclick',function (e){
       e.preventDefault();
        $(".div-file-right").empty();
      var  drivepath = target(e);
      if (drivepath != "null") {
        if (dbElement === "folders") {
        currentFolderPath = drivepath;
      //  console.log("currentFolderPath est: "+currentFolderPath);
        var nomcli = $("a[href='"+drivepath+"']").attr('title');
        var typecli = $("a[href='"+drivepath+"']").attr('class');
        var iconcli = $("a[href='"+drivepath+"'] span:first").attr('class');
        var detailscli = $("a[href='"+drivepath+"'] span:last").text();
        var detailcli = detailscli.split(' ').slice(0);
          var elementType = "dossier" ;
          var clidetails = "Nombre d'éléments" ;

  //if it is a folder, we scan
       fichier = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le '+elementType+' ouvert </div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">'+elementType+'</div></div>'+'<div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">'+nomcli+'</div></div>'
       +'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">'+clidetails+':</div><div class="col-md-8 col-xs-8 div-info-c2">'+detailcli[0]+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">'+drivepath+'</div></div>'+'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'
+'<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="div-info-icon '+iconcli+'"></div></div>');
        fichier.appendTo(".div-file-right");
        breadcrumbsUrls.push(drivepath);
        breadcrumbsUrls = generateBreadcrumbs(drivepath);
         $.ajax({
           type: "POST",
           url: "/app_dev.php/mediatheque/find/"+drivepath,
           data : drivepath,
           success : function(response){
            render(response);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert("une erreur s'est produite !"+jqXHR+textStatus+errorThrown);
          }
         });
       }
       //if it is a file, we open it
       if(dbElement === "files"){
         var extension = guessFileExtension(drivepath);
         if(imageTable.includes(extension.toLowerCase())){
             var sliderName = dirForNewFolder(drivepath,"last");
             $('#slider-modal').empty();
             $("#myModalImage").modal("show");

             slider = $('<div id="ninja-slider"> <div class="inner"><a class="ns-img" href="'+"http://localhost/Drive/"+user+"/"+drivepath+'" target="_blank"><img class="ns-img" src='+"http://localhost/Drive/"+user+"/"+drivepath+'><div>Affichage de l\'image '+sliderName+'</div></a></div><div class="fs-icon" title="Expand/Close"></div></div>');
             slider.appendTo("#slider-modal");
             //$('#ninja-slider').nsOptions();
          //   $('#ninja-slider').nsOptions({ width: 900, height:2000, navigation: true, effect:'rain',  delay: 5000, titleSpeed: 500, opacity: 0.7, sDelay: 30});

       }
        else if(videoTable.includes(extension.toLowerCase())){
          var sliderName = dirForNewFolder(drivepath,"last");
          $('#slider-modal').empty();
          $("#myModalImage").modal("show");
          slider = $('<video controls src="http://localhost/Drive/'+user+"/"+drivepath+'" autoplay  poster="http://localhost/assets/img/block-5.png"></video>');
          slider.appendTo("#slider-modal");
        }
        else if (extension.toLowerCase()==="pdf") {
          var sliderName = dirForNewFolder(drivepath,"last");
          $('#slider-modal').empty();
          $("#myModalImage").modal("show");
            var object = $('<object data=\"{sliderName}\" type=\"application/pdf\" width=\"500px\" height=\"300px\"></object>');
              object = object.replace(/{sliderName}/g, "http://localhost/Drive/"+user+"/"+ drivepath);
              object.html("#slider-modal");
  /*        $(function () {
            $("#dialog").dialog({
                modal: true,
                title: sliderName,
                width: 540,
                height: 450,
                buttons: {
                    Close: function () {
                        $(this).dialog('close');
                    }
                },
                open: function () {
                    var object = $('<object data=\"http://localhost/'+drivepath+'\" type=\"application/pdf\" width=\"500px\" height=\"300px\"></object>');
                //    object += "If you are unable to view file, you can download from <a href = \"{FileName}\">here</a>";
              //      object += " or download <a target = \"_blank\" href = \"http://get.adobe.com/reader/\">Adobe PDF Reader</a> to view the file.";
                    //object += "</object>";
                    object = object.replace(/{sliderName}/g, "Files/" + sliderName);
                    $("#dialog").html(object);
                }
            });
    }); */

        }

       }

     }

     });

     //block clic sur breadcrumbs
     breadcrumbs.on('click', 'a', function(e){
        e.preventDefault();
         $(".div-file-right").empty();
      var index = breadcrumbs.find('a').index($(this));
      var  drivepath = breadcrumbsUrls[index];
      breadcrumbsUrls.length = Number(index);
    //  breadcrumbsUrls.push(drivepath)
      currentFolderPath = "";
        currentFolderPath = drivepath;
  //      console.log("currentFolderPath est :"+currentFolderPath);
        nomcli = dirForNewFolder(drivepath,"last");
        var detailscli = $("a[href='"+drivepath+"'] span:last").text();

        $.ajax({
          type: "POST",
          url: "/app_dev.php/mediatheque/find/"+drivepath,
          data : drivepath,
          success : function(response){
           breadcrumbsUrls = generateBreadcrumbs(drivepath);
           render(response);
           fichier = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le dossier ouvert </div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">dossier</div></div>'+'<div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">'+nomcli+'</div></div>'+'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">Nombre d\'éléments:</div><div class="col-md-8 col-xs-8 div-info-c2">'+countElement+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">'+drivepath+'</div></div>'+'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+
           '<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="icon folder full div-info-icon"></div></div>');
           fichier.appendTo(".div-file-right");
         },
         error: function(jqXHR, textStatus, errorThrown) {
           alert("une erreur s'est produite !"+jqXHR+textStatus+errorThrown);
         }
        });
      });


//right click on filemanager
 /*
    $(function() {
        $.contextMenu({
            selector: filemanager,
            callback: function(key, options) {
                var m = "clicked: " + key;
                window.console && console.log(m) || alert(m);
            },
            items: {
                "edit": {name: "Edit", icon: "edit"},
                "cut": {name: "Cut", icon: "cut"},
                copy: {name: "Copy", icon: "copy"},
                "paste": {name: "Paste", icon: "paste"},
                "delete": {name: "Delete", icon: "delete"},
                "sep1": "---------",
                "quit": {name: "Quit", icon: function(){
                    return 'context-menu-icon context-menu-icon-quit';
                }}
            }
        });

        filemanager.on('click', function(e){
            console.log('clicked', this);
        })
    });

*/

 /////////////////////////////////////////////////////////////////////////////////////////////////////
 ////////////////--------------------seaching---------------------------------///////////////////////

       // Listening for keyboard input on the search field.
        // We are using the "input" event which detects cut and paste
        // in addition to keyboard input.

        $("#div-recherche").on('input', function(e){
        });


//*********************************************************//
//*******************dropezone******************************//

// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument

var previewNode = document.querySelector("#template");
previewNode.id = "";
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
  url: "/app_dev.php/mediatheque/upload", // Set the url
  thumbnailWidth: 140,
  thumbnailHeight: 120,
  parallelUploads: 5,
  previewTemplate: previewTemplate,
  autoQueue: false, // Make sure the files aren't queued until manually added
  previewsContainer: "#previews", // Define the container to display the previews
  clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
  maxFiles: 5,
  maxFilesize: 100,
  dictFileTooBig: "fichier trop volumineux, la taille maximale est de 100M",
  dictResponseError: "fichier non téléversé, veillez réessayer !",
  dictMaxFilesExceeded: "Désolé, vous ne pouvez que téléverser au plus 10 fichiers à la fois !"
});

////////////////////////////////////
////generate thumbnails for files ///
//////////////////////////////////////

myDropzone.on("addedfile", function(file) {
  if (!file.type.match(/image.*/)) {
/*
    var check ;
    var  dataElt = {
        fileDir: fileUrl,
        FileName: FileName
    };
    $.ajax({
        type: "POST",
        data: dataElt,
        url: "/app_dev.php/mediatheque/thumbnails/"+dataElt,
        success : function(response){
            check = response.check ;
          }
          })

    */

    // This is not an image, so Dropzone doesn't create a thumbnail.
    // Set a default thumbnail:

    myDropzone.createThumbnailFromUrl(file, "/assets/img/block-6.png");

  }
  // Hookup the start button
  file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
});


myDropzone.on("maxfilesexceeded", function(file) {
   this.removeFile(file);
  });

// Update the total progress bar

 myDropzone.on("totaluploadprogress", function(progress) {
  document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
});

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function() {
  myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
};
document.querySelector("#actions .cancel").onclick = function() {
  myDropzone.removeAllFiles(true);
};

//////////////////////$$$$$$$$$$$$$$$$$$$$$$$$$$$$///////////////////////
////////////// send the current path while sending //////////
myDropzone.on("sending", function(file, xhr, formData) {
  // Show the total progress bar when upload starts
  document.querySelector("#total-progress").style.opacity = "1";
  // And disable the start button
  file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
  // Will send the filesize along with the file as POST data.
  formData.append("pathWhereToUpload", currentFolderPath);
});

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function(progress) {
  document.querySelector("#total-progress").style.opacity = "0";

});

myDropzone.on("success", function(file) {
  $.ajax({
    type: "POST",
    url: "/app_dev.php/mediatheque/find/"+currentFolderPath,
    data : currentFolderPath,
    success : function(response){
     render(response);
     var nomcli = dirForNewFolder(currentFolderPath,"last");
      $(".div-file-right").empty();
     fichier = $('<div class="row div-info"><div class="row div-info-titre"> Informations sur le dossier ouvert </div><div class="row div-info-type"><div class="col-md-4 col-xs-4 div-info-c1">Type:</div><div class="col-md-8 col-xs-8 div-info-c2">dossier</div></div>'+'<div class="row div-info-nom"><div class="col-md-4 col-xs-4 div-info-c1">Nom:</div><div class="col-md-8 col-xs-8 div-info-c2">'+nomcli+'</div></div>'+'<div class="row div-info-detail"><div class="col-md-4 col-xs-4 div-info-c1">Nombre d\'éléments:</div><div class="col-md-8 col-xs-8 div-info-c2">'+countElement+'</div></div>'+'<div class="row div-info-emplacement"><div class="col-md-4 col-xs-4 div-info-c1">Emplacement:</div><div class="col-md-8 col-xs-8 div-info-c2">'+currentFolderPath+'</div></div>'+'<div class="row div-info-created"><div class="col-md-4 col-xs-4 div-info-c1">Date de création </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+
     '<div class="row div-info-modified"><div class="col-md-4 col-xs-4 div-info-c1">Date de la dernière modification </div><div class="col-md-4 col-xs-4 div-info-c2">16/01/2017</div></div>'+'<div class="icon folder full div-info-icon"></div></div>');
     fichier.appendTo(".div-file-right");
   },
   error: function(jqXHR, textStatus, errorThrown) {
     alert("une erreur s'est produite !"+jqXHR+textStatus+errorThrown);
   }
  });
  myDropzone.removeFile(file);
});


////"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""/////
////////$$$$$$$$$$$$$$$$$$  view existing files $$$$$$$$$$$$$$///////////
///""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""///

//thumbnailsViewer
function imageThumbsViewer(file){
  // Create the mock file:
var mockFile = { name: "Filename", size: 12345 };

// Call the default addedfile event handler
myDropzone.emit("addedfile", mockFile);

// And optionally show the thumbnail of the file:
//myDropzone.emit("thumbnail", mockFile, "/image/url");
// Or if the file on your server is not yet in the right
// size, you can let Dropzone download and resize it
// callback and crossOrigin are optional.
myDropzone.createThumbnailFromUrl(file, imageUrl, callback, crossOrigin);

// Make sure that there is no progress bar, etc...
myDropzone.emit("complete", mockFile);

// If you use the maxFiles option, make sure you adjust it to the
// correct amount:
var existingFileCount = 1; // The number of files already uploaded
myDropzone.options.maxFiles = myDropzone.options.maxFiles - existingFileCount;
}

// This is an example of completely disabling Dropzone's default behavior.
// Do *not* use this unless you really know what you are doing.

/*
Dropzone.myDropzone.options = {
  previewTemplate: document.querySelector('#template-container').innerHTML,
  // Specifing an event as an configuration option overwrites the default
  // `addedfile` event handler.
  addedfile: function(file) {
    file.previewElement = Dropzone.createElement(this.options.previewTemplate);
    // Now attach this new element some where in your page
  },
  thumbnail: function(file, dataUrl) {
    // Display the image in your file.previewElement
  },
  uploadprogress: function(file, progress, bytesSent) {
    // Display the progress
  }
  // etc...
};
*/

// function guessFileExtension
function guessFileExtension(drivepath){
  var path = drivepath.split('.').slice(0);
  return path[path.length-1];
}

function filepreviewGeneretor(fileUrl,thumbName){

    var filepreview = require('filepreview');
    var options = {
      width: 500,
      height: 100,
      quality: 90
    }
  filepreview.generateSync(dir_root+fileUrl,
                          dir_root+'thumbsnail'+thumbName.gif,options);
  }

      //function targetMain
      function targetMain(event){
        var targetElement = event.target;
         var element;

          // if(targetElement) {
             if(targetElement.nodeName === 'SPAN') {
               element = $(targetElement).parent();
               }
             else if (targetElement.nodeName === 'A') {
               element= $(targetElement);
             }
             else if (targetElement.nodeName === 'LI') {
              element = $(targetElement).find('a');
            }
          //  }

              if (filemanager.find('a').hasClass('clicked'))
                {
                  if (element.hasClass('clicked')) {
                    element.removeClass('clicked');
                  }
                  else {
                    filemanager.find('a').removeClass('clicked');
                    element.addClass("clicked");
                  }
              }
              else{
               element.addClass("clicked");
              }
      }

     //function target
     function target(event){
      var targetElement = event.target;
       var link,element;
            //data = {};
         if(targetElement) {
           if(targetElement.nodeName === 'SPAN') {
             element = $(targetElement).parent();
               link = element.attr('href');
               dbElement = element.attr('class');
             }
           else if (targetElement.nodeName === 'A') {
             element= $(targetElement);
             link = element.attr('href');
             dbElement = element.attr('class');
           }
           else if (targetElement.nodeName === 'LI') {
            element = $(targetElement).find('a');
            link = element.attr('href');
            dbElement = element.attr('class');
          }
         }
          $(".div-file-right").empty();
            return link;
     }

     //function generate breadcrumbs
     function generateBreadcrumbs(drivepath){
 			var path = drivepath.split('/').slice(0);
 			for(var i=1;i<path.length;i++){
 				path[i] = path[i-1]+ '/' +path[i];
 			}
 			return path;
 		}

    //function
    function dirForNewFolder(drivepath,para){
     var path = drivepath.split('/').slice(0);
     var dir = path[0];
     for(var i=1;i<path.length-1;i++){
       dir = dir + "/" + path[i];
     }
     if (para === "last") {
       return path[path.length-1];
     }
     else{
       return dir;
     }
   }

     // Render the HTML for the file manager
     function render(data) {
       countElement = 0 ;
       urlcount = 0;
       var scannedFolders = [],
         scannedFiles = [];

         if(Array.isArray(data)) {

           data.forEach(function (d) {

             if (d.type === 'folder') {
               scannedFolders.push(d);
             }
             else if (d.type === 'file') {
               scannedFiles.push(d);
             }

           });
         }

       if(typeof data === 'object') {
         var re= data.items
         re.forEach(function (d) {
           if (d.type === 'folder') {
             scannedFolders.push(d);
           }
           else if (d.type === 'file') {
             scannedFiles.push(d);
           }

         });

       }
       else if(2) {

         scannedFolders = data.folders;
         scannedFiles = data.files;

       }

       // Empty the old result and make the new one

       fileList.empty();

       if(!scannedFolders.length && !scannedFiles.length) {
         filemanager.find('.nothingfound').show();
       }
       else {
         filemanager.find('.nothingfound').hide();
       }

       if(scannedFolders.length) {

         scannedFolders.forEach(function(f) {

           var itemsLength = f.items.length,
             name = escapeHTML(f.name),
             icon = '<span class="icon folder"></span>',
             fileP = f.path;

           if(itemsLength) {
             icon = '<span class="icon folder full"></span>';
           }

           if(itemsLength === 1) {
             itemsLength += ' élément';
           }
           else if(itemsLength > 1) {
             itemsLength += ' éléments';
           }
           else {
             itemsLength = 'Vide';
           }

         //	var pathed = substring(f.path,20);

           sub = fileP.substring(fileP.indexOf("MEDIATHEQUE/"));

           var folder = $('<li class="folders"><a href="'+sub+'" title="'+ f.name +'" class="folders">'+icon+'<span class="name">' + name + '</span> <span class="details">' + itemsLength + '</span></a></li>');
           folder.appendTo(fileList);
           countElement += 1 ;
         });

       }

       if(scannedFiles.length) {

         scannedFiles.forEach(function(f) {

           var fileSize = bytesToSize(f.size),
             name = escapeHTML(f.name),
             fileType = name.split('.'),
             icon = '<span class="icon file"></span>';

           fileType = fileType[fileType.length-1];

           icon = '<span class="icon file f-'+fileType+'">.'+fileType+'</span>';
           fileP = f.path;
           sub = fileP.substring(fileP.indexOf("MEDIATHEQUE/"));
           var file = $('<li class="files"><a href="'+sub+'" title="'+ f.name +'" class="files">'+icon+'<span class="name">'+ name +'</span> <span class="details">'+fileSize+'</span></a></li>');
           file.appendTo(fileList);
           countElement += 1 ;

        //  filepreviewGeneretor(sub,name);
         });

       }

       // Generate the breadcrumbs

       var url = '';

         fileList.addClass('animated');

         breadcrumbsUrls.forEach(function (u, i) {

           var name = u.split('/');

           if (i !== breadcrumbsUrls.length - 1) {
             url += '<a href="'+u+'"><span class="folderName">' + name[name.length-1] + '</span></a> <span class="arrow">→</span> ';
           }
           else {
             url += '<span class="folderName">' + name[name.length-1] + '</span>';
           }

         });

       breadcrumbs.text('').append(url);


       // Show the generated elements

       fileList.animate({'display':'inline-block'});
    }


     // This function escapes special html characters in names
     function escapeHTML(text) {
       return text.replace(/\&/g,'&amp;').replace(/\</g,'&lt;').replace(/\>/g,'&gt;');
     }


     // Convert file sizes from bytes to human readable units
     function bytesToSize(bytes) {
       var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
       if (bytes === 0) return '0 Bytes';
       var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
       return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
     }


     // function which generate file tree

    function dirTree(data) {

        var scannedFolders = [],
            scannedFiles = [];

        if(Array.isArray(data)) {

            data.forEach(function (d) {

                if (d.type === 'folder') {
                    scannedFolders.push(d);
                }
                else if (d.type === 'file') {
                    scannedFiles.push(d);
                }

            });
        }

        if(typeof data === 'object') {
            var re= data.items
            re.forEach(function (d) {
                if (d.type === 'folder') {
                    scannedFolders.push(d);
                }
                else if (d.type === 'file') {
                    scannedFiles.push(d);
                }

            });

        }
        else if(2) {

            scannedFolders = data.folders;
            scannedFiles = data.files;

        }

        // Empty the old result and make the new one

        fileList.empty();


        if(scannedFolders.length) {

            scannedFolders.forEach(function(f) {

                var itemsLength = f.items.length,
                    name = escapeHTML(f.name),
                    icon = '<span class="icon folder"></span>',
                    fileP = f.path;

                if(itemsLength) {
                    icon = '<span class="icon folder full"></span>';
                }

                //	var pathed = substring(f.path,20);

                sub = fileP.substring(fileP.indexOf("MEDIATHEQUE/"));

                var folder = $('<li class="folders"><a href="'+sub+'" title="'+ f.name +'" class="folders">'+icon+'<span class="name">' + name + '</span> <span class="details">' + itemsLength + '</span></a></li>');
                folder.appendTo(fileList);
                countElement += 1 ;
            });

        }

        if(scannedFiles.length) {

            scannedFiles.forEach(function(f) {

                var fileSize = bytesToSize(f.size),
                    name = escapeHTML(f.name),
                    fileType = name.split('.'),
                    icon = '<span class="icon file"></span>';

                fileType = fileType[fileType.length-1];

                icon = '<span class="icon file f-'+fileType+'">.'+fileType+'</span>';
                fileP = f.path;
                sub = fileP.substring(fileP.indexOf("MEDIATHEQUE/"));
                var file = $('<li class="files"><a href="'+sub+'" title="'+ f.name +'" class="files">'+icon+'<span class="name">'+ name +'</span> <span class="details">'+fileSize+'</span></a></li>');
                file.appendTo(fileList);
                countElement += 1 ;

                //  filepreviewGeneretor(sub,name);
            });

        }

        // Generate the breadcrumbs

        var url = '';

        fileList.addClass('animated');

        breadcrumbsUrls.forEach(function (u, i) {

            var name = u.split('/');

            if (i !== breadcrumbsUrls.length - 1) {
                url += '<a href="'+u+'"><span class="folderName">' + name[name.length-1] + '</span></a> <span class="arrow">→</span> ';
            }
            else {
                url += '<span class="folderName">' + name[name.length-1] + '</span>';
            }

        });

        breadcrumbs.text('').append(url);


        // Show the generated elements

        fileList.animate({'display':'inline-block'});
    }



});
