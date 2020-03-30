$(document).ready(function($) {
	var numCons, numVars;
	$('#linear').submit(function(e) {
		e.preventDefault();
	});
	$('#vars, #cons').change(function(e) {
		numVars = parseInt($('#vars').val());
		numCons = parseInt($('#cons').val());
		theadCols = $('table thead tr');
		tbodyRows = $('table tbody');
		//If numCons is increased
		for(let i=tbodyRows.children().length; i < numCons; i++){
			let tr = tbodyRows.find('tr:last');
			if(tr.html() == null){
				tr = $('<tr/>');
				td = $('<td/>').append($('<input type="number" class="form-control">'));
				for(let j=0; j < numVars; j++){
					tr.append(td.clone());
				}
			}else{
				tr = tr.clone();
			}
			tbodyRows.append(tr.clone());
		}
		//If numCons is decreased
		for(let i=tbodyRows.children().length-numCons; i>0; i--){
			tbodyRows.find('tr:last').remove();
		}
		// If numVars is increased
		for(let i=theadCols.children().length; i < numVars; i++){
			theadCols.append($('<th/>').text('var'+(i+1)));
			// tbodyRows.children().append($('<td/>'));
			// $.each(tbodyRows.children(), function(index, row) {
			// 	 console.log(row.find('td:last').clone());
			// });
			let rows = tbodyRows.children();
			for(let i=0; i < rows.length; i++){
				console.log(rows[i].children());
				// rows[i].append(rows[i].children('td:last').clone());
			}
		}
		//If numVars is decreased
		for(let i=theadCols.children().length - numVars; i > 0; i--){
			theadCols.find('th:last').remove();
			tbodyRows.children().find('td:last').remove();
		}
	});
	$('#vars, #cons').val(2).change();

	// Material Select Initialization
	$('.mdb-select').materialSelect();
	$('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
		$(this).closest('.select-outline').find('label').toggleClass('active');
		$(this).closest('.select-outline').find('.caret').toggleClass('active');
	});

	//Data Table
	$('#tableau').DataTable({
		"scrollX": true
	});
	$('.dataTables_length').addClass('bs-select');
});