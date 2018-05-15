$(document).ready(function(){



	$('#form').on('keyup', function(){
		data = $(this).serialize();

			$.ajaxSetup({
		headers: {
      		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
			});



		$.post('/search', data, function($search){


			$('#data').html('');

			$.each($search, function(key, val){

				$('#data').append('<tr><td>'+val.name+'</td>'+
						'<td>'+val.category+'</td>'+
						'<td><a href="/show/'+val.id+'" class="btn btn-primary btn-sm">Show</a></td></tr>');
			});

		});


	});





});