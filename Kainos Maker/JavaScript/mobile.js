



function mostraMenu(valor){
        var menu = document.getElementById("menuPrincipal");
        document.getElementById("mobile").src = ("IMAGES/menuIconeFechar.png");
        document.getElementById("mobile").id = ("mobile2");
        var mobilete = document.getElementById("mobile2");
        var inter = document.getElementById("interface");

        document.getElementById("ocult").style.visibility = "hidden";

        function ocultaMenu(){
        
            inter.style.backgroundColor = "rgba(0,0,0,0)";
            var menu = document.getElementById("menuPrincipal");
            menu.style.visibility = "hidden";
            document.getElementById("mobile2").src = ("IMAGES/menuIcone.png");
            document.getElementById("mobile2").id = ("mobile");
            mobilete = document.getElementById("mobile");
            /*mobilete.onclick = mostraMenu;*/
            document.getElementById("interface").style.height = "auto";
            document.getElementById("ocult").style.visibility = "visible";
            mobilete.onclick = mostraMenu;
  
}


		menu.style.visibility = "visible";
		document.getElementById("interface").style.height = "2000px";
        inter.style.backgroundColor = "#f5ce29";
        mobilete.onclick = ocultaMenu;

        
}

