
//var x="2+2";
//though it is string but it convert as integer
//document.write(eval(x));
//to convert this as a string we use
var y=new String("2+2");
//document.write("</br>",y);

function clocking(){
	var date=new Date();

	var hous=date.getHours();
	var minuts=date.getMinutes();
	var secons=date.getSeconds();
  var amPM = (hous > 11) ? "pm" : "am";
  if(hous > 12) {
    hous -= 12;
  } else if(hous == 0) {
    hous = "12";
  }
  if(minuts < 10) {
    minuts = "0" + minuts;
  }
	document.getElementById("hour").innerHTML=hous;
	document.getElementById("minute").innerHTML=minuts;
	document.getElementById("second").innerHTML=secons;
	document.getElementById("ampm").innerHTML=amPM;
}
setInterval(clocking,1000);
