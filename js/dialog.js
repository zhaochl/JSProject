$("#import_excel").click(function(){
	$('#dialog-import').dialog('open');
	$('#dialog-import').load('{:U("Product/excelimport")}');
});