function check_reguser(obj) {
    var el = document.getElementById("infoText");
    var username = obj.value;

    if (username.length >= 5) {
        var geturl = "/Account/CheckUserExist/" + username;
        el.innerHTML = $.ajax({ url: geturl, async: false }).responseText;
    }
    else {
        el.innerHTML = "";
    }
}

function check_username(obj) {
    var el = document.getElementById("infoText");
    var username = obj.value;

    if (username.length >= 4) {
        var geturl = "/Account/CheckUsername/" + username;
        el.innerHTML = $.ajax({ url: geturl, async: false }).responseText;
    }
}