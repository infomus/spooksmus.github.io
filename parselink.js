function parselink(){
    var stringtoparse = "";
    var facebook = document.getElementById("facebook").value;
    var instagram =document.getElementById("instagram").value;
    var twitter = document.getElementById("twitter").value;
    var linkedin = document.getElementById("linkedin").value;

    if(!facebook)
        facebook="%23f";

    if(!instagram)
        instagram = "%23f";

    if(!twitter)
        twitter= "%23f";  

    if(!linkedin)
        linkedin = "%23f";

    stringtoparse += facebook + "/" + instagram + "/" + twitter + "/" + linkedin;

    document.getElementById("stringtoparse").innerHTML=stringtoparse;
    document.getElementById("QRcode").src= "https://api.qrserver.com/v1/create-qr-code/?data=" + stringtoparse + "&size=220x220&margin=0";
}




function login(){

var userfound = false;
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
var mySM =["","","",""];

var users = ["MusIsmail", "MarcoLy", "HarryLiu", "BoshenCui"];
var passwords = ["QHacks2016", "QHacks2016", "QHacks2016", "111111"];
var socialmedias =[["mustafa.m.ismail.75", "spooksmus_", "Spooksmus", "mismail27"],
                   ["marco.ly.77", "", "TorontoRobFord", "marco-ly-408688100"],
                   ["harryliu.0", "harry_liu_", "nanolift", "harryliu0"],
                   ["boshenboss", "boshencui", "", "boshencui"]];

for(i=0; i<4; i++){
    if(username==users[i] && password== passwords[i]){
        for(j=0; j<4; j++){
            mySM[j]=socialmedias[i][j];
        }
        userfound = true;
        break;
    }
}

if(userfound){
    document.getElementById("facebook").value = mySM[0];
    document.getElementById("instagram").value= mySM[1];
    document.getElementById("twitter").value= mySM[2];
    document.getElementById("linkedin").value= mySM[3];
    parselink();
}
else{
   window.alert("Wrong Username/Password");
    document.getElementById("QRcode").src= "https://api.qrserver.com/v1/create-qr-code/?data=error&size=220x220&margin=0";
}


}