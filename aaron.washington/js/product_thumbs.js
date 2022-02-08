$(()=>{

    // function(e) means gather event data
    $(".images-thumbs img").on("mousedown", function(e) {
        let src = $(this).attr("src");
        $(".images-main img").attr("src",src);
    })

});