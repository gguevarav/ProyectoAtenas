// Eliminación de usuario de la pantalla de usuarios
$(document).ready(function(){
	$(document).on('click', '.EliminarUsuario', function(){
		var id=$(this).val();
		var Nombres=$('#NombreUsuario'+id).text();
		var Apellidos=$('#ApellidoUsuario'+id).text();
		var Usuario=$('#idUsuario'+id).text();
	
		$('#frmEliminar').modal('show');
		$('#idUsuarioEliminacion').val(Usuario);
		document.querySelector('#NombresApellidos').innerText = Nombres + " " + Apellidos;
	});
});

// Edición de usuario de la pantalla de usuario
$(document).ready(function(){
	$(document).on('click', '.EditarUsuario', function(){
		var id=$(this).val();
		var PersonaEditar=$('#idUsuario'+id).text();
		var NombreUsuario=$('#NombreUsuario'+id).text();
		var ApellidoUsuario=$('#ApellidoUsuario'+id).text();
		var TelefonoUsuario=$('#TelefonoUsuario'+id).text();
		var DireccionUsuario=$('#DireccionUsuario'+id).text();
		var CorreoUsuario=$('#CorreoUsuario'+id).text();
		var NombreInicioSesionUsuario=$('#NombreInicioSesionUsuario'+id).text();
		var Puesto=$('#Puesto'+id).text();
		var Rol=$('#Rol'+id).text();
		var Rango=$('#Rango'+id).text();
	
		$('#frmEditar').modal('show');
		$('#idEditar').val(PersonaEditar);
		$('#NombreEditar').val(NombreUsuario);
		$('#ApellidoEditar').val(ApellidoUsuario);
		$('#TelefonoEditar').val(TelefonoUsuario);
		$('#DireccionEditar').val(DireccionUsuario);
		$('#CorreoEditar').val(CorreoUsuario);
		$('#NombreInicioEditar').val(NombreInicioSesionUsuario);
		$('#PuestoEditar').val(Puesto);
		$('#RolEditar').val(Rol);
		$('#RangoEditar').val(Rango);
	});
});

// Edición de números de cuenta de la pantalla de cuentas
$(document).ready(function(){
	$(document).on('click', '.EditarCuenta', function(){
		var id=$(this).val();
		var idCuenta=$('#idCuenta'+id).text();
		var NumeroCuenta=$('#NumeroCuenta'+id).text();
		var NombreCuenta=$('#NombreCuenta'+id).text();
		var TipoCuenta=$('#TipoCuenta'+id).text();
		var SaldoCuenta=$('#SaldoCuenta'+id).text();
		var BancoCuenta=$('#NombreBanco'+id).text();
	
		$('#frmEditarCuena').modal('show');
		$('#idCuentaEditar').val(idCuenta);
		$('#NumeroCuentaEditar').val(NumeroCuenta);
		$('#NombreCuentaEditar').val(NombreCuenta);
		$('#TipoCuentaEditar').val(TipoCuenta);
		$('#SaldoCuentaEditar').val(SaldoCuenta);
		$('#BancoCuentaEditar').val(BancoCuenta);
	});
});

// Eliminación de cuenta de la pantalla de cuentas
$(document).ready(function(){
	$(document).on('click', '.EliminarCuenta', function(){
		var id=$(this).val();
		var NombreCuenta=$('#NombreCuenta'+id).text();
		var Usuario=$('#idCuenta'+id).text();
	
		$('#frmEliminarCuenta').modal('show');
		document.querySelector('#NombreCuenta').innerText = NombreCuenta;
		$('#idCuentaAEliminar').val(Usuario);
	});
});

// Mostramos la pantalla modal para agregar puesto
$(document).ready(function(){
	$(document).on('click', '.AgregarPuesto', function(){
		$('#ModalAgregarPuesto').modal('show');
	});
});

// Mostramos la pantalla modal para agregar rol
$(document).ready(function(){
	$(document).on('click', '.AgregarRol', function(){
		$('#ModalAgregarRol').modal('show');
	});
});

// Mostramos la pantalla modal para agregar Rango
$(document).ready(function(){
	$(document).on('click', '.AgregarRango', function(){
		$('#ModalAgregarRango').modal('show');
	});
});

// Edición de números de banco de la pantalla de bancos
$(document).ready(function(){
	$(document).on('click', '.EditarBanco', function(){
		var id=$(this).val();
		var idBanco=$('#idBanco'+id).text();
		var NombreBanco=$('#NombreBanco'+id).text();
		var DireccionBanco=$('#DireccionBanco'+id).text();
		var CorreoBanco=$('#CorreoBanco'+id).text();
		var SitioWebBanco=$('#SitioWebBanco'+id).text();
		var TelefonoBanco=$('#TelefonoBanco'+id).text();
	
		$('#frmEditarBanco').modal('show');
		$('#idBancoEditar').val(idBanco);
		$('#NombreBancoEditar').val(NombreBanco);
		$('#DireccionBancoEditar').val(DireccionBanco);
		$('#CorreoBancoEditar').val(CorreoBanco);
		$('#SitioWebBancoEditar').val(SitioWebBanco);
		$('#TelefonoBancoEditar').val(TelefonoBanco);
	});
});

// Eliminación de banco de la pantalla de bancos
$(document).ready(function(){
	$(document).on('click', '.EliminarBanco', function(){
		var id=$(this).val();
		var NombreBanco=$('#NombreBanco'+id).text();
		var Usuario=$('#idBanco'+id).text();
	
		$('#frmEliminarBanco').modal('show');
		document.querySelector('#NombreBanco').innerText = NombreBanco;
		$('#idBancoAEliminar').val(Usuario);
	});
});

// Edición de números de chequera de la pantalla de chequeras
$(document).ready(function(){
	$(document).on('click', '.EditarChequera', function(){
		var id=$(this).val();
		var idChequera=$('#idChequera'+id).text();
		var NombreChequera=$('#NombreChequera'+id).text();
		var RangoMinimoChequera=$('#RangoMiminoChequera'+id).text();
		var RangoMaximoChequera=$('#RangoMaximoChequera'+id).text();
	
		$('#frmEditarchequera').modal('show');
		$('#idChequeraEditar').val(idChequera);
		$('#NombreChequeraEditar').val(NombreChequera);
		$('#RangoMinimoChequera').val(RangoMinimoChequera);
		$('#RangoMaximoChequera').val(RangoMaximoChequera);
	});
});

// Eliminación de cuenta de la pantalla de Chequeras
$(document).ready(function(){
	$(document).on('click', '.EliminarChequera', function(){
		var id=$(this).val();
		var NombreChequera=$('#NombreChequera'+id).text();
		var Usuario=$('#idChequera'+id).text();
	
		$('#frmEliminarChequera').modal('show');
		document.querySelector('#NombreChequera').innerText = NombreChequera;
		$('#idChequeraAEliminar').val(id);
	});
});

// Edición de proveedores
$(document).ready(function(){
	$(document).on('click', '.EditarProveedor', function(){
		var id=$(this).val();
		var idProveedor=$('#idProveedor'+id).text();
		var NombreProveedor=$('#NombreProveedor'+id).text();
	
		$('#ModalEditarProveedor').modal('show');
		$('#idProveedorEditar').val(id);
		$('#NombreProveedorEditar').val(NombreProveedor);
	});
});

// Eliminación de proveedores
$(document).ready(function(){
	$(document).on('click', '.EliminarProveedor', function(){
		var id=$(this).val();
		var NombreProveedor=$('#NombreProveedor'+id).text();
		var Proveedor=$('#idProveedor'+id).text();
	
		$('#ModalEliminarProveedor').modal('show');
		document.querySelector('#NombreProveedor').innerText = NombreProveedor;
		$('#idProveedorEliminar').val(id);
	});
});

// Liberación de cheques
$(document).ready(function(){
	$(document).on('click', '.AprobarCheque', function(){
		var id=$(this).val();
	
		$('#ModalAprobarCheque').modal('show');
		$('#idCheque').val(id);
	});
});

// Rollback de cheques
$(document).ready(function(){
	$(document).on('click', '.ChequeRegreso', function(){
		var id=$(this).val();
	
		$('#ModalRegresarCheque').modal('show');
		$('#idChequeRegreso').val(id);
	});
});

// Edición de cheques
$(document).ready(function(){
	$(document).on('click', '.EditarCheque', function(){
		var id=$(this).val();
		var idCheque=$('#idCheque'+id).text();
		var NumeroCheque=$('#NumeroCheque'+id).text();
		var LugarCheque=$('#LugarCheque'+id).text();
		var FechaCheque=$('#FechaCheque'+id).text();
		var MontoCheque=$('#MontoCheque'+id).text();
		var ComentarioCheque=$('#ComentarioCheque'+id).text();
		var ProveedorCheque=$('#ProveedorCheque'+id).text();
	
		$('#ModalEditarCheque').modal('show');
		$('#idChequeEditar').val(idCheque);
		$('#NumeroChequeEditar').val(NumeroCheque);
		$('#LugarChequeEditar').val(LugarCheque);
		$('#FechaChequeEditar').val(FechaCheque);
		$('#MontoChequeEditar').val(MontoCheque);
		$('#ComentarioChequeEditar').val(ComentarioCheque);
		$('#ProveedorChequeEditar').val(ProveedorCheque);
	});
});

// Anulación de cheque
$(document).ready(function(){
	$(document).on('click', '.AnularCheque', function(){
		var id=$(this).val();
	
		$('#ModalAnularCheque').modal('show');
		$('#idChequeAnular').val(id);
	});
});

// Impresión de Cheques
$(document).ready(function(){
	$(document).on('click', '.ImprimirCheque', function(){
		var id=$(this).val();
	
		$('#ModalImprimirCheque').modal('show');
		$('#idChequeImprimir').val(id);
	});
});