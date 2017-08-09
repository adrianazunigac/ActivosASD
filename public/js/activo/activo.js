$(document).ready(function() {

	//Creación del contenido de la tabla #contactos, basado en datatables
	$('#activo').DataTable({
		processing: true,
		serverSide: true,
		autoWidth: false,
		ajax: "activo/postsData",
		columns : [
		{ data: 'Id', name: 'Id'},
		{ data: 'NombClie', name: 'NombClie'},
		{ data: 'tv_municipi.NombMuni', name: 'tv_municipi.NombMuni' },
		{ data: 'tv_departam.NombDepa', name: 'tv_departam.NombDepa' },		
		{ data: 'tv_estado.Estado', name: 'tvEstado.Estado' },
		{
			name: 'actions',
			data: null,
			sortable: false,
			searchable: false,
			render: function (data) {
				var actions = '';
				actions += '<i title="Editar" value=":id" onclick="editar(:id)" class="fa fa-edit fa-fw" style="cursor:pointer"></i>';
				return actions.replace(/:id/g, data.Id);
			}
		}
		]
	});

	



