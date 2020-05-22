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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

		<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
    <div id="player" class="posit posit-1"></div>
    
	<ul id="myUL">
  <li>All songs</li>
  <li>La nunta asta</li>
  <li>Dragostea din tej</li>
  <li>Disko partizani</li>
</ul>
	
	<script>
	var lang = "Russian";
	var current = 0;
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
	"vad", "pot", "merg", "vin", "opresc", "locuiesc", "hotarasc"];
	//here
	var index4, imagearray4 = ["asa", "altfel", "bine", "degeaba", "impreuna", "incet", "repede", "separat", "pe neasteptate", "pe de rost"];
	var index5, imagearray5 = ["acasa", "acolo", "afara", "aici", "apoi", "departe", "inainte", "inapoi", "inauntru", "jos", "pretutindeni", "sus", "undevai", 
	"acum", "alaltaieri", "aseara", "astazi", "candva", "cateodata", "curand", "demult", "deocamdata", "devreme", "dimineata", "iarna", "ieri", "imediat", "maine", "noaptea", "poimaine", "seara", "tarziu", "intotdeauna", "ziua", "zi de zi",
	"destul", "mult", "putin",
	"nicaieri", "niciodata"];
	var index6, index7, index8;
	var guess, videoPlayer;
	var videoList = ["TH0oCDziVQQ", "YnopHCL1Jk8", "gViaOYgV8yI"];
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
		answer = document.getElementById("p1").textContent;
		if ((index5 != 14) && (index5 != 15) && (index5 != 17) && (index5 != 19) && (index5 != 20) && (index5 != 25) && (index5 != 27)  && (index5 != 29)){
		document.getElementById("p1").innerHTML = answer + " " + imagearray3[index3];
		}else{
		if ((index5 == 14) || (index5 == 15) || (index5 == 20) || (index5 == 25) ){
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
		if ((index5 == 17) || (index5 == 19) || (index5 == 27) || (index5 == 29)){ 
		document.getElementById("p1").innerHTML = answer + " o sa " + imagearray3[index3];
		}
		}
		answer = document.getElementById("p1").textContent;
		document.getElementById("p1").innerHTML = answer +  " " +imagearray4[index4]+ " " +imagearray5[index5];
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
		answer = document.getElementById("p1").textContent;
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
		if ((index5 != 14) && (index5 != 15) && (index5 != 17) && (index5 != 19) && (index5 != 20) && (index5 != 25) && (index5 != 27)  && (index5 != 29)){
		}else{
		if ((index5 == 14) || (index5 == 15) || (index5 == 20) || (index5 == 25) ){
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
		document.getElementById("p1").innerHTML = answer+ " " +imagearray4[index4]+ " " +imagearray5[index5];
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
		answer = answer.replace(" astazi ", " ");
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
			playlist: "YnopHCL1Jk8,gViaOYgV8yI"
			},
          events: {
            'onReady': onPlayerReady
          }
        });
	  }

      // 4. The API will call this function when the video player is ready.
	
      function onPlayerReady(event) {
        event.target.playVideo();
		document.getElementById("p2").innerHTML = "Eu îs fată tinerică, tre’ să fiu cuminte,&#13;&#10;Îi-e ruşine şi e frig, aşa o zis părintele.&#13;&#10;Dar eu m-am săturat să stau la colţ de masă,&#13;&#10;Eu azi m-am îmbracat în rochia cea frumoasă.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă.&#13;&#10;&#13;&#10;Spune, ce n-ar spune, nu mă interesează,&#13;&#10;De ce să stau de-o parte când sufletu-mi dansează.&#13;&#10;Mi-e a început să-mi placă după colivie,&#13;&#10;Şi am să gust oleacă, diseară, de rachie.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă.";
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

 
		document.getElementById("p3").innerHTML = "Я молоденькая девушка, я должна быть послушной,&#13;&#10;Она стесняется, ей холодно, - так сказал батюшка.&#13;&#10;Но мне надоело сидеть в углу стола,&#13;&#10;Сегодня я надела красивое платье.&#13;&#10;&#13;&#10;На этой свадьбе играет только весёлая музыка,&#13;&#10;Все говорят, никто не слушает.&#13;&#10;Я так много сегодня поработала с утра,&#13;&#10;Станцую-ка я хоть разок.&#13;&#10;&#13;&#10;Пусть говорят что угодно, меня не волнует,&#13;&#10;Почему я должна стоять в стороне, когда моя душа хочет танцевать?&#13;&#10;Мне нравится то, что я вырвалась из клетки,&#13;&#10;Сегодня вечером я попробую немножечко вина.&#13;&#10;&#13;&#10;На этой свадьбе играет только весёлая музыка,&#13;&#10;Все говорят, никто не слушает.&#13;&#10;Я так много сегодня поработала с утра,&#13;&#10;Станцую-ка я хоть разок.";
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
	document.getElementById("p2").innerHTML = "Eu îs fată tinerică, tre’ să fiu cuminte,&#13;&#10;Îi-e ruşine şi e frig, aşa o zis părintele.&#13;&#10;Dar eu m-am săturat să stau la colţ de masă,&#13;&#10;Eu azi m-am îmbracat în rochia cea frumoasă.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă.&#13;&#10;&#13;&#10;Spune, ce n-ar spune, nu mă interesează,&#13;&#10;De ce să stau de-o parte când sufletu-mi dansează.&#13;&#10;Mi-e a început să-mi placă după colivie,&#13;&#10;Şi am să gust oleacă, diseară, de rachie.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă .";
	document.getElementById("p3").innerHTML = "Я молоденькая девушка, я должна быть послушной,&#13;&#10;Она стесняется, ей холодно, - так сказал батюшка.&#13;&#10;Но мне надоело сидеть в углу стола,&#13;&#10;Сегодня я надела красивое платье.&#13;&#10;&#13;&#10;На этой свадьбе играет только весёлая музыка,&#13;&#10;Все говорят, никто не слушает.&#13;&#10;Я так много сегодня поработала с утра,&#13;&#10;Станцую-ка я хоть разок.&#13;&#10;&#13;&#10;Пусть говорят что угодно, меня не волнует,&#13;&#10;Почему я должна стоять в стороне, когда моя душа хочет танцевать?&#13;&#10;Мне нравится то, что я вырвалась из клетки,&#13;&#10;Сегодня вечером я попробую немножечко вина.&#13;&#10;&#13;&#10;На этой свадьбе играет только весёлая музыка,&#13;&#10;Все говорят, никто не слушает.&#13;&#10;Я так много сегодня поработала с утра,&#13;&#10;Станцую-ка я хоть разок.";
  }

  }
  if (i == 2){
  close[i].onclick = function() {
	lyrics = 2;
	player.loadVideoById("YnopHCL1Jk8", 45, "large");
	document.getElementById("p2").innerHTML = "Mai-ha-hi&#13;&#10;Mai-ha-hu&#13;&#10;Mai-ha-ha&#13;&#10;Mai-ha-ha-ha&#13;&#10;&#13;&#10;Alo, salut,&#13;&#10;Sunt eu, un haiduc&#13;&#10;Și te rog, iubirea mea, primește fericirea.&#13;&#10;Alo, alo,&#13;&#10;Sunt eu, Picasso,&#13;&#10;Ți-am dat bip&#13;&#10;și sunt voinic,&#13;&#10;dar să știi, nu-ți cer nimic.&#13;&#10;&#13;&#10;Vrei să pleci, dar nu mă, nu mă iei,&#13;&#10;Nu mă, nu mă iei,&#13;&#10;Nu mă, nu mă, nu mă iei,&#13;&#10;Chipul tău și dragostea din tei&#13;&#10;Mi-amintesc de ochii tăi&#13;&#10;&#13;&#10;Te sun să-ți spun&#13;&#10;ce simt acum,&#13;&#10;Alo, iubirea mea, sunt eu, fericirea.&#13;&#10;Alo, alo,&#13;&#10;sunt iarăși eu, Picasso,&#13;&#10;Ți-am dat bip, și sunt voinic&#13;&#10;Dar să știi nu-ți cer nimic.&#13;&#10;&#13;&#10;Vrei să pleci, dar nu mă, nu mă iei,&#13;&#10;Nu mă, nu mă iei,&#13;&#10;Nu mă, nu mă, nu mă iei,&#13;&#10;Chipul tău și dragostea din tei&#13;&#10;Mi-amintesc de ochii tăi.&#13;&#10;&#13;&#10;Mai-ha-hi&#13;&#10;Mai-ha-hu&#13;&#10;Mai-ha-ha&#13;&#10;Mai-ha-ha-ha&#13;&#10;&#13;&#10;Vrei să pleci, dar nu mă, nu mă iei&#13;&#10;Nu mă, nu mă iei&#13;&#10;Nu mă, nu mă, nu mă iei,&#13;&#10;Chipul tău și dragostea din tei,&#13;&#10;Mi-amintesc de ochii tăi.";
	document.getElementById("p3").innerHTML = "Mai-ha-hi&#13;&#10;Mai-ha-hi&#13;&#10;Mai-ha-hu&#13;&#10;Mai-ha-ha<br/>Mai-ha-ha-ha &#13;&#10;&#13;&#10;Алло, привет,&#13;&#10;Это я… Хайдук&#13;&#10;И я прошу, моя любимая, сделай меня счастливым,&#13;&#10;Алло… алло,&#13;&#10;Это я… Пикассо,&#13;&#10;Я тебе звоню,&#13;&#10;И я чист перед тобой,&#13;&#10;Знай, я ни о чем тебя не прошу&#13;&#10;&#13;&#10;Ты хочешь идти, но ты не берёшь меня с собой,&#13;&#10;нет, ты не берёшь меня с собой,&#13;&#10;не берёшь меня с собой, нет&#13;&#10;Твоё лицо и любовь под липами&#13;&#10;Напоминают мне о твоих глазах&#13;&#10;&#13;&#10;Я звоню тебе, чтобы сказать,&#13;&#10;Что я чувствую сейчас.&#13;&#10;Алло, любовь моя, это я, счастье моё,&#13;&#10;Алло, алло, это опять я, Пикассо.&#13;&#10;Я тебе звоню, я чист перед тобой&#13;&#10;Знай, я ни о чем тебя не прошу&#13;&#10;&#13;&#10;Ты хочешь идти, но ты не берёшь меня с собой,&#13;&#10;Нет, ты не берёшь меня с собой,&#13;&#10;Не берёшь меня с собой, нет&#13;&#10;Твоё лицо и любовь под липами&#13;&#10;Напоминают мне о твоих глазах&#13;&#10;&#13;&#10;Mai-ha-hi&#13;&#10;Mai-ha-hu&#13;&#10;Mai-ha-ha&#13;&#10;Mai-ha-ha-ha &#13;&#10;&#13;&#10;Ты хочешь идти, но ты не берёшь меня с собой,&#13;&#10;Нет, ты не берёшь меня с собой,&#13;&#10;Не берёшь меня с собой, нет&#13;&#10;Tвоё лицо и любовь под липами&#13;&#10;Напоминают мне о твоих глазах&#13;&#10;Mai-ha-hu&#13;&#10;Mai-ha-ha&#13;&#10;Mai-ha-ha-ha ";
  }
  }
  if (i == 3){
  close[i].onclick = function() {
	lyrics = 3;
	player.loadVideoById("gViaOYgV8yI", 0, "large");
	document.getElementById("p2").innerHTML = "My baby came down from Romania&#13;&#10;She was the queen of Transylvania&#13;&#10;But now we live in suburbia&#13;&#10;Without any friends buzzing you&#13;&#10;&#13;&#10;Tsiganizatsia tsiganizatsia&#13;&#10;Come on baby this is what you need&#13;&#10;Tsiganizatsia tsiganizatsia&#13;&#10;Everybody dancing to this beat&#13;&#10;Tsiganizatsia tsiganizatsia&#13;&#10;Come on baby this is what you need&#13;&#10;Tsiganizatsia tsiganizatsia&#13;&#10;&#13;&#10;Disko disko partizani&#13;&#10;Disko disko partizani&#13;&#10;Parti parti partizani&#13;&#10;&#13;&#10;Zece, alege,&#13;&#10;Nu am, înțelege,&#13;&#10;Opt, un tot, (upgrade)&#13;&#10;Muzica nonstop.&#13;&#10;&#13;&#10;Când te văd mă pierd cu firea,&#13;&#10;Nu-mi pot stăpâni privirea,&#13;&#10;Dansezi bine, ești mortală,&#13;&#10;Și cu frumusețea ta îi bagi pe toți în boală;&#13;&#10;Orice bărbat te dorește,&#13;&#10;Când te vede înnebunește,&#13;&#10;Ți-ar da bani, ți-ar da orice, ți-ar da și casa,&#13;&#10;Pentru tine și-ar lăsa nevasta.&#13;&#10;&#13;&#10;Tsiganizatsia tsiganizatsia&#13;&#10;Come on baby this is what you need&#13;&#10;Tsiganizatsia tsiganizatsia&#13;&#10;Everybody dancing to this beat&#13;&#10;Tsiganizatsia tsiganizatsia&#13;&#10;Come on baby this is what you need&#13;&#10;Tsiganizatsia tsiganizatsia&#13;&#10;&#13;&#10;Disko disko partizani&#13;&#10;Disko disko partizani&#13;&#10;Parti parti partizani&#13;&#10;&#13;&#10;Zece, alege,&#13;&#10;Nu am, înțelege,&#13;&#10;Opt, un tot, (upgrade)&#13;&#10;Muzica nonstop.&#13;&#10;&#13;&#10;Disko disko partizani&#13;&#10;Parti parti partizani";
	document.getElementById("p3").innerHTML = "Моя любимая родом из Румынии,&#13;&#10;Она была королевой Трансильвании*,&#13;&#10;Но сейчас мы живем в пригороде&#13;&#10;Без жужжания друзей вокруг тебя.&#13;&#10;&#13;&#10;Цыганизация, цыганизация&#13;&#10;Давай, детка, это то, что тебе нужно&#13;&#10;Цыганизация, цыганизация&#13;&#10;Все танцуют в этом ритме&#13;&#10;Цыганизация, цыганизация&#13;&#10;Давай, детка, это то, что тебе нужно&#13;&#10;Цыганизация цыганизация&#13;&#10;&#13;&#10;Диско диско партизаны&#13;&#10;Диско диско партизаны&#13;&#10;Парти парти партизаны&#13;&#10;&#13;&#10;Десять-выбирай&#13;&#10;Я не получил что мне было нужно, пойми&#13;&#10;Восемь-объединились&#13;&#10;Музыка бесконечна!...&#13;&#10;&#13;&#10;Когда я вижу тебя, я теряю голову,&#13;&#10;Я не могу контролировать свои глаза,&#13;&#10;Ты хорошо танцуешь, ты сногшибательно красива,&#13;&#10;И твоя красота сводит всех с ума,&#13;&#10;Каждый мужчина хочет тебя,&#13;&#10;Они становятся дикими, когда смотрят на тебя,&#13;&#10;Они отдали бы тебе деньги, отдали бы тебе все, даже дом свой​​,&#13;&#10;Они оставили бы своих девушек ради тебя.&#13;&#10;Музыка бесконечна.&#13;&#10;&#13;&#10;Цыганизация, цыганизация&#13;&#10;Давай, детка, это то, что тебе нужно&#13;&#10;Цыганизация, цыганизация&#13;&#10;Все танцуют в этом ритме&#13;&#10;Цыганизация, цыганизация&#13;&#10;Давай, детка, это то, что тебе нужно&#13;&#10;&#13;&#10;Диско диско партизаны&#13;&#10;Диско диско партизаны&#13;&#10;Парти парти партизаны";
  }
  }
}
function myCallback() {
 current = player.playerInfo.currentTime;
if (lyrics == 1){
	if (lang == "Russian"){
if (current < 12){
	document.getElementById("p2").innerHTML = "Eu îs fată tinerică, tre’ să fiu cuminte,&#13;&#10;Îi-e ruşine şi e frig, aşa o zis părintele.&#13;&#10;Dar eu m-am săturat să stau la colţ de masă,&#13;&#10;Eu azi m-am îmbracat în rochia cea frumoasă.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă.&#13;&#10;&#13;&#10;Spune, ce n-ar spune, nu mă interesează,&#13;&#10;De ce să stau de-o parte când sufletu-mi dansează.&#13;&#10;Mi-e a început să-mi placă după colivie,&#13;&#10;Şi am să gust oleacă, diseară, de rachie.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă .";
	document.getElementById("p3").innerHTML = "Я молоденькая девушка, я должна быть послушной,&#13;&#10;Она стесняется, ей холодно, - так сказал батюшка.&#13;&#10;Но мне надоело сидеть в углу стола,&#13;&#10;Сегодня я надела красивое платье.&#13;&#10;&#13;&#10;На этой свадьбе играет только весёлая музыка,&#13;&#10;Все говорят, никто не слушает.&#13;&#10;Я так много сегодня поработала с утра,&#13;&#10;Станцую-ка я хоть разок.&#13;&#10;&#13;&#10;Пусть говорят что угодно, меня не волнует,&#13;&#10;Почему я должна стоять в стороне, когда моя душа хочет танцевать?&#13;&#10;Мне нравится то, что я вырвалась из клетки,&#13;&#10;Сегодня вечером я попробую немножечко вина.&#13;&#10;&#13;&#10;На этой свадьбе играет только весёлая музыка,&#13;&#10;Все говорят, никто не слушает.&#13;&#10;Я так много сегодня поработала с утра,&#13;&#10;Станцую-ка я хоть разок.";
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
	document.getElementById("p2").innerHTML = "Eu îs fată tinerică, tre’ să fiu cuminte,&#13;&#10;Îi-e ruşine şi e frig, aşa o zis părintele.&#13;&#10;Dar eu m-am săturat să stau la colţ de masă,&#13;&#10;Eu azi m-am îmbracat în rochia cea frumoasă.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă.&#13;&#10;&#13;&#10;Spune, ce n-ar spune, nu mă interesează,&#13;&#10;De ce să stau de-o parte când sufletu-mi dansează.&#13;&#10;Mi-e a început să-mi placă după colivie,&#13;&#10;Şi am să gust oleacă, diseară, de rachie.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă .";
	document.getElementById("p3").innerHTML = "Ja is girl молодая, have to be posłuszną,&#13;&#10;Їй стыдно і є frost, so did said parent.&#13;&#10;But ja am saturant to stać at kąt ze парти,&#13;&#10;Ja dziś am ubrana in suknia the вродлива.&#13;&#10;&#13;&#10;At ślub этот no more music ze ślub,&#13;&#10;All говорять, ніхто не слухає,&#13;&#10;Tyle am worked ze morning,&#13;&#10;Am to grać хочаб a time in życie.&#13;&#10;&#13;&#10;Mówić, co no би mówić, no me интересуюсь,&#13;&#10;Ze co to stać ze a встороне kiedy soul my dancing.&#13;&#10;My є починаю to my like после klatki,&#13;&#10;I mam to вкус немного, wieczorem, ze wine.&#13;&#10;At ślub этот no more music ze ślub,&#13;&#10;All говорять, ніхто не слухає,&#13;&#10;Tyle am worked ze morning,&#13;&#10;Am to grać хочаб a time in życie.";
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
	document.getElementById("p2").innerHTML = "Eu îs fată tinerică, tre’ să fiu cuminte,&#13;&#10;Îi-e ruşine şi e frig, aşa o zis părintele.&#13;&#10;Dar eu m-am săturat să stau la colţ de masă,&#13;&#10;Eu azi m-am îmbracat în rochia cea frumoasă.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă.&#13;&#10;&#13;&#10;Spune, ce n-ar spune, nu mă interesează,&#13;&#10;De ce să stau de-o parte când sufletu-mi dansează.&#13;&#10;Mi-e a început să-mi placă după colivie,&#13;&#10;Şi am să gust oleacă, diseară, de rachie.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă .";
	document.getElementById("p3").innerHTML = "Ya is giorl molodaya, hăv tu bi poslușnou,&#13;&#10;Yiy stîdna i e frost, sou did sed părent.&#13;&#10;Bat ya ăm saturant tu stac ăt cont ze partâ,&#13;&#10;Ya dziș ăm ubrana in suknia ze vrodlîva.&#13;&#10;&#13;&#10;Ăt șlub ătot nou mor miuzic ze șlub,&#13;&#10;Ol hovoriat, nihto ne sluhaie,&#13;&#10;Tâle ăm worked ze mornin,&#13;&#10;Am tu grac hocab ă taim in jâce.&#13;&#10;&#13;&#10;Muvic, țo nou bâ muvic, nou mi interesuiusi,&#13;&#10;Ze țo tu stac ze ă vstronie ciedâ soul mai danțin&#13;&#10;Mai e pocînayu tu mai laic posliă clatcâ,&#13;&#10;I mam tu vcus niemnoga, wiecorăm, ze wain.&#13;&#10;&#13;&#10;Ăt șlub ătot nou mor miuzic ze șlub,&#13;&#10;Ol hovoriat, nihto ne sluhaie,&#13;&#10;Tâle am worked ze mornin,&#13;&#10;Am tu grac hocab ă taim in jâce.";
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
	document.getElementById("p2").innerHTML = "Eu îs fată tinerică, tre’ să fiu cuminte,&#13;&#10;Îi-e ruşine şi e frig, aşa o zis părintele.&#13;&#10;Dar eu m-am săturat să stau la colţ de masă,&#13;&#10;Eu azi m-am îmbracat în rochia cea frumoasă.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă.&#13;&#10;&#13;&#10;Spune, ce n-ar spune, nu mă interesează,&#13;&#10;De ce să stau de-o parte când sufletu-mi dansează.&#13;&#10;Mi-e a început să-mi placă după colivie,&#13;&#10;Şi am să gust oleacă, diseară, de rachie.&#13;&#10;&#13;&#10;La nunta asta-i numa’ muzică de nuntă,&#13;&#10;Toţi vorbesc, nimeni n-ascultă.&#13;&#10;Atâta am muncit de dimineaţă,&#13;&#10;Am să joc măcar o dată-n viaţă .";
	document.getElementById("p3").innerHTML = "Ea is giotă tinedaya, trăv tă biu poslinte,&#13;&#10;Îiy rușîdna și e frist, asou dod ses părentele.&#13;&#10;Bar ea ăm săturant tă stauc lăt colt dze mastâ,&#13;&#10;Ea aziș ăm ubracat in ruknia zea vrodoasă.&#13;&#10;&#13;&#10;Lăt șlunta ăsto nu mar muzic dze șlunta,&#13;&#10;Tolți hovorbesc, nihteni n-asluhtă,&#13;&#10;Atâle am worcit dze dimorneață,&#13;&#10;Am tă groc măcab o dataim in jață.&#13;&#10;&#13;&#10;Spuvic, țe nou bâr spuvic, nou me interesuză,&#13;&#10;Dze țe tă stauc dze partoronie cândâ soufletu mai danțează.&#13;&#10;Mai e poceput tă mai plaică duposiliă colitca,&#13;&#10;Și am tă vgust nieacă, disorăm, dze wachin.&#13;&#10;&#13;&#10;Lăt șlunta ăsto nu mar muzic dze șlunta,&#13;&#10;Tolți hovorbesc, nihteni n-asluhtă,&#13;&#10;Atâle am worcit dze dimorneață,&#13;&#10;Am tă groc măcab o dataim in jață.";
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
		if (document.getElementById("3").src != "http://localhost/off.jpg") 
        {
		if (song == "La nunta asta"){
		index = 1;
		document.rebuslot.subjectquantity.src = index+".jpg";
		if (index == 1){
			document.rebuslot.subjectquantity.title = "1";
		}
		}else{
		index = getRndmFromSet([0,1,2,3,4,5,6,7,8,9]);
		document.rebuslot.subjectquantity.src = index+".jpg";
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
		}
		}else{
		index = 1; 
		}
		if (document.getElementById("1").src != "http://localhost/off.jpg") 
        {
		if (song == "La nunta asta"){
		index1 = getRndmFromSet([72,73,74,75,76,77,78,79,80,81,82,83,84,85,86]);
		document.rebuslot.subjectessence.src = index1+"n.jpg";
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
		}else{
		index1 = getRndmFromSet([0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86]);
		document.rebuslot.subjectessence.src = index1+"n.jpg";
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
		}
		}else{
		index1 = 0;
		}
		if (document.getElementById("2").src != "http://localhost/off.jpg") 
        {
	if (song == "La nunta asta"){
		index2 = getRndmFromSet([1,23,24,25,26,27,28,29]);
		document.rebuslot.subjectquality.src = index2+"adj.jpg";
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
		}else{
		index2 = getRndmFromSet([0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29]);
		document.rebuslot.subjectquality.src = index2+"adj.jpg";
		
		}
		}else{
		index2 = 0;
		}
		if (document.getElementById("4").src != "http://localhost/off.jpg") 
        {
		index3 = Math.random();
		index3 = Math.floor(index3*50);
		if(index3 > (imagearray3.length-1))
		index3 = index3%(imagearray3.length-1);
		document.rebuslot.verbessence.src = index3+"v.jpg";
		}else{
		index3 = 5;
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
		index5 = Math.random();
		index5 = Math.floor(index5*50);
		if(index5 > (imagearray5.length-1))
		index5 = index5%(imagearray5.length-1);
		document.rebuslot.verbquantity.src = index5+"adv2.jpg";
		}else{
		index5 = 16;
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
	top: 60%;
	background-color: black;
	color: white;

	}
	.posit-7 {
	left: 78%;
	top: 60%;
	background-color: black;
	color: white;

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
  box-shadow: 0 4px 5px 3px rgba(0, 0, 0, 0.2);
  position: relative;
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
	<img id="10" name="sound" class="posit posit-10" height ="50" width="50" src="soundon.jpg" onclick="off10()" />

	<textarea rows="13" cols="35" class="posit posit-6" id="p2">Song lyrics</textarea> 
	<textarea rows="13" cols="35" class="posit posit-7" id="p3">Lyrics translation</textarea> 
	
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
    left: 600,
    top: 170
  };
  setPosition(origin);
  return false;
})
var lang;
var context = document.getElementById("context");
context.addEventListener("click", e => {
lang = e.target.textContent;
if (lyrics == 1){
if (lang == "Russian"){
document.getElementById("p3").innerHTML = "Я молоденькая девушка, я должна быть послушной,&#13;&#10;Она стесняется, ей холодно, - так сказал батюшка.&#13;&#10;Но мне надоело сидеть в углу стола,&#13;&#10;Сегодня я надела красивое платье.&#13;&#10;&#13;&#10;На этой свадьбе играет только весёлая музыка,&#13;&#10;Все говорят, никто не слушает.&#13;&#10;Я так много сегодня поработала с утра,&#13;&#10;Станцую-ка я хоть разок.&#13;&#10;&#13;&#10;Пусть говорят что угодно, меня не волнует,&#13;&#10;Почему я должна стоять в стороне, когда моя душа хочет танцевать?&#13;&#10;Мне нравится то, что я вырвалась из клетки,&#13;&#10;Сегодня вечером я попробую немножечко вина.&#13;&#10;&#13;&#10;На этой свадьбе играет только весёлая музыка,&#13;&#10;Все говорят, никто не слушает.&#13;&#10;Я так много сегодня поработала с утра,&#13;&#10;Станцую-ка я хоть разок.";
}
if (lang == "Surżyk"){
document.getElementById("p3").innerHTML = "Ja is girl молодая, have to be posłuszną,&#13;&#10;Їй стыдно і є frost, so did said parent.&#13;&#10;But ja am saturant to stać at kąt ze парти,&#13;&#10;Ja dziś am ubrana in suknia the вродлива.&#13;&#10;&#13;&#10;At ślub этот no more music ze ślub,&#13;&#10;All говорять, ніхто не слухає,&#13;&#10;Tyle am worked ze morning,&#13;&#10;Am to grać хочаб a time in życie.&#13;&#10;&#13;&#10;Mówić, co no би mówić, no me интересуюсь,&#13;&#10;Ze co to stać ze a встороне kiedy soul my dancing.&#13;&#10;My є починаю to my like после klatki,&#13;&#10;I mam to вкус немного, wieczorem, ze wine.&#13;&#10;At ślub этот no more music ze ślub,&#13;&#10;All говорять, ніхто не слухає,&#13;&#10;Tyle am worked ze morning,&#13;&#10;Am to grać хочаб a time in życie.";
}
if (lang == "Surance"){
document.getElementById("p3").innerHTML = "Ya is giorl molodaya, hăv tu bi poslușnou,&#13;&#10;Yiy stîdna i e frost, sou did sed părent.&#13;&#10;Bat ya mam saturant tu stac ăt cont ze partâ,&#13;&#10;Ya dziș mam ubrana in suknia ze vrodlîva.&#13;&#10;&#13;&#10;Ăt șlub ătot nou mor miuzic ze șlub,&#13;&#10;Ol hovoriat, nihto ne sluhaie,&#13;&#10;Tâle am worked ze mornin,&#13;&#10;Am tu grac hocab ă taim in jâce.&#13;&#10;&#13;&#10;Muvic, țo nou bâ muvic, nou mi intieriesuiusi,&#13;&#10;Ze țo tu stac ze e vstoronie ciedâ soul mai danțin&#13;&#10;Mai e pocînayu tu mai laic posliă clatcâ,&#13;&#10;I mam tu vcus niemnoga, wiecorăm, ze wain.&#13;&#10;&#13;&#10;Ăt șlub ătot nou mor miuzic ze șlub,&#13;&#10;Ol hovoriat, nihto ne sluhaie,&#13;&#10;Tâle am worked ze mornin,&#13;&#10;Am tu grac hocab ă taim in jâce.";
}
if (lang == "Surid"){
document.getElementById("p3").innerHTML = "Ea is giotă tinedaya, trăv tă biu poslinte,&#13;&#10;Îiy rușîdna și e frist, asou dod ses părentele.&#13;&#10;Bar ea mam săturant tă stauc lăt colt dze mastâ,&#13;&#10;Ea aziș mam ubracat in ruknia zea vrodoasă.&#13;&#10;&#13;&#10;Lăt șlunta ăsto nu mar muzic dze șlunta,&#13;&#10;Tolți hovorbesc, nihteni n-asluhtă,&#13;&#10;Atâle am worcit dze dimorneață,&#13;&#10;Am tă groc măcab o dataim in jață.&#13;&#10;&#13;&#10;Spuvic, țe nou bâr spuvic, nou me interesuză,&#13;&#10;Dze țe tă stauc dze partoronie cândâ soufletu mai danțează.&#13;&#10;Mai e poceput tă mai plaică duposiliă colitca,&#13;&#10;Și mam tă vgust nieacă, disorăm, dze wachin.&#13;&#10;&#13;&#10;Lăt șlunta ăsto nu mar muzic dze șlunta,&#13;&#10;Tolți hovorbesc, nihteni n-asluhtă,&#13;&#10;Atâle am worcit dze dimorneață,&#13;&#10;Am tă groc măcab o dataim in jață.";
}
}})
</script>
</body>
</html>
