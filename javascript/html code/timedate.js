var timeout;

function timeoutTrigger(){
  document.getElementById("show").innerHTML="the inner html is happend";
}

function timeinit(){
	timeout=setTimeout("timeoutTrigger()", 4000);
}

function timeoutClear(){
	clearTimeout(timeout);
  document.getElementById("show").innerHTML="time out has been clear";
}

//time interval and clear interval
var a=0;
var interval=setInterval(function(){
   alert("please click ok");
   a++;
  if (a==5) {
  	clearInterval(interval);
  }
},100);