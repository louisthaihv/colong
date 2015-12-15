(function($) {'use strict',

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
})(jQuery);

serverList = (function($) {

    var checkList = function(elementId, listId) {
        $(elementId).on('click', function(){
            var isHidden = $(listId).is(':hidden');

            if(isHidden) {
                $(listId).show();
            } else {
                $(listId).hide();
            }
        });
    };

    var init = function () {
        var btnOption = '#btnServerList',
            inputOption = '#inputServerList',
            optionList = '#optionList';

            checkList(btnOption, optionList);
            inputOption(btnOption, optionList);
    };

    return {
        init: init
    };
})(jQuery);

$(function () {
    serverList.init();
});