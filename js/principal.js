$(document).on('ready',principal);

function principal(){
	$('.triangulito').on('click',mostrarCuadrado);
}

function mostrarCuadrado(){
	$('.cuadrado').toggle('fast');
}