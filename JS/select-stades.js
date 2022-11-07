$(document).ready( function ()
{
	$("#estado").on('change', function() {
		var option = $(this).find('option:selected').val();
    $('#res').html(option);
	});
  });