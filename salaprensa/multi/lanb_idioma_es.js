function fM(strMensaje) {
	strD="";
	switch (strMensaje) {
		
		case "EmailFormatoIncorrecto" : {strD="El formato del e-mail es incorrecto.";}break;
		case "IntroduzcaApellidos" : {strD="Introduzca sus apellidos";}break;
		case "IntroduzcaClave" : {strD="Introduzca su clave";}break;
		case "IntroduzcaCongreso" : {strD="Introduzca c�mo y cu�ndo tuvo conocimiento de celebraci�n del Congreso";}break;
		case "IntroduzcaDatosLocalizacion" : {strD="Introduzca los datos de la localizaci�n de la sede";}break;
		case "IntroduzcaDia" : {strD="Introduzca el d�a";}break;
		case "IntroduzcaEmail" : {strD="Introduzca su e-mail";}break;
		case "IntroduzcaEmailPersonal" : {strD="Introduzca su e-mail personal";}break;
		case "IntroduzcaHora" : {strD="Introduzca la hora";}break;
		case "IntroduzcaMedio" : {strD="Introduzca el nombre del medio";}break;
		case "IntroduzcaMes" : {strD="Introduzca el mes";}break;
		case "IntroduzcaNombre" : {strD="Introduzca su nombre";}break;
		case "IntroduzcaPublicacion" : {strD="Se�ale en qu� programa y d�a se publicar� su noticia";}break;
		case "IntroduzcaTelefono" : {strD="Introduzca el tel�fono";}break;
		case "IntroduzcaTlfnContacto" : {strD="Introduzca su tel�fono de contacto";}break;
		case "IntroduzcaQueOtra" : {strD="Introduzca en qu� otra v�a desea realizar la entrevista.";}break;
	}
	return strD;
}
