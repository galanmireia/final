function fQuitarTodos2(strFormCombo)
{	intContadorcillo=0;
	strAuxiliar="document."+strFormCombo+".options.length";
	intTotal=(eval(strAuxiliar));
	while (intTotal>intContadorcillo)
	{	
		eval("document."+strFormCombo+".options[0]=null");
		intContadorcillo++;
	}
}
//***********************************************
function fCrearArray(istrNombre)
{	strAuxiliar=istrNombre+"=new Array();"
	eval(strAuxiliar);
}
//*************************************
function sRellenarCombo(strCombo,strFormulario,strArray){
	sw=1;
	fQuitarTodos2(strFormulario+'.'+strCombo);fQuitarTodos2(strFormulario+'.'+strCombo);
	intLongArray = eval("aint"+strArray+".length");
	for (i=0;i<intLongArray;i++){
		eval('document.'+strFormulario+'.'+strCombo+'.options[i]=new Option(astr'+strArray+'[i],aint'+strArray+'[i])');
	}
}
//********************************************
function sRellenarReferencias(intCodSector,strArray){
	sw=1;
	fQuitarTodos2('cboFuera');fQuitarTodos2('cboFuera');
	if (intCodSector==0){
		intCodSector = document.frmCajitas.cboSector.value;
	}
	if (intCodSector==-1 || intCodSector==''){
		if (document.frmCajitas.cboSector.options.length>0){intCodSector = document.frmCajitas.cboSector.options[0].value;}
		else{sw=0;}
	}
	if (sw==1)
	{	
		intLongArray = eval("aint"+strArray+intCodSector+".length");
		for (i=0;i<intLongArray;i++){
			document.frmCajitas.cboFuera.options[i]=new Option(eval("astr"+strArray+intCodSector+"[i]"),eval("aint"+strArray+intCodSector+"[i]"));
		}
	}
}
//*************************************************
function fInsertarEnArray2(istrArray,iintI,istrValor){	
	strAux=istrArray + "[" + iintI + "]='"+istrValor+"'";
	eval(strAux);
}
//*************************************************
function fCargarDatos(iintOpcion,iintCuales)
{	switch (iintOpcion)
	{	case 1:
			strArray1="aintAccD";
			strArray2="astrAccD";
			strArray3="";
			strArray4="";
			break;
		case 2:
			strArray1="aintModD";
			strArray2="astrModD";
			strArray3="";
			strArray4="";
			break;
		case 3:
			strArray1="aintFaqD";
			strArray2="astrFaqD";
			strArray3="aintFaqF";
			strArray4="astrFaqF";
			break;
		case 4:
			strArray1="aintForoD";
			strArray2="astrForoD";
			strArray3="aintForoF";
			strArray4="astrForoF";
			break;
		case 6:
			strArray1="aintArtiD";
			strArray2="astrArtiD";
			strArray3="aintArtiF";
			strArray4="astrArtiF";
			break;
		case 7:
			strArray1="aintCaliD";
			strArray2="astrCaliD";
			strArray3="";
			strArray4="";
			break;
		case 8:
			strArray1="aintSoluD";
			strArray2="astrSoluD";
			strArray3="";
			strArray4="";
			break;
		case 9:
			strArray1="aintReacD";
			strArray2="astrReacD";
			strArray3="";
			strArray4="";
			break;
		case 10:
			strArray1="aintSonD";
			strArray2="astrSonD";
			strArray3="";
			strArray4="";
			break;
		case 11:
			strArray1="aintElecD";
			strArray2="astrElecD";
			strArray3="";
			strArray4="";
			break;
	}
	eval("tamanho1="+strArray1+".length");
	eval("tamanho2="+strArray2+".length");
	if (trim(strArray3)=="")
	{	tamanho3=0;
	}
	else
	{	eval("tamanho3="+strArray3+".length");
	}
	if (strArray4=="")
	{	tamanho4=0;
	}
	else
	{	eval("tamanho4="+strArray4+".length");
	}
	if (iintCuales==0 || iintCuales==1)
	{	if (strArray3!="")
		{	eval("tamanho3="+strArray3+".length");
			eval("tamanho4="+strArray4+".length");
			for (var i=document.frmCajitas.cboFuera.options.length-1;i>=0;i--){
				document.frmCajitas.cboFuera.options[i]=null;
			}
		}
		for (var i=document.frmCajitas.cboDentro.options.length-1;i>=0;i--){
			document.frmCajitas.cboDentro.options[i]=null;
		}
	}
	if (iintCuales==0 || iintCuales==2)
	{	
		if (strArray3!="")
		{	if (tamanho3>0)
			{	for (i=0;i<tamanho3;i++)
				{	eval("document.frmCajitas.cboFuera.options["+i+"]=new Option("+strArray4+"["+i+"],"+strArray3+"["+i+"])");
				}
			}
		}
		if (tamanho1>0)
		{	for (i=0;i<tamanho1;i++)
			{	eval("document.frmCajitas.cboDentro.options["+i+"]=new Option("+strArray2+"["+i+"],"+strArray1+"["+i+"])");
			}
		}
	}
}
//*************************************************
function fSeleccionarPrimeraReferencia(strArray)
{	
	if (document.frmCajitas.cboSector.options.length>0)
	{	sRellenarReferencias(0,strArray); }
}

//*************************************************
//******** TALDEA - JARDUERAK- PARTAIDE ***********
//*************************************************
function fTaldeaAldatuDa (strForm){
	intTaldea = eval('document.'+strForm+'.cboTaldea.value');
	if (intTaldea == 0){
		strArray="Jar";
		MM_showHideLayers ('divPartaide','','show');
	}else{
		strArray="Tal"+intTaldea;
		MM_showHideLayers ('divPartaide','','hidden');
	}
	sRellenarCombo ('cboJarduera',strForm,strArray)
}
//****************************************
function fJardueraAldatuDa (strForm){
	intJarduera = eval('document.'+strForm+'.cboJarduera.value');
	if (intJarduera == 0){
		fQuitarTodos2(strForm+'.cboPartaidea');fQuitarTodos2(strForm+'.cboPartaidea');
		eval('document.'+strForm+'.cboPartaidea.options[0]=new Option("-- Partaide erlazionatu gabe --",0)');
	}else{
		strArray="Jar"+intJarduera;
		sRellenarCombo ('cboPartaidea',strForm,strArray)
	}
}
//****************************************
function fSeleccionarCombo(strForm,strCombo,intCodigo){
	eval('document.'+strForm+'.'+strCombo+'.value='+intCodigo+'');
}

