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
  var valor = button.data('valor')

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
  modal.find('.modal-body #valor').val(valor)
})


$('#editar_usuario').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var name = button.data('name')
  var type = button.data('type')
  var password = button.data('password')
  var perfil_usuario = button.data('perfil_usuario')
  var email = button.data('email')
  var cargo = button.data('cargo')
  var activo = button.data('activo')
  var valor = button.data('valor')
  var horas = button.data('horas')
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
modal.find('.modal-body #cargo').val(cargo);
modal.find('.modal-body #activo').val(activo);
modal.find('.modal-body #valor').val(valor);
modal.find('.modal-body #horas').val(horas);
})


$('#editar_detalle_dev_iva').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var cns_detalle = button.data('cns_detalle')
  var codigo = button.data('codigo')
  var descripcion = button.data('descripcion')
  var ressi = button.data('ressi')
  var resno = button.data('resno')
  var resna = button.data('resna')
  var audsi = button.data('audsi')
  var audno = button.data('audno')
  var audna = button.data('audna')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #cns_detalle').val(cns_detalle);
modal.find('.modal-body #codigo').val(codigo);
modal.find('.modal-body #descripcion').val(descripcion);
modal.find('.modal-body #ressi').val(ressi);
modal.find('.modal-body #resno').val(resno);
modal.find('.modal-body #resna').val(resna);
modal.find('.modal-body #audsi').val(audsi);
modal.find('.modal-body #audno').val(audno);
modal.find('.modal-body #audna').val(audna);
})


$('#editar_detalle_imp_ica').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var cns_detalle = button.data('cns_detalle')
  var codigo = button.data('codigo')
  var descripcion = button.data('descripcion')
  var ressi = button.data('ressi')
  var resno = button.data('resno')
  var resna = button.data('resna')
  var audsi = button.data('audsi')
  var audno = button.data('audno')
  var audna = button.data('audna')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #cns_detalle').val(cns_detalle);
modal.find('.modal-body #codigo').val(codigo);
modal.find('.modal-body #descripcion').val(descripcion);
modal.find('.modal-body #ressi').val(ressi);
modal.find('.modal-body #resno').val(resno);
modal.find('.modal-body #resna').val(resna);
modal.find('.modal-body #audsi').val(audsi);
modal.find('.modal-body #audno').val(audno);
modal.find('.modal-body #audna').val(audna);
})

$('#editar_detalle_imp_iva').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var cns_detalle = button.data('cns_detalle')
  var codigo = button.data('codigo')
  var descripcion = button.data('descripcion')
  var ressi = button.data('ressi')
  var resno = button.data('resno')
  var resna = button.data('resna')
  var audsi = button.data('audsi')
  var audno = button.data('audno')
  var audna = button.data('audna')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #cns_detalle').val(cns_detalle);
modal.find('.modal-body #codigo').val(codigo);
modal.find('.modal-body #descripcion').val(descripcion);
modal.find('.modal-body #ressi').val(ressi);
modal.find('.modal-body #resno').val(resno);
modal.find('.modal-body #resna').val(resna);
modal.find('.modal-body #audsi').val(audsi);
modal.find('.modal-body #audno').val(audno);
modal.find('.modal-body #audna').val(audna);
})


$('#editar_detalle_imp_renta').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var cns_detalle = button.data('cns_detalle')
  var codigo = button.data('codigo')
  var descripcion = button.data('descripcion')
  var ressi = button.data('ressi')
  var resno = button.data('resno')
  var resna = button.data('resna')
  var audsi = button.data('audsi')
  var audno = button.data('audno')
  var audna = button.data('audna')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #cns_detalle').val(cns_detalle);
modal.find('.modal-body #codigo').val(codigo);
modal.find('.modal-body #descripcion').val(descripcion);
modal.find('.modal-body #ressi').val(ressi);
modal.find('.modal-body #resno').val(resno);
modal.find('.modal-body #resna').val(resna);
modal.find('.modal-body #audsi').val(audsi);
modal.find('.modal-body #audno').val(audno);
modal.find('.modal-body #audna').val(audna);
})


$('#editar_detalle_imp_reteica').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var cns_detalle = button.data('cns_detalle')
  var codigo = button.data('codigo')
  var descripcion = button.data('descripcion')
  var ressi = button.data('ressi')
  var resno = button.data('resno')
  var resna = button.data('resna')
  var audsi = button.data('audsi')
  var audno = button.data('audno')
  var audna = button.data('audna')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #cns_detalle').val(cns_detalle);
modal.find('.modal-body #codigo').val(codigo);
modal.find('.modal-body #descripcion').val(descripcion);
modal.find('.modal-body #ressi').val(ressi);
modal.find('.modal-body #resno').val(resno);
modal.find('.modal-body #resna').val(resna);
modal.find('.modal-body #audsi').val(audsi);
modal.find('.modal-body #audno').val(audno);
modal.find('.modal-body #audna').val(audna);
})


$('#editar_detalle_imp_retencion').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var cns_detalle = button.data('cns_detalle')
  var codigo = button.data('codigo')
  var descripcion = button.data('descripcion')
  var ressi = button.data('ressi')
  var resno = button.data('resno')
  var resna = button.data('resna')
  var audsi = button.data('audsi')
  var audno = button.data('audno')
  var audna = button.data('audna')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #cns_detalle').val(cns_detalle);
modal.find('.modal-body #codigo').val(codigo);
modal.find('.modal-body #descripcion').val(descripcion);
modal.find('.modal-body #ressi').val(ressi);
modal.find('.modal-body #resno').val(resno);
modal.find('.modal-body #resna').val(resna);
modal.find('.modal-body #audsi').val(audsi);
modal.find('.modal-body #audno').val(audno);
modal.find('.modal-body #audna').val(audna);
})


$('#editar_detalle_informe').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var cns_detalle = button.data('cns_detalle')
  var codigo = button.data('codigo')
  var descripcion = button.data('descripcion')
  var ressi = button.data('ressi')
  var resno = button.data('resno')
  var resna = button.data('resna')
  var audsi = button.data('audsi')
  var audno = button.data('audno')
  var audna = button.data('audna')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #cns_detalle').val(cns_detalle);
modal.find('.modal-body #codigo').val(codigo);
modal.find('.modal-body #descripcion').val(descripcion);
modal.find('.modal-body #ressi').val(ressi);
modal.find('.modal-body #resno').val(resno);
modal.find('.modal-body #resna').val(resna);
modal.find('.modal-body #audsi').val(audsi);
modal.find('.modal-body #audno').val(audno);
modal.find('.modal-body #audna').val(audna);
})


$('#editarchecklist').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var descripcion = button.data('descripcion')
  var filtro_plantilla = button.data('filtro_plantilla')
  var tabla_encabezado = button.data('tabla_encabezado')
  var tabla_detalle = button.data('tabla_detalle')
  

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #descripcion').val(descripcion);
modal.find('.modal-body #filtro_plantilla').val(filtro_plantilla);
modal.find('.modal-body #tabla_encabezado').val(tabla_encabezado);
modal.find('.modal-body #tabla_detalle').val(tabla_detalle);

})


$('#crear_compromisos_cliente').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)


  var id = button.data('id')

   $(event.currentTarget).find('#valorempresa').html(id);
 

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id_empresa').val(id);

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


$('#editar_pago_cliente').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var cliente_pago = button.data('clientepago')
  var fecha_pago_cliente = button.data('fechapagocliente')
  var valor_pago_cliente = button.data('valorpagocliente')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #cliente_pago').val(cliente_pago);
modal.find('.modal-body #fecha_pago_cliente').val(fecha_pago_cliente);
modal.find('.modal-body #valor_pago_cliente').val(valor_pago_cliente);
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


$('#editar_compromisos_cliente').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var id_empresa = button.data('id_empresa')
  var id_compromiso = button.data('id_compromiso')
  var id_periodo = button.data('id_periodo')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #id_empresa').val(id_empresa);
modal.find('.modal-body #id_compromiso').val(id_compromiso);
modal.find('.modal-body #id_periodo').val(id_periodo);
})


$('#editar_estado_cita').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var Estado = button.data('estado')
  var color_agenda = button.data('color_agenda')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #Estado').val(Estado);
modal.find('.modal-body #color_agenda').val(color_agenda);
})



$('#editar_plantilla_checklist').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var codigo_plantilla_checklist = button.data('codigoplantillachecklist')
  var descripcion_plantilla_checklist = button.data('descripcionplantillachecklist')
  var filtro_checklist = button.data('filtrochecklist')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #codigo_plantilla_checklist').val(codigo_plantilla_checklist);
modal.find('.modal-body #descripcion_plantilla_checklist').val(descripcion_plantilla_checklist);
modal.find('.modal-body #filtro_checklist').val(filtro_checklist);
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


$('#editar_citas').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id= button.data('id')
  var fecha_citas= button.data('fecha_citas')
  var lugar_citas= button.data('lugar_citas')
  var observacion_citas= button.data('observacion_citas')
  var empresa_citas= button.data('empresa_citas')
  var hora_citas= button.data('hora_citas')
  var asistio_citas= button.data('asistio_citas')
  var usuario_citas= button.data('usuario_citas')
  var hora_final_citas= button.data('hora_final_citas')
  var jornada_citas= button.data('jornada_citas')
  var actividad_citas= button.data('actividad_citas')
  var estado_citas= button.data('estado_citas')
  var compromiso_citas= button.data('compromiso_citas')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #fecha_citas').val(fecha_citas);
modal.find('.modal-body #lugar_citas').val(lugar_citas);
modal.find('.modal-body #observacion_citas').val(observacion_citas);
modal.find('.modal-body #empresa_citas').val(empresa_citas);
modal.find('.modal-body #hora_citas').val(hora_citas);
modal.find('.modal-body #asistio_citas').val(asistio_citas);
modal.find('.modal-body #usuario_citas').val(usuario_citas);
modal.find('.modal-body #hora_final_citas').val(hora_final_citas);
modal.find('.modal-body #jornada_citas').val(jornada_citas);
modal.find('.modal-body #actividad_citas').val(actividad_citas);
modal.find('.modal-body #estado_citas').val(estado_citas);
modal.find('.modal-body #compromiso_citas').val(compromiso_citas);

})




$('#editar_encabezado_dev_iva').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button triggered the modal
  var id = button.data('id')  
  var responsable = button.data('responsable')
  var cliente = button.data('cliente')
  var auditor = button.data('auditor')
  var bim = button.data('bim')
  var fecha_vencimiento = new Date(button.data('fechavencimiento')).toISOString().slice(0, 10)
  var fecha_entrega = new Date(button.data('fechaentrega')).toISOString().slice(0, 10)
  var Observaciones = button.data('observaciones')
  var enviar_auditoria = button.data('enviarauditoria')
  var cierre_auditoria = button.data('cierreauditoria')
  var observaciones_auditoria = button.data('observacionesauditoria')
  var ubicacion_archivos = button.data('ubicacionarchivos')
  var fecha_auditoria_encabezado_dev_iva = new Date(button.data('fechaauditoriaencabezadodeviva')).toISOString().slice(0, 10)
  var fecha_elaboracion = new Date(button.data('fechaelaboracion')).toISOString().slice(0, 10)
 



  var modal = $(this)

  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #responsable').val(responsable)
  modal.find('.modal-body #cliente').val(cliente)
  modal.find('.modal-body #auditor').val(auditor)
  modal.find('.modal-body #bim').val(bim)
  modal.find('.modal-body #fecha_vencimiento').val(fecha_vencimiento)
  modal.find('.modal-body #fecha_entrega').val(fecha_entrega)
  modal.find('.modal-body #Observaciones').val(Observaciones)
  modal.find('.modal-body #enviar_auditoria').val(enviar_auditoria)
  modal.find('.modal-body #cierre_auditoria').val(cierre_auditoria)
  modal.find('.modal-body #observaciones_auditoria').val(observaciones_auditoria)
  modal.find('.modal-body #ubicacion_archivos').val(ubicacion_archivos)
  modal.find('.modal-body #fecha_auditoria_encabezado_dev_iva').val(fecha_auditoria_encabezado_dev_iva)
  modal.find('.modal-body #fecha_elaboracion').val(fecha_elaboracion)
})


$('#editar_encabezado_imp_ica').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button triggered the modal
  var id = button.data('id')  
  var responsable = button.data('responsable')
  var cliente = button.data('cliente')
  var auditor = button.data('auditor')
  var bim = button.data('bim')
  var fecha_vencimiento = new Date(button.data('fechavencimiento')).toISOString().slice(0, 10)
  var fecha_entrega = new Date(button.data('fechaentrega')).toISOString().slice(0, 10)
  var Observaciones = button.data('observaciones')
  var enviar_auditoria = button.data('enviarauditoria')
  var cierre_auditoria = button.data('cierreauditoria')
  var observaciones_auditoria = button.data('observacionesauditoria')
  var ubicacion_archivos = button.data('ubicacionarchivos')
  var fecha_auditoria = new Date(button.data('fecha_auditoria')).toISOString().slice(0, 10)
  var fecha_elaboracion = new Date(button.data('fechaelaboracion')).toISOString().slice(0, 10)
 



  var modal = $(this)

  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #responsable').val(responsable)
  modal.find('.modal-body #cliente').val(cliente)
  modal.find('.modal-body #audito').val(auditor)
  modal.find('.modal-body #bim_auditado').val(bim)
  modal.find('.modal-body #fecha_vencimiento').val(fecha_vencimiento)
  modal.find('.modal-body #fecha_entrega').val(fecha_entrega)
  modal.find('.modal-body #Observaciones').val(Observaciones)
  modal.find('.modal-body #enviar_auditoria').val(enviar_auditoria)
  modal.find('.modal-body #cierre_auditoria').val(cierre_auditoria)
  modal.find('.modal-body #observaciones_auditoria').val(observaciones_auditoria)
  modal.find('.modal-body #ubicacion_archivos').val(ubicacion_archivos)
  modal.find('.modal-body #fecha_auditoria').val(fecha_auditoria)
  modal.find('.modal-body #fecha_elaboracion').val(fecha_elaboracion)
})


$('#editar_encabezado_imp_iva').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button triggered the modal
  var id = button.data('id')  
  var responsable = button.data('responsable')
  var cliente = button.data('cliente')
  var auditor = button.data('auditor')
  var bim = button.data('bim')
  var fecha_vencimiento = new Date(button.data('fechavencimiento')).toISOString().slice(0, 10)
  var fecha_entrega = new Date(button.data('fechaentrega')).toISOString().slice(0, 10)
  var Observaciones = button.data('observaciones')
  var enviar_auditoria = button.data('enviarauditoria')
  var cierre_auditoria = button.data('cierreauditoria')
  var observaciones_auditoria = button.data('observacionesauditoria')
  var ubicacion_archivos = button.data('ubicacionarchivos')
  var fecha_auditoria = new Date(button.data('fecha_auditoria')).toISOString().slice(0, 10)
  var fecha_elaboracion = new Date(button.data('fechaelaboracion')).toISOString().slice(0, 10)
 



  var modal = $(this)

  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #responsable').val(responsable)
  modal.find('.modal-body #cliente').val(cliente)
  modal.find('.modal-body #audito').val(auditor)
  modal.find('.modal-body #bim_auditado').val(bim)
  modal.find('.modal-body #fecha_vencimiento').val(fecha_vencimiento)
  modal.find('.modal-body #fecha_entrega').val(fecha_entrega)
  modal.find('.modal-body #Observaciones').val(Observaciones)
  modal.find('.modal-body #enviar_auditoria').val(enviar_auditoria)
  modal.find('.modal-body #cierre_auditoria').val(cierre_auditoria)
  modal.find('.modal-body #observaciones_auditoria').val(observaciones_auditoria)
  modal.find('.modal-body #ubicacion_archivos').val(ubicacion_archivos)
  modal.find('.modal-body #fecha_auditoria').val(fecha_auditoria)
  modal.find('.modal-body #fecha_elaboracion').val(fecha_elaboracion)
})


$('#editar_encabezado_imp_renta').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button triggered the modal
  var id = button.data('id')  
  var responsable = button.data('responsable')
  var cliente = button.data('cliente')
  var auditor = button.data('auditor')
  var bim = button.data('bim')
  var fecha_vencimiento = new Date(button.data('fechavencimiento')).toISOString().slice(0, 10)
  var fecha_entrega = new Date(button.data('fechaentrega')).toISOString().slice(0, 10)
  var Observaciones = button.data('observaciones')
  var enviar_auditoria = button.data('enviarauditoria')
  var cierre_auditoria = button.data('cierreauditoria')
  var observaciones_auditoria = button.data('observacionesauditoria')
  var ubicacion_archivos = button.data('ubicacionarchivos')
  var fecha_auditoria = new Date(button.data('fecha_auditoria')).toISOString().slice(0, 10)
  var fecha_elaboracion = new Date(button.data('fechaelaboracion')).toISOString().slice(0, 10)
 



  var modal = $(this)

  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #responsable').val(responsable)
  modal.find('.modal-body #cliente').val(cliente)
  modal.find('.modal-body #audito').val(auditor)
  modal.find('.modal-body #bim_auditado').val(bim)
  modal.find('.modal-body #fecha_vencimiento').val(fecha_vencimiento)
  modal.find('.modal-body #fecha_entrega').val(fecha_entrega)
  modal.find('.modal-body #Observaciones').val(Observaciones)
  modal.find('.modal-body #enviar_auditoria').val(enviar_auditoria)
  modal.find('.modal-body #cierre_auditoria').val(cierre_auditoria)
  modal.find('.modal-body #observaciones_auditoria').val(observaciones_auditoria)
  modal.find('.modal-body #ubicacion_archivos').val(ubicacion_archivos)
  modal.find('.modal-body #fecha_auditoria').val(fecha_auditoria)
  modal.find('.modal-body #fecha_elaboracion').val(fecha_elaboracion)
})


$('#editar_encabezado_imp_reteica').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button triggered the modal
  var id = button.data('id')  
  var responsable = button.data('responsable')
  var cliente = button.data('cliente')
  var auditor = button.data('auditor')
  var bim = button.data('bim')
  var fecha_vencimiento = new Date(button.data('fechavencimiento')).toISOString().slice(0, 10)
  var fecha_entrega = new Date(button.data('fechaentrega')).toISOString().slice(0, 10)
  var Observaciones = button.data('observaciones')
  var enviar_auditoria = button.data('enviarauditoria')
  var cierre_auditoria = button.data('cierreauditoria')
  var observaciones_auditoria = button.data('observacionesauditoria')
  var ubicacion_archivos = button.data('ubicacionarchivos')
  var fecha_auditoria = new Date(button.data('fecha_auditoria')).toISOString().slice(0, 10)
  var fecha_elaboracion = new Date(button.data('fechaelaboracion')).toISOString().slice(0, 10)
 



  var modal = $(this)

  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #responsable').val(responsable)
  modal.find('.modal-body #cliente').val(cliente)
  modal.find('.modal-body #audito').val(auditor)
  modal.find('.modal-body #bim_auditado').val(bim)
  modal.find('.modal-body #fecha_vencimiento').val(fecha_vencimiento)
  modal.find('.modal-body #fecha_entrega').val(fecha_entrega)
  modal.find('.modal-body #Observaciones').val(Observaciones)
  modal.find('.modal-body #enviar_auditoria').val(enviar_auditoria)
  modal.find('.modal-body #cierre_auditoria').val(cierre_auditoria)
  modal.find('.modal-body #observaciones_auditoria').val(observaciones_auditoria)
  modal.find('.modal-body #ubicacion_archivos').val(ubicacion_archivos)
  modal.find('.modal-body #fecha_auditoria').val(fecha_auditoria)
  modal.find('.modal-body #fecha_elaboracion').val(fecha_elaboracion)
})

$('#editar_encabezado_imp_retencion').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button triggered the modal
  var id = button.data('id')  
  var responsable = button.data('responsable')
  var cliente = button.data('cliente')
  var auditor = button.data('auditor')
  var bim = button.data('bim')
  var fecha_vencimiento = new Date(button.data('fechavencimiento')).toISOString().slice(0, 10)
  var fecha_entrega = new Date(button.data('fechaentrega')).toISOString().slice(0, 10)
  var Observaciones = button.data('observaciones')
  var enviar_auditoria = button.data('enviarauditoria')
  var cierre_auditoria = button.data('cierreauditoria')
  var observaciones_auditoria = button.data('observacionesauditoria')
  var ubicacion_archivos = button.data('ubicacionarchivos')
  var fecha_auditoria = new Date(button.data('fecha_auditoria')).toISOString().slice(0, 10)
  var fecha_elaboracion = new Date(button.data('fechaelaboracion')).toISOString().slice(0, 10)
 



  var modal = $(this)

  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #responsable').val(responsable)
  modal.find('.modal-body #cliente').val(cliente)
  modal.find('.modal-body #audito').val(auditor)
  modal.find('.modal-body #bim_auditado').val(bim)
  modal.find('.modal-body #fecha_vencimiento').val(fecha_vencimiento)
  modal.find('.modal-body #fecha_entrega').val(fecha_entrega)
  modal.find('.modal-body #Observaciones').val(Observaciones)
  modal.find('.modal-body #enviar_auditoria').val(enviar_auditoria)
  modal.find('.modal-body #cierre_auditoria').val(cierre_auditoria)
  modal.find('.modal-body #observaciones_auditoria').val(observaciones_auditoria)
  modal.find('.modal-body #ubicacion_archivos').val(ubicacion_archivos)
  modal.find('.modal-body #fecha_auditoria').val(fecha_auditoria)
  modal.find('.modal-body #fecha_elaboracion').val(fecha_elaboracion)
})


$('#editar_encabezado_informe').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) // Button triggered the modal
  var id = button.data('id')  
  var responsable = button.data('responsable')
  var cliente = button.data('cliente')
  var auditor = button.data('auditor')
  var bim = button.data('bim')
  var fecha_vencimiento = new Date(button.data('fechavencimiento')).toISOString().slice(0, 10)
  var fecha_entrega = new Date(button.data('fechaentrega')).toISOString().slice(0, 10)
  var Observaciones = button.data('observaciones')
  var enviar_auditoria = button.data('enviarauditoria')
  var cierre_auditoria = button.data('cierreauditoria')
  var observaciones_auditoria = button.data('observacionesauditoria')
  var ubicacion_archivos = button.data('ubicacionarchivos')
  var fecha_auditoria = new Date(button.data('fecha_auditoria')).toISOString().slice(0, 10)
  var fecha_elaboracion = new Date(button.data('fechaelaboracion')).toISOString().slice(0, 10)
 



  var modal = $(this)

  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body #responsable').val(responsable)
  modal.find('.modal-body #cliente').val(cliente)
  modal.find('.modal-body #audito').val(auditor)
  modal.find('.modal-body #bim_auditado').val(bim)
  modal.find('.modal-body #fecha_vencimiento').val(fecha_vencimiento)
  modal.find('.modal-body #fecha_entrega').val(fecha_entrega)
  modal.find('.modal-body #Observaciones').val(Observaciones)
  modal.find('.modal-body #enviar_auditoria').val(enviar_auditoria)
  modal.find('.modal-body #cierre_auditoria').val(cierre_auditoria)
  modal.find('.modal-body #observaciones_auditoria').val(observaciones_auditoria)
  modal.find('.modal-body #ubicacion_archivos').val(ubicacion_archivos)
  modal.find('.modal-body #fecha_auditoria').val(fecha_auditoria)
  modal.find('.modal-body #fecha_elaboracion').val(fecha_elaboracion)
})






$(document).ready(function() {
  $('#CreateFormCliente').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      lugar_citas: {
        message: 'El Lugar no es valido!',
        validators: {
          notEmpty: {
            message: 'El lugar es requerido'
          },
          stringLength: {
            min: 1  ,
            max: 30,
            message: 'The username must be more than 6 and less than 30 characters long'
          },
          regexp: {
            regexp: /^[a-zA-Z0-9_]+$/,
            message: 'The username can only consist of alphabetical, number and underscore'
          }
        }
      },
      observacion_citas: {
        validators: {
          notEmpty: {
            message: 'El campo de Observacion de Citas no puede estar vacio!'
          },


        }
      },

      empresa_citas: {
        validators: {
          notEmpty: {
            message: 'El campo empresa citas es  obligatorio!'
          },

        }
        },

      asistio_citas: {
        validators: {
          notEmpty: {
            message: 'El campo asitio a citas es  obligatorio!'
          },


        }
      },

      usuario_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Usuario citas es  obligatorio!'
          },


        }
      },

      jornada_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Jornada citas es  obligatorio!'
          },


        }
      },

      
      estado_citas: {
        validators: {
          notEmpty: {
            message: 'El campo estado citas es  obligatorio!'
          },


        }
      },


      fecha_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Fecha citas es  obligatorio!'
          },


        }
      },

      hora_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Hora citas es  obligatorio!'
          },


        }
      },

      hora_final_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Hora final citas es  obligatorio!'
          },


        }
      },




    }
  });
});


$(document).ready(function() {
  $('#EditFormCitas').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      lugar_citas: {
        message: 'El Lugar no es valido!',
        validators: {
          notEmpty: {
            message: 'El lugar es requerido'
          },
          stringLength: {
            min: 1  ,
            max: 30,
            message: 'The username must be more than 6 and less than 30 characters long'
          },
          regexp: {
            regexp: /^[a-zA-Z0-9_]+$/,
            message: 'The username can only consist of alphabetical, number and underscore'
          }
        }
      },
      observacion_citas: {
        validators: {
          notEmpty: {
            message: 'El campo de Observacion de Citas no puede estar vacio!'
          },


        }
      },

      empresa_citas: {
        validators: {
          notEmpty: {
            message: 'El campo empresa citas es  obligatorio!'
          },


        }
      },

      asistio_citas: {
        validators: {
          notEmpty: {
            message: 'El campo asitio a citas es  obligatorio!'
          },


        }
      },

      usuario_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Usuario citas es  obligatorio!'
          },


        }
      },

      jornada_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Jornada citas es  obligatorio!'
          },


        }
      },

      actividad_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Actividad citas es  obligatorio!'
          },


        }
      },

      estado_citas: {
        validators: {
          notEmpty: {
            message: 'El campo estado citas es  obligatorio!'
          },


        }
      },


      fecha_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Fecha citas es  obligatorio!'
          },


        }
      },

      hora_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Hora citas es  obligatorio!'
          },


        }
      },

      hora_final_citas: {
        validators: {
          notEmpty: {
            message: 'El campo Hora final citas es  obligatorio!'
          },


        }
      },




    }
  });
});





$(document).ready(function() {
  $('#formUserCreate').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      name: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo de Nombre es requerido!'
          },
          stringLength: {
            min: 6,
            max: 30,
            message: 'El campo debe llevar minimo 6 Caracteres y Maximno 30 Caracteres'
          },

        }
      },
      email: {
        validators: {
          notEmpty: {
            message: 'El email es requerido y no puede ir vacio!'
          },
          emailAddress: {
            message: 'La dirección de correo no es valida!'
          }
        }
      },

      password: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo de contraseña es requerido!'
          },
          stringLength: {
            min: 6,
            max: 30,
            message: 'El campo debe llevar minimo 6 Caracteres y Maximno 30 Caracteres'
          },

        }
      },


      password_confirmation: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo de contraseña es requerido!'
          },
          stringLength: {
            min: 6,
            max: 30,
            message: 'El campo debe llevar minimo 6 Caracteres y Maximno 30 Caracteres'
          },

        }
      },

      cargo: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Cargo es requerido!'
          },

        }
      },


       valor: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Valor es requerido!'
          },

        }
      },

       horas: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Horas es requerido!'
          },

        }
      },

      perfil_usuario: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Perfil es requerido!'
          },

        }
      },

      activo: {
        message: 'El campo Activo no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Activo es requerido!'
          },

        }
      },


    }
  });
});





$(document).ready(function() {
  $('#formUserEdit').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      name: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo de Nombre es requerido!'
          },
          stringLength: {
            min: 6,
            max: 30,
            message: 'El campo debe llevar minimo 6 Caracteres y Maximno 30 Caracteres'
          },

        }
      },
      email: {
        validators: {
          notEmpty: {
            message: 'El email es requerido y no puede ir vacio!'
          },
          emailAddress: {
            message: 'La dirección de correo no es valida!'
          }
        }
      },

      password: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo de contraseña es requerido!'
          },
          stringLength: {
            min: 6,
            max: 30,
            message: 'El campo debe llevar minimo 6 Caracteres y Maximno 30 Caracteres'
          },

        }
      },


      password_confirmation: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo de contraseña es requerido!'
          },
          stringLength: {
            min: 6,
            max: 30,
            message: 'El campo debe llevar minimo 6 Caracteres y Maximno 30 Caracteres'
          },

        }
      },

      cargo: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Cargo es requerido!'
          },

        }
      },

       valor: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Valor es requerido!'
          },

        }
      },

       horas: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Horas es requerido!'
          },

        }
      },

      perfil_usuario: {
        message: 'El campo name no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Perfil es requerido!'
          },

        }
      },

      activo: {
        message: 'El campo Activo no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Activo es requerido!'
          },

        }
      },


      perfil_usuario: {
        message: 'El campo Perfil no es valido!',
        validators: {
          notEmpty: {
            message: 'El campo Perfil es requerido!'
          },

        }
      },


    }
  });
});


$(document).ready(function() {
  $('#FormClienteCreate').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {

      nit:{
        validators:{
          notEmpty:{
            message:'El campo nit es obligatorio!'
          },


        }
      },
      nombre_cliente:{
        validators:{
          notEmpty:{
            message:'El campo nombre_cliente es obligatorio!'
          },


        }
      },
      direccion_cliente:{
        validators:{
          notEmpty:{
            message:'El campo direccion_cliente es obligatorio!'
          },


        }
      },
      telefono_cliente:{
        validators:{
          notEmpty:{
            message:'El campo telefono_cliente es obligatorio!'
          },


        }
      },
      celular_cliente:{
        validators:{
          notEmpty:{
            message:'El campo celular_cliente es obligatorio!'
          },


        }
      },
      
      gran_contribuyente_cliente:{
        validators:{
          notEmpty:{
            message:'El campo gran_contribuyente_cliente es obligatorio!'
          },


        }
      },
      correo_cliente:{
        validators:{
          notEmpty:{
            message:'El campo correo_cliente es obligatorio!'
          },

          emailAddress: {
                        message: 'No es valido la dirección correos.'
                    }


        }
      },
      ciudad_cliente:{
        validators:{
          notEmpty:{
            message:'El campo ciudad_cliente es obligatorio!'
          },


        }
      },
      pais_cliente:{
        validators:{
          notEmpty:{
            message:'El campo pais_cliente es obligatorio!'
          },


        }
      },
      contacto_cliente:{
        validators:{
          notEmpty:{
            message:'El campo contacto_cliente es obligatorio!'
          },


        }
      },
      clave_ingreso_DIAN_cliente:{
        validators:{
          notEmpty:{
            message:'El campo clave_ingreso_DIAN_cliente es obligatorio!'
          },


        }
      },
      clave_firma_DIAN_cliente:{
        validators:{
          notEmpty:{
            message:'El campo clave_firma_DIAN_cliente es obligatorio!'
          },


        }
      },
      clave_CC_cliente:{
        validators:{
          notEmpty:{
            message:'El campo clave_CC_cliente es obligatorio!'
          },


        }
      },
      responsable_cliente:{
        validators:{
          notEmpty:{
            message:'El campo responsable_cliente es obligatorio!'
          },


        }
      },
      ultimo_digito_cliente:{
        validators:{
          notEmpty:{
            message:'El campo ultimo_digito_cliente es obligatorio!'
          },


        }
      },
      ultimos_digitos_cliente:{
        validators:{
          notEmpty:{
            message:'El campo ultimos_digitos_cliente es obligatorio!'
          },


        }
      },
      activo_cliente:{
        validators:{
          notEmpty:{
            message:'El campo activo_cliente es obligatorio!'
          },


        }
      },
      tipo_cliente:{
        validators:{
          notEmpty:{
            message:'El campo tipo_cliente es obligatorio!'
          },


        }
      },
      representante_legal_cliente:{
        validators:{
          notEmpty:{
            message:'El campo representante_legal_cliente es obligatorio!'
          },


        }
      },
      nombre_representante_legal_cliente:{
        validators:{
          notEmpty:{
            message:'El campo nombre_representante_legal_cliente es obligatorio!'
          },


        }
      },      



    }
  });
});


$(document).ready(function() {
  $('#FormClienteEdit').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {

      nit:{
        validators:{
          notEmpty:{
            message:'El campo nit es obligatorio!'
          },


        }
      },
      nombre_cliente:{
        validators:{
          notEmpty:{
            message:'El campo nombre_cliente es obligatorio!'
          },


        }
      },
      direccion_cliente:{
        validators:{
          notEmpty:{
            message:'El campo direccion_cliente es obligatorio!'
          },


        }
      },
      telefono_cliente:{
        validators:{
          notEmpty:{
            message:'El campo telefono_cliente es obligatorio!'
          },


        }
      },
      celular_cliente:{
        validators:{
          notEmpty:{
            message:'El campo celular_cliente es obligatorio!'
          },


        }
      },
      
      gran_contribuyente_cliente:{
        validators:{
          notEmpty:{
            message:'El campo gran_contribuyente_cliente es obligatorio!'
          },


        }
      },
      correo_cliente:{
        validators:{
          notEmpty:{
            message:'El campo correo_cliente es obligatorio!'
          },

          emailAddress: {
                        message: 'No es valido la dirección correos.'
                    }


        }
      },
      ciudad_cliente:{
        validators:{
          notEmpty:{
            message:'El campo ciudad_cliente es obligatorio!'
          },


        }
      },
      pais_cliente:{
        validators:{
          notEmpty:{
            message:'El campo pais_cliente es obligatorio!'
          },


        }
      },
      contacto_cliente:{
        validators:{
          notEmpty:{
            message:'El campo contacto_cliente es obligatorio!'
          },


        }
      },
      clave_ingreso_DIAN_cliente:{
        validators:{
          notEmpty:{
            message:'El campo clave_ingreso_DIAN_cliente es obligatorio!'
          },


        }
      },
      clave_firma_DIAN_cliente:{
        validators:{
          notEmpty:{
            message:'El campo clave_firma_DIAN_cliente es obligatorio!'
          },


        }
      },
      clave_CC_cliente:{
        validators:{
          notEmpty:{
            message:'El campo clave_CC_cliente es obligatorio!'
          },


        }
      },
      responsable_cliente:{
        validators:{
          notEmpty:{
            message:'El campo responsable_cliente es obligatorio!'
          },


        }
      },
      ultimo_digito_cliente:{
        validators:{
          notEmpty:{
            message:'El campo ultimo_digito_cliente es obligatorio!'
          },


        }
      },
      ultimos_digitos_cliente:{
        validators:{
          notEmpty:{
            message:'El campo ultimos_digitos_cliente es obligatorio!'
          },


        }
      },
      activo_cliente:{
        validators:{
          notEmpty:{
            message:'El campo activo_cliente es obligatorio!'
          },


        }
      },
      tipo_cliente:{
        validators:{
          notEmpty:{
            message:'El campo tipo_cliente es obligatorio!'
          },


        }
      },
      representante_legal_cliente:{
        validators:{
          notEmpty:{
            message:'El campo representante_legal_cliente es obligatorio!'
          },


        }
      },
      nombre_representante_legal_cliente:{
        validators:{
          notEmpty:{
            message:'El campo nombre_representante_legal_cliente es obligatorio!'
          },


        }
      },      



    }
  });
});



$(document).ready(function () {
        $('#FormCreatePerfil')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion_perfil: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_perfil es requerido'
                    }
                }
            }
        }
    })
    })


$(document).ready(function () {
        $('#FormEditPerfil')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion_perfil: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_perfil es requerido'
                    }
                }
            }
        }
    })
    })




$(document).ready(function () {
        $('#FormCreateCargos')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion_cargo: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_Cargo es requerido'
                    }
                }
            }
        }
    })
    })


$(document).ready(function () {
        $('#FormEditCargos')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion_cargo: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_Cargo es requerido'
                    }
                }
            }
        }
    })
    })



$(document).ready(function () {
        $('#FormCreateActividad')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion_actividad: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_Cargo es requerido'
                    }
                }
            }
            ,
            modo_actividad: {
                validators: {
                    notEmpty: {
                        message: 'El campo modo_actividad es requerido'
                    }
                }
            }
        }
    })
    })


$(document).ready(function () {
        $('#FormEditActividad')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion_actividad: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_Cargo es requerido'
                    }
                }
            },
            modo_actividad: {
                validators: {
                    notEmpty: {
                        message: 'El campo modo_actividad es requerido'
                    }
                }
            }
        }
    })
    })



$(document).ready(function () {
        $('#FormCreateCompromisos')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion_compromisos: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_compromisos es requerido'
                    }
                }
            }
          
        }
    })
    })


$(document).ready(function () {
        $('#FormEditCompromisos')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion_compromisos: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_compromisos requerido'
                    }
                }
            }
        }
    })
    })


$(document).ready(function () {
        $('#FromCreateEstadoCita')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Estado: {
                validators: {
                    notEmpty: {
                        message: 'El campo Estado es requerido'
                    }
                }
            }
          
        }
    })
    })


$(document).ready(function () {
        $('#FromEditEstadoCita')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Estado: {
                validators: {
                    notEmpty: {
                        message: 'El campo Estado requerido'
                    }
                }
            }
        }
    })
    })


$(document).ready(function () {
        $('#FormCreateLugar')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion_lugar: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_lugar es requerido'
                    }
                }
            }
          
        }
    })
    })


$(document).ready(function () {
        $('#FormEditLugar')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion_lugar: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_lugar requerido'
                    }
                }
            }
        }
    })
    })

$(document).ready(function () {
        $('#FormCreatecompromisos_cliente')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_empresa: {
                validators: {
                    notEmpty: {
                        message: 'El campo empresa es requerido'
                    }
                }
            },
            id_compromiso: {
                validators: {
                    notEmpty: {
                        message: 'El campo compromisio es requerido'
                    }
                }
            },
            id_periodo: {
                validators: {
                    notEmpty: {
                        message: 'El campo periodo es requerido'
                    }
                }
            }
          
        }//termina
    })
    })


$(document).ready(function () {
        $('#FormEditcompromisos_cliente')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            id_empresa: {
                validators: {
                    notEmpty: {
                        message: 'El campo empresa es requerido'
                    }
                }
            },
            id_compromiso: {
                validators: {
                    notEmpty: {
                        message: 'El campo compromisio es requerido'
                    }
                }
            },
            id_periodo: {
                validators: {
                    notEmpty: {
                        message: 'El campo periodo es requerido'
                    }
                }
            }
        }
    })
    })





$(document).ready(function () {
        $('#FormCreatechecklists')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripción es requerido'
                    }
                }
            },
            filtro_plantilla: {
                validators: {
                    notEmpty: {
                        message: 'El campo filtro de plantilla es requerido'
                    }
                }
            },
            tabla_encabezado: {
                validators: {
                    notEmpty: {
                        message: 'El campo tabla encabezado es requerido'
                    }
                }
            },
            tabla_detalle: {
                validators: {
                    notEmpty: {
                        message: 'El campo tabla detalle es requerido'
                    }
                }
            }


          
        }//termina
    })
    })


$(document).ready(function () {
        $('#FormEditchecklists')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            descripcion: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripción es requerido'
                    }
                }
            },
            filtro_plantilla: {
                validators: {
                    notEmpty: {
                        message: 'El campo filtro de plantilla es requerido'
                    }
                }
            },
            tabla_encabezado: {
                validators: {
                    notEmpty: {
                        message: 'El campo tabla encabezado es requerido'
                    }
                }
            },
            tabla_detalle: {
                validators: {
                    notEmpty: {
                        message: 'El campo tabla detalle es requerido'
                    }
                }
            }
        }
    })
    })


$(document).ready(function () {
        $('#FormCreatepago_clientes')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cliente_pago: {
                validators: {
                    notEmpty: {
                        message: 'El campo cliente es requerido'
                    }
                }
            },
            fecha_pago_cliente: {
                validators: {
                    notEmpty: {
                        message: 'El campo Fecha es requerido'
                    }
                }
            },
            valor_pago_cliente: {
                validators: {
                    notEmpty: {
                        message: 'El campo valor es requerido'
                    }
                }
            }


          
        }//termina
    })
    })


$(document).ready(function () {
        $('#FormEditpago_clientes')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            cliente_pago: {
                validators: {
                    notEmpty: {
                        message: 'El campo cliente es requerido'
                    }
                }
            },
            fecha_pago_cliente: {
                validators: {
                    notEmpty: {
                        message: 'El campo Fecha es requerido'
                    }
                }
            },
            valor_pago_cliente: {
                validators: {
                    notEmpty: {
                        message: 'El campo valor es requerido'
                    }
                }
            }


          
        }//termina
    })
    })


$(document).ready(function () {
        $('#FormCreateplantilla_checklists')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            codigo_plantilla_checklist: {
                validators: {
                    notEmpty: {
                        message: 'El campo codigo_plantilla_checklist es requerido'
                    }
                }
            },
            descripcion_plantilla_checklist: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_plantilla_checklist es requerido'
                    }
                }
            },
            filtro_checklist: {
                validators: {
                    notEmpty: {
                        message: 'El campo filtro_checklist es requerido'
                    }
                }
            }


          
        }//termina
    })
    })


$(document).ready(function () {
        $('#FormEditplantilla_checklists')
    .bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            codigo_plantilla_checklist: {
                validators: {
                    notEmpty: {
                        message: 'El campo codigo_plantilla_checklist es requerido'
                    }
                }
            },
            descripcion_plantilla_checklist: {
                validators: {
                    notEmpty: {
                        message: 'El campo descripcion_plantilla_checklist es requerido'
                    }
                }
            },
            filtro_checklist: {
                validators: {
                    notEmpty: {
                        message: 'El campo filtro_checklist es requerido'
                    }
                }
            }


          
        }//termina
    })
    })


