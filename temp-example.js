//Declare variables
var i;
var currentFirstName;
var currentLastName;
var regex = /[A-Za-z0-9]{4,}$/;
var millPerFrame = 30;
//Create members array using JSON
var memJson = '{ \
    "members": [ \
        { \
            "userName": "user1", \
            "firstName": "Michelle", \
            "lastName": "Hilton", \
            "sign": "Libra", \
            "password": "password1", \
            "bio": "My name is Michelle Hilton.  I am a wife, mother of two, step-mother of two, and step-grandmother of 4. I am a former high school math teacher and currently work at Gwinnett Technical College as a math tutor, while I go to school for web design.", \
            "image": "images/michelle.jpg", \
            "signImage": "images/libra.jpg" \
        }, \
        { \
            "userName": "user2", \
            "firstName": "Jill", \
            "lastName": "Murphy", \
            "sign": "Cancer", \
            "password": "password2", \
            "bio": "Hi, I am Jill Murphy and I am in my second semester of the Web Design and Development degree program at Gwinnett Tech. I am originally from Robinson, Illinois, but lived in Texas City, Texas through most of my school aged years, then moved back to Illinois. I graduated from the University of Illinois at Urbana-Champaign with a BA in psychology and an MA in Labor and Industrial Relations. I am married and have two teenaged sons. My hobbies are playing the bassoon, singing, camping, kayaking and knitting. I am very involved with Bethesda United Methodist Church where I teach youth Sunday School, sing in the choir and work on their website.  My sign is Cancer.", \
            "image": "images/jill.jpg", \
            "signImage": "images/cancer.jpg" \
        }, \
        { \
            "userName": "user3", \
            "firstName": "Michael", \
            "lastName": "Powell", \
            "sign": "Taurus", \
            "password": "password3", \
            "bio": "Michael has not submitted a bio to us yet.  We do know that he is a student at Gwinnett Tech at taking JavaScript this semester.", \
           "image": "images/michael.jpg", \
           "signImage": "images/taurus.jpg" \
        }, \
        { \
            "userName": "user4", \
            "firstName": "Charles", \
            "lastName": "Thompson", \
            "sign": "Scorpio", \
            "password": "password4", \
            "bio": "Half-time Student at Gwinnett Technical College. Simulation Systems Contractor for Meggitt Training Systems. Full-time employee at the Tatitlek Corporation.", \
            "image": "images/charles.jpg", \
            "signImage": "images/scorpio.jpg" \
        } \
    ] \
}';
var memParsed = JSON.parse(memJson);
var members = new Array();
for (i = 0; i < memParsed.members.length; i += 1) {
    members.push(memParsed.members[i]);
};

window.onload = function () {
    "use strict";
    //Style page
    var body = document.getElementsByTagName("body");
        body[0].style.backgroundImage = "url(images/background.gif)"
    var masterTable = document.getElementById("masterTable");
        masterTable.width = "1020px";
        masterTable.style.backgroundColor = "olivedrab";
        masterTable.style.paddingLeft = "20px";
        masterTable.style.paddingRight = "20px";
        masterTable.style.border = "double 20px rgb(255, 255, 255)";
        masterTable.style.marginLeft = "auto";
        masterTable.style.marginRight = "auto";
    //Style welcome to club gtc text
    var welcome = document.getElementById("welcome");
        welcome.style.fontSize = "60px";
        welcome.style.fontWeight = "bold";
        welcome.style.textAlign = "center";
		welcome.style.fontFamily = "Century"
    //Hide controls on page opening
    document.getElementById("currentMember").style.visibility = "hidden";
    document.getElementById("friendsList").style.visibility = "hidden";
    document.getElementById("friendButton").style.visibility = "hidden";
    //load GTC images and fade them in when page is loaded.
    var fadeRate = millPerFrame / 10000;
    var gtc1 = document.getElementById("image1");
        gtc1.style.padding = "10px 10px 10px 10px";
        gtc1.style.backgroundColor = "rgb(255, 255, 255)";
        gtc1.src = "images/gtc1.jpg";
        gtc1.style.opacity = gtc1.style.opacity || "0";
    var interalID1 = setInterval(function() {
        var newOpacity = parseFloat(gtc1.style.opacity) + fadeRate
        if (newOpacity > 1) {
            newOpacity = 1;
            clearInterval(interalID1);
        }
        gtc1.style.opacity = newOpacity;
    }, millPerFrame);
    var gtc2 = document.getElementById("image2");
        gtc2.style.padding = "10px 10px 10px 10px";
        gtc2.style.backgroundColor = "rgb(255, 255, 255)";
        gtc2.src = "images/gtc2.png";
        gtc2.style.opacity = gtc2.style.opacity || "0";
    var interalID2 = setInterval(function() {
        var newOpacity = parseFloat(gtc2.style.opacity) + fadeRate
        if (newOpacity > 1) {
            newOpacity = 1;
            clearInterval(interalID2);
        }
        gtc2.style.opacity = newOpacity;
    }, millPerFrame);
    var gtc3 = document.getElementById("image3");
        gtc3.style.padding = "10px 10px 10px 10px";
        gtc3.style.backgroundColor = "rgb(255, 255, 255)";
        gtc3.src = "images/gtc3.jpg";
        gtc3.style.opacity = gtc3.style.opacity || "0";
    var interalID3 = setInterval(function() {
        var newOpacity = parseFloat(gtc3.style.opacity) + fadeRate
        if (newOpacity > 1) {
            newOpacity = 1;
            clearInterval(interalID3);
        }
        gtc3.style.opacity = newOpacity;
    }, millPerFrame);
    //Create memberImage object and center it
    var memberImage = document.getElementById("memberImage");
        memberImage.style.border = "solid 20px rgb(255, 255, 255)";
    //Style memberBio object
    var memberBio = document.getElementById("memberBio");
        memberBio.style.border = "solid 20px rgb(255, 255, 255)";
};

//Make controls visible if argument is true.
var EnableControls = function (x) {
    if (x === true) {
        document.getElementById("currentMember").style.visibility = "visible";
        document.getElementById("friendsList").style.visibility = "visible";
        document.getElementById("friendButton").style.visibility = "visible";
    }
};

//Search array for userName and password.  Return true if found and make that user current user
var IsAMember = function (userName, password, members) {
    var found = false;
    var memTest = members;
    var unTest = {};
	    unTest.userName = userName;
        unTest.password = password;
    for (i = 0; i < memTest.length; i += 1) {
        if (unTest.userName === memTest[i].userName && unTest.password === memTest[i].password) {
            currentFirstName = memTest[i].firstName;
            currentLastName = memTest[i].lastName;
            found = true;
            break;
        }
    }
    return found;
};

//Populate member list with members first names.
var PopulateMembersList = function () {
    //clear select list
    document.getElementById("friendsList").options.length = 0;
    //display firstName from the members array in friends list. 
    var selectList = document.getElementById("friendsList");
    for (i = 0; i < members.length; i += 1) {
        selectList[selectList.length] = new Option(members[i].firstName, members[i].firstName);
    }
};

//Show the member's picture in the memberImage element and
//show the member's bio in the memberBio element when called
var ShowMember = function () {
    var selectList = document.getElementById("friendsList");
    for (i = 0; i < members.length; i += 1) {
        if (selectList.value === members[i].firstName) {
            document.getElementById("memberImage").src = members[i].image;
            memberBio.style.wordWrap = "normal";
            document.getElementById("memberBio").value = members[i].bio;
        }
    }
};

//Show the member's sign in the memberImage element when called
var ShowSign = function () {
    for (i = 0; i < members.length; i += 1) {
        var selectList = document.getElementById("friendsList");
        if (selectList.value === members[i].firstName) {
            document.getElementById("memberImage").src = members[i].signImage;
        }
    }
};
 
//login click function
function LoginClick() {
    if (document.getElementById("login").value === "Login") {
        //Do Not make controls visible
        EnableControls(false);
        //Get user-name and password
        "use strict";
        var userName = document.getElementById("userName").value;
        var password = document.getElementById("password").value;

        //Test to see if password is valid.
        //If it valid continue if it is not valid wait for next password.
        if (regex.test(password) === false) {
            alert("Your password is invalid. " + "\rPasswords must be at least four characters long and contain only letters and numbers.");
    		alert("Please enter your password again");
            document.getElementById("password").value = "";
        } else {
            //search array for user name and make person current user if found
            //if user not found get users info create new member and add to array and make new user current user
            if (IsAMember(userName, password, members) === false) {
                i = members.length + 1;
                var newMember = {
                    userName: "user" + i,
                    firstName: prompt("Please enter your first name."),
                    lastName: prompt("Please enter your last name."),
                    sign: prompt("Please enter your sign."),
                    password: prompt("Please enter your chosen password. " + "\rIt must be at least four characters long and contain only letters and numbers.")
                }
                //Test if new members password is valid.
                while (regex.test(newMember.password) === false) {
                    alert("Your password is invalid. " + "\rPasswords must be at least four characters long and contain only letters and numbers.");
                    newMember.password = prompt("Please enter your chosen password. " + "\rIt must be at least four characters long and contain only letters and numbers.");
                }
                //Add new member to array.
	            alert("Your user name is: " + newMember.userName);
                currentFirstName = newMember.firstName;
                currentLastName = newMember.lastName;
                members.push(newMember);
            }
            //Make controls visible
            EnableControls(true);
            //make login text logout and make controls visible again.
            document.getElementById("login").value = "Logout";
            //display current user and number of members.
            document.getElementById("currentMember").innerHTML = "Current Member: " + currentFirstName + " " + currentLastName;
            document.getElementById("numMembers").innerHTML = "Number of Members: " + members.length;
            PopulateMembersList();
        }
    } else if (document.getElementById("login").value === "Logout") {
        //clear userName and password
        document.getElementById("userName").value = "";
        document.getElementById("password").value = "";
        //change logout to login
        document.getElementById("login").value = "Login";
        //clear memberImage
        document.getElementById("memberImage").src = "";
        //clear memberBio
        document.getElementById("memberBio").value = "";
        //clear select list
        document.getElementById("friendsList").options.length = 0;
        //clear current member first and last name
        currentFirstName = "";
        currentLastName = "";
        document.getElementById("currentMember").innerHTML = "Current Member: " + currentFirstName + " " + currentLastName;
        //clear number of members statement
        document.getElementById("numMembers").innerHTML = "Number of Members: ";
    }
};