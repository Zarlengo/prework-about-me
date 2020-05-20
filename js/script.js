window.onload = function() {
    window.scroll(0, 0);


};

function show(id) {
    document.getElementById(id).style.height = "500px";
}

function hide(id) {
    document.getElementById(id).style.height = "0px";
}

function text(id) {
    if (id == "rock" ) {
        textString = "Climbing at Stone Gardens";
    } else if (id == "back" ) {
        textString = "4 day backpacking to Machu Picchu";
    } else if (id == "snow" ) {
        textString = "Snoqualmie Pass";
    } else if (id == "tri" ) {
        textString = "Lake Meridian Triathlon";
    } else if (id == "karate" ) {
        textString = "Promotion to 4th degree black belt";
    } else {
        textString = "";
    };
    document.getElementById("hoverText").innerHTML = textString
};





