console.log('hello')
// scroll to top button
window.onscroll = function () { scrollEvent() };

function scrollEvent() {
    var mybutton = document.getElementById("up");
    if (document.documentElement.scrollTop >= 20) {
        if (mybutton.style.display == "none") {
            mybutton.style.display = "block";
        }
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    window.setTimeout(function () {
        location.href = "./index.html";
    }, 800);
}
