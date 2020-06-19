var strFoco="";
//****************************************************
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
//****************************************
function fCambiarImg(istrNombre,istrImagen)
{	document[istrNombre].src = istrImagen;
}
//****************************************
function fImprimirYCerrar (){
	top.focus(); 
	window.print();
	self.close();
}
//****************************************
function fHitzak(intCuantas,elemento)
{	txtTestua1=elemento.value;
	txtTestua2="";
	txtTestua3=" ,.;:";
	intHitzak=0;
	var bPalabra = false;
	for(j=0;j<txtTestua1.length;j++)
	{	if(txtTestua3.indexOf(txtTestua1.charAt(j)) != -1)
		{	if (bPalabra)
			{	txtTestua2=txtTestua2+" ";
			}
			bPalabra = false;
		}
		else
		{	bPalabra = true; 
			txtTestua2=txtTestua2+txtTestua1.charAt(j);
		}
	}
	if (txtTestua2.charAt(txtTestua2.length-1)!=" ")
	{	txtTestua2=txtTestua2+" ";
	}
    for (j=0;j<txtTestua2.length;j++)
    {	if (txtTestua2.charAt(j)==" ")
		{	intHitzak++;
		}
    }
    if (txtTestua2.length==1)
    {	intHitzak=0;
    }
    if (intHitzak == "201"){
		maxlimit = elemento.value.length;
		textCounter(maxlimit-1,elemento);
	}
}
//****************************************************
function fValidarCorreo(valor){
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)){return true;} 
	else { alert(fM("EmailFormatoIncorrecto")); return false ;}
}
//*************************************
function textCounter(maxlimit,elemento){	
	if (elemento.value.length > maxlimit){elemento.value = elemento.value.substring(0, maxlimit);}
}
//****************************************
function fCambiarFilaColor (intCual,intCuantos,strColor){
	i=1;
	while (i<=intCuantos){
		eval("fila"+i+"_"+intCual+".bgColor='"+strColor+"'");
		i++;
	}
}
//****************************************************
function fFormatoTexto(Tipo,Donde){
	if (Donde!="" && typeof Donde != 'undefined')
	{	Donde=Donde+".";
		if (eval(Donde+"strFoco!=''"))
		{	strTexto = eval(Donde+"document.selection.createRange().text");
			if (strTexto ==""){alert (fM("SeleccionaTexto"));return;}
			if (Tipo == "b"){eval(Donde+'document.selection.createRange().text = "[b]" + ' + Donde + 'document.selection.createRange().text + "[/b]"');}
			if (Tipo == "u"){eval(Donde+'document.selection.createRange().text = "[u]" + ' + Donde + 'document.selection.createRange().text + "[/u]"');}
			if (Tipo == "k"){eval(Donde+'document.selection.createRange().text = "[k]" + ' + Donde + 'document.selection.createRange().text + "[/k]"');}
			if (Tipo == "-t"){eval(Donde+'document.selection.createRange().text = "[-t]" + ' + Donde + 'document.selection.createRange().text + "[/-t]"');}
			if (Tipo == "t"){eval(Donde+'document.selection.createRange().text = "[t]" + ' + Donde + 'document.selection.createRange().text + "[/t]"');}
			if (Tipo == "+t"){eval(Donde+'document.selection.createRange().text = "[+t]" + ' + Donde + 'document.selection.createRange().text + "[/+t]"');}
			if (Tipo == "sup"){eval(Donde+'document.selection.createRange().text = "[sup]" + ' + Donde + 'document.selection.createRange().text + "[/sup]"');}
			if (Tipo == "sub"){eval(Donde+'document.selection.createRange().text = "[sub]" + ' + Donde + 'document.selection.createRange().text + "[/sub]"');}
			if (Tipo == "center"){eval(Donde+'document.selection.createRange().text = "[center]" + ' + Donde + 'document.selection.createRange().text + "[/center]"');}
			return;
		}
	}
	else
	{	if (strFoco!="")
		{	strTexto = document.selection.createRange().text;
			if (strTexto ==""){alert (fM("SeleccionaTexto"));return;}
			if (Tipo == "b"){document.selection.createRange().text = "[b]" + document.selection.createRange().text + "[/b]";}
			if (Tipo == "u"){document.selection.createRange().text = "[u]" + document.selection.createRange().text + "[/u]";}
			if (Tipo == "k"){document.selection.createRange().text = "[k]" + document.selection.createRange().text + "[/k]";}
			if (Tipo == "-t"){document.selection.createRange().text = "[-t]" + document.selection.createRange().text + "[/-t]";}
			if (Tipo == "t"){document.selection.createRange().text = "[t]" + document.selection.createRange().text + "[/t]";}
			if (Tipo == "+t"){document.selection.createRange().text = "[+t]" + document.selection.createRange().text + "[/+t]";}
			if (Tipo == "sup"){document.selection.createRange().text = "[sup]" + document.selection.createRange().text + "[/sup]";}
			if (Tipo == "sub"){document.selection.createRange().text = "[sub]" + document.selection.createRange().text + "[/sub]";}
			if (Tipo == "center"){document.selection.createRange().text = "[center]" + document.selection.createRange().text + "[/center]";}
			return;
		}
	}
}
//*************************************************
function fInsertarEnlace(Tipo,Donde)
{	
	if (strFoco==""){alert(fM("AukeratuNonNahiDuzuLinkaJarri"));return;}
	strEnlace=document.selection.createRange().text;
	var strTexto=prompt(fM("LinkaTextua"),strEnlace);
	if (strTexto!="" && typeof strTexto!='undefined' && strTexto!=null){
		var strUrl=prompt(fM("LinkaURL"),'http://');
	}
	if (strUrl!="" && typeof strUrl!='undefined' && strUrl!=null){
		if(Tipo=="http"){
			strFoco.focus();
			if (strTexto!="" && typeof strTexto!='undefined' && strTexto!=null ){
				if (document.selection.createRange().text!=''){document.selection.createRange().text="[link=" + strUrl +"=link]" + strTexto + "[/link]";}
				else{strFoco.value+="[link=" + strUrl +"=link]" + strTexto + "[/link]";}
			}
			else{
				document.selection.createRange().text="[link=" + strUrl + "=link]" + strUrl + "[/link]";
			}
		}
	}
}
//****************************************************
function fInsertarSimbolo(Tipo,Donde)
{	if (Donde!="" && typeof Donde != 'undefined')
	{	Donde=Donde+".";
		if (eval(Donde+"strFoco==''"))
		{	alert(fM("SeleccionaDondeInsertarSimbolo"));
			return;
		}
		strAux="";
		switch (Tipo)
		{	case "mm":
				strAux="[+-]";
				break;
			case "c":
				strAux="[sq]";
				break;
		}
		eval(Donde+"strFoco.focus()");
		if (eval(Donde+"document.selection"))
		{	eval(Donde+"document.selection.createRange().text= strAux");
		}
		
		
		else
		{	eval(Donde+"strFoco+=strAux");
		}
	}
	else
	{	if (strFoco=="")
		{	alert(fM("SeleccionaDondeInsertarSimbolo"));
			return;
		}
		strAux="";
		switch (Tipo)
		{	case "mm":
				strAux="[+-]";
				break;
			case "c":
				strAux="[sq]";
				break;
		}
		strFoco.focus();
		if (document.selection)
		{	document.selection.createRange().text= strAux;
		}
		else
		{	strFoco.value+=strAux;
		}
	}
}
//***************************************
function fCambiarDatos(intHotel,intTipo,intPrecio,intBeca){
	strHotel = "";
	switch (intHotel){	
		case 1: strHotel = "RESIDENCIA OLARAIN";break;
		case 2: strHotel = "HOTEL LONDRES Y DE INGLATERRA ****";break;
		case 3: strHotel = "HOTEL NH ARANZAZU ****";break;
		case 4: strHotel = "HOTEL AMARA PLAZA ****";break;
		case 5: strHotel = "HOTEL TRYP ORLY ****";break;
	}
	document.frmAlojamiento.txtHotel.value=strHotel;
	if(document.frmAlojamiento.txtHabitaciones.value==""){
		document.frmAlojamiento.txtHabitaciones.value=1;
	}
	if(intTipo == "1"){
		document.frmAlojamiento.txtIndividuales.value=1;
		document.frmAlojamiento.txtDobles.value=0;
	}else{
		document.frmAlojamiento.txtDobles.value=1;
		document.frmAlojamiento.txtIndividuales.value=0;
	} 
	intLlegada = document.frmAlojamiento.cboLlegada.value;
	intSalida = document.frmAlojamiento.cboSalida.value;
	
	intNoches = parseInt(intSalida) - parseInt(intLlegada);
	document.frmAlojamiento.txtNoches.value=intNoches;
	
	intImporte = intPrecio * intNoches;
	document.frmAlojamiento.txtImporte.value=intImporte;
	
	if (intBeca=="1"){
		intDto = 100 * intNoches;
		document.frmAlojamiento.txtDto.value=intDto;
		intTotal = intImporte - intDto;
	}else{
		intDto = 0;
		intTotal = intImporte;
	}
	if (intTotal < 0){ intTotal = 0;}
	document.frmAlojamiento.txtTotal.value=intTotal;
}
//***************************************
function fCambiarNoches (intBeca){
	intLlegada = document.frmAlojamiento.cboLlegada.value;
	intSalida = document.frmAlojamiento.cboSalida.value;
	
	if (intLlegada > intSalida){alert("Iritsiera eguna ezin da izan irteera eguna bnaino handiagoa.\nLa fecha de llegadao no puede ser mayor que la de salida.\nUK -- La fecha de llegadao no puede ser mayor que la de salida.");return;}
	intNoches = parseInt(intSalida) - parseInt(intLlegada);
	document.frmAlojamiento.txtNoches.value=intNoches;
	
	if (intBeca=="1"){
		intDto = 100 * intNoches;
	}else{
		intDto = 0;
	}
	
	intPrecioI = 0;
	intPrecioD = 0;
	for (a=0;a<10;a++){
		if (document.frmAlojamiento.rdbHotel[a].checked){
			strSelec = document.frmAlojamiento.rdbHotel[a].value;
			intTipo = strSelec.substring(1,2);
			if (intTipo == "1"){
				intPrecioI=strSelec.substring(2,strSelec.length);
				strSelec2 = document.frmAlojamiento.rdbHotel[a-1].value;
				intPrecioD = strSelec2.substring(2,strSelec2.length);
			}else{
				intPrecioD=strSelec.substring(2,strSelec.length);
				strSelec2 = document.frmAlojamiento.rdbHotel[a+1].value;
				intPrecioI = strSelec2.substring(2,strSelec2.length);
			}
		}
	}
	intIndividuales = document.frmAlojamiento.txtIndividuales.value;
	intDobles = document.frmAlojamiento.txtDobles.value;
	intImporte = (intPrecioI * intNoches * intIndividuales) + (intPrecioD * intNoches * intDobles);
	document.frmAlojamiento.txtImporte.value=intImporte;
	if (intBeca == "1"){
		document.frmAlojamiento.txtDto.value = intDto;
	}else{intDto=0;}
	intTotal = intImporte - intDto;
	if (intTotal < 0){ intTotal = 0;}
	document.frmAlojamiento.txtTotal.value=intTotal;
}
//***************************************
function fCambioNumHabitaciones (intBeca){
	intLlegada = document.frmAlojamiento.cboLlegada.value;
	intSalida = document.frmAlojamiento.cboSalida.value;
	
	if (intLlegada > intSalida){alert("Iritsiera eguna ezin da izan irteera eguna bnaino handiagoa.\nLa fecha de llegadao no puede ser mayor que la de salida.\nUK -- La fecha de llegadao no puede ser mayor que la de salida.");return;}
	intNoches = parseInt(intSalida) - parseInt(intLlegada);
	document.frmAlojamiento.txtNoches.value=intNoches;
	
	if (intBeca=="1"){
		intDto = 100 * intNoches;
	}else{
		intDto = 0;
	}
	
	intPrecioI = 0;
	intPrecioD = 0;
	for (a=0;a<10;a++){
		if (document.frmAlojamiento.rdbHotel[a].checked){
			strSelec = document.frmAlojamiento.rdbHotel[a].value;
			intTipo = strSelec.substring(1,2);
			if (intTipo == "1"){
				intPrecioI=strSelec.substring(2,strSelec.length);
				strSelec2 = document.frmAlojamiento.rdbHotel[a-1].value;
				intPrecioD = strSelec2.substring(2,strSelec2.length);
			}else{
				intPrecioD=strSelec.substring(2,strSelec.length);
				strSelec2 = document.frmAlojamiento.rdbHotel[a+1].value;
				intPrecioI = strSelec2.substring(2,strSelec2.length);
			}
		}
	}
	if(document.frmAlojamiento.txtIndividuales.value==""){
		intIndividuales=0;
	}else{
		intIndividuales = document.frmAlojamiento.txtIndividuales.value;
	}
	if(document.frmAlojamiento.txtDobles.value==""){
		intDobles=0;
	}else{
		intDobles = document.frmAlojamiento.txtDobles.value;
	}
	
	intHabitaciones = parseInt(intDobles) + parseInt(intIndividuales);
	document.frmAlojamiento.txtHabitaciones.value=intHabitaciones;
	intImporte = (intPrecioI * intNoches * intIndividuales) + (intPrecioD * intNoches * intDobles);
	document.frmAlojamiento.txtImporte.value=intImporte;
	
	intTotal = intImporte - intDto;
	if (intTotal < 0){ intTotal = 0;}
	document.frmAlojamiento.txtTotal.value=intTotal;
}
//***************************************
function fValidarForm1 (){
	if(document.frmInscripciones1.txtApellido1.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Abizen 1 sartu\n  * Introduzca el apellido 1\n  * Introduce the surname 1");return;}
	if(document.frmInscripciones1.txtApellido2.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Abizena 2 sartu\n  * Introduzca el apellido 2\n  * Introduce the surname 2");return;}
	if(document.frmInscripciones1.txtNombre.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Izena sartu\n  * Introduzca el nombre\n  * Introduce the name");return;}
	if(document.frmInscripciones1.txtDNI.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * N.A.N. sartu\n  * Introduzca el D.N.I.\n  * Introduce the N.I.D.");return;}
	if(document.frmInscripciones1.txtCalle.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Kalea sartu\n  * Introduzca la calle\n  * Introduce the street");return;}
	if(document.frmInscripciones1.txtNum.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * ZK sartu\n  * Introduzca el Nº\n  * Introduce the Nº");return;}
	if(document.frmInscripciones1.txtCiudad.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Hiria sartu\n  * Introduzca la ciudad\n  * Introduce the city");return;}
	if(document.frmInscripciones1.txtCP.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * KP sartu\n  * Introduzca el CP\n  * Introduce the PC");return;}
	if(document.frmInscripciones1.txtProvincia.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Probintzia sartu\n  * Introduzca la provinicia\n  * Introduce the province");return;}
	if(document.frmInscripciones1.txtPais.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Herrialdea sartu\n  * Introduzca el país\n  * Introduce the country");return;}
	
	if(document.frmInscripciones1.txtEmpresa.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Erakunde edo enpresa sartu\n  * Introduzca la intitución o empresa\n  * Introduce the institution or company");return;}
	if(document.frmInscripciones1.txtSeccion.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Departamentua edo atala sartu\n  * Introduzca el departamento o sección\n  * Introduce the dept or section");return;}
	if(document.frmInscripciones1.txtCalleE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Kalea sartu\n  * Introduzca la calle\n  * Introduce the street");return;}
	if(document.frmInscripciones1.txtNumE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * ZK sartu\n  * Introduzca el Nº\n  * Introduce the Nº");return;}
	if(document.frmInscripciones1.txtCiudadE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Hiria sartu\n  * Introduzca la ciudad\n  * Introduce the city");return;}
	if(document.frmInscripciones1.txtCPE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * KP sartu\n  * Introduzca el CP\n  * Introduce the PC");return;}
	if(document.frmInscripciones1.txtProvinciaE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Probintzia sartu\n  * Introduzca la provinicia\n  * Introduce the province");return;}
	if(document.frmInscripciones1.txtPaisE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Herrialdea sartu\n  * Introduzca el país\n  * Introduce the country");return;}
	
	if(document.frmInscripciones1.txtEmail.value==""){alert("E-mail sartu\n  * Introduzca el e-mail\n  * Introduce the e-mail");return;}
	else{if(!fValidarCorreo(document.frmInscripciones1.txtEmail.value)){return;}}
	
	sw=0;
	strDias="";
	for(i=0;i<4;i++){
		if(document.frmInscripciones1.chkDia[i].checked){
			sw=1;
			if(strDias == ""){
				strDias = document.frmInscripciones1.chkDia[i].value;
			}else{
				strDias = strDias + "," + document.frmInscripciones1.chkDia[i].value;
			}
		}
	}
	if (sw==0){
		alert("Adierazi zein egunetan joango zaren kongresura\nIndique los dias que quiere asistir al congreso\nIndicate the days that you will be attending the congress");
		return;
	}
	document.frmInscripciones1.hdnDias.value=strDias;
	document.frmInscripciones1.submit();
}
//***************************************
function fValidarForm2 (){
	if(document.frmInscripciones2.txtRazones.value==""){alert("Arrazoiak sartu\nIntroduzca las razones\nIntroduce the reasons");return;}
	if(document.frmInscripciones2.txtMeritos.value==""){alert("Merituak sartu\nIntroduzca los méritos\nIntroduce the merits");return;}
	document.frmInscripciones2.submit();
}
//***************************************
function fValidarForm3 (){
	sw=0;
	for(i=0;i<10;i++){
		if(document.frmAlojamiento.rdbHotel[i].checked){sw=1;i=10;}
	}
	if (sw==0){
		alert("Hotela aukerate.\nSeleccione el hotel.\nSelect the hotel.");
		return;
	}
	if((document.frmAlojamiento.txtDobles.value=="" || document.frmAlojamiento.txtDobles.value=="0") && (document.frmAlojamiento.txtIndividuales.value=="" || document.frmAlojamiento.txtIndividuales.value=="0")){
		alert("Al menos tienes que introducir una habitación individual o doble.");return;
	}
	document.frmAlojamiento.submit();
}
//****************************************
function fIntro(intAlert) 
{
	if (window.event.keyCode!=13){
		if (((window.event.keyCode>=0) && (window.event.keyCode<=47))||((window.event.keyCode>=58)&& (window.event.keyCode<=64)) || ((window.event.keyCode>=91)&& (window.event.keyCode<95)) || (window.event.keyCode==96) || (window.event.keyCode>122) ) {  
			window.event.keyCode=""; 
			if (intAlert==1){alert("No se permiten caracteres extraños.");return;}
			else{return;}
		}
	}else{fValidarUsuario();}
}
//****************************************
function fVerAlojamiento (intVer){
	if (intVer == "1"){
		MM_showHideLayers ('dAlojamiento','','show');
	}else{
		MM_showHideLayers ('dAlojamiento','','hidden');
		document.frmInscripciones1.rdbAlojamiento[1].checked=true;
	}
}
//****************************************
function fValidarAlojamiento (){
	if(document.frmAlojamiento.txtApellido1.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Abizen 1 sartu\n  * Introduzca el apellido 1\n  * Introduce the surname 1");return;}
	if(document.frmAlojamiento.txtApellido2.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Abizena 2 sartu\n  * Introduzca el apellido 2\n  * Introduce the surname 2");return;}
	if(document.frmAlojamiento.txtNombre.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Izena sartu\n  * Introduzca el nombre\n  * Introduce the name");return;}
	if(document.frmAlojamiento.txtDNI.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * N.A.N. sartu\n  * Introduzca el D.N.I.\n  * Introduce the N.I.D.");return;}
	if(document.frmAlojamiento.txtCalle.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Kalea sartu\n  * Introduzca la calle\n  * Introduce the street");return;}
	if(document.frmAlojamiento.txtNum.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * ZK sartu\n  * Introduzca el Nº\n  * Introduce the Nº");return;}
	if(document.frmAlojamiento.txtCiudad.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Hiria sartu\n  * Introduzca la ciudad\n  * Introduce the city");return;}
	if(document.frmAlojamiento.txtCP.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * KP sartu\n  * Introduzca el CP\n  * Introduce the PC");return;}
	if(document.frmAlojamiento.txtProvincia.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Probintzia sartu\n  * Introduzca la provinicia\n  * Introduce the province");return;}
	if(document.frmAlojamiento.txtPais.value==""){alert("DATU PERTSONALAK / DATOS PERSONALES / PERSONAL DETAILS\n  * Herrialdea sartu\n  * Introduzca el país\n  * Introduce the country");return;}
	
	if(document.frmAlojamiento.txtEmpresa.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Erakunde edo enpresa sartu\n  * Introduzca la intitución o empresa\n  * Introduce the institution or company");return;}
	if(document.frmAlojamiento.txtSeccion.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Departamentua edo atala sartu\n  * Introduzca el departamento o sección\n  * Introduce the dept or section");return;}
	if(document.frmAlojamiento.txtCalleE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Kalea sartu\n  * Introduzca la calle\n  * Introduce the street");return;}
	if(document.frmAlojamiento.txtNumE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * ZK sartu\n  * Introduzca el Nº\n  * Introduce the Nº");return;}
	if(document.frmAlojamiento.txtCiudadE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Hiria sartu\n  * Introduzca la ciudad\n  * Introduce the city");return;}
	if(document.frmAlojamiento.txtCPE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * KP sartu\n  * Introduzca el CP\n  * Introduce the PC");return;}
	if(document.frmAlojamiento.txtProvinciaE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Probintzia sartu\n  * Introduzca la provinicia\n  * Introduce the province");return;}
	if(document.frmAlojamiento.txtPaisE.value==""){alert("DATU PROFESIONALAK / DATOS PROFESIONALES / PROFESSIONAL DETAILS\n  * Herrialdea sartu\n  * Introduzca el país\n  * Introduce the country");return;}
	
	if(document.frmAlojamiento.txtEmail.value==""){alert("E-mail sartu\n  * Introduzca el e-mail\n  * Introduce the e-mail");return;}
	else{if(!fValidarCorreo(document.frmAlojamiento.txtEmail.value)){return;}}
	
	sw=0;
	for(i=0;i<10;i++){
		if(document.frmAlojamiento.rdbHotel[i].checked){sw=1;i=10;}
	}
	if (sw==0){
		alert("Hotela aukerate.\nSeleccione el hotel.\nSelect the hotel.");
		return;
	}
	if((document.frmAlojamiento.txtDobles.value=="" || document.frmAlojamiento.txtDobles.value=="0") && (document.frmAlojamiento.txtIndividuales.value=="" || document.frmAlojamiento.txtIndividuales.value=="0")){
		alert("Al menos tienes que introducir una habitación individual o doble.");return;
	}
		
	document.frmAlojamiento.submit();
}