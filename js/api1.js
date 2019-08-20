(function(global) {
    "use strict";
    global.prefix = "#";
    global.fillMal = function(meta, value) {
        return global(global.prefix + meta).val(value);
    }
    global.modalMal = {
        "gm_director": "Director",
        "gm_actor": "Actors",
        "gm_released": "Released",
        "gm_score": "imdbRating",
        "gm_duration": "Runtime",
        "gm_gposter": "Poster",
        "gm_year": "Year",

    }
    global.mal = function(id) {
        global("#meta_omdb_api_button").attr("disabled", true).html("Please wait...");
        global("#spinner").addClass("is-active");
        global.ajax({
             url: "https://omdbapi.com/?i="+id+"&apikey=6be85a77",
            method: "GET",
            dataType: "JSON",
            beforeSend: function() {
                global("button#content-html.wp-switch-editor.switch-html, button#meta_omdb_background-html.wp-switch-editor.switch-html").click();
            }
        }).done(function(json) {
            global("#meta_omdb_api_button").attr("disabled", false).html("Generate");
            global("#spinner").removeClass("is-active");
            if (typeof(json.error) !== "undefined") {
                console.log("Error: " + json.error);
                alert("Error: " + json.error);
            } else {
                
                global("input#title").val(json["Title"]+" ("json["Year"]")");
                global("textarea#content").val(json["Plot"]);
                global("input#new-tag-genre").val(json["Genre"]);
                global("input#new-tag-country").val(json["Country"]);
                // global("input#new-tag-years").val(json["Year"]);
                // global("#new-tag-studios").val(json.studio[0].title);
                // PARSING SINGLE DATA
                console.log(json);

                global.each(global.modalMal, function(key, value) {
                    global.fillMal(key, json[value]);
                });

                var genre_string = ""
                for (var i = 0; i < json.genre.length; i++) {
                    console.log(json.genre[i].name);
                    genre_string += json.genre[i].name + ", ";
                    //                     return genre_string;
                };
                //                 console.log(genre_string)
                document.getElementById('new-tag-genre').value = genre_string;



            }
        });
    }
    global("#meta_omdb_api_button").on("click", function() {
        var input = global("#meta_omdb_api_input").val();
        global.mal(input);
    });
})(jQuery);