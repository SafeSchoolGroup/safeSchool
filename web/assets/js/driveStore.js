    /* Drag'n drop stuff */
    function upload(file) {

        /* Is the file an image? */
        if (!file || !file.type.match(/image.*/)) return;

        /* It is! */
        document.body.className = "uploading";

        /* Lets build a FormData object*/
        var fd = new FormData(); // I wrote about it: https://hacks.mozilla.org/2011/01/how-to-develop-a-html5-image-uploader/
        fd.append("image", file); // Append the file
        var xhr = new XMLHttpRequest(); // Create the XHR (Cross-Domain XHR FTW!!!) Thank you sooooo much imgur.com
        xhr.open("POST", "https://api.imgur.com/3/image.json"); // Boooom!
        xhr.onload = function() {
            // Big win!
            document.querySelector("#link").href = JSON.parse(xhr.responseText).data.link;
            document.body.className = "uploaded";
        }

        xhr.setRequestHeader('Authorization', 'Client-ID 28aaa2e823b03b1'); // Get your own key http://api.imgur.com/

        // Ok, I don't handle the errors. An exercise for the reader.

        /* And now, we send the formdata */
        xhr.send(fd);
    }
