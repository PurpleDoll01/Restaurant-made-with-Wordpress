var app = {

	init: function() {
		app.getPosts();
	},

	getPosts: function() {

		var rootURL = 'http://localhost/wordpress/wp-json/wp/v2';

		$.ajax({
			type: 'GET',
			url: rootURL + '/viaje',
			dataType: 'json',
			success: function(data){
				
				$.each(data, function(index, value) {
			      $('ul.topcoat-list').append('<li class="topcoat-list__item">' +
			      	'<h3>'+value.title.rendered+'</h3>' +
                    '<p>'+value.content.rendered+'</p>' +
			      	'<p><strong>Destino: </strong>'+value.destino_+'</p>' +
					'<p><strong>Vacunas obligatorias: </strong>'+value.vacunas_obligatorias_+'</p>' +
                    '<p><strong>Vacunas Recomendadas: </strong>'+value.vacunas_recomendadas_+'</p>' +
                    '<p><strong>Transporte Local: </strong>'+value.transporte_local_+'</p>' +
                    '<p><strong>Peligrosidad: </strong>'+value.peligrosidad_+'</p>' +
                    '<p><strong>Moneda Local: </strong>'+value.moneda_local_+'</p>' +


					'</li>');
			    });
			},
			error: function(error){
				console.log(error);
			}

		});

	}

}