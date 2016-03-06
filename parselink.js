function parselink(){
    var stringtoparse = "";
    var facebook = document.getElementById("facebook").value;
    var instagram =document.getElementById("instagram").value;
    var twitter = document.getElementById("twitter").value;
    var linkedin = document.getElementById("linkedin").value;

    if(!facebook)
    	facebook="#f";

    if(!instagram)
   		instagram = "#f";

	if(!twitter)
   		twitter= "#f";  

	if(!linkedin)
    	linkedin = "#f";

    stringtoparse += facebook + "/" + instagram + "/" + twitter + "/" + linkedin;

	document.getElementById("stringtoparse").innerHTML=stringtoparse;
    document.getElementById("QRcode").src= "https://api.qrserver.com/v1/create-qr-code/?data=" + stringtoparse + "&size=220x220&margin=0";
}

function login(){

 top.consoleRef=window.open('','myconsole','width=350,height=250');
 top.consoleRef.document.write(content)
 top.consoleRef.document.close()

}

function signup(){

window.open("/login.html");

}