function fValidarUsuario (){document.frmUser.submit();}
//******************************
function fValidarFechaLimite (){
	for (i=1;i<=3;i++){
		strFecha1 = eval('document.frmFechas.txtFecha1'+i+'.value');
		strFecha2 = eval('document.frmFechas.txtFecha2'+i+'.value');
		strFecha3 = eval('document.frmFechas.txtFecha3'+i+'.value');
		if (strFecha1 == "" || strFecha2 == "" || strFecha3 == ""){
			alert("Debes rellenar TODAS las fecha.");return;
		}
	}
	document.frmFechas.submit();
}
//**********************************************
function fCerrarSesion(){location.href="../index.php?ini=2";}