

// starting  with a fade

window.onload = function () {
    setTimeout(waitOnly, 2000);
}

function waitOnly() {

    document.getElementById("text_intro_h3").style.opacity = "1";
    document.getElementById("text_intro_h5").style.opacity = "1";
    document.getElementById("text_intro_h3").style.transition = "1s ease";
    document.getElementById("text_intro_h5").style.transition = "3s ease";
}