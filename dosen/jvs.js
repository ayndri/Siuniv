var jwpopup = document.getElementById('jwpopupBox');
var mpLink = document.getElementById("jwpopupLink");
var close = document.getElementsByClassName("close")[0];

mpLink.onclick = function() {
    jwpopup.style.display = "block";
}

close.onclick = function() {
    jwpopup.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == jwpopup) {
        jwpopup.style.display = "none";
    }
}