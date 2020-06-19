<?function sEdukia(){
if ($_SESSION["einstein_nivel"]=="2"){
if(isset($_GET["pg"])){$intPg=$_GET["pg"];}else{$intPg=0;}
switch ($intPg){
case "1": sArgazkiZerrenda();break;
case "2": sArgazkiBerriaAldatu();break;
case "3": sArgazkiaGorde();break;
case "4": sArgazkiakEzabatu();break;
case "7": fArgazkiBatEzabatu();break;
}
}
}
function sEdukiWeb(){
if(isset($_GET["pg"])){$intPg=$_GET["pg"];}else{$intPg=0;}
if(isset($_SESSION["einstein_privado"]) && $_SESSION["einstein_privado"] != ""){
switch ($intPg){
case "1": fArgazkiaIkusi();break;
default: sArgazkiZerrendaWeb();break;
}
}
}
function sArgazkiaGorde() {
if(isset($_POST["Kodea"])){$intKodea=$_POST["Kodea"];}else{$intKodea="";}
$strTextoes=$_POST["txtTextoes"];
$strTextoeu=$_POST["txtTextoeu"];
$strTextouk=$_POST["txtTextouk"];
$strError = "";
$strError = ChequearTexto($strTextoes,"",200,1,"","Texto en español",$strError);
$strError = ChequearTexto($strTextoeu,"",200,1,"","Texto en euskera",$strError);
$strError = ChequearTexto($strTextouk,"",200,1,"","Texto en inglés",$strError);
if ($strError == ""){
$strTextoes = PHPentities ($strTextoes);
$strTextoeu = PHPentities ($strTextoeu);
$strTextouk = PHPentities ($strTextouk);
$intBerria=0;
AbreConexion();
if ($intKodea==""){
$intBerria=1;
$strSelect=fSQLArgazkiHandiena();
$objrow=EJECUTA_SELECT($strSelect);
$row=mysql_fetch_assoc($objrow);
$intHandiena=$row["HANDIENA"];
if (!isset($intHandiena) || $intHandiena==""){
$intKodea=1;
}else{
$intKodea=intval($intHandiena) + 1;
}
$strIrudiaEzabatu="";
$strIrudiaEzabatu2="";
}else{
$strSelect=fSQLArgazkiarenDatuak($intKodea);
$objrow=EJECUTA_SELECT($strSelect);
if ($row=mysql_fetch_assoc($objrow))
{	$strIrudiaEzabatu=$row["t992_imagenp"];
$strIrudiaEzabatu2=$row["t992_imageng"];
}
}
$strRutaUpload=fDameRuta("S_BancoImages");
$strIzenBerria = "t_".$intKodea."_";
$strIzenBerria2 = $intKodea."_";
$strIrudiag = fSubirArchivoServidor("txtIrudiag",$strRutaUpload,"2408000","0",",jpg,gif,jpeg,bmp,png,",$strIzenBerria2,"1",$strIrudiaEzabatu);
if ($strIrudiag == "ERROR"){
$strIrudiag = "";?>
<script>alert('Ha habido un problema al intertar subir la imagen grande.');</script>
<?}
if ($strIrudiag != "")
{	$imageEditor = new ImageEditor($strIrudiag, $_SERVER['DOCUMENT_ROOT'].fDameRuta("a_bancoimages"));
$imageEditor2 = new ImageEditor($strIrudiag, $_SERVER['DOCUMENT_ROOT'].fDameRuta("a_bancoimages"));
$w = 80;
$h = 80;
$imageEditor->thumbnail($w, $h,217,228,234);
$strIrudiap="p_".$strIrudiag;
$imageEditor->outputFile($strIrudiap,$_SERVER['DOCUMENT_ROOT'].fDameRuta("a_bancoimages"));
$w = 540;
$h = 280;
$imageEditor2->thumbnail($w, $h,217,228,234);
$strIrudiam="m_".$strIrudiag;
$imageEditor2->outputFile($strIrudiam,$_SERVER['DOCUMENT_ROOT'].fDameRuta("a_bancoimages"));
}
if ($intBerria==0){
$strUpdate=fSQLArgazkiaAldatu($intKodea,$strTextoes,$strTextoeu,$strTextouk,$strIrudiap,$strIrudiag,$strIrudiam);
$objrow=EJECUTA_SELECT($strUpdate);
}else{
if ($strIrudiap!="" && $strIrudiag!="")
{	$strInsert=fSQLArgazkiaSartu($intKodea,$strTextoes,$strTextoeu,$strTextouk,$strIrudiap,$strIrudiag,$strIrudiam);
$objrow=EJECUTA_SELECT($strInsert);
}
}
$Joan="index.php?pg=2&idI=".$intKodea;
CierraConexion();
}else{?>
<script>alert('<?echo $strError;?>');</script>
<?$Joan="index.php?pg=1";
}?>
<script>location.href ='<?echo $Joan;?>';</script>
<?}
function sArgazkiakEzabatu() {
$strArgazkiak = $_POST["hdnArgazkiak"];
AbreConexion();
$aB = split(",",$strArgazkiak);
for ($i=0;$i<intval(count($aB));$i++){
$strSelect=fSQLArgazkiarenDatuak($aB[$i]);
$objrow=EJECUTA_SELECT($strSelect);
if ($row=mysql_fetch_assoc($objrow))
{	$strRutaUpload=fDameRuta("S_BancoImages").$row["t992_imageng"];
fBorrarDocumento($strRutaUpload);
$strRutaUpload=fDameRuta("S_BancoImages").$row["t992_imagenp"];
fBorrarDocumento($strRutaUpload);
}
$strDelete = fSQLArgazkiaEzabatu ($aB[$i]);
$objrow=EJECUTA_SELECT($strDelete);
}
$Joan="index.php?pg=1";
CierraConexion();?>
<script>location.href='<?echo $Joan;?>';</script>
<?}
function fArgazkiBatEzabatu(){
AbreConexion();
$intKodea=$_GET["idI"];
$strSelect=fSQLArgazkiarenDatuak($intKodea);
$objrow=EJECUTA_SELECT($strSelect);
if ($row=mysql_fetch_assoc($objrow))
{	$strRutaUpload=fDameRuta("S_BancoImages").$row["t992_imageng"];
fBorrarDocumento($strRutaUpload);
$strRutaUpload=fDameRuta("S_BancoImages").$row["t992_imagenp"];
fBorrarDocumento($strRutaUpload);
$strRutaUpload=fDameRuta("S_BancoImages").$row["t992_imagenm"];
fBorrarDocumento($strRutaUpload);
$strDelete=fSQLArgazkiaEzabatu($intKodea);
$objrow=EJECUTA_SELECT($strDelete);
}
CierraConexion();?>
<script>location.href ='index.php?pg=1';</script>
<?}?>
