$(function() {
	var cols, rows;
	$('#createTable').submit(function(e) {
		e.preventDefault();
		rows = $('#cons').val();
		cols = $('#vars').val();
		alert(rows+' '+cols);
		let tbl = $('#table');
		for (var i = 0; i < cols; i++){
			tbl.appendColumn('x');
		}
		for (var i = 0; i < rows; i++) {
			tbl.appendRow('x');
		}
	});

	//MDB Select
	$('.mdb-select').materialSelect();
});