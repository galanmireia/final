<?session_start();?>
<?header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?include("../lanb_rutas.php");
include("../lanb_ado.php");
include("../lanb_clase.php");
include("../lanb_edukia.php");
include("../multi/lanb_idiomas.php");
include("../lanb_estructura.php");
include("lanb_estructura.php");
include("lanb_edukia.php");
include("lanb_sql.php");?>
<HTML>
<HEAD>
<title>..::.. Einstein ..::..</title>
<LINK rel="stylesheet" type="text/css" href="../estilos.css">
<script language="JavaScript" src="js/validar.js"></script>
<script language="JavaScript" src="../js/validar.js"></script>
</HEAD>
<?if(isset($_GET["pg"])){$intPg=$_GET["pg"];}else{$intPg="";}
$strScroll = "";
if ($intPg=="2"){$strScroll="scroll=no";}
$strEstilo = "";
$strBgColor ="bgcolor='#FFFFFF'";
$_SESSION["einstein_idioma"]="es";
?>
<BODY leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" BORDER=0 NORESIZE  frameborder="NO" <?echo $strBgColor . " ". $strScroll . " " . $strEstilo;?>>
<table align="center" width="100%" height="100%"  CELLPADDING=0 CELLSPACING=0 topmargin=0 leftmargin=0 border=0>
<tr><td valign="<?if ($intPg=="3" || $intPg==""){?>middle<?}else{?>top<?}?>"><?sContenidoAdmin();?></td></tr>
</table>
</BODY>
</HTML>
