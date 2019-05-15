x="";
document.write(typeof(x)+ "</br>");
var s=65;
while(true){
	document.write(String.fromCharCode(s)+" </br>");
	s=s+1;
	if(s==80){
		break;
	}
}
function eventcheck(){
	console.log("event occoured")
}
var div1=document.getElementById("state").innerText;
var div2=document.querySelector("div").innerText;
var div3=document.querySelectorAll("div")[0].innerText;
var div4=document.getElementsByTagName("div")[0].innerText;

document.write(div1+"<br/>"+div2+"<br/>"+div3+"<br/>"+div4);
//this keyword and protoytpe in javascript 

function protyotypes(l,m){
	var a=20;
	this.l=l;
	this.m=m;
	this.sum=function(){
		return a+this.l+this.m;
	}
}
var objecter=new protyotypes(10,5);
document.write("<br/>"+objecter.sum());
console.log(objecter.toString());

// we are creating inherritance using prototype rule 
  
  function productname(){
  	this.n="Garnier";
  	this.q="Facewash"
  	this.fulli=function(){
  		return this.n+" "+this.q;
  	}
  }
  //declearning prototype chain
  protyotypes.prototype=new productname();
  var show=new protyotypes(60,70);
  console.log(show.fulli());