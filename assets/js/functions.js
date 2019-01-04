var prevScrollpos = window.pageYOffset;

window.onscroll = function() {scrollFunction(); hideHeaderBottom()};

function scrollFunction() {
    if (screen.width < 1200) {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            document.getElementById("aside-score").style.top = "0";
        } else {
            document.getElementById("aside-score").style.top = "-100px";
        }
    } else {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            //document.getElementById("header-menu").style.top = "0";
        } else {
            //document.getElementById("header-menu").style.top = "-100px";
        }
    }
}

function hideHeaderBottom() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("header-bottom").style.bottom = "0";
    } else {
        document.getElementById("header-bottom").style.bottom = "-100px";
    }
    prevScrollpos = currentScrollPos;
}