$(document).ready(function(){

	$("#abrir_menu").click(function(){
		$("#menu").animate({"right":"0"});
	});

	$("#cerrar_menu").click(function(){
		$("#menu").animate({"right":"-100%"});
	});

});