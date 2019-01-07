var prevScrollpos = window.pageYOffset;

window.onscroll = function () {
    if (screen.width < 1025) {
        scrollFunction();
        hideHeaderBottom();
    }
};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        document.getElementById("aside-score").style.top = "0";
    } else {
        document.getElementById("aside-score").style.top = "-100px";
    }
}

function hideHeaderBottom() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("menu").style.bottom = "0";
    } else {
        document.getElementById("menu").style.bottom = "-100px";
    }
    prevScrollpos = currentScrollPos;
}