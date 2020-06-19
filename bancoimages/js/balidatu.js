function fArgazkiDatuakBalidatu(istrKodea){
	strTextoes = document.frmArgazkia.txtTextoes.value;
	if (strTextoes=="") {alert("Introduzca el texto en español");document.frmArgazkia.txtTextoes.focus();return;}
	strTextoeu = document.frmArgazkia.txtTextoeu.value;
	if (strTextoeu=="") {alert("Introduzca el texto en euskera");document.frmArgazkia.txtTextoeu.focus();return;}
	strTextouk = document.frmArgazkia.txtTextouk.value;
	if (strTextouk=="") {alert("Introduzca el texto en inglés");document.frmArgazkia.txtTextouk.focus();return;}
	if (istrKodea=="")
	{	strTexto=document.frmArgazkia.txtIrudiag.value;
		if (strTexto=="") {alert("Introduzca la imagen");return;}
	}
	document.frmArgazkia.submit();
}
//****************************************
function fZiurArgazkiaEzabatu(){
	intZenbat=document.frmLista.Zenbat.value;
	i=0;
	sw=0;
	strArgazkiak = "";
	if (intZenbat=="1"){
		if (document.frmLista.chkImagen.checked){
			strArgazkiak = document.frmLista.chkImagen.value;
			sw=1;
		}
	}else{
		while (i<intZenbat){
			if (document.frmLista.chkImagen[i].checked){
				if(sw==0){
					strArgazkiak = document.frmLista.chkImagen[i].value;
				}else{
					strArgazkiak = strArgazkiak + ',' + document.frmLista.chkImagen[i].value;
				}
				sw=1;
			}
			i++;
		}
	}
	document.frmLista.hdnArgazkiak.value = strArgazkiak;
	if (sw=="1"){
		if (confirm("¿Está seguro/a que desea borrar las imágenes seleccionadas?")){document.frmLista.submit();}
		else{return;}
	}else{alert("Seleccione las imágenes que desea borrar");return;}
}
//****************************************
function fZiurArgazkiBatEzabatu(iintKodea){if (confirm("¿Está seguro/a que desea borrar esta imagen?")){location.href='index.php?pg=7&idI='+iintKodea}}
//****************************************
function fValidarBuscar (){
	strData = document.frmBuscar.txtData.value;
	if (strData!=""){if(!fValidarDia(strData)){return;}}
	document.frmBuscar.submit();
}
//****************************************
function fBilatzaileaGarbitu(intMant){
	if (intMant == 1){
		document.frmBuscar.txtLead.value="";
		document.frmBuscar.txtSinadura.value="";
	}
	document.frmBuscar.txtTitulua.value="";
	document.frmBuscar.txtData.value="";
	return;
}
//****************************************
function fHistorikoBilatzaileaBalidatu (){
	strHasieraData = document.frmBuscar.txtHasieraData.value;
	strBukaeraData = document.frmBuscar.txtBukaeraData.value;
	if (strHasieraData!=""){if(!fValidarDia(strHasieraData)){return;}}
	if (strBukaeraData!=""){if(!fValidarDia(strBukaeraData)){return;}}
	if (strHasieraData == "" && strBukaeraData != ""){alert("La fecha de inicio tiene que ser menor que la final");return;}
	if(!fDataBalidatu(strHasieraData,strBukaeraData)){return;}
	document.frmBuscar.submit();
}
//****************************************
function fHistorikoBilatzaileaGarbitu(strIdioma){
	document.frmBuscar.txtTextua.value="";
	document.frmBuscar.txtHasieraData.value="";
	document.frmBuscar.txtBukaeraData.value="";
	return;
}