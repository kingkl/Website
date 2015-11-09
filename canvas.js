window.onload = function () {

//default canvas 1
stillText();
//default canvas2
stillSunset();
//default canvas 3
stillPattern();

}
//default canvas 1
stillText = function() {
	//Canvas Element 1 Text - HTML5 Canvas
    //collect & Create canvas element
    var canvas = document.getElementById("canvas1");
        canvas.innerHTML = "A canvas element should appear here, in browsers that support it.";
        canvas.width = 250;
        canvas.height = 200;
    //activate canvas
    var ctx = canvas.getContext("2d");
	//load image to variable and set pattern
	var crystal = new Image();
	    crystal.src = 'images/background-crystal1.gif';
	var pattern = ctx.createPattern(crystal, "repeat");
	
	//create text shadow

    //name text
	ctx.fillStyle = "#2b55a9";
	ctx.fillRect(0,0,250,200);
	ctx.font = "bold 50px Montserrat";
    ctx.fillStyle = "white";
	ctx.fillText("HTML5", 36, 69);
    ctx.fillStyle = "black";
	ctx.fillText("HTML5", 39, 72);
    ctx.fillStyle = pattern;
	ctx.fillText("HTML5", 37, 70);
	ctx.fillStyle = "white";
	ctx.fillText("Canvas", 32, 129);
    ctx.fillStyle = "black";
	ctx.fillText("Canvas", 35, 132);
    ctx.fillStyle = pattern;
	ctx.fillText("Canvas", 33, 130);
	ctx.fillStyle = "white";
	ctx.fillRect(29,154,190,10);
    ctx.fillStyle = "black";
	ctx.fillRect(32,157,190,10);
    ctx.fillStyle = pattern;
	ctx.fillRect(30,155,190,10);
	   //black border
	ctx.fillStyle = "black"
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(0, 200);
    ctx.lineTo(250, 200);
    ctx.lineTo(250, 0);
    ctx.closePath();
    ctx.stroke();
}//End default canvas 1
//default canvas 2
stillSunset = function() {
	//Canvas element 2 - Sunset
	    //Create canvas element
	 var canvas2 = document.getElementById("canvas2");
        canvas2.innerHTML = "A canvas element should appear here, in browsers that support it.";
        canvas2.width = 250;
        canvas2.height = 200;
    //draw picture in canvas
    var ctx2 = canvas2.getContext("2d");
		ctx2.fillStyle = "rgb(30, 30, 130)";
		ctx2.beginPath();
		ctx2.moveTo(0, 0);
		ctx2.lineTo(0, 130);
		ctx2.lineTo(250, 130);
		ctx2.lineTo(250, 0);
		ctx2.closePath();
		ctx2.fill();
    //sun
		ctx2.fillStyle = "rgb(255, 80, 0)";
		ctx2.beginPath();
		ctx2.arc(125, 130, 50, 0, 2*Math.PI);
		ctx2.fill();
	//ground
		ctx2.fillStyle = "green";
		ctx2.beginPath();
		ctx2.moveTo(0, 130);
		ctx2.lineTo(0, 200);
		ctx2.lineTo(250, 200);
		ctx2.lineTo(250, 130);
		ctx2.closePath();
		ctx2.fill();
    //black border
		ctx2.strokeStyle = "black";
		ctx2.beginPath();
		ctx2.moveTo(0, 0);
		ctx2.lineTo(0, 200);
		ctx2.lineTo(250, 200);
		ctx2.lineTo(250, 0);
		ctx2.closePath();
		ctx2.stroke();
}//end default canvas 2

//default canvas 3
stillPattern = function() {
	//Canvas element 3 - Pattern
	//get canvas element and assign 2d
	var canvas3 = document.getElementById("canvas3");
	    canvas3.width = 250;
        canvas3.height = 200;
	var ctx3 = canvas3.getContext("2d");
	//draw shapes
	ctx3.fillStyle = "rgb(100, 100, 50)";
	ctx3.fillRect(0,0,250,200);
	ctx3.fillStyle = "orange";
	ctx3.beginPath();
	ctx3.arc(162, 75, 40, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(162, 125, 40, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(88, 75, 40, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(88, 125, 40, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.fillStyle = "yellow";
	ctx3.beginPath();
	ctx3.arc(125, 50, 30, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(200, 100, 30, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(50, 100, 30, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(125, 150, 30, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.fillStyle = "rgb(125, 50, 0)";
	ctx3.beginPath();
	ctx3.moveTo(125,50);
	ctx3.lineTo(200,100);
	ctx3.lineTo(125,150);
	ctx3.lineTo(50,100);
	ctx3.closePath();
	ctx3.fill();
}//End default canvas 3

//Animate canvas 1 - text
animatedText = function(x1, x7) {
	//Canvas Element 1 Text - HTML5 Canvas
    //collect & Create canvas element
    var canvas = document.getElementById("canvas1");
        canvas.innerHTML = "A canvas element should appear here, in browsers that support it.";
        canvas.width = 250;
        canvas.height = 200;
    //activate canvas
    var ctx = canvas.getContext("2d");
	ctx.save();//save canvas state
	ctx.clearRect(0,0,250,200);//clear canvas for redrawing

	//load image to variable and set pattern
	var crystal = new Image();
	    crystal.src = 'images/background-crystal1.gif';
	var pattern = ctx.createPattern(crystal, "repeat");
    //name text
	x1 += 1; //increment white position on bar
	x2 = x1 + 3; //increment black position on bar
	x3 = x1 + 1; //increment pattern position on bar
	x4 = x1 + 7; //increment white position on HTML5
	x5 = x1 + 10; //increment black position on HTML5
	x6 = x1 + 8; //increment pattern position on HTML5
	x7 -= 1; //increment white position on Canvas
	x8 = x7 + 3; //increment black position on Canvas
	x9 = x7 + 1; //increment pattern position on Canvas
	
	ctx.fillStyle = "#2b55a9";
	ctx.fillRect(0,0,250,200);
	ctx.font = "bold 50px Montserrat";
    ctx.fillStyle = "white";
	ctx.fillText("HTML5", x4, 69);
    ctx.fillStyle = "black";
	ctx.fillText("HTML5", x5, 72);
    ctx.fillStyle = pattern;
	ctx.fillText("HTML5", x6, 70);
	ctx.fillStyle = "white";
	ctx.fillText("Canvas", x7, 129);
    ctx.fillStyle = "black";
	ctx.fillText("Canvas", x8, 132);
    ctx.fillStyle = pattern;
	ctx.fillText("Canvas", x9, 130);
	ctx.fillStyle = "white";
	ctx.fillRect(x1,154,190,10);
    ctx.fillStyle = "black";
	ctx.fillRect(x2,157,190,10);
    ctx.fillStyle = pattern;
	ctx.fillRect(x3,155,190,10);
	   //black border
	ctx.fillStyle = "black"
    ctx.beginPath();
    ctx.moveTo(0, 0);
    ctx.lineTo(0, 200);
    ctx.lineTo(250, 200);
    ctx.lineTo(250, 0);
    ctx.closePath();
    ctx.stroke();
	ctx.restore();//restore canvas state
	if (x1 > 30) {
		stillText();
		document.getElementById("animate1").value = "Animate"
		return;
	}
	
	var loopTimer = setTimeout('animatedText('+x1+','+x7+')',10); //animate x 
}//End Animate canvas 1 - Text

//Animate Canvas element 2 - Sunset
drawSunset = function(x, y, s) {
	//Get canvas element
	 var canvas2 = document.getElementById("canvas2");
        canvas2.innerHTML = "A canvas element should appear here, in browsers that support it.";
        canvas2.width = 250;
        canvas2.height = 200;
    var ctx2 = canvas2.getContext("2d");
		ctx2.save();//save canvas state
		ctx2.clearRect(0,0,250,200);//clear canvas for redrawing
    //sky
		ctx2.fillStyle = 'rgb(30, 30, '+x+')';
		ctx2.beginPath();
		ctx2.moveTo(0, 0);
		ctx2.lineTo(0, 130);
		ctx2.lineTo(250, 130);
		ctx2.lineTo(250, 0);
		ctx2.closePath();
		ctx2.fill();
    //sun
		ctx2.fillStyle = 'rgb(255, '+x+', 0)';
		ctx2.beginPath();
		ctx2.arc(125, y, 50, 0, 2*Math.PI);
		ctx2.fill();
	//ground
		ctx2.fillStyle = "green";
		ctx2.beginPath();
		ctx2.moveTo(0, 130);
		ctx2.lineTo(0, 200);
		ctx2.lineTo(250, 200);
		ctx2.lineTo(250, 130);
		ctx2.closePath();
		ctx2.fill();
    //black border
		ctx2.strokeStyle = "black";
		ctx2.beginPath();
		ctx2.moveTo(0, 0);
		ctx2.lineTo(0, 200);
		ctx2.lineTo(250, 200);
		ctx2.lineTo(250, 0);
		ctx2.closePath();
		ctx2.stroke();
		ctx2.restore();//restore canvas state
	if (s < 60) {
		stillSunset();
		document.getElementById("animate2").value = "Animate"
		return;
	}
	y += 1; //increment y position move sun
	x -= 1; //increment x position change sun from yellow to red.
	s -= 1; //increment x position darken the sky.
	var loopTimer = setTimeout('drawSunset('+x+', '+y+', '+s+')',30); //animate x & y
}//end Animate Canvas element 2 - Sunset


//Animated canvas 3 - pattern
animatedPattern = function(x75, x125 ,x50, x150, x200, x501) {
	//Canvas element 3 - Pattern
	//get canvas element and assign 2d
	var canvas3 = document.getElementById("canvas3");
	    canvas3.width = 250;
        canvas3.height = 200;
	var ctx3 = canvas3.getContext("2d");
	ctx3.save();//save canvas state
	ctx3.clearRect(0,0,250,200);//clear canvas for redrawing
	//draw shapes
	ctx3.fillStyle = 'rgb(100, 100, '+x200+')';
	ctx3.fillRect(0,0,250,200);
	ctx3.fillStyle = "orange";
	ctx3.beginPath();
	ctx3.arc(162, x75, 40, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(162, x125, 40, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(88, x75, 40, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(88, x125, 40, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.fillStyle = "yellow";
	ctx3.beginPath();
	ctx3.arc(125, x50, 30, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(x200, 100, 30, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(x501, 100, 30, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.beginPath();
	ctx3.arc(125, x150, 30, 0, 2*Math.PI);
	ctx3.fill();
	ctx3.fillStyle = 'rgb(125, '+x150+', 0)';
	ctx3.beginPath();
	ctx3.moveTo(125,50);
	ctx3.lineTo(200,100);
	ctx3.lineTo(125,150);
	ctx3.lineTo(50,100);
	ctx3.closePath();
	ctx3.fill();
	ctx3.restore();//restore canvas state

	if (x50 > 150) {
		stillPattern();
		document.getElementById("animate3").value = "Animate"
		return;
	}
	x75 += 1;//bottom orange
	x125 -= 1;//top orange
	x50 += 2;//top yellow
	x150 -= 2;//bottom yellow
	x200 -= 3;//left yellow
	x501 += 3;//right yellow
	var loopTimer = setTimeout('animatedPattern('+x75+', '+x125+', '+x50+', '+x150+', '+x200+', '+x501+')',50); //animate x & y
}//End Animated canvas 3 - pattern

function Animate3() {
	if (document.getElementById("animate3").value === "Animate") {
		animatedPattern(75, 125 ,50, 150, 200, 50);
		document.getElementById("animate3").value = "Animating";
	}
} 

function Animate2(x, y, s) {
	if (document.getElementById("animate2").value === "Animate") {
		drawSunset(x, y, s);
		document.getElementById("animate2").value = "Animating";
	}
}

function Animate1(x1, x7) {
	if (document.getElementById("animate1").value === "Animate") {
		animatedText(x1, x7);
		document.getElementById("animate1").value = "Animating";
	}
}