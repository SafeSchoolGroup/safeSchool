/**
 * Created by xenon on 5/18/17.
 */

$(document).ready(function () {
    $.ajax({
        url : "dropzone.html",
        method : 'POST'
    })
        .done(function (response) {
            JSON.createThumbnailFromUrl();

          $(this).hide();
        })
})
