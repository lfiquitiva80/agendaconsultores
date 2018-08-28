$('#editar_clientes').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) // Button triggered the modal
  var id = button.data('id')	
  var nit = button.data('nit')
  var nombre_cliente = button.data('nombre_cliente')
  var direccion_cliente = button.data('direccion_cliente')
  var telefono_cliente = button.data('telefono_cliente')
  var celular_cliente = button.data('celular_cliente')
  var notas_cliente = button.data('notas_cliente')
  var gran_contribuyente_cliente = button.data('gran_contribuyente_cliente')
  var correo_cliente = button.data('correo_cliente')
  var ciudad_cliente = button.data('ciudad_cliente')
  var pais_cliente = button.data('pais_cliente')
  var contacto_cliente = button.data('contacto_cliente')
  var clave_ingreso_dian_cliente = button.data('clave_ingreso_dian_cliente')
  var clave_firma_dian_cliente = button.data('clave_firma_dian_cliente')
  var clave_CC_cliente = button.data('clave_cc_cliente')
  var responsable_cliente = button.data('responsable_cliente')
  var ultimo_digito_cliente = button.data('ultimo_digito_cliente')
  var ultimos_digitos_cliente = button.data('ultimos_digitos_cliente')
  var activo_cliente = button.data('activo_cliente')
  var tipo_cliente = button.data('tipo_cliente')
  var representante_legal_cliente = button.data('representante_legal_cliente')
  var nombre_representante_legal_cliente = button.data('nombre_representante_legal_cliente')

  var modal = $(this)

  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #nit').val(nit)
  modal.find('.modal-body #nombre_cliente').val(nombre_cliente)
  modal.find('.modal-body #direccion_cliente').val(direccion_cliente)
  modal.find('.modal-body #telefono_cliente').val(telefono_cliente)
  modal.find('.modal-body #celular_cliente').val(celular_cliente)
  modal.find('.modal-body #notas_cliente').val(notas_cliente)
  modal.find('.modal-body #gran_contribuyente_cliente').val(gran_contribuyente_cliente)
  modal.find('.modal-body #correo_cliente').val(correo_cliente)
  modal.find('.modal-body #ciudad_cliente').val(ciudad_cliente)
  modal.find('.modal-body #pais_cliente').val(pais_cliente)
  modal.find('.modal-body #contacto_cliente').val(contacto_cliente)
  modal.find('.modal-body #clave_ingreso_dian_cliente').val(clave_ingreso_dian_cliente)
  modal.find('.modal-body #clave_firma_dian_cliente').val(clave_firma_dian_cliente)
  modal.find('.modal-body #clave_CC_cliente').val(clave_CC_cliente)
  modal.find('.modal-body #responsable_cliente').val(responsable_cliente)
  modal.find('.modal-body #ultimo_digito_cliente').val(ultimo_digito_cliente)
  modal.find('.modal-body #ultimos_digitos_cliente').val(ultimos_digitos_cliente)
  modal.find('.modal-body #activo_cliente').val(activo_cliente)
  modal.find('.modal-body #tipo_cliente').val(tipo_cliente)
  modal.find('.modal-body #representante_legal_cliente').val(representante_legal_cliente)
  modal.find('.modal-body #nombre_representante_legal_cliente').val(nombre_representante_legal_cliente)
 
})


$('#editar_usuario').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var name = button.data('name')
var type = button.data('type')
var password = button.data('password')
var perfil_usuario = button.data('perfil_usuario')
var email = button.data('email')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #name').val(name);
modal.find('.modal-body #type').val(type);
modal.find('.modal-body #password').val(password);
modal.find('.modal-body #email').val(email);
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #perfil_usuario').val(perfil_usuario);
})


$('#editar_perfil').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var descripcion_perfil = button.data('descripcion_perfil')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #descripcion_perfil').val(descripcion_perfil);
})


$('#editar_cargo').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var descripcion_cargo = button.data('descripcion_cargo')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #descripcion_cargo').val(descripcion_cargo);
})


$('#editar_actividad').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var descripcion_actividad = button.data('descripcion_actividad')
var modo_actividad = button.data('modo_actividad')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #descripcion_actividad').val(descripcion_actividad);
modal.find('.modal-body #modo_actividad').val(modo_actividad);
})


$('#editar_compromisos').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var descripcion_compromisos = button.data('descripcion_compromisos')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #descripcion_compromisos').val(descripcion_compromisos);
})

$('#editar_estado_cita').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var Estado = button.data('estado')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #Estado').val(Estado);
})




$('#editar_lugar').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var descripcion_lugar = button.data('descripcion_lugar')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #descripcion_lugar').val(descripcion_lugar);
})