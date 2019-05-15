(function (){
  "use strict";
  if (true===false) {
  	console.log("we wil  see this page");
  }else{
console.log("we wil  see this page cz else statement");
  }

var array=['item1'];
if (array.length) {
	console.log(array[0]);
}

//se the turnary operation of if condition

(true)?console.log("this is a true turnary value"):
console.log("this is false value");

}());

//switch sratement use

var switcher;
switch(switcher){
   case "one":
         console.log("this s one");
         break;
   case "two":
         console.log("this is two");
         break;
   default:
   console.log("you does not slect any thing");
   break;
}

//for loop work
var heigthnum=10;
 for (var i = 0; i <heigthnum; i++) {
console.log(i);
}

var objects={
	process:"process1",
	process2:"process2",
	process3:"process3",
	process4:"process4"
}
for(var prom in objects){
	console.log(prom);
}

//while loop 
var limit=0;
while(limit<5){
	console.log(limit);
	limit++;
}