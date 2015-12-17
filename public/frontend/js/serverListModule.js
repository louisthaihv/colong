var serverList = (function() {
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

    var getServers = function() {
        var servers = [];
        servers = $('a[id^="bx-tabs-"]');
        return servers;
    };

    var init = function () {
        var btnOption = '#btnServerList',
            inputOption = '#inputServerList',
            optionList = '#optionList';

            checkList(btnOption, optionList);
            checkList(inputOption, optionList);

            var servers = getServers();

            $.each(servers, function(index, element) {
                $(servers[index]).on('click', function() {
                    var $this = $(this);
                    var text = $this.text();
                    $(inputOption).val(text);
                    $(optionList).hide();
                });
            });
    };

    return {
        init: init
    };

}).call(this);