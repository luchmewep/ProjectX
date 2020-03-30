$(function() {
    $('#linear').submit(function(e) {
        e.preventDefault();
        var data = $('#createTable').serializeArray().reduce(function(obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
    });
    $('#vars, #cons').change(function(e) {
        numVars = parseInt($('#vars').val());
        numCons = parseInt($('#cons').val());
        theadCols = $('table thead tr');
        tbodyRows = $('table tbody');
        numInput = $('<input type="number" class="form-control">');
        // If numVars is increased
        for(let i=theadCols.children().length; i < numVars; i++){
            theadCols.append($('<th/>').text('var'+(i+1)));
            tdLast = tbodyRows.children().find('td:last');
            if(tdLast.length == 0){
                tbodyRows.children().append(numInput.clone());
            }else{
                tdLast.each(function(i, val){
                    $(val).clone().appendTo($(val).parent());
                });
            }
        }
        //If numCons is increased
        for(let i=tbodyRows.children().length; i < numCons; i++){
            tr = tbodyRows.find('tr:last');
            if(tr.length == 0){
                tr = $('<tr/>');
                td = $('<td/>').append($('<input type="number" class="form-control">'));
                for(let j=0; j < theadCols.children().length; j++){
                    tr.append(td.clone());
                }
            }else{
                tr = tr.clone();
            }
            tbodyRows.append(tr.clone());
        }
        //If numVars is decreased
        for(let i=numVars; i < theadCols.children().length; i++){
            theadCols.find('th:last').remove();
            tbodyRows.children().find('td:last').remove();
        }
        //If numCons is decreased
        for(let i=tbodyRows.children().length-numCons; i>0; i--){
            tbodyRows.find('tr:last').remove();
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
