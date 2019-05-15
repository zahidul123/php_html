(function(){
	'use strict';
	var array=['one','two','three','four'];

	//to input any thing in any where
	array.push('five');
	//to set any value first index 
	array.unshift("zero");
	//to delete first element in a stack
	array.shift();
	console.log(array);
 // it put this content in array by using index
	array.splice(0,4,'a','b','c');
	console.log(array);
//array reverse korte 
array.reverse();
	console.log(array);

	var array2=[1,4,10,3,5];
	console.log(array2);

	var points = [40, 100, 1, 5, 25, 10];
points.sort(function(a, b){return a-b});
	console.log(points);
}());