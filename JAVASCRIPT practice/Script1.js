// JavaScript source code



/*
var i = 0;
function color() {

    var doc = document.getElementById("background");
    var clr = ["yellow", "blue", "white", "black", "green", "purple"]
    doc.style.backgroundColor = clr[i];
    i = (i + 1) % color.length;
}

*/

setInterval( function changeBckgrndColor(){
    var color = new Array();
    var c = '#';
    for (var i = 0; i < 6; i++) {
        color[i] = Math.floor(Math.random()*16)
        color[i] = color[i].toString(16);
        c = c+color[i];
    };
    //console.log(c)
    document.body.style.backgroundColor = c;
}, 1000); //Time is in milliseconds.

//var i = 0;
//function change() {
//    var doc = document.getElementById("background");
//    var color = ["black", "blue", "brown", "green"];
//    doc.style.backgroundColor = color[i];
//    i = (i + 1) % color.length;
//}

//setInterval(change, 1000);

function test() {
    var test = 'test';
}

function changebgd() {

    var bgd = document.getElementById("cao").style.background = "white";

}



function changetext() {

    document.getElementById("cao").innerHTML = "Text has changed!";
    var col = document.getElementById('cao').style.fontSize = '30px';
}


function lighton() {

    document.getElementById('light').src = "light.png";

}

function lightout() {

    document.getElementById('light').src = "bulb1.png";

}


function gender() {
   
    var Gender = document.getElementsByName("Gender");
    
    if (Gender[0].checked)
        document.getElementById("result").innerHTML = "You have choosed Male";
    else if (Gender[1].checked)
        document.getElementById("result").innerHTML = "You have choosed Female";
    else if (!Gender.checked)
        document.getElementById("result").innerHTML = "You have not choosed any gender"; 
}



function popup() {
    location.href ="ThankYou.html";
}

/*function write() {
    var fname = document.getElementById('input1').value;
    var lname = document.getElementById('input2').value;

    var html = 'Hello <b>' + fname + '</b> ' + lname;

    document.getElementById('result').innerHTML = html;

    document.write("value");
}

*/


function write() {

    var input1 = document.getElementById("input1").value;
    var input2 = document.getElementById("input2").value;
    var input3 = document.getElementById("input3").value;

    document.getElementById("1").innerHTML = input1;
    document.getElementById("2").innerHTML = input2;
    document.getElementById("3").innerHTML = input3;
}



















//colors = new Array("red", "orange", "green", "blue", "brown", "purple", "gray", "white")

//colorIndex = 0

//function changeColor() {
  //  document.bgColor = colors[colorIndex]
  //  colorIndex = (colorIndex + 1) % colors.length
//}

//function startColorChange() {
//    setInterval("changeColor()", 1000)
//}


//window.onload = startColorChange




/*
$(function () {
    var colors = ["#0099cc", "#c0c0c0", "#587b2e", "#990000", "#000000", "#1C8200", "#987baa", "#981890", "#AA8971", "#1987FC", "#99081E"];

    setInterval(function () {
        var bodybgarrayno = Math.floor(Math.random() * colors.length);
        var selectedcolor = colors[bodybgarrayno];
        $("body").css("background", selectedcolor);
    }, 3000);
})

*/

