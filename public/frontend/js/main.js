jQuery(function($) {'use strict',
    
	$("#slider1").tinycarousel({
        bullets  : true,
        axis   : "x",
        animationTime: 500,
        infinite: true,
        interval: true,
        intervalTime: 4000
    });
    $("#slider2").tinycarousel({
        bullets   : true,
        buttons   : false,
        animation : false
    });
    $("#slider3").tinycarousel({
        bullets   : true,
        buttons   : false,
        axis   : "x",
        animationTime: 500,
        infinite: true
    });
    $("#slider4").tinycarousel({
        bullets   : true,
        buttons   : false,
        animation : true
    });
    $('#slider5').tinycarousel();
    $("#slider6").tinycarousel({
        bullets   : true,
        buttons   : false,
        animation : false
    });
});