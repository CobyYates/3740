// let results = location.href

// let resultsArr = results.split('/')
// console.log(resultsArr)

// var parts = resultsArr.length
// console.log(parts)

// let route = resultsArr[parts - 1]
// console.log(`>>>>> ${route}`)

// let test = document.querySelectorAll('ul.menu li a')
// console.log(test)

// var page = "book.php"

// for (let i = 0; i < test.length; i++) {
//     let myPage = test[i].getAttribute('href')

//     if (page === myPage) {
//         test[i].parentNode.className="active"
//         test[i].parentNode.parentNode.parentNode.className="parent"
//     }else {
//         test[i].parentNode.className=""
//     }
// }

// JavaScript Document
/*jslint browser:true */
"use strict";

var url = location.href;

var stripChars = function(){
	url = url.split('?').shift();
	url = url.split('#').shift();
	return url;
};
stripChars();
var splitSlash = url.split('/');
var numSlashParts = splitSlash.length;
var splitSlashPiece = splitSlash[numSlashParts-1];

var nodeList = document.querySelectorAll("ul#menu li a");

var i;
for (i=0; i<nodeList.length; i++) {
	var drillHammer = nodeList[i].getAttribute("href");
	var homeLocation = nodeList[i].getAttribute("href").split('?').shift();
    var homeLocation2 = homeLocation.split('#').shift();
    
	if (splitSlashPiece === drillHammer) {
		nodeList[i].parentNode.className="active";
		nodeList[i].parentNode.parentNode.parentNode.className="parent";
	}
	else if (splitSlashPiece === homeLocation2) {
		nodeList[i].parentNode.className="active";
	}
	else {
		nodeList[i].parentNode.className="";
	}
}  // End of loop