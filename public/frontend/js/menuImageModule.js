var menuImageModule = (function() {

    var menuImages = function() {
        var list = [];
        list = $('a[id^="menu_image_"]');
        return list;
    };

    var getImageUrl = function(elementId) {
        var imageUrl = $(elementId).attr('data-img');
        return imageUrl;
    };

    var setImageSrc = function(imageId, imageUrl) {
        $(imageId).attr('src', imageUrl);
    };

    var removeActive = function(elementId) {
        var hasActive = $(elementId).hasClass('active');

        if(hasActive) {
            $(elementId).removeClass('active');
        }
        $(elementId).removeClass('active');
    };

    var removeActiveClass = function(menuList) {
        $.each(menuList, function(index, element) {

            removeActive(menuList[index]);
        });
    };

    var loadImageByActive = function(elemntId, imageId) {
        var hasActive = $(elemntId).hasClass('active');

        if(hasActive) {
            var imageUrl = getImageUrl(elemntId);

            if(imageUrl) {
                setImageSrc(imageId, imageUrl);
            }
        }
    };


    var autoNext = function(currentId, menuList, imageId) {

        /*console.log('==================================');
        console.log(currentId);*/

        // remove all active class
        removeActiveClass(menuList);

        $.each(menuList, function(index, element) {


            var currentElementId = $(menuList[index]).attr('id');

            if(currentId === currentElementId) {
                $(menuList[index]).addClass('active');
                loadImageByActive(menuList[index], imageId);
            }

            var hasActive = $(menuList[index]).hasClass('active');

            if(hasActive) {
                if(currentId == menuList[index]) {
                    loadImageByActive();
                }
            }
        });

    };

    var autoRun = function(currentId, menuList, imageId) {
        $.each(menuList, function(index, element) {
            autoNext(currentId, menuList, imageId);
        });
    };


    var init = function() {

        var menuList = menuImages();

        var image = '#menuImage';

        setInterval(function() {
            setTimeout(function() {
                autoRun('menu_image_0', menuList, image);
            }, 2000);

            setTimeout(function() {
                autoRun('menu_image_1', menuList, image);
            }, 4000);

            setTimeout(function() {
                autoRun('menu_image_2', menuList, image);
            }, 6000);

            setTimeout(function() {
                autoRun('menu_image_3', menuList, image);
            }, 8000);

            setTimeout(function() {
                autoRun('menu_image_4', menuList, image);
            }, 10000);

            setTimeout(function() {
                autoRun('menu_image_5', menuList, image);
            }, 12000);

        }, 2*6*1000);


        $.each(menuList, function(index, element) {

            $(menuList[index]).on('click', function() {
                var $this = $(this);
                var imageUrl = getImageUrl(menuList[index]);
                if(imageUrl) {
                    setImageSrc(image, imageUrl);
                }

                // remove active class
                removeActiveClass(menuList);

                // add activce class to current
                $(menuList[index]).addClass('active');
            });
        });
    };

    return {
        init: init
    };
}).call(this);