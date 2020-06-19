//****************************************************
function fMenuCabeceraOut(Opcion){
	switch (Opcion) {
		case "0" : sw2=1;aux_x=1000;aux_y=1000;div2('0');break;
		case "1" : sw2=1;aux_x=1000;aux_y=1000;div2('1');break;
		case "2" : sw2=1;aux_x=1000;aux_y=1000;div2('2');break;
		case "3" : sw2=1;aux_x=266;aux_y=372;div2('3');break;
	}
}
//****************************************************
function fMenuCabeceraOver(Opcion){
	strRes=(screen.width+"x"+screen.height);
	switch (strRes)
	{	case "800x600":
			if (navigator.appName=='Netscape'){
				if(navigator.userAgent.lastIndexOf("Safari")>-1){ //SAFARI
					switch (Opcion) {
						case "0" : sw2=1;aux_x=254;aux_y=60;div2('0');break;
						case "1" : sw2=1;aux_x=352;aux_y=60;div2('1');break;
						case "2" : sw2=1;aux_x=339;aux_y=60;div2('2');break;
						case "3" : sw2=1;aux_x=266;aux_y=372;div2('3');break;
					}
				}else{	// EXPLORER - MAC
					switch (Opcion) {
						case "0" : sw2=1;aux_x=254;aux_y=60;div2('0');break;
						case "1" : sw2=1;aux_x=352;aux_y=60;div2('1');break;
						case "2" : sw2=1;aux_x=339;aux_y=60;div2('2');break;
						case "3" : sw2=1;aux_x=266;aux_y=372;div2('3');break;
					}
				}
			}else{
				switch (Opcion) {
					case "0" : sw2=1;aux_x=254;aux_y=74;div2('0');break;
					case "1" : sw2=1;aux_x=352;aux_y=74;div2('1');break;
					case "2" : sw2=1;aux_x=339;aux_y=74;div2('2');break;
					case "3" : sw2=1;aux_x=266;aux_y=372;div2('3');break;
				}
			}
			break;
		case "1024x768":
			if (navigator.appName=='Netscape'){
				if(navigator.userAgent.lastIndexOf("Safari")>-1){ //SAFARI
					switch (Opcion) {
						case "0" : sw2=1;aux_x=365;aux_y=80;div2('0');break;
						case "1" : sw2=1;aux_x=464;aux_y=80;div2('1');break;
						case "2" : sw2=1;aux_x=450;aux_y=80;div2('2');break;
						case "3" : sw2=1;aux_x=377;aux_y=456;div2('3');break;
					}
				}else{	// EXPLORER - MAC
					switch (Opcion) {
						case "0" : sw2=1;aux_x=365;aux_y=140;div2('0');break;
						case "1" : sw2=1;aux_x=464;aux_y=140;div2('1');break;
						case "2" : sw2=1;aux_x=450;aux_y=140;div2('2');break;
						case "3" : sw2=1;aux_x=377;aux_y=456;div2('3');break;
					}
				}
			}else{
				switch (Opcion) {
					case "0" : sw2=1;aux_x=365;aux_y=158;div2('0');break;
					case "1" : sw2=1;aux_x=464;aux_y=158;div2('1');break;
					case "2" : sw2=1;aux_x=450;aux_y=158;div2('2');break;
					case "3" : sw2=1;aux_x=377;aux_y=456;div2('3');break;
				}
			}
			break;
	}
	
}
//****************************************************
function fSubirArriba (){
	strURL=top.einstein_contenido.location.pathname+top.einstein_contenido.location.search;
	window.open(strURL+'#arriba','einstein_contenido');
}
//****************************************
function ventana(vurl,valto,vancho,strScroll,Nombre)
{
	if (window.screen) {
		var ah=screen.width-(vancho/2);
		var aw=screen.height-(valto/2);
		var xc = (aw - vancho) / 2;
		var yc = (ah - valto) / 2;
	}
	window.open(vurl,Nombre,'left=' + xc + ',left='+xc+',top='+yc+',screenX='+xc+',height='+valto+',width='+vancho+',scrollbars='+strScroll+'').focus();
}
