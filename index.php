<DOCTYPE! html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Rebuslot</title>
	</head>
<?php
$servername = "localhost";
$username = "izdesbyll";
$password = "q14103755.";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

mysqli_select_db($conn, "vocabulary");

$sql = mysqli_query($conn, "SELECT * FROM contents_arr");
while($row = mysqli_fetch_assoc($sql)){
	
	$serialize1_explode = explode(" , ",$row['arr_serialize1']); 
	$serialize2_explode = explode(" , ",$row['arr_serialize2']); 
	$serialize3_explode = explode(" , ",$row['arr_serialize3']); 
	$serialize4_explode = explode(" , ",$row['arr_serialize4']); 
	$serialize5_explode = explode(" , ",$row['arr_serialize5']); 
	$serialize6_explode = explode(" , ",$row['arr_serialize6']);

}

$arr_serialize1=implode(" , ",$serialize1_explode);
$arr_serialize2=implode(" , ",$serialize2_explode);
$arr_serialize3=implode(" , ",$serialize3_explode);
$arr_serialize4=implode(" , ",$serialize4_explode);
$arr_serialize5=implode(" , ",$serialize5_explode);
$arr_serialize6=implode(" , ",$serialize6_explode);
?> 
<body style=background-color:black;>
	<script src="http://cdn.jsdelivr.net/g/filesaver.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

		<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player" class="posit posit-1"></div>
    
	<ul id="myUL">
  <li>All songs</li>
  <li>La nunta asta</li>
  <li>Dragostea din tei</li>
  <li>Disko partizani</li>
  <li>Odata in viata</li>
  <li>Ia spune-i luna</li>
  <li>1234</li>
  <li>Ale</li>
  <li>Când Eu Iubesc</li>
  <li>Cuscra</li>
  <li>Melancolie</li>
 
</ul>
	
	<script>
	var userInput;
	var lang = "Russian";
	var current, current1 = 0;
	var synthesis = window.speechSynthesis;
	var JSvalue1, JSvalue2, JSvalue3, JSvalue4, JSvalue5, JSvalue6; 
	var song;
	var player;
	var answer, answer2;
	var index, imagearray = ["zero", "un", "doi", "trei", "patru", "cinci", "sase", "sapte", "opt", "noua"];
	var indexarray = [];
	var index1array = [];
	var index2array = [];
	var index3array = [];
	var index4array = [];
	var index5array = [];
	var wordcount; 
	var image = true; 
	var image1 = true; 
	var image2 = true;
	var image3 = true;
	var image4 = true;
	var image5 = true;
	var image6 = true;
	var image7 = true;
	var image8 = true;
	var index1, imagearray1 = ["elev", "scriitor", "pom", "pantof", "student", "specialist", "general", "spaniol", 
	"copil", "cal", "miel", "vitel", "porumbel", "metru", "leu", "fiu", "membru", "ministru", "iepure", "peste", "caine", "frate", "perete", "unchi", "ochi", "tata", "popa",
	"studenta", "eleva", "casa", "englezoaica", 
	"usa", "masina", "fabrica",
	"marfa", "blana",
	"lume", "paine", "curte", "carte", "mare", "idee",
	"scriitoare", "dansatoare",
	"cheie", "baie",
	"bucatarie", "farfurie",
	"sofa", "pijama",
	"cafea", "stea", "sosea", "masea",
	"marti", "tanti",
	"tren", "pat", "loc",
	"institut", "apartamente", "oras", "capac",
	"lucru", "tablou", "birou",
	"muzeu", "teatru", 
	"fotoliu", "mileniu", "exercitiu", "salariu",
	"eu", "fată", "ea", "părintele", "colț", "masă", "rochie", "nuntă", "muzică", "toți", "nimeni", "viață", "suflet", "colivie", "rachie"];
	var index2, imagearray2 = ["bun", "frumos",
	"mandru", "albastru", "continuu",
	"mic", "larg", "romanesc",
	"rosu", "viu", "auriu",
	"mare", "verde", "dulce",
	"vechi", "galbui", 
	"eficace", "cumsecade", "roz", "kaki", "gri", "bleu", "maro",
	"tineric", "cuminte", "săturat", "îmbracat", "ăsta", "muncit", "început"];
	var index3, imagearray3 = ["canta", "intra", "intarzie", "lucreaza", "copiaza", 
	"vad", "pot", "merg", "vin", "opresc", "locuiesc", "hotarasc",
	"fi", "zice", "sta", "vorbi", "asculta", "joc", "spune", "dansa", "interesa", "plăcea", "gusta"];
	var index4, imagearray4 = ["asa", "altfel", "bine", "degeaba", "impreuna", "incet", "repede", "separat", "pe neasteptate", "pe de rost",
	"acasa", "acolo", "afara", "aici", "apoi", "departe", "inainte", "inapoi", "inauntru", "jos", "pretutindeni", "sus", "undevai", 
	"acum", "alaltaieri", "aseara", "astazi", "candva", "cateodata", "curand", "demult", "deocamdata", "devreme", "dimineata", "iarna", "ieri", "imediat", "maine", "noaptea", "poimaine", "seara", "tarziu", "intotdeauna", "ziua", "zi de zi",
	"destul", "mult", "putin",
	"nicaieri", "niciodata"];
	var index5, imagearray5 = ["trebui"];
	var index6, index7, index8;
	var guess, videoPlayer;
	var videoList = ["TH0oCDziVQQ", "YnopHCL1Jk8", "gViaOYgV8yI", "GN7H2vfh3SM", "591Ur1h0ons", "PojdI2shbaI", "vdcXsBJwBrg", "-yIUzB_CI0Y", "VzUMqkKoTmg", "NFBXOlsvHh4", ];
	var curVideo = 0;

	function getRndmFromSet(set){
		var rndm = Math.floor(Math.random()*set.length);
		return set[rndm];
		}
	function convert(){
	var string1=document.getElementById("arr_serialize1");
	var string2=document.getElementById("arr_serialize2");
	var string3=document.getElementById("arr_serialize3");
	var string4=document.getElementById("arr_serialize4");
	var string5=document.getElementById("arr_serialize5");
	var string6=document.getElementById("arr_serialize6");
	NEWstring1 = indexarray.toString();
	NEWstring2 = index1array.toString();
	NEWstring3 = index2array.toString();
	NEWstring4 = index3array.toString();
	NEWstring5 = index4array.toString();
	NEWstring6 = index5array.toString();
	string1.value=NEWstring1;
	string2.value=NEWstring2;
	string3.value=NEWstring3;
	string4.value=NEWstring4;
	string5.value=NEWstring5;
	string6.value=NEWstring6;
	}

	function GetTime ()
	{
		userInput = userInput + "\n" + "if (current >= " + current1.toString() + " && current < ";
		current1 = player.playerInfo.currentTime;
		current1 = current1.toFixed(1);
		userInput = userInput + current1.toString() + "){" + "\n" + 'document.getElementById("p2").innerHTML = "";' + "\n" + 'document.getElementById("p3").innerHTML = "";' + "\n" + "}";
	}

	function SaveTime ()
	{
		userInput = userInput + "\n" + "if (current >= " + current1.toString() + " && current < ";
		current1 = player.playerInfo.currentTime;
		current1 = current1.toFixed(1);
		userInput = userInput + current1.toString() + "){" + "\n" + 'document.getElementById("p2").innerHTML = "";' + "\n" + 'document.getElementById("p3").innerHTML = "";' + "\n" + "}";
		var blob = new Blob([userInput], { type: "text/plain;charset=utf-8" });
            saveAs(blob, "dynamic.txt");
			userInput = "";
	}

	function RightAnswer()
	{
		answer2 = answer; 
		document.getElementById("p1").innerHTML = imagearray[index]+" "+imagearray1[index1]+" "+imagearray2[index2];
		if((index != 1) || (index1 > 80 && index1 < 83))
		{
		if ((index1 < 81 && index1 > 82)){
		document.getElementById("p1").innerHTML = imagearray[index]+" "+imagearray1[index1]+"i";
		}
		if (index1 > 80 && index1 < 83){
		document.getElementById("p1").innerHTML = imagearray[index]+" "+imagearray1[index1];
		}
		if(index1 > 7 && index1 < 27){
		document.getElementById("p1").innerHTML = imagearray[index]+" "+imagearray1[index1].substring(0, imagearray1[index1].length-1)+"i";
		}
		if((index1 > 26 && index1 < 31) || (index1 > 65 && index1 < 68)){
		document.getElementById("p1").innerHTML = imagearray[index].replace("doi","doua")+" "+imagearray1[index1].substring(0, imagearray1[index1].length-1)+"e";
		}
		if((index1 > 30 && index1 < 34) || (index1 > 35 && index1 < 42) || (index1 > 45 && index1 < 48) || (index1 > 67 && index1 < 72)){
		document.getElementById("p1").innerHTML = imagearray[index].replace("doi","doua")+" "+imagearray1[index1].substring(0, imagearray1[index1].length-1)+"i";
		}
		if((index1 > 33 && index1 < 36) || (index1 > 62 && index1 < 66)){
		document.getElementById("p1").innerHTML = imagearray[index].replace("doi","doua")+" "+imagearray1[index1].substring(0, imagearray1[index1].length-1)+"uri";
		}
		if((index1 > 41 && index1 < 44) || (index1 > 53 && index1 < 56)){
		document.getElementById("p1").innerHTML = imagearray[index].replace("doi","doua")+" "+imagearray1[index1];
		}
		if(index1 > 43 && index1 < 46){
		document.getElementById("p1").innerHTML = imagearray[index].replace("doi","doua")+" "+imagearray1[index1].substring(0, imagearray1[index1].length-2)+"i";
		}
		if(index1 > 47 && index1 < 50){
		document.getElementById("p1").innerHTML = imagearray[index].replace("doi","doua")+" "+imagearray1[index1]+"le";
		}
		if(index1 > 49 && index1 < 54){
		document.getElementById("p1").innerHTML = imagearray[index].replace("doi","doua")+" "+imagearray1[index1].substring(0, imagearray1[index1].length-1)+"le";
		}
		if(index1 > 56 && index1 < 59){
		document.getElementById("p1").innerHTML = imagearray[index].replace("doi","doua")+" "+imagearray1[index1]+"uri";
		}
		if(index1 > 58 && index1 < 63){
		document.getElementById("p1").innerHTML = imagearray[index].replace("doi","doua")+" "+imagearray1[index1]+"e";
		}
		answer = document.getElementById("p1").textContent;
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2] + "i";
		if (index2 == 27){
		document.getElementById("p1").innerHTML = answer + " aștia";
		}
		if((index2 > 1 && index2 < 5) || (index2 > 8 && index2 < 11) || (index2 == 11) || (index2 == 13) || (index2 > 13 && index2 < 16)){
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2].substring(0, imagearray2[index2].length-1)+"i";
		}
		if(index2 == 7){
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2].substring(0, imagearray2[index2].length-1)+"ti";
		}
		if(index2 == 8){
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2].substring(0, imagearray2[index2].length-1)+"ii";
		}
		if(index2 == 12){
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2].substring(0, imagearray2[index2].length-2)+"zi";
		}
		if(index2 > 15 && index2 < 23){
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2];
		}
		if(index1 > 26 && index1 < 72){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2] + "e";
			if(index2 == 1){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2].substring(0, imagearray2[index2].length-1)+"ase";
			}
			if(index2 > 1 && index2 < 5){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2].substring(0, imagearray2[index2].length-1)+"e";
			}
			if((index2 > 4 && index2 < 11) || (index2 == 11) || (index2 == 13) || (index2 > 13 && index2 < 16)){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2].substring(0, imagearray2[index2].length-1)+"i";
			}
			if(index2 == 7){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2].substring(0, imagearray2[index2].length-1)+"ti";
			}
			if(index2 == 8){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2].substring(0, imagearray2[index2].length-1)+"ii";
			}
			if(index2 == 12){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2].substring(0, imagearray2[index2].length-2)+"zi";
			}
			if(index2 > 15 && index2 < 23){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index2];
		}
		}
		//here
		answer = document.getElementById("p1").textContent + " " + imagearray5[index5] + " să";
		if ((index4 != 24) && (index4 != 25) && (index4 != 27) && (index4 != 29) && (index4 != 40) && (index4 != 45) && (index4 != 47)  && (index4 != 49)){
		document.getElementById("p1").innerHTML = answer +  " " + imagearray3[index3];
		}else{
		if ((index4 == 24) || (index4 == 25) || (index4 == 40) || (index4 == 45) ){
		if ((index3 == 0) || (index3 == 1)){
		document.getElementById("p1").innerHTML = answer + " au " + imagearray3[index3] + "t";
		}
		if ((index3 == 2)){
		document.getElementById("p1").innerHTML = answer + " au " + imagearray3[index3].substring(0, imagearray3[index3].length-1) + "at";
		}
		if ((index3 == 3)){
		document.getElementById("p1").innerHTML = answer + " au " + imagearray3[index3].substring(0, imagearray3[index3].length-4) + "at";
		}
		if ((index3 == 4) || (index3 == 11)){
		document.getElementById("p1").innerHTML = answer + " au " + imagearray3[index3].substring(0, imagearray3[index3].length-2) + "t";
		}
		if ((index3 == 5)){
		document.getElementById("p1").innerHTML = answer + " au " + imagearray3[index3].substring(0, imagearray3[index3].length-1) + "zut";
		}
		if ((index3 == 6)){
		document.getElementById("p1").innerHTML = answer + " au " + imagearray3[index3].substring(0, imagearray3[index3].length-2) + "utut";
		}
		if ((index3 == 7)){
		document.getElementById("p1").innerHTML = answer + " au " + imagearray3[index3].substring(0, imagearray3[index3].length-1) + "s";
		}
		if ((index3 == 8)){
		document.getElementById("p1").innerHTML = answer + " au " + imagearray3[index3].substring(0, imagearray3[index3].length-2) + "enit";
		}
		if ((index3 == 9)){
		document.getElementById("p1").innerHTML = answer + " au " + imagearray3[index3].substring(0, imagearray3[index3].length-3) + "it";
		}
		if ((index3 == 10)){
		document.getElementById("p1").innerHTML = answer + " au " + imagearray3[index3].substring(0, imagearray3[index3].length-3) + "t";
		}
		}
		if ((index4 == 27) || (index4 == 29) || (index4 == 37) || (index4 == 39)){ 
		document.getElementById("p1").innerHTML = answer + " o sa " + imagearray3[index3];
		}
		}
		answer = document.getElementById("p1").textContent;
		document.getElementById("p1").innerHTML = answer +  " " + imagearray4[index4];
		}else{
		if((index1 > 26 && index1 < 56) || (index1 > 72 && index1 < 75) || (index1 > 76 && index1 < 81) || (index1 == 83) || (index1 > 84 && index1 < 87))
		{
		document.getElementById("p1").innerHTML = "o "+imagearray1[index1]+" "+imagearray2[index2]+"ă";
		if(index2 > 1 && index2 < 5){
		document.getElementById("p1").innerHTML = "o "+imagearray1[index1]+" "+imagearray2[index2].substring(0, imagearray2[index2].length-1)+"a";
		}
		if(index2 == 1){
		document.getElementById("p1").innerHTML = "o "+imagearray1[index1]+" "+imagearray2[index2].substring(0, imagearray2[index2].length-1)+"asa";
		}
		if(index2 == 7){
		document.getElementById("p1").innerHTML = "o "+imagearray1[index1]+" "+imagearray2[index2].substring(0, imagearray2[index2].length-2)+"asca";
		}
		if((index2 == 8) || (index2 == 15)){
		document.getElementById("p1").innerHTML = "o "+imagearray1[index1]+" "+imagearray2[index2].substring(0, imagearray2[index2].length-1)+"ie";
		}
		if((index2 > 8 && index2 < 11) || (index2 == 14)){
		document.getElementById("p1").innerHTML = "o "+imagearray1[index1]+" "+imagearray2[index2].substring(0, imagearray2[index2].length-1)+"e";
		}
		if((index2 > 10 && index2 < 14) || (index2 > 15 && index2 < 23) || (index2 == 24)){
		document.getElementById("p1").innerHTML = "o "+imagearray1[index1]+" "+imagearray2[index2];
		}
		if(index2 == 27){
		document.getElementById("p1").innerHTML = "o "+imagearray1[index1]+" "+imagearray2[index2].replace("ă", "a");
		}
		}
		answer = document.getElementById("p1").textContent + " " + imagearray5[index5] + " să";
		document.getElementById("p1").innerHTML = answer+ " " +imagearray3[index3];
		if (index3 == 5){
		document.getElementById("p1").innerHTML = answer+ " " +imagearray3[index3].substring(0, imagearray3[index3].length-2)+"ede";
		}
		if (index3 == 6){
		document.getElementById("p1").innerHTML = answer+ " " +imagearray3[index3].substring(0, imagearray3[index3].length-1)+"ate";
		}
		if (index3 > 6 && index3 < 9){
		document.getElementById("p1").innerHTML = answer+ " " +imagearray3[index3]+"e";
		}
		if (index3 > 8 && index3 < 12){
		document.getElementById("p1").innerHTML = answer+ " " +imagearray3[index3].substring(0, imagearray3[index3].length-1)+"te";
		}
		if ((index4 != 24) && (index4 != 25) && (index4 != 27) && (index4 != 29) && (index4 != 40) && (index4 != 45) && (index4 != 47)  && (index4 != 49)){
		}else{
		if ((index4 == 24) || (index4 == 25) || (index4 == 30) || (index4 == 35) ){
		if (index3 == 5){
		document.getElementById("p1").innerHTML = answer + " " + imagearray3[index3].substring(0, imagearray3[index3].length-2) + "ede";
		}
		if (index3 == 6){
		document.getElementById("p1").innerHTML = answer + " " + imagearray3[index3].substring(0, imagearray3[index3].length-1) + "ate";
		}
		if ((index3 == 7) || (index3 == 8)){
		document.getElementById("p1").innerHTML = answer + " " + imagearray3[index3] + "e";
		}
		if (index3 > 8 && index3 < 12){
		document.getElementById("p1").innerHTML = answer + " " + imagearray3[index3].substring(0, imagearray3[index3].length-1) + "te";
		}
		}
		}
		answer = document.getElementById("p1").textContent;
		document.getElementById("p1").innerHTML = answer+ " " + imagearray4[index4];
		}
		answer = document.getElementById("p1").textContent;
		if (document.getElementById("7").src != "http://localhost/off.jpg"){
		if (index3 == 0){
		document.getElementById("p1").innerHTML = answer+ " despre";
		}
		if (index3 == 1){
		document.getElementById("p1").innerHTML = answer+ " in";
		}
		if (index3 == 2){
		document.getElementById("p1").innerHTML = answer+ " la";
		}
		if (index3 == 3){
		document.getElementById("p1").innerHTML = answer+ " pe";
		}
		if (index3 == 6){
		document.getElementById("p1").innerHTML = answer+ " fi ca";
		}
		if (index3 == 7){
		document.getElementById("p1").innerHTML = answer+ " langa";
		}
		if (index3 == 8){
		document.getElementById("p1").innerHTML = answer+ " pentru";
		}
		if (index3 == 10){
		document.getElementById("p1").innerHTML = answer+ " cu";
		}
		if (index3 == 11){
		document.getElementById("p1").innerHTML = answer+ " fara";
		}
		}
		answer = document.getElementById("p1").textContent;
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8]+" "+imagearray1[index6]+" "+imagearray2[index7];
		if(index8 != 1)
		{
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8]+" "+imagearray1[index6]+"i";
		if(index6 > 7 && index6 < 27){
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8]+" "+imagearray1[index6].substring(0, imagearray1[index6].length-1)+"i";
		}
		if((index6 > 26 && index6 < 31) || (index6 > 65 && index6 < 68)){
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8].replace("doi","doua")+" "+imagearray1[index6].substring(0, imagearray1[index6].length-1)+"e";
		}
		if((index6 > 30 && index6 < 34) || (index6 > 35 && index6 < 42) || (index6 > 45 && index6 < 48) || (index6 > 67 && index6 < 72)){
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8].replace("doi","doua")+" "+imagearray1[index6].substring(0, imagearray1[index6].length-1)+"i";
		}
		if((index6 > 33 && index6 < 36) || (index6 > 62 && index6 < 66)){
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8].replace("doi","doua")+" "+imagearray1[index6].substring(0, imagearray1[index6].length-1)+"uri";
		}
		if((index6 > 41 && index6 < 44) || (index6 > 53 && index6 < 56)){
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8].replace("doi","doua")+" "+imagearray1[index6];
		}
		if(index6 > 43 && index6 < 46){
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8].replace("doi","doua")+" "+imagearray1[index6].substring(0, imagearray1[index6].length-2)+"i";
		}
		if(index6 > 47 && index6 < 50){
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8].replace("doi","doua")+" "+imagearray1[index6]+"le";
		}
		if(index6 > 49 && index6 < 54){
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8].replace("doi","doua")+" "+imagearray1[index6].substring(0, imagearray1[index6].length-1)+"le";
		}
		if(index6 > 56 && index6 < 59){
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8].replace("doi","doua")+" "+imagearray1[index6]+"uri";
		}
		if(index6 > 58 && index6 < 63){
		document.getElementById("p1").innerHTML = answer +" "+ imagearray[index8].replace("doi","doua")+" "+imagearray1[index6]+"e";
		}
		answer = document.getElementById("p1").textContent;
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7] + "i";
		if((index7 > 1 && index7 < 5) || (index7 > 8 && index7 < 11) || (index7 == 11) || (index7 == 13) || (index7 > 13 && index7 < 16)){
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7].substring(0, imagearray2[index7].length-1)+"i";
		}
		if(index7 == 7){
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7].substring(0, imagearray2[index7].length-1)+"ti";
		}
		if(index7 == 8){
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7].substring(0, imagearray2[index7].length-1)+"ii";
		}
		if(index7 == 12){
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7].substring(0, imagearray2[index7].length-2)+"zi";
		}
		if(index7 > 15 && index7 < 23){
		document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7];
		}
		if(index6 > 26 && index6 < 72){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7] + "e";
			if(index7 == 1){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7].substring(0, imagearray2[index7].length-1)+"ase";
			}
			if(index7 > 1 && index7 < 5){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7].substring(0, imagearray2[index7].length-1)+"e";
			}
			if((index7 > 4 && index7 < 11) || (index7 == 11) || (index7 == 13) || (index7 > 13 && index7 < 16)){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7].substring(0, imagearray2[index7].length-1)+"i";
			}
			if(index7 == 7){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7].substring(0, imagearray2[index7].length-1)+"ti";
			}
			if(index7 == 8){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7].substring(0, imagearray2[index7].length-1)+"ii";
			}
			if(index7 == 12){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7].substring(0, imagearray2[index7].length-2)+"zi";
			}
			if(index7 > 15 && index7 < 23){
			document.getElementById("p1").innerHTML = answer + " " + imagearray2[index7];
		}
		}	
		answer = document.getElementById("p1").textContent;
		}else{
		if(index6 > 26 && index6 < 56)
		{
		document.getElementById("p1").innerHTML = answer +" "+ "o "+imagearray1[index6]+" "+imagearray2[index7]+"a";
		if(index7 > 1 && index7 < 5){
		document.getElementById("p1").innerHTML = answer +" "+ "o "+imagearray1[index6]+" "+imagearray2[index7].substring(0, imagearray2[index7].length-1)+"a";
		}
		if(index7 == 1){
		document.getElementById("p1").innerHTML = answer +" "+ "o "+imagearray1[index6]+" "+imagearray2[index7].substring(0, imagearray2[index7].length-1)+"asa";
		}
		if(index7 == 7){
		document.getElementById("p1").innerHTML = answer +" "+ "o "+imagearray1[index6]+" "+imagearray2[index7].substring(0, imagearray2[index7].length-2)+"asca";
		}
		if((index7 == 8) || (index7 == 15)){
		document.getElementById("p1").innerHTML = answer +" "+ "o "+imagearray1[index6]+" "+imagearray2[index7].substring(0, imagearray2[index7].length-1)+"ie";
		}
		if((index7 > 8 && index7 < 11) || (index7 == 14)){
		document.getElementById("p1").innerHTML = answer +" "+ "o "+imagearray1[index6]+" "+imagearray2[index7].substring(0, imagearray2[index7].length-1)+"e";
		}
		if((index7 > 10 && index7 < 14) || (index7 > 15 && index7 < 23)){
		document.getElementById("p1").innerHTML = answer +" "+ "o "+imagearray1[index6]+" "+imagearray2[index7];
		}
		}
		}
	answer = document.getElementById("p1").textContent;
	
	if ((document.getElementById("3").src == "http://localhost/off.jpg") || (index1 == 81) || (index1 == 82) || (index1 == 72) || (index1 == 74))
	{
		answer = answer.replace("un ", "");
		answer = answer.replace("o ", "");
		image = false;
	}else{
		image = true;
	}
	if (document.getElementById("2").src == "http://localhost/off.jpg")
	{
		
		answer = answer.replace(" buni ", " ");
		answer = answer.replace(" bună ", " ");
		answer = answer.replace(" bune ", " ");
		answer = answer.replace(" bun ", " ");
		image2 = false;
	}else{
		image2 = true;
	}
	if (document.getElementById("6").src == "http://localhost/off.jpg")
	{
		answer = answer.replace(" trebui să ", " ");
		image5 = false;
	}else{
		image5 = true;
	}
	if (document.getElementById("5").src == "http://localhost/off.jpg")
	{
		answer = answer.replace(" bine ", " ");
		image4 = false;
	}else{
		image4 = true;
	}
	if (document.getElementById("9").src == "http://localhost/off.jpg")
	{
		answer = answer.replace(" un ", " ");
		answer = answer.replace(" o ", " ");
		image8 = false;
	}else{
		image8 = true;
	}
	if (document.getElementById("8").src == "http://localhost/off.jpg")
	{
		
		answer = answer.replace(" buni", " ");
		answer = answer.replace(" bună", " ");
		answer = answer.replace(" bune", " ");
		answer = answer.replace(" bun", " ");
		image7 = false;
	}else{
		image7 = true;
	}
	if (document.getElementById("7").src == "http://localhost/off.jpg")
	{
		answer = answer.replace(" elev ", " ");
		image6 = false;
	}else{
		image6 = true;
	}
	if (document.getElementById("4").src == "http://localhost/off.jpg")
	{
		answer = answer.replace(" vede ", " ");
		answer = answer.replace(" vad ", " ");
		image3 = false;
	}else{
		image3 = true;
	}
	if (document.getElementById("1").src == "http://localhost/off.jpg")
	{
		answer = answer.replace("elev ", " ");
		image1 = false;
	}else{
		image1 = true;
	}
	document.getElementById("p1").innerHTML = answer2;

if ('speechSynthesis' in window) {

  var synthesis = window.speechSynthesis;

  // Get the first `en` language voice in the list
  var voice = synthesis.getVoices().filter(function(voice) {
    return voice.lang === 'ro';
  })[0];

  // Create an utterance object
  var utterance = new SpeechSynthesisUtterance(answer2);

  // Set utterance properties
  utterance.voice = voice;
  utterance.pitch = 0.5;
  utterance.rate = 1.0;
  utterance.volume = 0.8;

  // Speak the utterance
  var x10 = document.getElementById("10").src;
  if (x10 == "http://localhost/soundon.jpg"){
  synthesis.speak(utterance);
  }
} else {
  console.log('Text-to-speech not supported.');
}
	
var keywords;
var spacecount = 0;
// Keyup event
$("#editor").on("keyup", function(e){
  // Space key pressed
  if (e.keyCode == 32){
    spacecount = spacecount + 1;
    var newHTML = "";
	var ans = answer.toUpperCase();
     keywords = ans.split(" ");
    // Loop through words
    $(this).text().replace(/[\s]+/g, " ").trim().split(" ").forEach(function(val){
      // If word is statement
      if (keywords.indexOf(val.trim().toUpperCase()) > -1){
        newHTML += "<span class='other'>" + val + "&nbsp;</span>";
	if (image1 == true){
		var a = indexarray.includes(index);
		var b = index1array.includes(index1);
		var c = index2array.includes(index2);
		var d = index3array.includes(index3);
		var e = index4array.includes(index4);
		var f = index5array.includes(index5);
		if (image == true){
			if ((spacecount == 1) && (a == false)) {
			indexarray.push(index);
			}
			if ((spacecount == 2) && (b == false)) {
			index1array.push(index1);			
			}
			if ((image2 == true) && (spacecount == 3) && (c == false)){
			index2array.push(index2);
			}
			
		}else{
		if (image2 == true){
			if ((spacecount == 1) && (b == false)){
			index1array.push(index1);			
			}
			if ((spacecount == 2) && (c == false)){
			index2array.push(index2);			
			}
		}else{
			if ((spacecount == 1) && (b == false)){
			index1array.push(index1);
			}		
		}
		if (image3 == true){
			if (image4 == true){}
			if (image5 == true){}
			if (image6 == true){
				if (image7 == true){}
				if (image8 == true){}			
			}		
		}
	}
	}
      }else{
		newHTML += "<span class='statement'>" + val + "&nbsp;</span>";
		if (image1 == true){
		var a = indexarray.includes(index);
		var b = index1array.includes(index1);
		var c = index2array.includes(index2);
		var d = index3array.includes(index3);
		var e = index4array.includes(index4);
		var f = index5array.includes(index5);
		if (image == true){
			if ((spacecount == 1) && (a == true)) {
			indexarray.splice(indexarray.indexOf(index), 1 );
			}
			if ((spacecount == 2) && (b == true)) {
			index1array.splice(index1array.indexOf(index1), 1 );			
			}
			if ((image2 == true) && (spacecount == 3) && (c == true)){
			index2array.splice(index2array.indexOf(index2), 1 );
			}
			
		}else{
		if (image2 == true){
			if ((spacecount == 1) && (b == true)){
			index1array.splice(index1array.indexOf(index1), 1 );			
			}
			if ((spacecount == 2) && (c == true)){
			index2array.splice(index2array.indexOf(index2), 1 );			
			}
		}else{
			if ((spacecount == 1) && (b == true)){
			index1array.splice(index1array.indexOf(index1), 1 );
			}		
		}
	}
	}
}
    });
    $(this).html(newHTML);

    // Set cursor postion to end of text
    var child = $(this).children();
    var range = document.createRange();
    var sel = window.getSelection();
    range.setStart(child[child.length-1], 1);
    range.collapse(true);
    sel.removeAllRanges();
    sel.addRange(range);
    this.focus();
  }
});
var minus = 0; 
if (indexarray.includes(0)){
	minus = minus + 1;
}
if (index1array.includes(0)){
	minus = minus + 1;
}
if (index2array.includes(0)){
	minus = minus + 1;
}
if (index3array.includes(0)){
	minus = minus + 1;
}
if (index4array.includes(0)){
	minus = minus + 1;
}
if (index5array.includes(0)){
	minus = minus + 1;
}
wordcount = indexarray.length + index1array.length + index2array.length + index3array.length + index4array.length + index5array.length - minus;
	var wc = wordcount.toString();
	document.getElementById("kw").innerHTML = "Known words: " + wc;
	} 
	
	

	      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '300',
          width: '540',
          videoId: 'TH0oCDziVQQ', 
		  playerVars: {
            color: 'white',
			playlist: "YnopHCL1Jk8,gViaOYgV8yI,GN7H2vfh3SM,591Ur1h0ons,vIxyYqg4Kdw,PojdI2shbaI,-yIUzB_CI0Y,VzUMqkKoTmg,NFBXOlsvHh4"
			},
          events: {
            'onReady': onPlayerReady
          }
        });
	  }

      // 4. The API will call this function when the video player is ready.
	
      function onPlayerReady(event) {
        event.target.playVideo();
		document.getElementById("p2").innerHTML = "";
	JSvalue1 = document.getElementById("PHPvalue1");
	JSvalue2 = document.getElementById("PHPvalue2");
	JSvalue3 = document.getElementById("PHPvalue3");
	JSvalue4 = document.getElementById("PHPvalue4");
	JSvalue5 = document.getElementById("PHPvalue5");
	JSvalue6 = document.getElementById("PHPvalue6");
	index6array = JSvalue1.value.split(',');
	index7array = JSvalue2.value.split(',');
	index8array = JSvalue3.value.split(',');
	index9array = JSvalue4.value.split(',');
	index10array = JSvalue5.value.split(',');
	index11array = JSvalue6.value.split(',');	
	indexarray = index6array.map(Number);
	index1array = index7array.map(Number);
	index2array = index8array.map(Number);
	index3array = index9array.map(Number);
	index4array = index10array.map(Number);
	index5array = index11array.map(Number);

 
		document.getElementById("p3").innerHTML = "";
	  }
	 
    
		// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u009B");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}
var lyrics = 1;
// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
var intervalID = window.setInterval(myCallback, 100);


	  
for (i = 0; i < close.length; i++) {
	
  if (i == 0){
  close[i].onclick = function() {
  curVideo = getRndmFromSet([0,1,2]);          
  player.loadVideoById (videoList[curVideo], 0, "large");  
	}
  }
  
  if (i == 1){
  close[i].onclick = function() {
	lyrics = 1;
	player.loadVideoById("TH0oCDziVQQ", 0, "large");
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
  }

  }
  if (i == 2){
  close[i].onclick = function() {
	lyrics = 2;
	player.loadVideoById("YnopHCL1Jk8", 45, "large");
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
  }
  }
  if (i == 3){
  close[i].onclick = function() {
	lyrics = 3;
	player.loadVideoById("gViaOYgV8yI", 0, "large");
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
  }
  }
  if (i == 4){
  close[i].onclick = function() {
	lyrics = 4;
	player.loadVideoById("GN7H2vfh3SM", 0, "large");
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
  }
  }
  if (i == 5){
  close[i].onclick = function() {
	lyrics = 5;
	player.loadVideoById("591Ur1h0ons", 0, "large");
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
  }
  }
  if (i == 6){
  close[i].onclick = function() {
	lyrics = 6;
	player.loadVideoById("PojdI2shbaI", 0, "large");
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
  }
  }
  if (i == 7){
  close[i].onclick = function() {
	lyrics = 7;
	player.loadVideoById("vdcXsBJwBrg", 0, "large");
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
  }
  }
  if (i == 8){
  close[i].onclick = function() {
	lyrics = 8;
	player.loadVideoById("-yIUzB_CI0Y", 0, "large");
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
  }
  }
  if (i == 9){
  close[i].onclick = function() {
	lyrics = 9;
	player.loadVideoById("VzUMqkKoTmg", 0, "large");
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
  }
  }
  if (i == 10){
  close[i].onclick = function() {
	lyrics = 10;
	player.loadVideoById("NFBXOlsvHh4", 0, "large");
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
  }
  }

}
function myCallback() {
 current = player.playerInfo.currentTime;
if (lyrics == 1){
	if (lang == "Russian"){
if (current < 12){
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
}
if (current >= 12 && current < 14){
		document.getElementById("p2").innerHTML = "Eu îs fată tinerică";
		document.getElementById("p3").innerHTML = "Я молоденькая девушка";
	}
if (current >= 13.5 && current < 15){
		document.getElementById("p2").innerHTML = "tre’ să fiu cuminte";
		document.getElementById("p3").innerHTML = "я должна быть послушной";
	}
if (current >= 15 && current < 16.5){
		document.getElementById("p2").innerHTML = "Îi-e ruşine şi e frig";
		document.getElementById("p3").innerHTML = "Она стесняется, ей холодно";
	}
	if (current >= 16.5 && current < 17.75){
		document.getElementById("p2").innerHTML = "aşa o zis părintele";
		document.getElementById("p3").innerHTML = "так сказал батюшка";
	}
	if (current >= 17.75 && current < 19){
		document.getElementById("p2").innerHTML = "Dar eu m-am săturat";
		document.getElementById("p3").innerHTML = "Но мне надоело";
	}
	if (current >= 19 && current < 20.5){
		document.getElementById("p2").innerHTML = "să stau la colţ de masă";
		document.getElementById("p3").innerHTML = "сидеть в углу стола";
	}
	if (current >= 20.5 && current < 22){
		document.getElementById("p2").innerHTML = "Eu azi m-am îmbracat";
		document.getElementById("p3").innerHTML = "Сегодня я надела";
	}
	if (current >= 22 && current < 23){
		document.getElementById("p2").innerHTML = "în rochia cea frumoasă";
		document.getElementById("p3").innerHTML = "красивое платье";
	}
	if ((current >= 23 && current < 26) || (current >= 34.25 && current < 37.5) || (current >= 68.5 && current < 71.5) || (current >= 79.5 && current < 82.5) || (current >= 124.5 && current < 128) || (current >= 135.5 && current < 139) || (current >= 149.5 && current < 155) || (current >= 164.5 && current < 167.5) || (current >= 174.5 && current < 177.5)){
		document.getElementById("p2").innerHTML = "La nunta asta-i numa’ muzică de nuntă";
		document.getElementById("p3").innerHTML = "На этой свадьбе играет только весёлая музыка";
	}
	if ((current >= 26 && current < 28.5) || (current >= 37.5 && current < 40) || (current >= 71.5 && current < 73.75) || (current >= 82.5 && current < 85) || (current >= 128 && current < 130.5) || (current >= 139 && current < 141.5) || (current >= 155 && current < 158) || (current >= 167.5 && current < 169.5) || (current >= 177.5 && current < 179.5)){
		document.getElementById("p2").innerHTML = "Toţi vorbesc, nimeni n-ascultă";
		document.getElementById("p3").innerHTML = "Все говорят, никто не слушает";
	}
	if ((current >= 28.5 && current < 31.5) || (current >= 40 && current < 43) || (current >= 73.75 && current < 76.5) || (current >= 85 && current < 87.75) || (current >= 130.5 && current < 133) || (current >= 141.5 && current < 144.5) || (current >= 158 && current < 161.5) || (current >= 169.5 && current < 172) || (current >= 179.5 && current < 182)){
		document.getElementById("p2").innerHTML = "Atâta am muncit de dimineaţă";
		document.getElementById("p3").innerHTML = "Я так много сегодня поработала с утра";
	}
	if ((current >= 31.5 && current < 34.25) || (current >= 43 && current < 46) || (current >= 76.5 && current < 79.5) || (current >= 87.75 && current < 90.5) || (current >= 133 && current < 135.5) || (current >= 144.5 && current < 149.5) || (current >= 161.5 && current < 164.5) || (current >= 172 && current < 174.5) || (current >= 182 && current < 184.5)){
		document.getElementById("p2").innerHTML = "Am să joc măcar o dată-n viaţă";
		document.getElementById("p3").innerHTML = "Станцую-ка я хоть разок";
	}
	if (current >= 57.5 && current < 58.5){
		document.getElementById("p2").innerHTML = "Spune, ce n-ar spune";
		document.getElementById("p3").innerHTML = "Пусть говорят что угодно";
	}
	if (current >= 58.5 && current < 60){
		document.getElementById("p2").innerHTML = "nu mă interesează";
		document.getElementById("p3").innerHTML = "меня не волнует";
	}
	if (current >= 60 && current < 61.5){
		document.getElementById("p2").innerHTML = "De ce să stau de-o parte";
		document.getElementById("p3").innerHTML = "Почему я должна стоять в стороне";
	}
	if (current >= 61.5 && current < 63){
		document.getElementById("p2").innerHTML = "când sufletu-mi dansează";
		document.getElementById("p3").innerHTML = "когда моя душа хочет танцевать";
	}
	if (current >= 63 && current < 64.25){
		document.getElementById("p2").innerHTML = "Mi-e a început să-mi placă";
		document.getElementById("p3").innerHTML = "Мне нравится то, что я вырвалась";
	}
	if (current >= 64.25 && current < 65.75){
		document.getElementById("p2").innerHTML = "după colivie";
		document.getElementById("p3").innerHTML = "из клетки";
	}
	if (current >= 65.75 && current < 67){
		document.getElementById("p2").innerHTML = "Şi am să gust oleacă";
		document.getElementById("p3").innerHTML = "я попробую немножечко";
	}
	if (current >= 67 && current < 68.5){
		document.getElementById("p2").innerHTML = "diseară, de rachie";
		document.getElementById("p3").innerHTML = "Сегодня вечером вина";
	}
	}
	if (lang == "Surżyk"){
		if (current < 12){
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
}
if (current >= 12 && current < 14){
		document.getElementById("p2").innerHTML = "Eu îs fată tinerică";
		document.getElementById("p3").innerHTML = "Ja is girl молодая";
	}
if (current >= 13.5 && current < 15){
		document.getElementById("p2").innerHTML = "tre’ să fiu cuminte";
		document.getElementById("p3").innerHTML = "have to be posłuszną";
	}
if (current >= 15 && current < 16.5){
		document.getElementById("p2").innerHTML = "Îi-e ruşine şi e frig";
		document.getElementById("p3").innerHTML = "Їй стыдно і є frost";
	}
	if (current >= 16.5 && current < 17.75){
		document.getElementById("p2").innerHTML = "aşa o zis părintele";
		document.getElementById("p3").innerHTML = "so did said parent";
	}
	if (current >= 17.75 && current < 19){
		document.getElementById("p2").innerHTML = "Dar eu m-am săturat";
		document.getElementById("p3").innerHTML = "But ja am saturant";
	}
	if (current >= 19 && current < 20.5){
		document.getElementById("p2").innerHTML = "să stau la colţ de masă";
		document.getElementById("p3").innerHTML = "to stać at kąt ze парти";
	}
	if (current >= 20.5 && current < 22){
		document.getElementById("p2").innerHTML = "Eu azi m-am îmbracat";
		document.getElementById("p3").innerHTML = "Ja dziś am ubrana";
	}
	if (current >= 22 && current < 23){
		document.getElementById("p2").innerHTML = "în rochia cea frumoasă";
		document.getElementById("p3").innerHTML = "in suknia the вродлива";
	}
	if ((current >= 23 && current < 26) || (current >= 34.25 && current < 37.5) || (current >= 68.5 && current < 71.5) || (current >= 79.5 && current < 82.5) || (current >= 124.5 && current < 128) || (current >= 135.5 && current < 139) || (current >= 149.5 && current < 155) || (current >= 164.5 && current < 167.5) || (current >= 174.5 && current < 177.5)){
		document.getElementById("p2").innerHTML = "La nunta asta-i numa’ muzică de nuntă";
		document.getElementById("p3").innerHTML = "At ślub этот no more music ze ślub";
	}
	if ((current >= 26 && current < 28.5) || (current >= 37.5 && current < 40) || (current >= 71.5 && current < 73.75) || (current >= 82.5 && current < 85) || (current >= 128 && current < 130.5) || (current >= 139 && current < 141.5) || (current >= 155 && current < 158) || (current >= 167.5 && current < 169.5) || (current >= 177.5 && current < 179.5)){
		document.getElementById("p2").innerHTML = "Toţi vorbesc, nimeni n-ascultă";
		document.getElementById("p3").innerHTML = "All говорять, ніхто не слухає";
	}
	if ((current >= 28.5 && current < 31.5) || (current >= 40 && current < 43) || (current >= 73.75 && current < 76.5) || (current >= 85 && current < 87.75) || (current >= 130.5 && current < 133) || (current >= 141.5 && current < 144.5) || (current >= 158 && current < 161.5) || (current >= 169.5 && current < 172) || (current >= 179.5 && current < 182)){
		document.getElementById("p2").innerHTML = "Atâta am muncit de dimineaţă";
		document.getElementById("p3").innerHTML = "Tyle am worked ze morning";
	}
	if ((current >= 31.5 && current < 34.25) || (current >= 43 && current < 46) || (current >= 76.5 && current < 79.5) || (current >= 87.75 && current < 90.5) || (current >= 133 && current < 135.5) || (current >= 144.5 && current < 149.5) || (current >= 161.5 && current < 164.5) || (current >= 172 && current < 174.5) || (current >= 182 && current < 184.5)){
		document.getElementById("p2").innerHTML = "Am să joc măcar o dată-n viaţă";
		document.getElementById("p3").innerHTML = "Am to grać хочаб a time in życie";
	}
	if (current >= 57.5 && current < 58.5){
		document.getElementById("p2").innerHTML = "Spune, ce n-ar spune";
		document.getElementById("p3").innerHTML = "Mówić, co no би mówić";
	}
	if (current >= 58.5 && current < 60){
		document.getElementById("p2").innerHTML = "nu mă interesează";
		document.getElementById("p3").innerHTML = "no me интересуюсь";
	}
	if (current >= 60 && current < 61.5){
		document.getElementById("p2").innerHTML = "De ce să stau de-o parte";
		document.getElementById("p3").innerHTML = "Ze co to stać ze-a встороне";
	}
	if (current >= 61.5 && current < 63){
		document.getElementById("p2").innerHTML = "când sufletu-mi dansează";
		document.getElementById("p3").innerHTML = "kiedy soul my dancing";
	}
	if (current >= 63 && current < 64.25){
		document.getElementById("p2").innerHTML = "Mi-e a început să-mi placă";
		document.getElementById("p3").innerHTML = "My є починаю to my like";
	}
	if (current >= 64.25 && current < 65.75){
		document.getElementById("p2").innerHTML = "după colivie";
		document.getElementById("p3").innerHTML = "после klatki";
	}
	if (current >= 65.75 && current < 67){
		document.getElementById("p2").innerHTML = "Şi am să gust oleacă";
		document.getElementById("p3").innerHTML = "I mam to вкус немного";
	}
	if (current >= 67 && current < 68.5){
		document.getElementById("p2").innerHTML = "diseară, de rachie";
		document.getElementById("p3").innerHTML = "wieczorem, ze wine";
	}
	}
	if (lang == "Surance"){
		if (current < 12){
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
}
if (current >= 12 && current < 14){
		document.getElementById("p2").innerHTML = "Eu îs fată tinerică";
		document.getElementById("p3").innerHTML = "Ya is giorl molodaya";
	}
if (current >= 13.5 && current < 15){
		document.getElementById("p2").innerHTML = "tre’ să fiu cuminte";
		document.getElementById("p3").innerHTML = "hăv tu bi poslușnou";
	}
if (current >= 15 && current < 16.5){
		document.getElementById("p2").innerHTML = "Îi-e ruşine şi e frig";
		document.getElementById("p3").innerHTML = "Yiy stîdna i e frost";
	}
	if (current >= 16.5 && current < 17.75){
		document.getElementById("p2").innerHTML = "aşa o zis părintele";
		document.getElementById("p3").innerHTML = "sou did sed părent";
	}
	if (current >= 17.75 && current < 19){
		document.getElementById("p2").innerHTML = "Dar eu m-am săturat";
		document.getElementById("p3").innerHTML = "Bat ya ăm saturant";
	}
	if (current >= 19 && current < 20.5){
		document.getElementById("p2").innerHTML = "să stau la colţ de masă";
		document.getElementById("p3").innerHTML = "tu stac ăt cont ze partâ";
	}
	if (current >= 20.5 && current < 22){
		document.getElementById("p2").innerHTML = "Eu azi m-am îmbracat";
		document.getElementById("p3").innerHTML = "Ya dziș ăm ubrana";
	}
	if (current >= 22 && current < 23){
		document.getElementById("p2").innerHTML = "în rochia cea frumoasă";
		document.getElementById("p3").innerHTML = "in suknia ze vrodlîva";
	}
	if ((current >= 23 && current < 26) || (current >= 34.25 && current < 37.5) || (current >= 68.5 && current < 71.5) || (current >= 79.5 && current < 82.5) || (current >= 124.5 && current < 128) || (current >= 135.5 && current < 139) || (current >= 149.5 && current < 155) || (current >= 164.5 && current < 167.5) || (current >= 174.5 && current < 177.5)){
		document.getElementById("p2").innerHTML = "La nunta asta-i numa’ muzică de nuntă";
		document.getElementById("p3").innerHTML = "Ăt șlub ătot nou mor miuzic ze șlub";
	}
	if ((current >= 26 && current < 28.5) || (current >= 37.5 && current < 40) || (current >= 71.5 && current < 73.75) || (current >= 82.5 && current < 85) || (current >= 128 && current < 130.5) || (current >= 139 && current < 141.5) || (current >= 155 && current < 158) || (current >= 167.5 && current < 169.5) || (current >= 177.5 && current < 179.5)){
		document.getElementById("p2").innerHTML = "Toţi vorbesc, nimeni n-ascultă";
		document.getElementById("p3").innerHTML = "Ol hovoriat, nihto ne sluhaie";
	}
	if ((current >= 28.5 && current < 31.5) || (current >= 40 && current < 43) || (current >= 73.75 && current < 76.5) || (current >= 85 && current < 87.75) || (current >= 130.5 && current < 133) || (current >= 141.5 && current < 144.5) || (current >= 158 && current < 161.5) || (current >= 169.5 && current < 172) || (current >= 179.5 && current < 182)){
		document.getElementById("p2").innerHTML = "Atâta am muncit de dimineaţă";
		document.getElementById("p3").innerHTML = "Tăle ăm worked ze mornin";
	}
	if ((current >= 31.5 && current < 34.25) || (current >= 43 && current < 46) || (current >= 76.5 && current < 79.5) || (current >= 87.75 && current < 90.5) || (current >= 133 && current < 135.5) || (current >= 144.5 && current < 149.5) || (current >= 161.5 && current < 164.5) || (current >= 172 && current < 174.5) || (current >= 182 && current < 184.5)){
		document.getElementById("p2").innerHTML = "Am să joc măcar o dată-n viaţă";
		document.getElementById("p3").innerHTML = "Am tu grac hocab ă taim in jâce";
	}
	if (current >= 57.5 && current < 58.5){
		document.getElementById("p2").innerHTML = "Spune, ce n-ar spune";
		document.getElementById("p3").innerHTML = "Muvic, țo nou bâ muvic";
	}
	if (current >= 58.5 && current < 60){
		document.getElementById("p2").innerHTML = "nu mă interesează";
		document.getElementById("p3").innerHTML = "nou mi interesuiusi";
	}
	if (current >= 60 && current < 61.5){
		document.getElementById("p2").innerHTML = "De ce să stau de-o parte";
		document.getElementById("p3").innerHTML = "Ze țo tu stac ze-ă vstronie";
	}
	if (current >= 61.5 && current < 63){
		document.getElementById("p2").innerHTML = "când sufletu-mi dansează";
		document.getElementById("p3").innerHTML = "ciedâ soul mai danțin";
	}
	if (current >= 63 && current < 64.25){
		document.getElementById("p2").innerHTML = "Mi-e a început să-mi placă";
		document.getElementById("p3").innerHTML = "Mai ă pocînayu tu mai laic";
	}
	if (current >= 64.25 && current < 65.75){
		document.getElementById("p2").innerHTML = "după colivie";
		document.getElementById("p3").innerHTML = "posliă clatcâ";
	}
	if (current >= 65.75 && current < 67){
		document.getElementById("p2").innerHTML = "Şi am să gust oleacă";
		document.getElementById("p3").innerHTML = "I mam tu vcus niemnoga";
	}
	if (current >= 67 && current < 68.5){
		document.getElementById("p2").innerHTML = "diseară, de rachie";
		document.getElementById("p3").innerHTML = "wiecorăm, ze wain.";
	}
	}
	if (lang == "Surid"){
		if (current < 12){
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
}
if (current >= 12 && current < 14){
		document.getElementById("p2").innerHTML = "Eu îs fată tinerică";
		document.getElementById("p3").innerHTML = "Ea is giotă tinedaya";
	}
if (current >= 13.5 && current < 15){
		document.getElementById("p2").innerHTML = "tre’ să fiu cuminte";
		document.getElementById("p3").innerHTML = "trăv tă biu poslinte";
	}
if (current >= 15 && current < 16.5){
		document.getElementById("p2").innerHTML = "Îi-e ruşine şi e frig";
		document.getElementById("p3").innerHTML = "Îiy rușîdna și e frist";
	}
	if (current >= 16.5 && current < 17.75){
		document.getElementById("p2").innerHTML = "aşa o zis părintele";
		document.getElementById("p3").innerHTML = "asou dod ses părentele";
	}
	if (current >= 17.75 && current < 19){
		document.getElementById("p2").innerHTML = "Dar eu m-am săturat";
		document.getElementById("p3").innerHTML = "Bar ea am săturant";
	}
	if (current >= 19 && current < 20.5){
		document.getElementById("p2").innerHTML = "să stau la colţ de masă";
		document.getElementById("p3").innerHTML = "tă stauc lăt colt dze mastâ";
	}
	if (current >= 20.5 && current < 22){
		document.getElementById("p2").innerHTML = "Eu azi m-am îmbracat";
		document.getElementById("p3").innerHTML = "Ea aziș ăm ubracat";
	}
	if (current >= 22 && current < 23){
		document.getElementById("p2").innerHTML = "în rochia cea frumoasă";
		document.getElementById("p3").innerHTML = "in ruknia zea vrodoasă";
	}
	if ((current >= 23 && current < 26) || (current >= 34.25 && current < 37.5) || (current >= 68.5 && current < 71.5) || (current >= 79.5 && current < 82.5) || (current >= 124.5 && current < 128) || (current >= 135.5 && current < 139) || (current >= 149.5 && current < 155) || (current >= 164.5 && current < 167.5) || (current >= 174.5 && current < 177.5)){
		document.getElementById("p2").innerHTML = "La nunta asta-i numa’ muzică de nuntă";
		document.getElementById("p3").innerHTML = "Lăt șlunta ăsto nu mar muzic dze șlunta";
	}
	if ((current >= 26 && current < 28.5) || (current >= 37.5 && current < 40) || (current >= 71.5 && current < 73.75) || (current >= 82.5 && current < 85) || (current >= 128 && current < 130.5) || (current >= 139 && current < 141.5) || (current >= 155 && current < 158) || (current >= 167.5 && current < 169.5) || (current >= 177.5 && current < 179.5)){
		document.getElementById("p2").innerHTML = "Toţi vorbesc, nimeni n-ascultă";
		document.getElementById("p3").innerHTML = "Tolți hovorbesc, nihteni n-asluhtă";
	}
	if ((current >= 28.5 && current < 31.5) || (current >= 40 && current < 43) || (current >= 73.75 && current < 76.5) || (current >= 85 && current < 87.75) || (current >= 130.5 && current < 133) || (current >= 141.5 && current < 144.5) || (current >= 158 && current < 161.5) || (current >= 169.5 && current < 172) || (current >= 179.5 && current < 182)){
		document.getElementById("p2").innerHTML = "Atâta am muncit de dimineaţă";
		document.getElementById("p3").innerHTML = "Atâle am worcit dze dimorneață";
	}
	if ((current >= 31.5 && current < 34.25) || (current >= 43 && current < 46) || (current >= 76.5 && current < 79.5) || (current >= 87.75 && current < 90.5) || (current >= 133 && current < 135.5) || (current >= 144.5 && current < 149.5) || (current >= 161.5 && current < 164.5) || (current >= 172 && current < 174.5) || (current >= 182 && current < 184.5)){
		document.getElementById("p2").innerHTML = "Am să joc măcar o dată-n viaţă";
		document.getElementById("p3").innerHTML = "Am tă groc măcab o dataim in jață";
	}
	if (current >= 57.5 && current < 58.5){
		document.getElementById("p2").innerHTML = "Spune, ce n-ar spune";
		document.getElementById("p3").innerHTML = "Spuvic, țe nou bâr spuvic";
	}
	if (current >= 58.5 && current < 60){
		document.getElementById("p2").innerHTML = "nu mă interesează";
		document.getElementById("p3").innerHTML = "nou me interesuză";
	}
	if (current >= 60 && current < 61.5){
		document.getElementById("p2").innerHTML = "De ce să stau de-o parte";
		document.getElementById("p3").innerHTML = "Dze țe tă stauc dze partoronie";
	}
	if (current >= 61.5 && current < 63){
		document.getElementById("p2").innerHTML = "când sufletu-mi dansează";
		document.getElementById("p3").innerHTML = "cândâ soufletu mai danțează";
	}
	if (current >= 63 && current < 64.25){
		document.getElementById("p2").innerHTML = "Mi-e a început să-mi placă";
		document.getElementById("p3").innerHTML = "Mai e poceput tă mai plaică";
	}
	if (current >= 64.25 && current < 65.75){
		document.getElementById("p2").innerHTML = "după colivie";
		document.getElementById("p3").innerHTML = "duposiliă colitca";
	}
	if (current >= 65.75 && current < 67){
		document.getElementById("p2").innerHTML = "Şi am să gust oleacă";
		document.getElementById("p3").innerHTML = "Și am tă vgust nieacă";
	}
	if (current >= 67 && current < 68.5){
		document.getElementById("p2").innerHTML = "diseară, de rachie";
		document.getElementById("p3").innerHTML = "disorăm, dze wachin.";
	}
	}
}
if (lyrics == 2){
	if (current < 70){
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
}
if (current >= 70 && current < 73.5){
		document.getElementById("p2").innerHTML = "Alo, salut";
		document.getElementById("p3").innerHTML = "Алло, привет";
	}
	if (current >= 73.5 && current < 77.5){
		document.getElementById("p2").innerHTML = "Sunt eu, un Haiduc";
		document.getElementById("p3").innerHTML = "Это я… Хайдук";
	}
	if (current >= 77.5 && current < 81){
		document.getElementById("p2").innerHTML = "Și te rog, iubirea mea";
		document.getElementById("p3").innerHTML = "И я прошу, любимая моя";
	}
	if (current >= 81 && current < 85){
		document.getElementById("p2").innerHTML = "primește fericirea";
		document.getElementById("p3").innerHTML = "сделай меня счастливым";
	}
	if (current >= 85 && current < 88){
		document.getElementById("p2").innerHTML = "Alo, alo";
		document.getElementById("p3").innerHTML = "Алло… алло";
	}
	if (current >= 88 && current < 91){
		document.getElementById("p2").innerHTML = "Sunt eu, Picasso";
		document.getElementById("p3").innerHTML = "Это я… Пикассо";
	}
	if ((current >= 91 && current < 94) || (current >= 150 && current < 152)){
		document.getElementById("p2").innerHTML = "Ți-am dat bip";
		document.getElementById("p3").innerHTML = "Я тебе звоню";
	}
	if ((current >= 94 && current < 95) || (current >= 153 && current < 154)){
		document.getElementById("p2").innerHTML = "și sunt voinic";
		document.getElementById("p3").innerHTML = "И я чист перед тобой";
	}
	if ((current >= 95 && current < 97) || (current >= 154.5 && current < 155)){
		document.getElementById("p2").innerHTML = "dar să știi";
		document.getElementById("p3").innerHTML = "но знай";
	}
	if ((current >= 97 && current < 99) || (current >= 156 && current < 157)){
		document.getElementById("p2").innerHTML = "nu-ți cer nimic";
		document.getElementById("p3").innerHTML = "я ни о чем тебя не прошу";
	}
	if ((current >= 99 && current < 100) || (current >= 114 && current < 121) || (current >= 158 && current < 164) || (current >= 173 && current < 179) || (current >= 217 && current < 224) || (current >= 232 && current < 238)){
		document.getElementById("p2").innerHTML = "Vrei să pleci, dar nu mă, nu mă iei";
		document.getElementById("p3").innerHTML = "Ты хочешь идти, но ты не берёшь меня с собой";
	}
	if ((current >= 106 && current < 110) || (current >= 121 && current < 125) || (current >= 165 && current < 168) || (current >= 180 && current < 183) || (current >= 225 && current < 227) || (current >= 239 && current < 242)){
		document.getElementById("p2").innerHTML = "Chipul tău și dragostea din tei";
		document.getElementById("p3").innerHTML = "Твоё лицо и твоя любовь";
	}
	if ((current >= 110 && current < 114) || (current >= 125 && current < 129) || (current >= 169 && current < 172) || (current >= 184 && current < 216) || (current >= 228 && current < 231) || (current >= 243 && current < 244)){
		document.getElementById("p2").innerHTML = "Mi-amintesc de ochii tăi";
		document.getElementById("p3").innerHTML = "Напоминают мне о твоих глазах";
	}
	if (current >= 129 && current < 131){
		document.getElementById("p2").innerHTML = "Te sun";
		document.getElementById("p3").innerHTML = "Тебе звоню";
	}
	if (current >= 131 && current < 133){
		document.getElementById("p2").innerHTML = "să-ți spun";
		document.getElementById("p3").innerHTML = "чтобы сказать";
	}
	if (current >= 133 && current < 137){
		document.getElementById("p2").innerHTML = "ce simt acum";
		document.getElementById("p3").innerHTML = "Что я чувствую сейчас";
	}
	if (current >= 137 && current < 140){
		document.getElementById("p2").innerHTML = "Alo, iubirea mea";
		document.getElementById("p3").innerHTML = "Алло, любовь моя";
	}
	if (current >= 140 && current < 142){
		document.getElementById("p2").innerHTML = "sunt eu, fericirea";
		document.getElementById("p3").innerHTML = "это я, счастье моё";
	}
	if (current >= 143 && current < 146){
		document.getElementById("p2").innerHTML = "Alo, alo";
		document.getElementById("p3").innerHTML = "Алло… алло";
	}
	if (current >= 147 && current < 149){
		document.getElementById("p2").innerHTML = "sunt iarăși eu, Picasso";
		document.getElementById("p3").innerHTML = "это опять я, Пикассо";
	}
}
if (lyrics == 3){
	if (current < 23){
	document.getElementById("p2").innerHTML = "";
	document.getElementById("p3").innerHTML = "";
}
if ((current >= 23 && current < 24) || (current >= 33 && current < 34)){
		document.getElementById("p2").innerHTML = "My baby came down from Romania";
		document.getElementById("p3").innerHTML = "Моя любимая родом из Румынии";
	}
	if ((current >= 25 && current < 27) || (current >= 35 && current < 37)){
		document.getElementById("p2").innerHTML = "She was the queen of Transylvania";
		document.getElementById("p3").innerHTML = "Она была королевой Трансильвании";
	}
	if ((current >= 28 && current < 29) || (current >= 38 && current < 39)){
		document.getElementById("p2").innerHTML = "But now we live in suburbia";
		document.getElementById("p3").innerHTML = "Но сейчас мы живем в пригороде";
	}
	if ((current >= 30 && current < 32) || (current >= 40 && current < 42)){
		document.getElementById("p2").innerHTML = "Without any friends buzzing you";
		document.getElementById("p3").innerHTML = "Без жужжания друзей вокруг тебя";
	}
	if ((current >= 42 && current < 45) || (current >= 47 && current < 49) || (current >= 51 && current < 54) || (current >= 56 && current < 59) || (current >= 119 && current < 121) || (current >= 124 && current < 126) || (current >= 129 && current < 131) || (current >= 134 && current < 136)){
		document.getElementById("p2").innerHTML = "Tsiganizatsia tsiganizatsia";
		document.getElementById("p3").innerHTML = "Цыганизация, цыганизация";
	}
	if ((current >= 45 && current < 47) || (current >= 54 && current < 56) || (current >= 121 && current < 124) || (current >= 131 && current < 134)){
		document.getElementById("p2").innerHTML = "Come on baby this is what you need";
		document.getElementById("p3").innerHTML = "Давай, детка, это то, что тебе нужно";
	}
	if ((current >= 49 && current < 51) || (current >= 126 && current < 129)){
		document.getElementById("p2").innerHTML = "Everybody dancing to this beat";
		document.getElementById("p3").innerHTML = "Все танцуют в этом ритме";
	}
	if ((current >= 59 && current < 68) || (current >= 73 && current < 78) || (current >= 136 && current < 145) || (current >= 150 && current < 155) || (current >= 229 && current < 234)  || (current >= 239 && current < 244)){
		document.getElementById("p2").innerHTML = "Disko disko partizani";
		document.getElementById("p3").innerHTML = "Диско диско партизаны";
	}
	if ((current >= 68 && current < 73) || (current >= 78 && current < 80) || (current >= 145 && current < 150) || (current >= 155 && current < 157) || (current >= 234 && current < 239)  || (current >= 244)){
		document.getElementById("p2").innerHTML = "Parti parti partizani";
		document.getElementById("p3").innerHTML = "Парти парти партизаны";
	}
	if ((current >= 80 && current < 83) || (current >= 90 && current < 93) || (current >= 157 && current < 160) || (current >= 167 && current < 169)){
		document.getElementById("p2").innerHTML = "Zece, alege";
		document.getElementById("p3").innerHTML = "Десять-выбирай";
	}
	if ((current >= 83 && current < 85) || (current >= 93 && current < 95) || (current >= 160 && current < 162) || (current >= 169 && current < 172)){
		document.getElementById("p2").innerHTML = "Nu am, înțelege";
		document.getElementById("p3").innerHTML = "Я не получил что мне было нужно, пойми";
	}
	if ((current >= 85 && current < 88) || (current >= 95 && current < 97) || (current >= 162 && current < 165) || (current >= 172 && current < 174)){
		document.getElementById("p2").innerHTML = "Opt, un tot";
		document.getElementById("p3").innerHTML = "Восемь-объединились";
	}
	if ((current >= 88 && current < 90) || (current >= 97 && current < 100) || (current >= 165 && current < 167) || (current >= 174 && current < 229)){
		document.getElementById("p2").innerHTML = "Muzica nonstop";
		document.getElementById("p3").innerHTML = "Музыка бесконечна";
	}
	if (current >= 100 && current < 102){
		document.getElementById("p2").innerHTML = "Când te văd mă pierd cu firea";
		document.getElementById("p3").innerHTML = "Когда я вижу тебя, я теряю голову";
	}
	if (current >= 102 && current < 105){
		document.getElementById("p2").innerHTML = "Nu-mi pot stăpâni privirea";
		document.getElementById("p3").innerHTML = "Я не могу контролировать свои глаза";
	}
	if (current >= 105 && current < 106){
		document.getElementById("p2").innerHTML = "Dansezi bine, ești mortală";
		document.getElementById("p3").innerHTML = "Ты хорошо танцуешь, ты сногшибательно красива";
	}
	if (current >= 106 && current < 109){
		document.getElementById("p2").innerHTML = "Și cu frumusețea ta îi bagi pe toți în boală";
		document.getElementById("p3").innerHTML = "И твоя красота сводит всех с ума";
	}
	if (current >= 109 && current < 112){
		document.getElementById("p2").innerHTML = "Orice bărbat te dorește";
		document.getElementById("p3").innerHTML = "Каждый мужчина хочет тебя";
	}
	if (current >= 112 && current < 114){
		document.getElementById("p2").innerHTML = "Când te vede înnebunește";
		document.getElementById("p3").innerHTML = "Они становятся дикими, когда смотрят на тебя";
	}
	if (current >= 114 && current < 116){
		document.getElementById("p2").innerHTML = "Ți-ar da bani, ți-ar da orice, ți-ar da și casa";
		document.getElementById("p3").innerHTML = "Они отдали бы тебе деньги, отдали бы тебе все, даже дом свой";
	}
	if (current >= 116 && current < 119){
		document.getElementById("p2").innerHTML = "Pentru tine și-ar lăsa nevasta";
		document.getElementById("p3").innerHTML = "Они оставили бы своих девушек ради тебя";
	}
}
if (lyrics == 4){
	if ((current < 4.12) || (current >= 16.24 && current < 19.58) || (current >= 128.52 && current < 132.33)){
	document.getElementById("p2").innerHTML = "O data in viata s'a intamplat";
	document.getElementById("p3").innerHTML = "Once in my life happened to me";
}
if ((current >= 4.12 && current < 8.03) || (current >= 19.58 && current < 24.19) || (current >= 132.33 && current < 136.37)){
	document.getElementById("p2").innerHTML = "Sa iubesc si eu cu adevarat";
	document.getElementById("p3").innerHTML = "To really love someone";
}
if ((current >= 8.03 && current < 11.48) || (current >= 24.19 && current < 27.25) || (current >= 136.37 && current < 139.56)){
	document.getElementById("p2").innerHTML = "La inima mea el ma secat";
	document.getElementById("p3").innerHTML = "He broke my heart";
}
if ((current >= 11.48 && current < 16.24) || (current >= 27.25 && current < 32.04) || (current >= 139.56 && current < 144.36)){
	document.getElementById("p2").innerHTML = "Ca e insurat";
	document.getElementById("p3").innerHTML = "Because he's married";
}
if ((current >= 32.04 && current < 36.2) || (current >= 48.13 && current < 52.14) || (current >= 96.52 && current < 100.3) || (current >= 112.38 && current < 116.34) || (current >= 160.38 && current < 164.32) || (current >= 176.54 && current < 180.51) || (current >= 192.59 && current < 196.45) || (current >= 208.45 && current < 212.36)){
	document.getElementById("p2").innerHTML = "Eu nu vreau sa-ti lasi nevasta pentru ochii mei";
	document.getElementById("p3").innerHTML = "I don't want you to leave your wife for my eyes";
}
if ((current >= 36.2 && current < 40.06) || (current >= 52.14 && current < 56.04) || (current >= 100.3 && current < 104.34) || (current >= 116.34 && current < 120.35) || (current >= 164.32 && current < 168.38) || (current >= 180.51 && current < 184.46) || (current >= 196.45 && current < 200.31) || (current >= 212.36 && current < 216.14)){
	document.getElementById("p2").innerHTML = "Nici copii tai";
	document.getElementById("p3").innerHTML = "Nor your children";
}
if ((current >= 40.06 && current < 44.07) || (current >= 56.04 && current < 60.25) || (current >= 104.34 && current < 108.32) || (current >= 120.35 && current < 124.44) || (current >= 168.38 && current < 172.48) || (current >= 184.46 && current < 188.5) || (current >= 200.31 && current < 204.41) || (current >= 216.14 && current < 220.46)){
	document.getElementById("p2").innerHTML = "Viata merge inainte orice sa-rantampla";
	document.getElementById("p3").innerHTML = "Life goes on no matter what";
}
if ((current >= 44.07 && current < 48.13) || (current >= 60.25 && current < 64.42) || (current >= 108.32 && current < 112.38) || (current >= 124.44 && current < 128.52) || (current >= 172.48 && current < 176.54) || (current >= 188.5 && current < 192.59) || (current >= 204.41 && current < 208.45) || (current >= 220.46 && current < 223.46)){
	document.getElementById("p2").innerHTML = "Vreau sa'mi vad de viata mea";
	document.getElementById("p3").innerHTML = "I want to move on with mine";
}
if ((current >= 64.42 && current < 68.5) || (current >= 80.31 && current < 84.44) || (current >= 144.36 && current < 148.4)){
	document.getElementById("p2").innerHTML = "Cate chinuri grele eu am tras";
	document.getElementById("p3").innerHTML = "How many bad things I've suffered";
}
if ((current >= 68.5 && current < 72.38) || (current >= 84.44 && current < 88.37) || (current >= 148.4 && current < 152.46)){
	document.getElementById("p2").innerHTML = "Numai ca sa nu te las";
	document.getElementById("p3").innerHTML = "Only because I didn't want to leave you";
}
if ((current >= 72.38 && current < 75.49) || (current >= 88.37 && current < 91.49) || (current >= 152.46 && current < 155.47)){
	document.getElementById("p2").innerHTML = "Eu m'am certat cu toata lumea";
	document.getElementById("p3").innerHTML = "I've fought with everybody";
}
if ((current >= 75.49 && current < 80.31) || (current >= 91.49 && current < 96.52) || (current >= 155.47 && current < 160.38)){
	document.getElementById("p2").innerHTML = "Din cauza ta";
	document.getElementById("p3").innerHTML = "Because of you";
}

}
if (lyrics == 5){
	if ((current >= 19.44 && current < 24.06) || (current >= 37.74 && current < 42.27)){
	document.getElementById("p2").innerHTML = "Un milion de gânduri am în mintea mea";
	document.getElementById("p3").innerHTML = "I have a million thoughts in my mind";
}
if ((current >= 24.06 && current < 28.62) || (current >= 42.27 && current < 47.11)){
	document.getElementById("p2").innerHTML = "Și toate vor iubirea ta";
	document.getElementById("p3").innerHTML = "And all of them want your love";
}
if ((current >= 28.62 && current < 33.15) || (current >= 47.11 && current < 51.39)){
	document.getElementById("p2").innerHTML = "Zile și nopți de-ar trece, nu ar mai conta";
	document.getElementById("p3").innerHTML = "Days and nights if would pass, it would not matter";
}
if ((current >= 33.15 && current < 37.74) || (current >= 51.39 && current < 56.17)){
	document.getElementById("p2").innerHTML = "Dacă ești tu în dreapta mea";
	document.getElementById("p3").innerHTML = "If you're by my side";
}
if ((current >= 56.17 && current < 60.71) || (current >= 74.73 && current < 79.08) || (current >= 148.63 && current < 153.1) || (current >= 167.08 && current < 171.62) || (current >= 240.93 && current < 245.46) || (current >= 259.36 && current < 263.94)){
	document.getElementById("p2").innerHTML = "Ia spune-i, lună, spune-i ce să-mi spună";
	document.getElementById("p3").innerHTML = "Tell him, moon, tell him what to tell me";
}
if ((current >= 60.71 && current < 65.63) || (current >= 79.08 && current < 83.99) || (current >= 153.1 && current < 157.77) || (current >= 171.62 && current < 176.35) || (current >= 245.46 && current < 250.1) || (current >= 263.94 && current < 268.48)){
	document.getElementById("p2").innerHTML = "Că-mi este dor de vorba lui";
	document.getElementById("p3").innerHTML = "Because I miss his words";
}
if ((current >= 65.63 && current < 69.95) || (current >= 83.99 && current < 88.17) || (current >= 157.77 && current < 162.13) || (current >= 176.35 && current < 180.73) || (current >= 250.1 && current < 254.41) || (current >= 268.48 && current < 273.01)){
	document.getElementById("p2").innerHTML = "Ia spune-i, soare, ce arde așa tare";
	document.getElementById("p3").innerHTML = "Tell him, sun, what burns so badly";
}
if ((current >= 69.95 && current < 74.73) || (current >= 88.17 && current < 111.46) || (current >= 162.13 && current < 167.08) || (current >= 180.73 && current < 203.95) || (current >= 254.41 && current < 259.36) || (current >= 273.01 && current < 277.07)){
	document.getElementById("p2").innerHTML = "Când vine focul dorului";
	document.getElementById("p3").innerHTML = "When the fire of longing is coming";
}
if ((current >= 111.46 && current < 116.1) || (current >= 130.07 && current < 134.55)){
	document.getElementById("p2").innerHTML = "Cine ar putea să-mi spună acum tot ce gândești";
	document.getElementById("p3").innerHTML = "Who could tell me now everything you think";
}
if ((current >= 116.1 && current < 120.65) || (current >= 134.55 && current < 139.26)){
	document.getElementById("p2").innerHTML = "Și dacă poți să mai iubești";
	document.getElementById("p3").innerHTML = "And if you can still love";
}
if ((current >= 120.65 && current < 125.38) || (current >= 139.26 && current < 143.8)){
	document.getElementById("p2").innerHTML = "Cum aș putea să îți mai simt inima ta";
	document.getElementById("p3").innerHTML = "How could I feel your heart";
}
if ((current >= 125.38 && current < 130.07) || (current >= 143.8 && current < 148.63)){
	document.getElementById("p2").innerHTML = "De-ai m-ai avea un dor în ea";
	document.getElementById("p3").innerHTML = "If you would have a longing in it";
}
if ((current >= 203.95 && current < 208.48) || (current >= 222.4 && current < 226.86)){
	document.getElementById("p2").innerHTML = "Cum e când vine dorul greu în mintea ta";
	document.getElementById("p3").innerHTML = "How is it like when the hard longing is coming on your mind";
}
if ((current >= 208.48 && current < 213.14) || (current >= 226.86 && current < 231.72)){
	document.getElementById("p2").innerHTML = "Cum poți să mai traiești așa";
	document.getElementById("p3").innerHTML = "How could you live like this";
}
if ((current >= 213.14 && current < 217.74) || (current >= 231.72 && current < 236.17)){
	document.getElementById("p2").innerHTML = "Cum e să simți și nu poți să spui nimic";
	document.getElementById("p3").innerHTML = "How is it to feel it and cannot say anything";
}
if ((current >= 217.74 && current < 222.4) || (current >= 236.17 && current < 240.93)){
	document.getElementById("p2").innerHTML = "Ca un biet suflet rătăcit";
	document.getElementById("p3").innerHTML = "Like a miserable/lost soul";
}

}
if (lyrics == 6){

if (current >= 0 && current < 6.3){
document.getElementById("p2").innerHTML = "";
document.getElementById("p3").innerHTML = "";
}
if (current >= 6.3 && current < 13.1){
document.getElementById("p2").innerHTML = "Dar unde dragoste nu e, nimic nu e";
document.getElementById("p3").innerHTML = "Где нет любви, там ничего нет";
}
if (current >= 13.1 && current < 16.8){
document.getElementById("p2").innerHTML = "Nici soare nu-i, nici viața nu-i";
document.getElementById("p3").innerHTML = "Ни солнца, ни жизни";
}
if (current >= 16.8 && current < 20.5){
document.getElementById("p2").innerHTML = "Iar eu mă simt a nimănui";
document.getElementById("p3").innerHTML = "А я чувствую себя ничей";
}
if (current >= 20.5 && current < 24.1){
document.getElementById("p2").innerHTML = "A nimănui că de obicei";
document.getElementById("p3").innerHTML = "Ничей, как обычно";
}
if (current >= 24.1 && current < 27.8){
document.getElementById("p2").innerHTML = "Tu vii acasă pe la 3";
document.getElementById("p3").innerHTML = "Ты приходишь домой где-то в 3";
}
if (current >= 27.8 && current < 30.1){
document.getElementById("p2").innerHTML = "Nu-ți face griji că sunt ok";
document.getElementById("p3").innerHTML = "Тебя не волнует, в порядке ли я";
}
if (current >= 30.1 && current < 32.1){
document.getElementById("p2").innerHTML = "N-am să plâng, n-am să plâng";
document.getElementById("p3").innerHTML = "Я не буду плакать, я не буду плакать";
}
if (current >= 32.1 && current < 34.1){
document.getElementById("p2").innerHTML = "N-am să, n-am să, n-am să plâng";
document.getElementById("p3").innerHTML = "Я не буду, не буду, не буду плакать";
}
if (current >= 34.1 && current < 36.6){
document.getElementById("p2").innerHTML = "N-am să plâng, mă găsești în club dansând";
document.getElementById("p3").innerHTML = "Я не буду плакать, ты найдёшь меня в клубе, я буду танцевать";
}
if (current >= 36.6 && current < 38.3){
document.getElementById("p2").innerHTML = "Cu toți ai mei (cu toți ai tăi)";
document.getElementById("p3").innerHTML = "Со всеми своими друзьями (со всеми твоими друзьями)";
}
if (current >= 38.3 && current < 40.3){
document.getElementById("p2").innerHTML = "Cu toți ai mei (cu toți ai tăi)";
document.getElementById("p3").innerHTML = "Со всеми своими друзьями (со всеми твоими друзьями)";
}
if (current >= 40.3 && current < 44.0){
document.getElementById("p2").innerHTML = "Se zice dacă dai din fund baby ai tot ce vrei";
document.getElementById("p3").innerHTML = "Говорят, что если двигаешь бёдрами, у тебя есть всё, чего ты хочешь";
}
if (current >= 44.0 && current < 46.0){
document.getElementById("p2").innerHTML = "Și toți ai mei (cu toți ai tăi)";
document.getElementById("p3").innerHTML = "Со всеми своими друзьями (со всеми твоими друзьями)";
}
if (current >= 46.0 && current < 48.0){
document.getElementById("p2").innerHTML = "Dar toți ai mei (cu toți ai tăi)";
document.getElementById("p3").innerHTML = "Со всеми своими друзьями (со всеми твоими друзьями)";
}
if (current >= 48.0 && current < 52.6){
document.getElementById("p2").innerHTML = "Se zice că dacă dai fund baby ai tot ce vrei";
document.getElementById("p3").innerHTML = "Говорят, что если двигаешь бёдрами, у тебя есть всё, чего ты хочешь";
}
if (current >= 52.6 && current < 56.8){
document.getElementById("p2").innerHTML = "Dar unde dragoste nu e, nimic nu e";
document.getElementById("p3").innerHTML = "Где нет любви, там ничего нет";
}
if (current >= 56.8 && current < 60.5){
document.getElementById("p2").innerHTML = "Nici soare nu-i, nici viața nu-i";
document.getElementById("p3").innerHTML = "Ни солнца, ни жизни";
}
if (current >= 60.5 && current < 64.2){
document.getElementById("p2").innerHTML = "Iar eu mă simt a nimănui";
document.getElementById("p3").innerHTML = "А я чувствую себя ничей";
}
if (current >= 64.2 && current < 68.2){
document.getElementById("p2").innerHTML = "Dar unde dragoste nu e, nimic nu e";
document.getElementById("p3").innerHTML = "Где нет любви, там ничего нет";
}
if (current >= 68.2 && current < 71.9){
document.getElementById("p2").innerHTML = "Nici soare nu-i, nici viața nu-i";
document.getElementById("p3").innerHTML = "Ни солнца, ни жизни";
}
if (current >= 71.9 && current < 80.7){
document.getElementById("p2").innerHTML = "Acolo unde nu ești tu, acolo unde nu ești";
document.getElementById("p3").innerHTML = "Там, где нет тебя, там, где нет тебя";
}
if (current >= 80.7 && current < 88.7){
document.getElementById("p2").innerHTML = "1, 2, 3, 4 -1, 2, 3, 4 -1, 2, 3, 4 Ușor iubitu' meu că se rupe patu";
document.getElementById("p3").innerHTML = "1, 2, 3, 4 - 1, 2, 3, 4 - 1, 2, 3, 4; Медленней, любимый мой, а то сломается кровать";
}
if (current >= 88.7 && current < 96.1){
document.getElementById("p2").innerHTML = "5, 6, 7, 8 -5, 6, 7, 8 -5, 6, 7, 8 Mi-e atât de cald că nu mai pot";
document.getElementById("p3").innerHTML = "5, 6, 7, 8 - 5, 6, 7, 8 - 5, 6, 7, 8; Мне так жарко, я больше не могу";
}
if (current >= 96.1 && current < 102.1){
document.getElementById("p2").innerHTML = "Dacă dragoste nu mai e";
document.getElementById("p3").innerHTML = "Если нет больше любви";
}
if (current >= 102.1 && current < 105.8){
document.getElementById("p2").innerHTML = "Hai să o dăm în petrecere";
document.getElementById("p3").innerHTML = "Давай устроим вечеринку";
}
if (current >= 105.8 && current < 108.1){
document.getElementById("p2").innerHTML = "Golim pahare rând pe rând";
document.getElementById("p3").innerHTML = "Опустошим бокалы, один за другим";
}
if (current >= 108.1 && current < 110.0){
document.getElementById("p2").innerHTML = "N-am să plâng, n-am să plâng";
document.getElementById("p3").innerHTML = "Я не буду плакать, я не буду плакать";
}
if (current >= 110.0 && current < 112.0){
document.getElementById("p2").innerHTML = "N-am să, n-am să, n-am să plâng";
document.getElementById("p3").innerHTML = "Я не буду, не буду, не буду плакать";
}
if (current >= 112.0 && current < 114.6){
document.getElementById("p2").innerHTML = "N-am să plâng, mă găsești în club dansând";
document.getElementById("p3").innerHTML = "Я не буду плакать, ты найдёшь меня в клубе, я буду танцевать";
}
if (current >= 114.6 && current < 116.6){
document.getElementById("p2").innerHTML = "Cu toți ai mei (cu toți ai tăi)";
document.getElementById("p3").innerHTML = "Со всеми своими друзьями (со всеми твоими друзьями)";
}
if (current >= 116.6 && current < 118.5){
document.getElementById("p2").innerHTML = "Cu toți ai mei (cu toți ai tăi)";
document.getElementById("p3").innerHTML = "Со всеми своими друзьями (со всеми твоими друзьями)";
}
if (current >= 118.5 && current < 122.2){
document.getElementById("p2").innerHTML = "Se zice dacă dai din fund baby ai tot ce vrei";
document.getElementById("p3").innerHTML = "Говорят, что если двигаешь бёдрами, у тебя есть всё, чего ты хочешь";
}
if (current >= 122.2 && current < 124.2){
document.getElementById("p2").innerHTML = "Și toți ai mei (cu toți ai tăi)";
document.getElementById("p3").innerHTML = "Со всеми своими друзьями (со всеми твоими друзьями)";
}
if (current >= 124.2 && current < 126.2){
document.getElementById("p2").innerHTML = "Dar toți ai mei (cu toți ai tăi)";
document.getElementById("p3").innerHTML = "Со всеми своими друзьями (со всеми твоими друзьями)";
}
if (current >= 126.2 && current < 131.0){
document.getElementById("p2").innerHTML = "Se zice că dacă dai fund baby ai tot ce vrei";
document.getElementById("p3").innerHTML = "Говорят, что если двигаешь бёдрами, у тебя есть всё, чего ты хочешь";
}
if (current >= 131.0 && current < 135.2){
document.getElementById("p2").innerHTML = "Dar unde dragoste nu e, nimic nu e";
document.getElementById("p3").innerHTML = "Где нет любви, там ничего нет";
}
if (current >= 135.2 && current < 138.6){
document.getElementById("p2").innerHTML = "Nici soare nu-i, nici viața nu-i";
document.getElementById("p3").innerHTML = "Ни солнца, ни жизни";
}
if (current >= 138.6 && current < 142.6){
document.getElementById("p2").innerHTML = "Iar eu mă simt a nimănui";
document.getElementById("p3").innerHTML = "А я чувствую себя ничей";
}
if (current >= 142.6 && current < 146.8){
document.getElementById("p2").innerHTML = "Dar unde dragoste nu e, nimic nu e";
document.getElementById("p3").innerHTML = "Где нет любви, там ничего нет";
}
if (current >= 146.8 && current < 150.2){
document.getElementById("p2").innerHTML = "Nici soare nu-i, nici viața nu-i";
document.getElementById("p3").innerHTML = "Ни солнца, ни жизни";
}
if (current >= 150.2 && current < 159.0){
document.getElementById("p2").innerHTML = "Acolo unde nu ești tu, acolo unde nu ești";
document.getElementById("p3").innerHTML = "Там, где нет тебя, там, где нет тебя";
}
if (current >= 159.0 && current < 166.7){
document.getElementById("p2").innerHTML = "1, 2, 3, 4 -1, 2, 3, 4 -1, 2, 3, 4 Ușor iubitu' meu că se rupe patu";
document.getElementById("p3").innerHTML = "1, 2, 3, 4 - 1, 2, 3, 4 - 1, 2, 3, 4; Медленней, любимый мой, а то сломается кровать";
}
if (current >= 166.7 && current < 174.4){
document.getElementById("p2").innerHTML = "5, 6, 7, 8 -5, 6, 7, 8 -5, 6, 7, 8 Mi-e atât de cald că nu mai pot";
document.getElementById("p3").innerHTML = "5, 6, 7, 8 - 5, 6, 7, 8 - 5, 6, 7, 8; Мне так жарко, я больше не могу";
}
if (current >= 174.4 && current < 182.0){
document.getElementById("p2").innerHTML = "1, 2, 3, 4 -1, 2, 3, 4 -1, 2, 3, 4 Ușor iubitu' meu că se rupe patu";
document.getElementById("p3").innerHTML = "1, 2, 3, 4 - 1, 2, 3, 4 - 1, 2, 3, 4; Медленней, любимый мой, а то сломается кровать";
}
if (current >= 182.0 && current < 189.7){
document.getElementById("p2").innerHTML = "5, 6, 7, 8 -5, 6, 7, 8 -5, 6, 7, 8 Mi-e atât de cald că nu mai pot";
document.getElementById("p3").innerHTML = "5, 6, 7, 8 - 5, 6, 7, 8 - 5, 6, 7, 8; Мне так жарко, я больше не могу";
}
if (current >= 189.7 && current < 197.1){
document.getElementById("p2").innerHTML = "1, 2, 3, 4 -1, 2, 3, 4 -1, 2, 3, 4 Ușor iubitu' meu că se rupe patu";
document.getElementById("p3").innerHTML = "1, 2, 3, 4 - 1, 2, 3, 4 - 1, 2, 3, 4; Медленней, любимый мой, а то сломается кровать";
}
if (current >= 197.1 && current < 198){
document.getElementById("p2").innerHTML = "5, 6, 7, 8 -5, 6, 7, 8 -5, 6, 7, 8 Mi-e atât de cald că nu mai pot";
document.getElementById("p3").innerHTML = "5, 6, 7, 8 - 5, 6, 7, 8 - 5, 6, 7, 8; Мне так жарко, я больше не могу";
}
}
if (lyrics == 7){

if (current >= 0 && current < 28.5){
document.getElementById("p2").innerHTML = "";
document.getElementById("p3").innerHTML = "";
}
if (current >= 28.5 && current < 31.3){
document.getElementById("p2").innerHTML = "Eu sunt căpitan major";
document.getElementById("p3").innerHTML = "I am a captain major";
}
if (current >= 31.3 && current < 39.9){
document.getElementById("p2").innerHTML = "Reclama țiganilor";
document.getElementById("p3").innerHTML = "Pride of the gypsies";
}
if (current >= 39.9 && current < 43.0){
document.getElementById("p2").innerHTML = "Eu sunt căpitan major";
document.getElementById("p3").innerHTML = "I am a captain major";
}
if (current >= 43.0 && current < 51.5){
document.getElementById("p2").innerHTML = "Reclama țiganilor";
document.getElementById("p3").innerHTML = "Pride of the gypsies";
}
if (current >= 51.5 && current < 57.4){
document.getElementById("p2").innerHTML = "Și am nevastă șucară, ale";
document.getElementById("p3").innerHTML = "And I have a sweet wife , ale";
}
if (current >= 57.4 && current < 63.4){
document.getElementById("p2").innerHTML = "Cum nu e nici în reclamă, ale";
document.getElementById("p3").innerHTML = "How come she is not in commercials, ale";
}
if (current >= 63.4 && current < 69.1){
document.getElementById("p2").innerHTML = "Și am nevastă șucară, ale";
document.getElementById("p3").innerHTML = "And I have a sweet wife , ale";
}
if (current >= 69.1 && current < 101.1){
document.getElementById("p2").innerHTML = "Cum nu e nici în reclamă, ale";
document.getElementById("p3").innerHTML = "How come she is not in commercials, ale";
}
if (current >= 101.1 && current < 104.0){
document.getElementById("p2").innerHTML = "Eu am trecut prin furtună";
document.getElementById("p3").innerHTML = "I have been through the storms";
}
if (current >= 104.0 && current < 112.7){
document.getElementById("p2").innerHTML = "Dar acuma-i vreme bună";
document.getElementById("p3").innerHTML = "But now the weather is good";
}
if (current >= 112.7 && current < 115.8){
document.getElementById("p2").innerHTML = "Eu am trecut prin furtună";
document.getElementById("p3").innerHTML = "I have been through the storms";
}
if (current >= 115.8 && current < 124.4){
document.getElementById("p2").innerHTML = "Dar acuma-i vreme bună";
document.getElementById("p3").innerHTML = "But now the weather is good";
}
if (current >= 124.4 && current < 130.0){
document.getElementById("p2").innerHTML = "Nu-i nimic, că m-am călit, ale-d";
document.getElementById("p3").innerHTML = "There's nothing, I just got hard, ale'd";
}
if (current >= 130.0 && current < 135.7){
document.getElementById("p2").innerHTML = "Ca și fierul oțelit, ale-d";
document.getElementById("p3").innerHTML = "As if iron steeled, ale'd";
}
if (current >= 135.7 && current < 141.7){
document.getElementById("p2").innerHTML = "Nu-i nimic, că m-am călit, ale-d";
document.getElementById("p3").innerHTML = "There's nothing, I just got hard, ale'd";
}
if (current >= 141.7 && current < 173.7){
document.getElementById("p2").innerHTML = "Ca și fierul oțelit, ale-d";
document.getElementById("p3").innerHTML = "As if iron steeled, ale'd";
}
if (current >= 173.7 && current < 176.8){
document.getElementById("p2").innerHTML = "Când ești căpitan major";
document.getElementById("p3").innerHTML = "If you are a captain major";
}
if (current >= 176.8 && current < 185.3){
document.getElementById("p2").innerHTML = "N-ai nevoie de pistol";
document.getElementById("p3").innerHTML = "You don't need a pistol";
}
if (current >= 185.3 && current < 188.5){
document.getElementById("p2").innerHTML = "Când ești căpitan major";
document.getElementById("p3").innerHTML = "If you are a captain major";
}
if (current >= 188.5 && current < 197.0){
document.getElementById("p2").innerHTML = "N-ai nevoie de pistol";
document.getElementById("p3").innerHTML = "You don't need a pistol";
}
if (current >= 197.0 && current < 202.9){
document.getElementById("p2").innerHTML = "Când ai grade-n buzunar, ale-d";
document.getElementById("p3").innerHTML = "If you have good rank of pocket, ale'd";
}
if (current >= 202.9 && current < 208.6){
document.getElementById("p2").innerHTML = "Stă drept și un general, ale-d";
document.getElementById("p3").innerHTML = "Even a general stands straight , ale'd";
}
if (current >= 208.6 && current < 214.6){
document.getElementById("p2").innerHTML = "Când ai grade-n buzunar, ale-d";
document.getElementById("p3").innerHTML = "If you have good rank of pocket, ale'd";
}
if (current >= 214.6 && current < 215.6){
document.getElementById("p2").innerHTML = "Stă drept și un general, ale-d";
document.getElementById("p3").innerHTML = "Even a general stands straight , ale'd";
}
}
if (lyrics == 8){

if (current >= 0 && current < 22.9){
document.getElementById("p2").innerHTML = "";
document.getElementById("p3").innerHTML = "";
}
if (current >= 22.9 && current < 25.7){
document.getElementById("p2").innerHTML = "O femeie moldoveancă îndrăgostită";
document.getElementById("p3").innerHTML = "Влюблённая молдаванка";
}
if (current >= 25.7 && current < 28.6){
document.getElementById("p2").innerHTML = "Răstoarnă și munții numai să fie împlinită";
document.getElementById("p3").innerHTML = "И горы перевернёт, только чтобы быть найти свою половину";
}
if (current >= 28.6 && current < 31.7){
document.getElementById("p2").innerHTML = "O femeie moldoveancă plină de amor";
document.getElementById("p3").innerHTML = "Молдаванка, переполненная любовью";
}
if (current >= 31.7 && current < 34.8){
document.getElementById("p2").innerHTML = "Se învârtește ca morișca la avion cu motor";
document.getElementById("p3").innerHTML = "Крутится, как пропеллер на самолёте с мотором";
}
if (current >= 34.8 && current < 37.7){
document.getElementById("p2").innerHTML = "Pe femeia moldoveancă n-o oprești cu Nică";
document.getElementById("p3").innerHTML = "Молдаванку никем не остановишь";
}
if (current >= 37.7 && current < 40.2){
document.getElementById("p2").innerHTML = "Și n-o amăgești numa' cu o bombonică";
document.getElementById("p3").innerHTML = "Её не обманешь лишь конфеткой";
}
if (current >= 40.2 && current < 42.0){
document.getElementById("p2").innerHTML = "Moldoveanca când iubește";
document.getElementById("p3").innerHTML = "Когда любит молдаванка";
}
if (current >= 42.0 && current < 43.4){
document.getElementById("p2").innerHTML = "Soarele asfinte";
document.getElementById("p3").innerHTML = "Солнце прячется от зависти";
}
if (current >= 43.4 && current < 46.2){
document.getElementById("p2").innerHTML = "De invidie că ea amu îi mai fierbinte";
document.getElementById("p3").innerHTML = "Что она его горячее";
}
if (current >= 46.2 && current < 48.8){
document.getElementById("p2").innerHTML = "Când eu iubesc, apu și pământu' geme";
document.getElementById("p3").innerHTML = "Когда я люблю, земля сотрясается";
}
if (current >= 48.8 && current < 51.9){
document.getElementById("p2").innerHTML = "Așa că să nu-mi spui amuia că ți-e lene";
document.getElementById("p3").innerHTML = "Поэтому не говори сейчас, что тебе лень";
}
if (current >= 51.9 && current < 54.8){
document.getElementById("p2").innerHTML = "Când eu iubesc apu parcă am aripioare";
document.getElementById("p3").innerHTML = "Когда я люблю, у меня будто возникают крылья";
}
if (current >= 54.8 && current < 57.9){
document.getElementById("p2").innerHTML = "Inima în jurul lumii ar vrea să zboare";
document.getElementById("p3").innerHTML = "Сердце хотело бы полететь вокруг всего мира";
}
if (current >= 57.9 && current < 60.4){
document.getElementById("p2").innerHTML = "Când eu iubesc, apu și pământu' geme";
document.getElementById("p3").innerHTML = "Когда я люблю, земля сотрясается";
}
if (current >= 60.4 && current < 63.9){
document.getElementById("p2").innerHTML = "Așa că să nu-mi spui amuia că ți-e lene";
document.getElementById("p3").innerHTML = "Поэтому не говори сейчас, что тебе лень";
}
if (current >= 63.9 && current < 66.4){
document.getElementById("p2").innerHTML = "Când eu iubesc apu parcă am aripioare";
document.getElementById("p3").innerHTML = "Когда я люблю, у меня будто возникают крылья";
}
if (current >= 66.4 && current < 81.2){
document.getElementById("p2").innerHTML = "Inima în jurul lumii ar vrea să zboare";
document.getElementById("p3").innerHTML = "Сердце хотело бы полететь вокруг всего мира";
}
if (current >= 81.2 && current < 84.0){
document.getElementById("p2").innerHTML = "Moldoveanca nu asteaptă scuză că nu poți";
document.getElementById("p3").innerHTML = "Молдаванка не ждёт отговорки, что ты не можешь";
}
if (current >= 84.0 && current < 86.9){
document.getElementById("p2").innerHTML = "Dacă vrei să ai copii, dacă vrei nepoți";
document.getElementById("p3").innerHTML = "Если ты хочешь детей, если ты хочешь внуков";
}
if (current >= 86.9 && current < 89.7){
document.getElementById("p2").innerHTML = "Moldoveanca îndrăgostită limită nu are";
document.getElementById("p3").innerHTML = "У влюблённой молдаванки нет ограничений";
}
if (current >= 89.7 && current < 92.8){
document.getElementById("p2").innerHTML = "Și rușinea îi dispare și astâmpăr n-are";
document.getElementById("p3").innerHTML = "Ей совсем не стыдно, ей не сидится на месте";
}
if (current >= 92.8 && current < 96.2){
document.getElementById("p2").innerHTML = "Moldoveanca tot iubește luna și cu stelele";
document.getElementById("p3").innerHTML = "Молдаванка любит луну со звёздами";
}
if (current >= 96.2 && current < 99.3){
document.getElementById("p2").innerHTML = "Dar mai tare sub ogheal sărutul și gâdilelile";
document.getElementById("p3").innerHTML = "Но больше всего она любит поцелуи и ласки под одеялом";
}
if (current >= 99.3 && current < 101.6){
document.getElementById("p2").innerHTML = "Să iubești o moldoveancă nu-i așa de greu";
document.getElementById("p3").innerHTML = "Любить молдаванку не так и сложно";
}
if (current >= 101.6 && current < 104.7){
document.getElementById("p2").innerHTML = "De două ori de dimineață și seara mereu";
document.getElementById("p3").innerHTML = "Два раза утром и вечером всегда";
}
if (current >= 104.7 && current < 107.2){
document.getElementById("p2").innerHTML = "Când eu iubesc, apu și pământu' geme";
document.getElementById("p3").innerHTML = "Когда я люблю, земля сотрясается";
}
if (current >= 107.2 && current < 110.4){
document.getElementById("p2").innerHTML = "Așa că să nu-mi spui amuia că ți-e lene";
document.getElementById("p3").innerHTML = "Поэтому не говори сейчас, что тебе лень";
}
if (current >= 110.4 && current < 113.2){
document.getElementById("p2").innerHTML = "Când eu iubesc apu parcă am aripioare";
document.getElementById("p3").innerHTML = "Когда я люблю, у меня будто возникают крылья";
}
if (current >= 113.2 && current < 116.1){
document.getElementById("p2").innerHTML = "Inima în jurul lumii ar vrea să zboare";
document.getElementById("p3").innerHTML = "Сердце хотело бы полететь вокруг всего мира";
}
if (current >= 116.1 && current < 118.6){
document.getElementById("p2").innerHTML = "Când eu iubesc, apu și pământu' geme";
document.getElementById("p3").innerHTML = "Когда я люблю, земля сотрясается";
}
if (current >= 118.6 && current < 122.0){
document.getElementById("p2").innerHTML = "Așa că să nu-mi spui amuia că ți-e lene";
document.getElementById("p3").innerHTML = "Поэтому не говори сейчас, что тебе лень";
}
if (current >= 122.0 && current < 124.9){
document.getElementById("p2").innerHTML = "Când eu iubesc apu parcă am aripioare";
document.getElementById("p3").innerHTML = "Когда я люблю, у меня будто возникают крылья";
}
if (current >= 124.9 && current < 139.6){
document.getElementById("p2").innerHTML = "Inima în jurul lumii ar vrea să zboare";
document.getElementById("p3").innerHTML = "Сердце хотело бы полететь вокруг всего мира";
}
if (current >= 139.6 && current < 141.9){
document.getElementById("p2").innerHTML = "Când eu iubesc, apu și pământu' geme";
document.getElementById("p3").innerHTML = "Когда я люблю, земля сотрясается";
}
if (current >= 141.9 && current < 145.0){
document.getElementById("p2").innerHTML = "Așa că să nu-mi spui amuia că ți-e lene";
document.getElementById("p3").innerHTML = "Поэтому не говори сейчас, что тебе лень";
}
if (current >= 145.0 && current < 147.9){
document.getElementById("p2").innerHTML = "Când eu iubesc apu parcă am aripioare";
document.getElementById("p3").innerHTML = "Когда я люблю, у меня будто возникают крылья";
}
if (current >= 147.9 && current < 151.0){
document.getElementById("p2").innerHTML = "Inima în jurul lumii ar vrea să zboare";
document.getElementById("p3").innerHTML = "Сердце хотело бы полететь вокруг всего мира";
}
if (current >= 151.0 && current < 153.6){
document.getElementById("p2").innerHTML = "Când eu iubesc, apu și pământu' geme";
document.getElementById("p3").innerHTML = "Когда я люблю, земля сотрясается";
}
if (current >= 153.6 && current < 156.7){
document.getElementById("p2").innerHTML = "Așa că să nu-mi spui amuia că ți-e lene";
document.getElementById("p3").innerHTML = "Поэтому не говори сейчас, что тебе лень";
}
if (current >= 156.7 && current < 159.5){
document.getElementById("p2").innerHTML = "Când eu iubesc apu parcă am aripioare";
document.getElementById("p3").innerHTML = "Когда я люблю, у меня будто возникают крылья";
}
if (current >= 159.5 && current < 174.3){
document.getElementById("p2").innerHTML = "Inima în jurul lumii ar vrea să zboare";
document.getElementById("p3").innerHTML = "Сердце хотело бы полететь вокруг всего мира";
}
if (current >= 174.3 && current < 176.9){
document.getElementById("p2").innerHTML = "Când eu iubesc, apu și pământu' geme";
document.getElementById("p3").innerHTML = "Когда я люблю, земля сотрясается";
}
if (current >= 176.9 && current < 180.0){
document.getElementById("p2").innerHTML = "Așa că să nu-mi spui amuia că ți-e lene";
document.getElementById("p3").innerHTML = "Поэтому не говори сейчас, что тебе лень";
}
if (current >= 180.0 && current < 183.1){
document.getElementById("p2").innerHTML = "Când eu iubesc apu parcă am aripioare";
document.getElementById("p3").innerHTML = "Когда я люблю, у меня будто возникают крылья";
}
if (current >= 183.1 && current < 185.7){
document.getElementById("p2").innerHTML = "Inima în jurul lumii ar vrea să zboare";
document.getElementById("p3").innerHTML = "Сердце хотело бы полететь вокруг всего мира";
}
if (current >= 185.7 && current < 188.5){
document.getElementById("p2").innerHTML = "Când eu iubesc, apu și pământu' geme";
document.getElementById("p3").innerHTML = "Когда я люблю, земля сотрясается";
}
if (current >= 188.5 && current < 191.7){
document.getElementById("p2").innerHTML = "Așa că să nu-mi spui amuia că ți-e lene";
document.getElementById("p3").innerHTML = "Поэтому не говори сейчас, что тебе лень";
}
if (current >= 191.7 && current < 194.5){
document.getElementById("p2").innerHTML = "Când eu iubesc apu parcă am aripioare";
document.getElementById("p3").innerHTML = "Когда я люблю, у меня будто возникают крылья";
}
if (current >= 194.5 && current < 195.7){
document.getElementById("p2").innerHTML = "Inima în jurul lumii ar vrea să zboare";
document.getElementById("p3").innerHTML = "Сердце хотело бы полететь вокруг всего мира";
}
}
if (lyrics == 9){

	if (current >= 0 && current < 6.0){
document.getElementById("p2").innerHTML = "Cuscră, ia și de mă scuză";
document.getElementById("p3").innerHTML = "Сватья, ну прости же меня";
}
if (current >= 6.0 && current < 11.6){
document.getElementById("p2").innerHTML = "Că băiatul meu comoara ți-o furat";
document.getElementById("p3").innerHTML = "Ведь мой мальчик украл твоё сокровище";
}
if (current >= 11.6 && current < 16.7){
document.getElementById("p2").innerHTML = "Da’ n-o să-ți pară rău, crede-mă cuscră";
document.getElementById("p3").innerHTML = "Но не расстраивайся, поверь мне, сватья";
}
if (current >= 16.7 && current < 23.8){
document.getElementById("p2").innerHTML = "Să iubească o fată, tac-su l-o-nvățat";
document.getElementById("p3").innerHTML = "Отец его научил, как любить девушек";
}
if (current >= 23.8 && current < 25.8){
document.getElementById("p2").innerHTML = "Un', doi, trei și...";
document.getElementById("p3").innerHTML = "Раз, два, три...";
}
if (current >= 25.8 && current < 28.6){
document.getElementById("p2").innerHTML = "Cuscră, ia și de mă scuză";
document.getElementById("p3").innerHTML = "Сватья, ну прости же меня";
}
if (current >= 28.6 && current < 31.2){
document.getElementById("p2").innerHTML = "Că băiatul meu comoara ți-o furat";
document.getElementById("p3").innerHTML = "Ведь мой мальчик украл твоё сокровище";
}
if (current >= 31.2 && current < 34.3){
document.getElementById("p2").innerHTML = "Da’ n-o să-ți pară rău, crede-mă cuscră";
document.getElementById("p3").innerHTML = "Но не расстраивайся, поверь мне, сватья";
}
if (current >= 34.3 && current < 37.1){
document.getElementById("p2").innerHTML = "Să iubească o fată, tac-su l-o-nvățat";
document.getElementById("p3").innerHTML = "Отец его научил, как любить девушек";
}
if (current >= 37.1 && current < 40.0){
document.getElementById("p2").innerHTML = "Cuscră, ia și de mă scuză";
document.getElementById("p3").innerHTML = "Сватья, ну прости же меня";
}
if (current >= 40.0 && current < 42.5){
document.getElementById("p2").innerHTML = "Că băiatul meu comoara ți-o furat";
document.getElementById("p3").innerHTML = "Ведь мой мальчик украл твоё сокровище";
}
if (current >= 42.5 && current < 45.6){
document.getElementById("p2").innerHTML = "Da’ n-o să-ți pară rău, crede-mă cuscră";
document.getElementById("p3").innerHTML = "Но не расстраивайся, поверь мне, сватья";
}
if (current >= 45.6 && current < 59.5){
document.getElementById("p2").innerHTML = "Să iubească o fată, tac-su l-o-nvățat";
document.getElementById("p3").innerHTML = "Отец его научил, как любить девушек";
}
if (current >= 59.5 && current < 62.3){
document.getElementById("p2").innerHTML = "El dacă azi o spus, mâine o și făcut";
document.getElementById("p3").innerHTML = "Если он пообщела сегодня, то завтра всё обязательно исполнит";
}
if (current >= 62.3 && current < 65.2){
document.getElementById("p2").innerHTML = "Azi muncește, chiar de ieri o petrecut";
document.getElementById("p3").innerHTML = "Сегодня он работает, даже если вчера был на гулянке";
}
if (current >= 65.2 && current < 68.0){
document.getElementById("p2").innerHTML = "Când trebuie spune, tace când îi de tăcut";
document.getElementById("p3").innerHTML = "Когда нужно говорить - говорит, когда нужно молчать - молчит";
}
if (current >= 68.0 && current < 70.8){
document.getElementById("p2").innerHTML = "N-are scăpare fata care i-o plăcut";
document.getElementById("p3").innerHTML = "Некуда деваться от него девушке, которая ему понравилась";
}
if (current >= 70.8 && current < 73.7){
document.getElementById("p2").innerHTML = "El apare parcă din senin când dai de-un greu";
document.getElementById("p3").innerHTML = "Он появляется словно из неоткуда, когда тебе нужна помощь";
}
if (current >= 73.7 && current < 76.5){
document.getElementById("p2").innerHTML = "Dacă cheltuie un bănuț, să știi că mâine aduce un leu";
document.getElementById("p3").innerHTML = "Если он тратит копейку, знай, что завтра он принесёт рубль";
}
if (current >= 76.5 && current < 79.4){
document.getElementById("p2").innerHTML = "Cel mai frumos era Ion ca-n tinerețe eu";
document.getElementById("p3").innerHTML = "Самым красивый мой Ион, как я в молодости";
}
if (current >= 79.4 && current < 82.5){
document.getElementById("p2").innerHTML = "Dintre Ioni cel mai Ion, băiatu’ meu";
document.getElementById("p3").innerHTML = "Среди Ионов он всем Ион, сынок мой";
}
if (current >= 82.5 && current < 85.3){
document.getElementById("p2").innerHTML = "Cuscră, ia și de mă scuză";
document.getElementById("p3").innerHTML = "Сватья, ну прости же меня";
}
if (current >= 85.3 && current < 88.2){
document.getElementById("p2").innerHTML = "Că băiatul meu comoara ți-o furat";
document.getElementById("p3").innerHTML = "Ведь мой мальчик украл твоё сокровище";
}
if (current >= 88.2 && current < 91.0){
document.getElementById("p2").innerHTML = "Da’ n-o să-ți pară rău, crede-mă cuscră";
document.getElementById("p3").innerHTML = "Но не расстраивайся, поверь мне, сватья";
}
if (current >= 91.0 && current < 93.9){
document.getElementById("p2").innerHTML = "Să iubească o fată, tac-su l-o-nvățat";
document.getElementById("p3").innerHTML = "Отец его научил, как любить девушек";
}
if (current >= 93.9 && current < 96.7){
document.getElementById("p2").innerHTML = "Cuscră, ia și de mă scuză";
document.getElementById("p3").innerHTML = "Сватья, ну прости же меня";
}
if (current >= 96.7 && current < 99.3){
document.getElementById("p2").innerHTML = "Că băiatul meu comoara ți-o furat";
document.getElementById("p3").innerHTML = "Ведь мой мальчик украл твоё сокровище";
}
if (current >= 99.3 && current < 102.4){
document.getElementById("p2").innerHTML = "Da’ n-o să-ți pară rău, crede-mă cuscră";
document.getElementById("p3").innerHTML = "Но не расстраивайся, поверь мне, сватья";
}
if (current >= 102.4 && current < 116.3){
document.getElementById("p2").innerHTML = "Să iubească o fată, tac-su l-o-nvățat";
document.getElementById("p3").innerHTML = "Отец его научил, как любить девушек";
}
if (current >= 116.3 && current < 119.2){
document.getElementById("p2").innerHTML = "Vorbește lumea despre fata ta de bine";
document.getElementById("p3").innerHTML = "Люди хорошо говорят о твоей дочери";
}
if (current >= 119.2 && current < 122.0){
document.getElementById("p2").innerHTML = "Îi dintre acelea care știe de rușine";
document.getElementById("p3").innerHTML = "Она не одна из тех, кому стоило бы постыдиться";
}
if (current >= 122.0 && current < 124.6){
document.getElementById("p2").innerHTML = "Care ia aur la concurs de gospodine";
document.getElementById("p3").innerHTML = "Которые приносят золото на конкурс домохозяек";
}
if (current >= 124.6 && current < 127.7){
document.getElementById("p2").innerHTML = "Fata ta, cuscră, seamănă cu mine";
document.getElementById("p3").innerHTML = "Дочь твоя, сватья, похожа на меня";
}
if (current >= 127.7 && current < 130.5){
document.getElementById("p2").innerHTML = "Ea știe, pe bărbat că trebui’ l-asculta";
document.getElementById("p3").innerHTML = "Она знает, что мужчину нужно слушать";
}
if (current >= 130.5 && current < 133.4){
document.getElementById("p2").innerHTML = "Pe aici îl ajuta, pe-acolo-l îndrepta";
document.getElementById("p3").innerHTML = "Здесь ему поможет, там его направит";
}
if (current >= 133.4 && current < 135.9){
document.getElementById("p2").innerHTML = "Știe să muncească, știe și-a cânta";
document.getElementById("p3").innerHTML = "Она умеет работать, она умеет петь";
}
if (current >= 135.9 && current < 139.4){
document.getElementById("p2").innerHTML = "Ca tre’ … îi fata ta";
document.getElementById("p3").innerHTML = "Как надо... это дочь твоя";
}
if (current >= 139.4 && current < 142.2){
document.getElementById("p2").innerHTML = "Cuscră, ia și de mă scuză";
document.getElementById("p3").innerHTML = "Сватья, ну прости же меня";
}
if (current >= 142.2 && current < 145.0){
document.getElementById("p2").innerHTML = "Că băiatul meu comoara ți-o furat";
document.getElementById("p3").innerHTML = "Ведь мой мальчик украл твоё сокровище";
}
if (current >= 145.0 && current < 147.9){
document.getElementById("p2").innerHTML = "Da’ n-o să-ți pară rău, crede-mă cuscră";
document.getElementById("p3").innerHTML = "Но не расстраивайся, поверь мне, сватья";
}
if (current >= 147.9 && current < 150.7){
document.getElementById("p2").innerHTML = "Să iubească o fată, tac-su l-o-nvățat";
document.getElementById("p3").innerHTML = "Отец его научил, как любить девушек";
}
if (current >= 150.7 && current < 153.5){
document.getElementById("p2").innerHTML = "Cuscră, ia și de mă scuză";
document.getElementById("p3").innerHTML = "Сватья, ну прости же меня";
}
if (current >= 153.5 && current < 156.4){
document.getElementById("p2").innerHTML = "Că băiatul meu comoara ți-o furat";
document.getElementById("p3").innerHTML = "Ведь мой мальчик украл твоё сокровище";
}
if (current >= 156.4 && current < 159.2){
document.getElementById("p2").innerHTML = "Da’ n-o să-ți pară rău, crede-mă cuscră";
document.getElementById("p3").innerHTML = "Но не расстраивайся, поверь мне, сватья";
}
if (current >= 159.2 && current < 161.6){
document.getElementById("p2").innerHTML = "Să iubească o fată, tac-su l-o-nvățat";
document.getElementById("p3").innerHTML = "Отец его научил, как любить девушек";
}
if (current >= 161.6 && current < 164.6){
document.getElementById("p2").innerHTML = "Cel mai frumos era Ion ca-n tinerețe eu";
document.getElementById("p3").innerHTML = "Самым красивый мой Ион, как я в молодости";
}
if (current >= 164.6 && current < 167.5){
document.getElementById("p2").innerHTML = "Dintre Ioni cel mai Ion, băiatu’ meu";
document.getElementById("p3").innerHTML = "Среди Ионов он всем Ион, сынок мой";
}
if (current >= 167.5 && current < 170.0){
document.getElementById("p2").innerHTML = "Vorbește lumea despre fata ta de bine";
document.getElementById("p3").innerHTML = "Люди хорошо говорят о твоей дочери";
}
if (current >= 170.0 && current < 173.4){
document.getElementById("p2").innerHTML = "Fata ta, cuscră, seamănă cu mine";
document.getElementById("p3").innerHTML = "Дочь твоя, сватья, похожа на меня";
}
if (current >= 173.4 && current < 176.3){
document.getElementById("p2").innerHTML = "Cuscră, ia și de mă scuză";
document.getElementById("p3").innerHTML = "Сватья, ну прости же меня";
}
if (current >= 176.3 && current < 178.8){
document.getElementById("p2").innerHTML = "Că băiatul meu comoara ți-o furat";
document.getElementById("p3").innerHTML = "Ведь мой мальчик украл твоё сокровище";
}
if (current >= 178.8 && current < 182.0){
document.getElementById("p2").innerHTML = "Da’ n-o să-ți pară rău, crede-mă cuscră";
document.getElementById("p3").innerHTML = "Но не расстраивайся, поверь мне, сватья";
}
if (current >= 182.0 && current < 184.8){
document.getElementById("p2").innerHTML = "Să iubească o fată, tac-su l-o-nvățat";
document.getElementById("p3").innerHTML = "Отец его научил, как любить девушек";
}
if (current >= 184.8 && current < 187.6){
document.getElementById("p2").innerHTML = "Cuscră, ia și de mă scuză";
document.getElementById("p3").innerHTML = "Сватья, ну прости же меня";
}
if (current >= 187.6 && current < 190.5){
document.getElementById("p2").innerHTML = "Că băiatul meu comoara ți-o furat";
document.getElementById("p3").innerHTML = "Ведь мой мальчик украл твоё сокровище";
}
if (current >= 190.5 && current < 193.3){
document.getElementById("p2").innerHTML = "Da’ n-o să-ți pară rău, crede-mă cuscră";
document.getElementById("p3").innerHTML = "Но не расстраивайся, поверь мне, сватья";
}
if (current >= 193.3 && current < 196.2){
document.getElementById("p2").innerHTML = "Să iubească o fată, tac-su l-o-nvățat";
document.getElementById("p3").innerHTML = "Отец его научил, как любить девушек";
}
if (current >= 196.2 && current < 199.0){
document.getElementById("p2").innerHTML = "Cuscră, ia și de mă scuză";
document.getElementById("p3").innerHTML = "Сватья, ну прости же меня";
}
if (current >= 199.0 && current < 201.8){
document.getElementById("p2").innerHTML = "Că băiatul meu comoara ți-o furat";
document.getElementById("p3").innerHTML = "Ведь мой мальчик украл твоё сокровище";
}
if (current >= 201.8 && current < 204.7){
document.getElementById("p2").innerHTML = "Da’ n-o să-ți pară rău, crede-mă cuscră";
document.getElementById("p3").innerHTML = "Но не расстраивайся, поверь мне, сватья";
}
if (current >= 204.7 && current < 210.7){
document.getElementById("p2").innerHTML = "Să iubească o fată, tac-su l-o-nvățat";
document.getElementById("p3").innerHTML = "Отец его научил, как любить девушек";
}
}
}
// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
	song = ev.target.textContent;
  }  
}, song = "All songs", false);
	
	function RandomImage()
	{
		
		if (song == "La nunta asta"){
			if (document.getElementById("3").src != "http://localhost/off.jpg") 
        {
		index = 1;
		document.rebuslot.subjectquantity.src = index+".jpg";
		
		}else{
			index = 1; 
		}
		if (document.getElementById("1").src != "http://localhost/off.jpg") 
        {
			index1 = getRndmFromSet([72,73,74,75,76,77,78,79,80,81,82,83,84,85,86]);
		document.rebuslot.subjectessence.src = index1+"n.jpg";

		}else{
		index1 = 0;
		}
		if (document.getElementById("2").src != "http://localhost/off.jpg") 
        {
		index2 = getRndmFromSet([1,23,24,25,26,27,28,29]);
		document.rebuslot.subjectquality.src = index2+"adj.jpg";
	
 		}else{
		index2 = 0;
		}
	
		if (document.getElementById("4").src != "http://localhost/off.jpg") 
        {
			index3 = getRndmFromSet([12,13,14,15,16,17,18,19,20,21,22]);
			document.rebuslot.verbessence.src = index3+"v.jpg";
			//here
	}else{
		index3 = 5;
		}
	}else{
		if (document.getElementById("3").src != "http://localhost/off.jpg") 
        {
		index = getRndmFromSet([0,1,2,3,4,5,6,7,8,9]);
		document.rebuslot.subjectquantity.src = index+".jpg";
		}else{
			index =1;
		}

		if (document.getElementById("1").src != "http://localhost/off.jpg") 
        {
		index1 = getRndmFromSet([0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86]);
		document.rebuslot.subjectessence.src = index1+"n.jpg";
		
		}else{
		index1 = 0;
		}
		if (document.getElementById("2").src != "http://localhost/off.jpg") 
        {
		index2 = getRndmFromSet([0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29]);
		document.rebuslot.subjectquality.src = index2+"adj.jpg";
		
		}else{
		index2 = 0;
		}
		
		if (document.getElementById("4").src != "http://localhost/off.jpg") 
        {
			index3 = getRndmFromSet([0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22]);
			document.rebuslot.verbessence.src = index3+"v.jpg";
		}else{
		index3 = 5;
		}
	}
	
		if (document.getElementById("5").src != "http://localhost/off.jpg") 
        {
		index4 = Math.random();
		index4 = Math.floor(index4*50);
		if(index4 > (imagearray4.length-1))
		index4 = index4%(imagearray4.length-1);
		document.rebuslot.verbquality.src = index4+"adv1.jpg";
		}else{
		index4 = 2; 
		}
		if (document.getElementById("6").src != "http://localhost/off.jpg") 
        {
		//index5 = Math.random();
		//index5 = Math.floor(index5*50);
		//if(index5 > (imagearray5.length-1))
		//index5 = index5%(imagearray5.length-1);
		index5 = 0;
		if (index5 == 0){
			document.rebuslot.verbquantity.title = "должен";
		}
		document.rebuslot.verbquantity.src = index5+"m.jpg";
		
		}else{
		index5 = 0;
		}
		if (document.getElementById("7").src != "http://localhost/off.jpg") 
        {
		index6 = Math.random();
		index6 = Math.floor(index6*50);
		if(index6 > (imagearray1.length-1))
		index6 = index6%(imagearray1.length-1);
		document.rebuslot.objectessence.src = index6+"n.jpg";
		}else{
		index6 = 0;
		}
		if (document.getElementById("9").src != "http://localhost/off.jpg") 
        {
		index8 = Math.random();
		index8 = Math.floor(index8*10);
		if(index8 > (imagearray.length-1))
		index8 = index8%(imagearray.length-1);
		document.rebuslot.objectquantity.src = index8+".jpg";
		}else{
		index8 = 1;
		}
		if (document.getElementById("8").src != "http://localhost/off.jpg") 
        {
		index7 = Math.random();
		index7 = Math.floor(index7*50);
		if(index7 > (imagearray2.length-1))
		index7 = index7%(imagearray2.length-1);
		document.rebuslot.objectquality.src = index7+"adj.jpg";
		}else{
		index7 = 0;
		}
		if (index1 == 72){
			document.rebuslot.subjectessence.title = "я";
		}
		if (index1 == 73){
			document.rebuslot.subjectessence.title = "девушка";
		}
		if (index1 == 74){
			document.rebuslot.subjectessence.title = "она";
		}
		if (index1 == 75){
			document.rebuslot.subjectessence.title = "батюшка";
		}
		if (index1 == 76){
			document.rebuslot.subjectessence.title = "угол";
		}
		if (index1 == 77){
			document.rebuslot.subjectessence.title = "стол";
		}
		if (index1 == 78){
			document.rebuslot.subjectessence.title = "платье";
		}
		if (index1 == 79){
			document.rebuslot.subjectessence.title = "свадьба";
		}
		if (index1 == 80){
			document.rebuslot.subjectessence.title = "музыка";
		}
		if (index1 == 81){
			document.rebuslot.subjectessence.title = "все";
		}
		if (index1 == 82){
			document.rebuslot.subjectessence.title = "никто";
		}
		if (index1 == 83){
			document.rebuslot.subjectessence.title = "жизнь";
		}
		if (index1 == 84){
			document.rebuslot.subjectessence.title = "душа";
		}
		if (index1 == 85){
			document.rebuslot.subjectessence.title = "клетка";
		}
		if (index1 == 86){
			document.rebuslot.subjectessence.title = "вино";
		}
        if (index2 == 1){
			document.rebuslot.subjectquality.title = "красивый";
		}
		if (index2 == 23){
			document.rebuslot.subjectquality.title = "молодой";
        }
		if (index2 == 24){
			document.rebuslot.subjectquality.title = "послушный";
		}
		if (index2 == 25){
			document.rebuslot.subjectquality.title = "сыт";
		}
		if (index2 == 26){
			document.rebuslot.subjectquality.title = "одет";
		}
		if (index2 == 27){
			document.rebuslot.subjectquality.title = "этот";
		}
		if (index2 == 28){
			document.rebuslot.subjectquality.title = "работающий";
		}
		if (index2 == 29){
			document.rebuslot.subjectquality.title = "начинающийся";
		}
        if (index == 0){
			document.rebuslot.subjectquantity.title = "0";
		}
		if (index == 1){
			document.rebuslot.subjectquantity.title = "1";
		}
		if (index == 2){
			document.rebuslot.subjectquantity.title = "2";
        }
		if (index == 3){
			document.rebuslot.subjectquantity.title = "3";
		}
		if (index == 4){
			document.rebuslot.subjectquantity.title = "4";
		}
		if (index == 5){
			document.rebuslot.subjectquantity.title = "5";
		}
		if (index == 6){
			document.rebuslot.subjectquantity.title = "6";
		}
		if (index == 7){
			document.rebuslot.subjectquantity.title = "7";
		}
		if (index == 8){
			document.rebuslot.subjectquantity.title = "8";
		}
		if (index == 9){
			document.rebuslot.subjectquantity.title = "9";
		}
        if (index3 == 12){
            document.rebuslot.verbessence.title = "быть";
        }
        if (index3 == 13){
            document.rebuslot.verbessence.title = "рассказать";
        }
        if (index3 == 14){
            document.rebuslot.verbessence.title = "стоять";
        }
        if (index3 == 15){
            document.rebuslot.verbessence.title = "говорить";
        }
        if (index3 == 16){
            document.rebuslot.verbessence.title = "слушать";
        }
        if (index3 == 17){
            document.rebuslot.verbessence.title = "играть";
        }
        if (index3 == 18){
            document.rebuslot.verbessence.title = "сказать";
        }
        if (index3 == 19){
            document.rebuslot.verbessence.title = "танцевать";
        }
        if (index3 == 20){
            document.rebuslot.verbessence.title = "интересоваться";
        }
        if (index3 == 21){
            document.rebuslot.verbessence.title = "удовлетворяться";
        }
        if (index3 == 22){
            document.rebuslot.verbessence.title = "пробовать";
        }
        
	}
	function off1()
	{
	var x1 = document.getElementById("1").src;
	 if (x1 != "http://localhost/off.jpg") 
        {
            document.rebuslot.subjectessence.src = "off.jpg";
			document.rebuslot.subjectquality.src = "off.jpg";
			document.rebuslot.subjectquantity.src = "off.jpg";
			document.rebuslot.verbessence.src = "off.jpg";
			document.rebuslot.verbquality.src = "off.jpg";
			document.rebuslot.verbquantity.src = "off.jpg";
			document.rebuslot.objectessence.src = "off.jpg";
			document.rebuslot.objectquality.src = "off.jpg";
			document.rebuslot.objectquantity.src = "off.jpg";
        }
	if (x1 == "http://localhost/off.jpg") 
        {
            document.rebuslot.subjectessence.src = "clear.jpg";
        }
	}
	function off2()
	{
	var x2 = document.getElementById("2").src;
	 if (x2 != "http://localhost/off.jpg") 
        {
            document.rebuslot.subjectquality.src = "off.jpg";
        }
	if (x2 == "http://localhost/off.jpg") 
        {
            document.rebuslot.subjectquality.src = "clear.jpg";
			document.rebuslot.subjectessence.src = "clear.jpg";
        }
	}
	function off3()
	{
	var x3 = document.getElementById("3").src;
	 if (x3 != "http://localhost/off.jpg") 
        {
            document.rebuslot.subjectquantity.src = "off.jpg";
        }
	if (x3 == "http://localhost/off.jpg") 
        {
            document.rebuslot.subjectquantity.src = "clear.jpg";
			document.rebuslot.subjectessence.src = "clear.jpg";
        }
	}
	function off4()
	{
	var x4 = document.getElementById("4").src;
	 if (x4 != "http://localhost/off.jpg") 
        {
            document.rebuslot.verbessence.src = "off.jpg";
			document.rebuslot.verbquality.src = "off.jpg";
			document.rebuslot.verbquantity.src = "off.jpg";
			document.rebuslot.objectessence.src = "off.jpg";
			document.rebuslot.objectquality.src = "off.jpg";
			document.rebuslot.objectquantity.src = "off.jpg";
        }
	if (x4 == "http://localhost/off.jpg") 
        {
            document.rebuslot.verbessence.src = "clear.jpg";
			document.rebuslot.subjectessence.src = "clear.jpg";
        }
	}
	function off5()
	{
	var x5 = document.getElementById("5").src;
	 if (x5 != "http://localhost/off.jpg") 
        {
            document.rebuslot.verbquality.src = "off.jpg";
        }
	if (x5 == "http://localhost/off.jpg") 
        {
            document.rebuslot.verbquality.src = "clear.jpg";
			document.rebuslot.verbessence.src = "clear.jpg";
			document.rebuslot.subjectessence.src = "clear.jpg";
        }
	}
	function off6()
	{
	var x6 = document.getElementById("6").src;
	 if (x6 != "http://localhost/off.jpg") 
        {
            document.rebuslot.verbquantity.src = "off.jpg";
        }
	if (x6 == "http://localhost/off.jpg") 
        {
            document.rebuslot.verbquantity.src = "clear.jpg";
            document.rebuslot.verbessence.src = "clear.jpg";
			document.rebuslot.subjectessence.src = "clear.jpg";
        }
	}
	function off7()
	{
	var x7 = document.getElementById("7").src;
	 if (x7 != "http://localhost/off.jpg") 
        {
            document.rebuslot.objectessence.src = "off.jpg";
			document.rebuslot.objectquality.src = "off.jpg";
			document.rebuslot.objectquantity.src = "off.jpg";
        }
	if (x7 == "http://localhost/off.jpg") 
        {
            document.rebuslot.objectessence.src = "clear.jpg";
			document.rebuslot.verbessence.src = "clear.jpg";
			document.rebuslot.subjectessence.src = "clear.jpg";
        }
	}
	function off8()
	{
	var x8 = document.getElementById("8").src;
	 if (x8 != "http://localhost/off.jpg") 
        {
            document.rebuslot.objectquality.src = "off.jpg";
        }
	if (x8 == "http://localhost/off.jpg") 
        {
            document.rebuslot.objectquality.src = "clear.jpg";
			document.rebuslot.objectessence.src = "clear.jpg";
			document.rebuslot.verbessence.src = "clear.jpg";
			document.rebuslot.subjectessence.src = "clear.jpg";
        }
	}
	function off9()
	{
	var x9 = document.getElementById("9").src;
	 if (x9 != "http://localhost/off.jpg") 
        {
            document.rebuslot.objectquantity.src = "off.jpg";
        }
	if (x9 == "http://localhost/off.jpg") 
        {
            document.rebuslot.objectquantity.src = "clear.jpg";
			document.rebuslot.objectessence.src = "clear.jpg";
			document.rebuslot.verbessence.src = "clear.jpg";
			document.rebuslot.subjectessence.src = "clear.jpg";
        }
	}
	function off10()
	{
		var x10 = document.getElementById("10").src;
		if (x10 == "http://localhost/soundon.jpg"){
			document.sound.src = "soundoff.jpg";
		}else{
			document.sound.src = "soundon.jpg";
		}
	}

	</script>
	<style>

		p {
		color: white;
		font-size: 14px;
	}
	.posit {
	position:absolute;
	}
	.posit-1 {
	left: 57%;
	bottom: 40%;
	}
	.posit-2 {
	top: 9%;
	}
	.posit-3 {
	bottom: 8%;
	}
	.posit-4 {
	bottom: 8%;
	left: 13%;
	}
	.posit-5 {
	left: 43%;
	top: 0%;
	}
	.posit-6 {
	left: 57%;
	top: 65%;
	background-color: black;
	color: white;
	font-size: 18;
	}
	.posit-7 {
	left: 57%;
	top: 75%;
	background-color: black;
	color: white;
	font-size: 18;
	}
	.posit-8 {
	left: 0%;
	top: 0%;
	}
	.posit-9 {
	left: 12%;
	top: 1%;
	}
.posit-10 {
	left: 28%;
	top: 86%;
	}
	body {
	padding: 0;
  margin: 0;
  max-width: 250px;
}
.posit-11 {
	bottom: 8%;
	left: 57%;
}
.posit-12 {
	bottom: 8%;
	left: 64%;
}
#editor {
    width: 465px;
    height: 20px;
    padding: 0;
    background-color: white;
    color: black;
    font-size: 14px;
	}
.statement {
	color: red;
}
/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
position: relative;
left: 475px;
top: 85px;
  margin: 0;
  padding: 0;
}

/* Style the list items */
ul li {
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #eee;
  font-size: 16px;
  transition: 0.2s;
  
  /* make the list items unselectable */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}

/* Style the close button */
.close {
  position: absolute;
  right: 0;
  top: 0;
  padding: 12px 16px 12px 16px;
}

.close:hover {
  background-color: #f44336;
  color: white;
}

/* Style the header */
.header {
  background-color: #f44336;
  padding: 30px 40px;
  color: white;
  text-align: center;
}

/* Clear floats after the header */
.header:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

.addBtn:hover {
  background-color: black;
}

.menu {
  width: 120px;

  position: absolute;
  display: none;

  .menu-options {
    list-style: none;
    padding: 10px 0;
	

    .menu-option {
      font-weight: 500;
      font-size: 14px;
      padding: 10px 40px 10px 20px;
      cursor: pointer;
	}
      .menu-option:hover {
        background: rgba(0, 0, 0, 0.2);
      }
    }
  }
}
	</style>
		<p class="posit posit-8" style=color:white; id="kw">Known words: </p>
<form action="config.php" method="post">
	<input name="arr_serialize1" id="arr_serialize1" type="hidden" value=""/>
<input name="arr_serialize2" id="arr_serialize2" type="hidden" value=""/>
<input name="arr_serialize3" id="arr_serialize3" type="hidden" value=""/>
<input name="arr_serialize4" id="arr_serialize4" type="hidden" value=""/>
<input name="arr_serialize5" id="arr_serialize5" type="hidden" value=""/>
<input name="arr_serialize6" id="arr_serialize6" type="hidden" value=""/>	
	
	<input id="save" class="posit posit-9" onclick="convert();" name="BTN" type="submit" value="Save progress"/>
</form>
<form method="get">
<input name="PHPvalue1" id="PHPvalue1" type="hidden" value="<?=$arr_serialize1?>"/>
<input name="PHPvalue2" id="PHPvalue2" type="hidden" value="<?=$arr_serialize2?>"/>
<input name="PHPvalue3" id="PHPvalue3" type="hidden" value="<?=$arr_serialize3?>"/>
<input name="PHPvalue4" id="PHPvalue4" type="hidden" value="<?=$arr_serialize4?>"/>
<input name="PHPvalue5" id="PHPvalue5" type="hidden" value="<?=$arr_serialize5?>"/>
<input name="PHPvalue6" id="PHPvalue6" type="hidden" value="<?=$arr_serialize6?>"/>
</form>
		<h2 class="posit posit-5" style=color:white;>Rebuslot</h2>
		<form class="posit posit-2" name="rebuslot" style=background-color:black; onkeypress="return event.keyCode != 13">
		<table>
		<tr>
			<td></td>
			<td><p>Essence</p></td>
			<td><p>Quality</p></td>
			<td><p>Quantity</p></td>
		</tr>
		<tr>
			<td><p>Subject</p></td>
			<td><img id="1" title="?" name="subjectessence" height="130" width="130" onclick="off1(); return false;"/><br /></td>
			<td><img id="2" title="?" name="subjectquality" height="130" width="130" onclick="off2()"/><br /></td>
			<td><img id="3" title="?" name="subjectquantity" height="130" width="130" onclick="off3()"/><br /></td>
			<td></td>
		</tr>
		<tr>
			<td><p>Verb</p></td>
			<td><img id="4" title="?" name="verbessence" height="130" width="130" onclick="off4()"/><br /></td>
			<td><img id="5" title="?" name="verbquality" height="130" width="130" onclick="off5()"/><br /></td>
			<td><img id="6" title="?" name="verbquantity" height="130" width="130" onclick="off6()"/><br /></td>
		</tr>
		<tr>
			<td><p>Object</p></td>
			<td><img id="7" title="?" name="objectessence" height="130" width="130" onclick="off7()"/><br /></td>
			<td><img id="8" title="?" name="objectquality" height="130" width="130" onclick="off8()"/><br /></td>
			<td><img id="9" title="?" name="objectquantity" height="130" width="130" onclick="off9()"/><br /></td>
			<td></td>
		</tr>
		</table>
		
		<div id="editor" contenteditable="true"></div>
		<p id="p1">the right answer</p>	
	</form>	

	<button id="random" class="posit posit-3" onclick="RandomImage()">Generate a sentence</button>
	<button id="right" class="posit posit-4" onclick="RightAnswer()">Show the right answer</button>
	<button id="time" class="posit posit-11" onclick="GetTime()">It's time</button>
	<button id="savetime" class="posit posit-12" onclick="SaveTime()">Save timecode</button>
	<img id="10" name="sound" class="posit posit-10" height ="50" width="50" src="soundon.jpg" onclick="off10()" />

	<p class="posit posit-6" id="p2">Song lyrics</p> 
	<p class="posit posit-7" id="p3">Lyrics translation</p> 
	
	<div class="menu">
  <ul class="menu-options" id="context">
    <li class="menu-option">Russian</li>
    <li class="menu-option">Surżyk</li>
	<li class="menu-option">Surance</li>
    <li class="menu-option">Surid</li>
  </ul>
</div>
<script>
var input = document.getElementById("editor");
// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("random").click();
	document.getElementById("right").click();
  }
});
const menu = document.querySelector(".menu");
let menuVisible = false;

const toggleMenu = command => {
  menu.style.display = command === "show" ? "block" : "none";
   menuVisible = !menuVisible;
};

const setPosition = ({ top, left }) => {
  menu.style.left = `${left}px`;
  menu.style.top = `${top}px`;
  toggleMenu('show');
};
var output = document.getElementById("p3");

output.addEventListener("click", e => {
	if(menuVisible)toggleMenu("hide");
});

output.addEventListener("contextmenu", e => {
	e.preventDefault();
	const origin = {
    left: 700,
    top: 400
  };
  setPosition(origin);
  return false;
})
var lang;
var context = document.getElementById("context");
context.addEventListener("click", e => {
lang = e.target.textContent;
})
</script>
</body>
</html>
