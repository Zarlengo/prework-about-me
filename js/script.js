window.onload = function() {
    window.scroll(0, 0);

    var starDiv = document.getElementById("stars");
    var x = 0;
    var y = 0;
    var r = 0;
    var r_n = 0;
    var t = 0;
    var colorArray = ["white", "white", "red", "white", "white", "orange", "white", "white", "blue", "white", "white", "green", "white", "white"];
    for (var star = 0; star < 1000; star++) {
        var tag = document.createElement("s");
        r = Math.random() * 220 + 4.9;
        //if (r < 60) { r = r * 3;} else if (r < 120) { r = r * 2;}
        t = Math.random() * 2 * Math.PI;
        x = Math.floor((r * Math.cos(t) + 225) * 100) / 100;
        y = Math.floor((r * Math.sin(t) + 225) * 100) / 100;
        var randColor = Math.floor(Math.random() * (colorArray.length + 1));
        starString = "top:" + y + "px;left:" + x + "px;background-color:" + colorArray[randColor] + ";";
        tag.setAttribute('style', starString);
        starDiv.appendChild(tag);
    }





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





