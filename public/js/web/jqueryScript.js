$('.datepicker').datepicker({
	format: 'yyyy-mm-dd'
});

$('.datepicker').on('changeDate', function(ev){
    $(this).datepicker('hide');
});