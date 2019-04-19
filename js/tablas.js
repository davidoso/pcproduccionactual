function updateTablas() {
	$('body').css('cursor', 'wait');
	$.ajax({
		type: "post",
		dataType: "json",
		url: "index.php/Produccion/get_produccion",
		success: function(data) {
			// console.log("Last update (browser's time): " + new Date());
			// console.log(data);

			var vardia = data[0].VARDIA;
			var vardiaa = data[0].VARDIAA;
			var varmen = data[0].VARMEN;
			var varano = data[0].VARANO;
			var textcolor;

			// Tabla 1: Movimiento de hoy
			$('#tbl-hoy td').eq(0).html(data[0].MOVDIA.substring(0, data[0].MOVDIA.length - 3) + "mt");
			$('#tbl-hoy td').eq(1).html(data[0].PLANDIA.substring(0, data[0].PLANDIA.length - 3) + "mt");
			$('#tbl-hoy td').eq(2).html(vardia.substring(0, vardia.length - 3) + "mt");
			textcolor = vardia.charAt(0) == "-" ? "#c62828" : "#2e7d32"; // Si es negativo, el texto es rojo. Si no verde
			$('#tbl-hoy td').eq(2).css("color", textcolor);

			// Tabla 2: Movimiento de ayer
			$('#tbl-ayer td').eq(0).html(data[0].MOVDIAA.substring(0, data[0].MOVDIAA.length - 3) + "mt");
			$('#tbl-ayer td').eq(1).html(data[0].PLANDIAA.substring(0, data[0].PLANDIAA.length - 3) + "mt");
			$('#tbl-ayer td').eq(2).html(vardiaa.substring(0, vardiaa.length - 3) + "mt");
			textcolor = vardiaa.charAt(0) == "-" ? "#c62828" : "#2e7d32"; // Si es negativo, el texto es rojo. Si no verde
			$('#tbl-ayer td').eq(2).css("color", textcolor);

			// Tabla 3: Movimiento mensual
			$('#tbl-mensual td').eq(0).html(data[0].MOVMENA.substring(0, data[0].MOVMENA.length - 3) + "mt");
			$('#tbl-mensual td').eq(1).html(data[0].PLANMEN.substring(0, data[0].PLANMEN.length - 3) + "mt");
			$('#tbl-mensual td').eq(2).html(varmen.substring(0, varmen.length - 3) + "mt");
			textcolor = varmen.charAt(0) == "-" ? "#c62828" : "#2e7d32"; // Si es negativo, el texto es rojo. Si no verde
			$('#tbl-mensual td').eq(2).css("color", textcolor);

			// Tabla 4: Movimiento anual acumulado
			$('#tbl-anual td').eq(0).html(data[0].MOVANO.substring(0, data[0].MOVANO.length - 3) + "mt");
			$('#tbl-anual td').eq(1).html(data[0].PLANANO.substring(0, data[0].PLANANO.length - 3) + "mt");
			$('#tbl-anual td').eq(2).html(varano.substring(0, varano.length - 3) + "mt");
			textcolor = varano.charAt(0) == "-" ? "#c62828" : "#2e7d32"; // Si es negativo, el texto es rojo. Si no verde
			$('#tbl-anual td').eq(2).css("color", textcolor);

			$('body').css('cursor', 'auto');
		},		// AJAX success function
		error: function() {
			console.log("¡Error! No se pudo actualizar las tablas. Función get_produccion()");
			$('body').css('cursor', 'auto');
		}		// AJAX error function
	});			// AJAX
}

$(document).ready(function() {
	updateTablas();		// Call webservice and update the HTML DOM as soon as the page loads

	setInterval(function() {
		updateTablas();
	}, 120000);			// Call webservice every 2 minutes
});