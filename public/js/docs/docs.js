$(document).ready(function() {
	//Modificar el documento
	$("#modificar").click(function(event) {
			Id=$("#hddId").val();
			$.ajax({
				url: 'docs/edit/'+Id,				
				method: 'POST',
				headers: {
	    	    	'X-CSRF-TOKEN': $('input[name="_token"]').val(),
	    		},
				data: {
					'TipoDocu':$("#TipoDocu").val(),				
					'NombDocu': $("#campo1").val(),
					'estado':$("#estado").val(),
					'DescDocu':$("#DescDocu").val()
					// 'NombArch':$("#NombArch").val()
				},
				success: function (data) {
					location.reload();
				},
				error: function () 
				{
				}
			});
	});

	//Creación del contenido de la tabla #documentos, basado en datatables
	$('#documentos').DataTable({
      processing: true,
      serverSide: true,
      autoWidth: false,
      ajax: "docs/postsData",
      columns : [
        { data: 'Id', name: 'Id'},
        { data: 'tv_estado.Estado', name: 'tvEstado.Estado' },
        { data: 'tv_categori.NombCate', name: 'tvCategori.NombCate' },
        {
          name: 'archivo',
          data: null,
          sortable: false,
          searchable: false,
          render: function (data) {
              var actions = '';
              actions += '<a href="docs/down/:id" title="Descargar"><i class="fa fa-download fa-fw" value=":id" value="{{ '+data.NombArch+' }}" style="cursor:pointer"></i> </a>';
              return actions.replace(/:id/g, data.Id);
          }
        },
        { data: 'NombDocu', name: 'NombDocu' },
        {
          name: 'actions',
          data: null,
          sortable: false,
          searchable: false,
          render: function (data) {
              var actions = '';
              actions += '<i title="Editar" value=":id" onclick="editar(:id)" class="fa fa-edit fa-fw" style="cursor:pointer"></i>';
              //actions += '<i title="Eliminar" class="fa fa-trash-o fa-fw" style="cursor:pointer"></i>';
              return actions.replace(/:id/g, data.Id);
          }
        }
      ]
    });

});

function cambiar(objeto)
{
	if(objeto.val()!='1'){
		$("#contenedor").html('');
		$("#contenedor").load(objeto.attr('id'));
	}	
}

function editar(Id)
{
	$.ajax({
			url: 'docs/select/'+Id,
			method: 'GET',
			success: function (data) {
				var TipoDocu = data[0].Id_Categori;
				var NombDocu = data[0].NombDocu;
				var Estado = data[0].Id_Estado;
				var DescDocu = data[0].DescDocu;
				var NombArch =data[0].NombArch;
				$("#TipoDocu").val(TipoDocu);
				$("#campo1").val(NombDocu);
				$("#estado").val(Estado);
				$("#DescDocu").val(DescDocu);
				$("#NombArch").attr('disabled', 'true');
				$("#hddId").val(Id);

				$("#modificar").css('display', 'block');
				$("#guardar").css('display', 'none');
				mostrarEdit("accion","contentform","icono");

			},
			error: function () {
			}
	});
}

//Inicio de las categorias de los documentos
function editartido(Id)
{
	$.ajax({
			url: 'tipodocu/select/'+Id,
			method: 'GET',
			success: function (data) {			
				var NombCate = data[0].NombCate;
				var Estado = data[0].Id_Estado;
				$("#hddTipoDocu").val(Id);
				$("#NombCate").val(NombCate);
				$("#estado").val(Estado);

				$("#modificarTD").css('display', 'block');
				$("#guardarTD").css('display', 'none');
			},
			error: function () {
			}
	});
}

function modificaTD(){
	Id=$("#hddTipoDocu").val();
	$.ajax({
		url: 'tipodocu/edit/'+Id,				
		method: 'POST',
		headers: {
	       	'X-CSRF-TOKEN': $('input[name="_token"]').val(),
	   	},
		data: {				
			'NombCate': $("#NombCate").val(),
			'estado': $("#estado").val(),
		},
		success: function (data) {
			var datos=data.split('**');
			$("#contenedor").load('tipodocu');
		},
		error: function () 
		{
		}
	});
}
