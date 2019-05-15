(function(){

var arr=['one','two','three',4,5];
var array=['one','two','three'];
//for each its like forloop that print all list
arr.forEach(function(value,index){
 console.log("the index "+index+" the value "+value);
});

//every its conditional foreach catagory in a object or array
arr.every(function(value){
	if (typeof value!=="string") {
		console.log(value);
	}else{
		console.log("this is string value "+value);
	}
});
console.log(arr.filter(function(value){
	return typeof value!=='number';
}));

console.log(array.map(function(value){
	return value.toUpperCase();
}));

console.log(arr.reduce(function(total,value){
  return total+=value;
},100));

}());