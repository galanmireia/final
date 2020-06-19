<?function sArgazkiZerrenda(){
$strSustraia = "../../";
if(isset($_GET["pag"])){$strPos=$_GET["pag"];}else{$strPos=1;}
AbreConexion();
$strSelect=fSQLArgazkiakZerrendatu();
$objrow=EJECUTA_SELECT($strSelect);
$intLerroTotala=mysql_num_rows($objrow);
if (intval($intLerroTotala)<intval($strPos))
{	$strPos=1;
}
$intLerroak=20;
$strLink="index.php?pg=1";?>
<br>
<br>
<table border="0" width="95%" align="center" cellpadding="0" cellspacing="0">
<form name="frmLista" id="frmLista" action="index.php?pg=4" method="post">
<tr><td colspan="3" class="textogn" align="center">Gestor de imágenes:&nbsp;Listado de imángenes</td></tr><?
$cont=0;
if (mysql_num_rows($objrow)!=0){
$row=mysql_fetch_assoc($objrow);?>
<tr><td colspan="3" height="5%" align="right"><table><?sGeziakPintatu($strSustraia,$strPos,$intLerroTotala,$intLerroak,$strLink,0);?></table></td></tr>
<tr><td colspan="3" height="1" width="100%" bgcolor="#737886"></td></tr>
<?$row=mysql_data_seek($objrow,$strPos-1);
$j=0;
$intKolumnak = 3;
$strColorOut = "#FFFFFF";
$strColorOver = "#FFFAE7";
while ($row=mysql_fetch_assoc($objrow)){
if ($cont<=$intLerroak){
$j=$j+1;
$intKodea=$row["t992_codigo"];
$strImagen=$row["t992_imagenp"];
$strTexto=$row["t992_textoes"];
$strTexto = fQuitarFormatoDelTexto($strTexto);
if (strlen($strTexto)>75){
$strTexto = substr($strTexto,0,75) . "...";
}else{
$strTexto = $strTexto;
}
$strLink = "javascript:location.href='index.php?pg=2&idI=".$intKodea."'";?>
<tr>
<td name="fila1_<?echo $j;?>" id="fila1_<?echo $j;?>" onMouseOver="fCambiarFilaColor('<?echo $j;?>','<?echo $intKolumnak;?>','<?echo $strColorOver;?>');this.style.cursor='hand'" onMouseOut="fCambiarFilaColor('<?echo $j;?>','<?echo $intKolumnak;?>','<?echo $strColorOut;?>');"><input type="checkbox" name="chkImagen" id="chkImagen" value="<?echo $intKodea;?>"></td>
<td class="textom" name="fila2_<?echo $j;?>" id="fila2_<?echo $j;?>" onMouseOver="fCambiarFilaColor('<?echo $j;?>','<?echo $intKolumnak;?>','<?echo $strColorOver;?>');this.style.cursor='hand'" onMouseOut="fCambiarFilaColor('<?echo $j;?>','<?echo $intKolumnak;?>','<?echo $strColorOut;?>');" onClick="<?echo $strLink;?>"><?echo $strImagen;?></td>
<td class="textom" name="fila3_<?echo $j;?>" id="fila3_<?echo $j;?>" onMouseOver="fCambiarFilaColor('<?echo $j;?>','<?echo $intKolumnak;?>','<?echo $strColorOver;?>');this.style.cursor='hand'" onMouseOut="fCambiarFilaColor('<?echo $j;?>','<?echo $intKolumnak;?>','<?echo $strColorOut;?>');" onClick="<?echo $strLink;?>"><?echo $strTexto;?></td>
</tr>
<?$cont=$cont + 1;
}
}?>
<input type="hidden" name="Zenbat" id="Zenbat" value="<?echo $cont;?>">
<input type="hidden" name="hdnArgazkiak" id="hdnArgazkiak" value>
<?}else{?>
<tr><td class="textomn" align="center">&nbsp;</td></tr>
<tr><td class="textomn" align="center">No se han encontrado imágenes</td></tr><?
}?>
</form>
</table>
<?CierraConexion();?>
<table width="100%" cellpadding="0" cellspacing="0" align="center">
<tr><td colspan="4" class="textom">&nbsp;</td></tr>
<tr>
<td align="center" width="25%"><?Boton ($strSustraia,"index.php?pg=2","Nueva","Nueva",0,3);?></td>
<?if ($cont!="0"){?>
<td align="center" width="25%"><?Boton ($strSustraia,"javascript:fZiurArgazkiaEzabatu();","Borrar","Borrar",0,2);?></td>
<?}?>
</tr>
</table>
<?}
function sArgazkiBerriaAldatu(){
$strSustraia = "../../";
if(isset($_GET["idI"])){$intKodea=$_GET["idI"];}else{$intKodea="";}
AbreConexion();
if ($intKodea!=""){
$strSelect=fSQLArgazkiarenDatuak($intKodea);
$objrow=EJECUTA_SELECT($strSelect);
if ($row=mysql_fetch_assoc($objrow))
{	$strTextoes=$row["t992_textoes"];
$strTextoeu=$row["t992_textoeu"];
$strTextouk=$row["t992_textouk"];
$strImagenp=$row["t992_imagenp"];
$strImageng=$row["t992_imageng"];
$strImagenm=$row["t992_imagenm"];
}
}else{
$strTextoes="";
$strTextoeu="";
$strTextouk="";
$strImagenp="";
$strImageng="";
$strImagenm="";
}?>
<table border="0" width="95%" cellpadding="0" cellspacing="0" topmargin="0" leftmargin="0" align="center">
<form name="frmArgazkia" id="frmArgazkia" method="post" enctype="multipart/form-data" action="index.php?pg=3">
<input type="hidden" name="Kodea" id="Kodea" value="<?echo $intKodea;?>">
<tr><td colspan="2" class="textom">&nbsp;</td></tr>
<tr><td colspan="2" class="textogn" align="center">Gestor de imágenes:&nbsp;
<?if ($intKodea!=""){
echo "Modificar imagen";
}else{
echo "Nueva imagen";
}?>
</td></tr>
<tr><td colspan="2" height=10></td></tr>
<tr>
<td><font class="textom">texto español:</font></td>
<td><input onclick="strFoco=this" class="textoinput" type="text" name="txtTextoes" id="txtTextoes" size="100" value="<?echo $strTextoes;?>" maxlength="200"></td>
</tr>
<tr>
<td><font class="textom">texto euskera:</font></td>
<td><input onclick="strFoco=this" class="textoinput" type="text" name="txtTextoeu" id="txtTextoeu" size="100" value="<?echo $strTextoeu;?>" maxlength="200"></td>
</tr>
<tr>
<td><font class="textom">texto inglés:</font></td>
<td><input onclick="strFoco=this" class="textoinput" type="text" name="txtTextouk" id="txtTextouk" size="100" value="<?echo $strTextouk;?>" maxlength="200"></td>
</tr>
<?if ($strImagenp!=""){?>
<tr><td colspan="2"><img src="<?echo $strSustraia;?>bancoimages/fotos/<?echo $strImagenp;?>" height="3"></td></tr>
<tr>
<td class="textom">&nbsp;</td>
<td>
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tr>
<td width="30%"><img src="<?echo $strSustraia;?>bancoimages/fotos/<?echo $strImagenp;?>" height="80" width=80></td>
</tr>
</table>
</td>
</tr>
<tr><td colspan="2"><img src="<?echo $strSustraia;?>images/px_t.gif" height="3"></td></tr>
<?}?>
<tr>
<td><font class="textom">foto grande</font></td>
<td class=Textom><input class="textoinput" type="file" name="txtIrudiag" id="txtIrudiag" size="35"><?
if ($strImageng!="")
{	?>&nbsp;&nbsp;&nbsp;<a href="<?echo $strSustraia;?>bancoimages/fotos/<?echo $strImageng;?>" target="_blank"><?echo $strImageng;?></a><?
}
?></td>
</tr>
<tr>
<td></td>
<td class=textop><i><?echo strtoupper(sEscribir("Gomendatutako"));?> <b>Tamaño máximo</b>: 2Mb</i></td>
</tr>
</form>
</table>
<table align="center" width="100%">
<tr><td colspan="4" height=10></td></tr>
<tr>
<td width="25%" align="center"><?Boton ($strSustraia,"javascript:fArgazkiDatuakBalidatu('".$intKodea."');","Guardar","Guardar",0,1);?></td>
<td width="25%" align="center"><?Boton ($strSustraia,"index.php?pg=1","Volver","Volver",0,1);?></td>
<?if ($intKodea != ""){?>
<td width="25%" align="center"><?Boton ($strSustraia,"javascript:fZiurArgazkiBatEzabatu(".$intKodea.");","Borrar","Borrar",0,2);?></td>
<td width="25%" align="center"><?Boton ($strSustraia,"index.php?pg=2","Nueva","Nueva",0,3);?></td>
<?}?>
</tr>
</table>
<?CierraConexion();
}
function sArgazkiZerrendaWeb(){
$strSustraia = "../";
if(isset($_GET["pag"])){$strPos=$_GET["pag"];}else{$strPos=1;}
AbreConexion();
$strSelect=fSQLArgazkiakZerrendatu();
$objrow=EJECUTA_SELECT($strSelect);
$intLerroTotala=mysql_num_rows($objrow);
if (intval($intLerroTotala)<intval($strPos)){
$strPos=1;
}
$intLerroak=20;
$strLink="index.php?a=a";?>
<div name="divSala" id="divSala" style="height:350px;width:590px;overflow:auto">
<table border="0" width="95%" cellpadding="0" cellspacing="0">
<tr><td height=20></td></tr>
<tr><td class=textogn>
<table cellpadding=0 width=100% cellspacing=0 border=0>
<tr>
<td width="250" class="textogn"><?echo sEscribir("BancoImagenes");?></font></td>
<td width="500" align="center">
<table>
<tr><?sGeziakPintatu("../",$strPos,$intLerroTotala,$intLerroak,$strLink,0);?></tr>
</table>
</td>
</tr>
</table>
</td></tr>
<tr><td height=5></td></tr>
<tr>
<td height=5>
<table cellpadding="5" cellspacing="0" width="452">
<?if (mysql_num_rows($objrow)!=0){
$row=mysql_data_seek($objrow,$strPos-1);
$cont=0;
if ($_SESSION["einstein_idioma"]!="uk" && $_SESSION["einstein_idioma"]!="eu" && $_SESSION["einstein_idioma"]!="es")
{	$_SESSION["einstein_idioma"]="uk";
}
$strIdioma=$_SESSION["einstein_idioma"];
$i=1;
while ($row=mysql_fetch_assoc($objrow)){
if ($cont<$intLerroak){
if ($i % 4==1)
{	?><tr><?
}
$intKodea=$row["t992_codigo"];
$strIrudia=$row["t992_imagenp"];
$strTexto=$row["t992_texto".$strIdioma];?>
<td valign=top align="middle" width=113>
<table cellpadding="0" cellspacing="0">
<tr><td><img src="fotos/<?echo $strIrudia;?>" width="90" border=0 title="<?echo fQuitarComas($strTexto);?>"></td></tr>
<tr><td align="right"><a href="index.php?pg=1&idI=<?echo $intKodea;?>"><img src="../images/ico_lupa.gif" border="0"></a></td></tr>
</table>
</td><?
if ($i % 4==0)
{	?></tr><?
}
$i++;
}
$cont = $cont +1;
}
$i--;
$sw=0;
while ($i%4!=0)
{	$i++;
$sw=1;
?>
<td valign=top align="middle" width=113>&nbsp;</td><?
}
if ($sw==1)
{	?></tr><?$sw=1;
}
}else{?>
<tr><td align=center height=50 valign=middle class=textomn><?echo sEscribir("NoHayImagenes");?></td></tr>
<?}?>
</table>
</td>
</tr>
</table>
</div>
<?CierraConexion();
}
function fArgazkiaIkusi()
{	$strSustraia="../";
AbreConexion();
if (isset($_GET["idI"]))
{	$intKodea=$_GET["idI"];
}
else
{	$intKodea=0;
}
$strSelect = fSQLArgazkiarenDatuak($intKodea);
$objrow=EJECUTA_SELECT($strSelect);
if(mysql_num_rows($objrow)!=0){
if ($_SESSION["einstein_idioma"]!="uk" && $_SESSION["einstein_idioma"]!="eu" && $_SESSION["einstein_idioma"]!="es")
{	$_SESSION["einstein_idioma"]="uk";
}
$strIdioma=$_SESSION["einstein_idioma"];
$row=mysql_fetch_assoc($objrow);
$intKodea = $row["t992_codigo"];
$intKodea=$row["t992_codigo"];
$strIrudia=$row["t992_imagenm"];
$strImageng=$row["t992_imageng"];
$strTexto=$row["t992_texto".$strIdioma];
$strTexto = VisualizarWeb ($strTexto,$strSustraia);?>
<table border=0 width=95% cellpadding=0 cellspacing=0>
<tr><td height=10></td></tr>
<tr><td class=textomj valign=middle align=left>
<div name="divSala" id="divSala" style="height:300px;width:560px;overflow:auto">
<table cellpadding="0" cellspacing="0" height="300" width="560">
<tr>
<td align="left" valign="middle"><?
?>
<a href="<?echo $strSustraia;?>bancoimages/fotos/<?echo $strImageng;?>" target="_blank"><img border="0" alt=":: Descargar foto | Irudia deskargatu | Download image ::" src="<?echo $strSustraia;?>bancoimages/fotos/<?echo $strIrudia;?>"></a>
</td>
</tr>
</table>
</div>
</td></tr>
<tr><td height=10 class="textom" align="center"><?echo $strTexto;?></td></tr>
<tr><td align="left"><?Boton ($strSustraia,"javascript:history.back();",sEscribir("Volver"),sEscribir("Volver"),0,1);?></td></tr>
<tr><td align="right">&nbsp;</td></tr>
</table><?
}else{?>
<script>
alert("<?echo sEscribir("ImagenNoEncontrada");?>");
history.back();
</script>
<?}
CierraConexion();
}
?>
