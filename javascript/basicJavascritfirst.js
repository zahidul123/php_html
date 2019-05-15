// console.log() use kora hoi shudu debagging er jonno

//javascripr alert box muloto block made korar jonno use hoi

console.log("this is for browser aspect that does not show in browser");

// alert("this is alert");

var myVariabale=20;
var secondvariable="sumon",thirdvariable=2.19;
var another,lastvar;

console.log(secondvariable);

//array decleration

var array=[10,'th semester',true];
console.log(array);

//prefix and postfixed 
var prefix=7;
prefix++;

var postfix=10;
postfix--;

//object creation 
var person = {
    firstName:"John",
    lastName:"Doe",
    age:50,
    eyeColor:"blue"
};

//declearing function 
function getcolor(color){
	var property={
		red:"color of danger",
		blue:"color of broad mind",
		white:"color of peace"
	};
return property[color] ||"this is invalid";
}
//ananomus function that can call without reference
(function newfunction(){
	console.log("invoke autometically");
}());

//this is another type of declearing function

!function anotherfunc(){
	console.log("|it also invoke autometically");
}();

//declaring localvariable
!function localfuntion(){
	var local="local variable";
	console.log(myVariabale+" "+local);
}();

//woh to work with this
(function thisfunc(){
  'use strict';
  var objects={
  property:"hi am showing this property",
  methood:function(){
  	return this.property;
  }
}
  console.log(objects.methood());
}());