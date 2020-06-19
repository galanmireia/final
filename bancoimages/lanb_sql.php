<?function fSQLArgazkiakZerrendatu()
{	$strSelect = " select t992_codigo,t992_imagenp,t992_imagenm,t992_imageng,t992_imagenm,t992_textoes,t992_textoeu,t992_textouk from t992_imagen order by t992_codigo ";
return $strSelect;
}
function fSQLArgazkiHandiena(){
$strSelect="select max(t992_codigo)as HANDIENA from t992_imagen";
return $strSelect;
}
function fSQLArgazkiaSartu($iintKodea,$istrTextoes,$istrTextoeu,$istrTextouk,$istrImagenP,$istrImagenG,$istrImagenM){
$strInsert="Insert into t992_imagen (t992_codigo,t992_textoes,t992_textoeu,t992_textouk,t992_imagenp,t992_imageng,t992_imagenm) values(".$iintKodea.",'".$istrTextoes."','".$istrTextoeu."','".$istrTextouk."','".$istrImagenP."','".$istrImagenG."','".$istrImagenM."')";
return $strInsert;
}
function fSQLArgazkiaAldatu($iintKodea,$istrTextoes,$istrTextoeu,$istrTextouk,$istrImagenP,$istrImagenG,$istrImagenM){
$strUpdate= " update t992_imagen set t992_textoes='".$istrTextoes."',t992_textoeu='".$istrTextoeu."',t992_textouk='".$istrTextouk."'";
if ($istrImagenP!="")
{	$strUpdate=$strUpdate.",t992_imagenp='".$istrImagenP."'";
}
if ($istrImagenG!="")
{	$strUpdate=$strUpdate.",t992_imageng='".$istrImagenG."'";
}
if ($istrImagenM!="")
{	$strUpdate=$strUpdate.",t992_imagenm='".$istrImagenM."'";
}
$strUpdate = $strUpdate . "where t992_codigo=".$iintKodea;
return $strUpdate;
}
function fSQLArgazkiarenDatuak($iintKodea){
$strSelect = "select t992_codigo,t992_imagenp,t992_imageng,t992_imagenm,t992_textoes,t992_textoeu,t992_textouk from t992_imagen where t992_codigo=".$iintKodea;
return $strSelect;
}
function fSQLArgazkiaEzabatu($iintKodea){
$strDelete = " Delete from t992_imagen where t992_codigo=".$iintKodea;
return $strDelete;
}
?>
