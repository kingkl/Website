var i = 0;
var millPerFrame = 30;
//Create array

wagon1 = {"wagon": "images/carousel/agriculture450.jpg", "desc":"We make work wagons of all sizes."}
wagon2 = {"wagon": "images/carousel/youth-wagon450.jpg", "desc":"Our line of children's wagons stand the test of time."}
wagon3 = {"wagon": "images/carousel/wagon-yellow450.jpg", "desc":"Our specialty wagons come in many colors."}
wagon4 = {"wagon": "images/carousel/beach450.jpg", "desc":"Our wagons can serve many purposes."}
wagon5 = {"wagon": "images/carousel/flower-cart450.jpg", "desc":"We make decorative as well as work wagons."}
wagon6 = {"wagon": "images/carousel/straw-carts450.jpg", "desc":"We can artificially age our decorative wagons."}
wagon7 = {"wagon": "images/carousel/carriage450.jpg", "desc":"We make custom wagons to order."}
wagon8 = {"wagon": "images/carousel/horse-carriage450.jpg", "desc":"See if we can make your dreams a reality."}
var wagons = [wagon1, wagon2, wagon3, wagon4, wagon5, wagon6, wagon7, wagon8];

// style carousel

window.onload = function () {
	"use strict";
    var carousel = document.getElementById("caro");
        carousel.style.padding = "5px 5px 5px 5px";
    	carousel.style.backgroundColor = "rgb(0, 0, 0)";
    	carousel.src = "images/carousel/placeholder.jpg";
		
	var carousel2 = document.getElementById("caro2");
        carousel2.style.padding = "5px 5px 5px 5px";
    	carousel2.style.backgroundColor = "rgb(0, 0, 0)";
    	carousel2.src = "images/carousel/placeholder.jpg";
    
};


function changeImage() {
    var fadeRate = millPerFrame / 1000;
    var caro = document.getElementById("caro");
	var timer = 4000;
            if (timer === 4000) {
	    	caro.src = wagons[i].wagon;
    		document.getElementById("carotext").innerHTML = wagons[i].desc;
    		i += 1;
    		if (i === 8) {
    			i = 0;
    		}
    		caro.style.opacity = caro.style.opacity || "0";
        var interalID1 = setInterval(function() {
            var newOpacity = parseFloat(caro.style.opacity) + fadeRate
            if (newOpacity > 1) {
                newOpacity = 1;
                clearInterval(interalID1);
            }
            caro.style.opacity = newOpacity;
        }, millPerFrame);
    	setTimeout("changeImage()",timer);
	} else {
	    var timer = 0;
	}
};

function changeImage2() {
		document.getElementById("caro2").src = wagons[i].wagon;
		document.getElementById("carotext2").innerHTML = wagons[i].desc;
		i += 1;
		if (i === 8) {
			i = 0;
		}
}
