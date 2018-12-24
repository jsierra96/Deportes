$(document).ready(function(){
	$(".btn").click(function(e){
		e.preventDefault();
		var clave = $(".clave").val();
		var user = $(".user").val();
		var url = "control/ingresar.php";
		$.post(url,{
					txtClave : clave,
					txtUser : user
				},
				function(oDatos){
					if(oDatos.sucessfull==true){
						window.location="panel/panel.php";
					}else{
						$(".clave").css("border","#8f1d14 solid 1px");
						$(".user").css("border","#8f1d14 solid 1px");
					}
				}
			);
	});
});