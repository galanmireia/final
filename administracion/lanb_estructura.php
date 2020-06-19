<?function sLoginPass (){?>
<table valign=middle align="center" CELLPADDING="0" CELLSPACING="0" topmargin="0" leftmargin="0" border="0">
<form name="frmUser" id="frmUser" method=post action=index.php?pg=1>
<tr>
<td class=textomn>Login:</td>
<td><input type="text" class=textoinput name=txtUser id=txtUser size=15 onKeyPress="javascript:fIntro();"></td>
</tr>
<tr>
<td class=textomn>Password:&nbsp;&nbsp;</td>
<td><input type="password" class=textoinput name=txtPass id=txtPass size=15 onKeyPress="javascript:fIntro();"></td>
</tr>
<tr><td colspan=2 height=10></td></tr>
<tr><td colspan=2 align=center><?Boton ("../","javascript:fValidarUsuario();","OK","OK",0,1);?></td></tr>
</form>
</table>
<?}
function sEstructuraAdmin (){?>
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0">
<tr><td colspan="2" height="17" bgcolor="#FFCC00">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="75%" class="titulog">&nbsp;Administración</td>
<td width="20%" align="right" class="textomnb"><i>cerrar sesión</i>&nbsp;&nbsp;<a href="javascript:fCerrarSesion();"><img src="images/cerrarsesion.gif" WIDTH="15" HEIGHT="15" border="0"></a>&nbsp;&nbsp;</td>
<td width=5%></td>
</tr>
</table>
</td></tr>
<tr>
<td width="170" valign="top" height="806"><?sMenuAdministracion();?></td>
<?if($_SESSION["einstein_nivel"] == "1"){
$strUrl = "index.php?pg=3";
}elseif($_SESSION["einstein_nivel"] == "2"){
$strUrl = "../noticias/mant/index.php?pg=1";
}elseif($_SESSION["einstein_nivel"] == "3"){
$strUrl = "../noticias/index.php?pg=1";
}?>
<script>
intAlto="100%";
intAncho=screen.width-205;
if (navigator.appName=='Netscape')
{	if(navigator.userAgent.lastIndexOf("Safari")>-1)
{	intAlto=screen.height-155;
}else{intAlto=screen.height-160;}
}
if (navigator.appName=='Microsoft Internet Explorer' && (navigator.appVersion.indexOf('MSIE 5.0')!=-1 || navigator.appVersion.indexOf('MSIE 4.')!=-1))
{
intAlto=screen.height-256;
}
document.write('<td width="100%" height="100%" valign="top"><iframe height="'+intAlto+'" width="'+intAncho+'" name="einstein_admin_contenido" id="einstein_admin_contenido" src="<?echo $strUrl;?>" frameborder="0" marginwidth="0" marginheight="0" scrolling="yes"></iframe></td>')
</script>
</tr>
</table>
<?}
function sBienvenido (){?>
<table border="0" align=center valign=middle cellpadding="0" cellspacing="0">
<tr><td class=textogn>Bienvenido a la administración</td></tr>
</table>
<?}
function sMenuAdministracion (){?>
<table border="0" width="170" height="100%" cellpadding="0" cellspacing="0" bgcolor="e8e8e8">
<tr><td valign=top>
<table width=100% cellpadding="0" cellspacing="0">
<?if($_SESSION["einstein_nivel"] == "1"){?>
<tr><td height=20 class=textomnb bgcolor="000000" onMouseOver="style:bgColor='#666666';this.style.cursor='hand';" onMouseOut="style:bgColor='#000000'" onClick="window.open('index.php?pg=4','einstein_admin_contenido')">&nbsp;&nbsp;Descargar datos</td></tr>
<tr><td height=1 bgcolor="FFFFFF"></td></tr>
<tr><td height=20 class=textomnb bgcolor="000000" onMouseOver="style:bgColor='#666666';this.style.cursor='hand';" onMouseOut="style:bgColor='#000000'" onClick="window.open('index.php?pg=5','einstein_admin_contenido')">&nbsp;&nbsp;Fechas límite</td></tr>
<?}elseif($_SESSION["einstein_nivel"] == "2"){?>
<tr><td height=20 class=textomnb bgcolor="000000" onMouseOver="style:bgColor='#666666';this.style.cursor='hand';" onMouseOut="style:bgColor='#000000'" onClick="window.open('../bancoimages/mant/index.php?pg=1','einstein_admin_contenido')">&nbsp;&nbsp;Banco de imágenes</td></tr>
<tr><td height=20 class=textomnb bgcolor="000000" onMouseOver="style:bgColor='#666666';this.style.cursor='hand';" onMouseOut="style:bgColor='#000000'" onClick="window.open('../noticias/mant/index.php?pg=1','einstein_admin_contenido')">&nbsp;&nbsp;Gestor de noticias</td></tr>
<?}?>
</table>
</td></tr>
</table>
<?}
function sListaDescargas (){
AbreConexion ();?>
<table border="0" width="95%" align=center cellpadding="0" cellspacing="0">
<tr><td colspan=2 height=20></td></tr>
<tr><td colspan=2 align=center class=textogn>Descargas realizadas</td></tr>
<tr><td colspan=2 height=20></td></tr>
<?$strSelect = fSQLListaDescargados ();
$objrow = EJECUTA_SELECT ($strSelect);
if(mysql_num_rows($objrow)==0){?>
<tr><td class=textomn align=center>No se han encontrado registros</td></tr>
<?}else{
$sw=0;
while($row=mysql_fetch_assoc($objrow)){
$strFecha = $row["t758_fechadescarga"];
$intCuantos = $row["CUANTOS"];
if(isset($strFecha) && $strFecha != ""){
if ($sw=="0"){?>
<tr><td colspan=2 class=textomn><u>Historial de descargas</u></td></tr>
<tr><td height=5></td></tr>
<?}?>
<tr>
<td class=textom width=10%><?echo sObtenerFechaVer($strFecha);?>: </td>
<td class=textom><b><?echo $intCuantos;?></b> registro(s)</td>
</tr>
<?$sw++;
}else{?>
<tr><td colspan=2 class=textomn>Registros sin descargar: <?echo $intCuantos;?></td></tr>
<tr><td colspan=2><?Boton ("../","javascript:window.open('index.php?pg=4','einstein_admin_contenido');window.open('descargar.php','descarga');","descargar datos","descargar datos",0,1);?></td></tr>
<tr><td height=20></td></tr>
<?}
}
}?>
</table>
<?CierraConexion();
}
function sFechasLimites (){
AbreConexion ();?>
<table border="0" width="95%" align=center cellpadding="0" cellspacing="0">
<tr><td colspan=4 height=20></td></tr>
<tr><td colspan=4 align=center class=textogn>Modificar fechas límite</td></tr>
<tr><td colspan=4 height=20></td></tr>
<form name="frmFechas" id="frmFechas" method=post action=index.php?pg=6>
<?$strSelect = fSQLFechasLimite ();
$objrow = EJECUTA_SELECT ($strSelect);?>
<tr>
<td></td>
<td class=textom>Euskera</td>
<td class=textom>Castellano</td>
<td class=textom>Inglés</td>
</tr>
<?$cont=1;
while($row=mysql_fetch_assoc($objrow)){
$strFecha1 = $row["t761_fecha1"];
$strFecha2 = $row["t761_fecha2"];
$strFecha3 = $row["t761_fecha3"];
$intTipo = $row["t761_tipo"];?>
<tr>
<?if ($intTipo == "1"){?>
<td class=textomn>Boletín de pre-inscripción</td>
<?}elseif ($intTipo == "2"){?>
<td class=textomn>Boletín de solicitud de beca</td>
<?}elseif ($intTipo == "3"){?>
<td class=textomn>Boletín de alojamiento</td>
<?}?>
<td class=textom><input type="text" name="txtFecha1<?echo $cont;?>" id="txtFecha1<?echo $cont;?>" class=textoinput size=35 value="<?echo $strFecha1;?>"></td>
<td class=textom><input type="text" name="txtFecha2<?echo $cont;?>" id="txtFecha2<?echo $cont;?>" class=textoinput size=35 value="<?echo $strFecha2;?>"></td>
<td class=textom><input type="text" name="txtFecha3<?echo $cont;?>" id="txtFecha3<?echo $cont;?>" class=textoinput size=35 value="<?echo $strFecha3;?>"></td>
</tr>
<?$cont++;
}?>
</form>
<tr><td colspan=4 height=15></td></tr>
<tr>
<td colspan=2 align=center><?Boton ("../","javascript:fValidarFechaLimite();","guardar","guardar",0,1);?></td>
<td colspan=2 align=center><?Boton ("../","index.php?pg=5","cancelar","cancelar",0,1);?></td>
</tr>
</table>
<?CierraConexion();
}?>
