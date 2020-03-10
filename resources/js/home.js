$(document).ready(function($) {
	var numCons, numVars;
	function createTable(){
		numCons = $('cons').value();
	}

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