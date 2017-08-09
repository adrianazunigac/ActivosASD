/**
 * @param  {xpanel} Modifica la propiedad para el contenedor principal
 * @param  {xcontent} Permite visualizar el div se oculta al dar click sobre el icono (subir-bajar)
 * @param  {icono} Cambia la clase del icono que permite bajar o subir el div
 */
function mostrarEdit (xpanel,xcontent,icono)
{
	$("#"+xpanel).css('height', 'auto');		
	$("#"+xcontent).css('display', 'block');	
	$("#"+icono).removeClass('fa fa-chevron-down');	
	$("#"+icono).addClass('fa fa-chevron-up');
}