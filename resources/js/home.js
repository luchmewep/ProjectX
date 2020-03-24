$(function() {
	var numCons, numVars;
	$('#createTable').submit(function(e){
        e.preventDefault();
        var data = $('#createTable').serializeArray().reduce(function(obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        console.log(data);
        console.log(data.title);
    });

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
