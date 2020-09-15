teste(1);

function teste(valor){
 	for(var i = 0 ; i < 1000 ; i++){
 		valor += +1;
 		document.getElementById("body").style.border = i+" solid green";
 	}
	
}