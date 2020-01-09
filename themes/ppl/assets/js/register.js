$('.js-form').submit(function(event) {
	event.preventDefault();
	var data = $(this).serialize();
	
	$.ajax({
		type: 'POST',
		url: object_name.ajaxUrl,
		dataType: 'json',
		data: data,
		beforeSend: function(data) {
			
		},
		success: function(data) {
			console.log(data);
			if (data.error) {
				console.log(data.error_desc);
				alert('Email address already exists');
				//
			}
			if (data.succes) {
				console.log(data.succes_desc, 'succes');
				$('.modalContainerPPL.d-n').addClass('active').find('.modalContainerPPL__lastPopap').addClass('active');
			}
		},
		error: function(xhr, str) {
			console.log('error');
		}
	});
});
