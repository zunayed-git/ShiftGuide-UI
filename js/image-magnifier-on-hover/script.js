$(".magnified").hover(function(e){
    //Store position & dimension information of image
    var imgPosition = $(".magnify").position(),
        imgHeight = $(".magnified").height(),
        imgWidth = $(".magnified").width();

    let imgOffset = $(".magnify").offset();
  
    //Show mangifier on hover
    $(".magnifier").show();
  
    //While the mouse is moving and over the image move the magnifier and magnified image
    $(this).mousemove(function(e) {
        //Store position of mouse as it moves and calculate its position in percent    
        var posX = e.pageX - imgOffset.left - imgPosition.left,
            posY = e.pageY - imgOffset.top - imgPosition.top,
            percX = (posX / imgWidth) * 100,
            percY = (posY / imgHeight) * 100,
            perc = percX + "% " + percY + "%";

        //Change CSS of magnifier, move it to mouse location and change background position based on the percentages stored.
        $(".magnifier").css({
            top:posY,
            left:posX,
            backgroundPosition: perc
        });
    });
}, function(){
    //Hide the magnifier when mouse is no longer hovering over image.
    $(".magnifier").hide();
});