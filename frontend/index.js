console.log('hello')
// scroll to top button
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollEvent() };
window.addEventListener('mouseup', function (event) {
    closeNav();
})


function scrollEvent() {
    //Get the button
    var mybutton = document.getElementById("up");
    if (document.documentElement.scrollTop >= 20) {
        if (mybutton.style.display == "none") {
            mybutton.style.display = "block";
            // console.log(document.documentElement.scrollTop)
        }
    } else {
        mybutton.style.display = "none";
    }
}


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    window.setTimeout(function () {
        location.href = "./index.html";
    }, 800); //changes URL to home page
}
