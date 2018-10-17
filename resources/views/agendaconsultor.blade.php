@extends('adminlte::layouts.app')

@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@include('sweet::alert')


<label>Seleccionar la Agenda del Consultor</label>
{!! Form::select('usuario_citas', $usuarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione el Consultor... ','id'=>'agendaconsultor']) !!}
<br>
<button type="button" class="btn btn-danger" id="refresh"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</button>

<div id='calendar'></div>
<input type="hidden" name="" id="logeado" value="{{Auth::user()->perfil_usuario}}">



@include('citas.create')
@include('citas.editagenda')

<script type="text/javascript">

  $(document).ready(function() {
    
    $('#refresh').click(function(event) {
      location.reload(true);
    });
  });

  
  $(document).ready(function() {

    
    
    $('#agendaconsultor').change(function(event) {


  var agendaconsultor = '{{ route('citas_agenda') }}'+"?nombre="+$('#agendaconsultor').val();
       console.log(agendaconsultor);
   
   swal({
  title: "Consulta Satisfatoria!",
  text: "Recuerde para consultar otro consultor, refrescar la página!",
  icon: "success",
  button: "Ok!",
});
    

    $('#calendar').fullCalendar({
      lang: 'es',
      editable: false,
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      dayClick: function(date) {
        jQuery.noConflict(); 
        $('#crear_citas').modal();
        // var fecha=$(this).val();
        $('#fecha_citas').val(date.format());
      },
      
      eventClick: function(calEvent, jsEvent, view) {
        jQuery.noConflict(); 
        $('#editar_citas_agenda').modal(); 
    //alert('Event: ' + calEvent.id);
    //alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
    //alert('View: ' + view.name);
    // change the border color just for fun
   // $(this).css('border-color', 'red');
   $.ajax({
    url: '{!!URL::to('citas_all')!!}',
    type: 'GET',
    dataType: 'json',
    data: {id: 'leonidas'},
  })
   .done(function(result) {
    var codigohtml="";
   
    $('#id3').html(codigohtml);
    $.each(result, function(index, val) {
      if (val.id==calEvent.id) {
       $('#id').val(val.id);
       $('#valor2').html(val.id);
       $('#acta').click(function(event) {
         window.location.href='/actavisita/'+val.id;
       });
       
      
       console.log($('#fecha_citas_agenda').val(val.fecha_citas));
       $('#hora_citas').val(val.hora_citas);
       $('#lugar_citas').val(val.lugar_citas);
       $('#hora_final_citas').val(val.hora_final_citas);
       $('#observacion_citas').val(val.observacion_citas);
       $('#empresa_citas').val(val.empresa_citas);
       console.log($('#asistio_citas_agenda').val(val.asistio_citas));
       $('#usuario_citas2').val(val.usuario_citas);
       $('#jornada_citas').val(val.jornada_citas);
       var json2 = JSON.parse(val.compromiso_citas);
       $('#compromiso_citas').val(json2);
                   //$('#actividad_citas').val(val.actividad_citas);
                   $('#estado_citas').val(val.estado_citas);
                   var json = JSON.parse(val.actividad_citas);
                   $('#actividad_citas').val(json);
                   // for (var i = 0; i < json.length; i++) {
                   //   //alert(json[i]);
                   //   $('#actividad_citas').val(json[i]);
                   // }
                   var log =$('#logeado').val();
                   if (val.estado_citas==1 && log > 1) {
                    $('#actualizarcita').attr('disabled', 'disabled');
                    $('#fecha_citas_agenda').attr('disabled', 'disabled');
                    $('#hora_citas').attr('disabled', 'disabled');
                    $('#lugar_citas').attr('disabled', 'disabled');
                    $('#hora_final_citas').attr('disabled', 'disabled');
                    $('#observacion_citas').attr('disabled', 'disabled');
                    $('#empresa_citas').attr('disabled', 'disabled');
                    $('#asistio_citas_agenda').attr('disabled', 'disabled');
                    $('#usuario_citas2').attr('disabled', 'disabled');
                    $('#jornada_citas').attr('disabled', 'disabled');
                    $('#compromiso_citas').attr('disabled', 'disabled');
                    $('#estado_citas').attr('disabled', 'disabled');
                    $('#actividad_citas').attr('disabled', 'disabled');
                  } 
                  
                } else {
                }
              });
    console.log("success");
  })
   .fail(function() {
    console.log("error");
  })
   .always(function() {
    console.log("complete");
  });
 },
 events:agendaconsultor,
 locale: 'es'
 
});
     
  });
$(document).ready(function() {
  $('#empresa_citas2').change(function(event) {
    var empresa = $(this).val();
    $.ajax({
     url: '{!!URL::to('comproclientesall')!!}',
     type: 'GET',
     dataType: 'json',
     data: {param1: 'value1'},
   })
    .done(function(result) {
      var Compromisos = []
      var contador =0;
      $.each(result, function(index, val) {
       if (val.id_empresa == empresa) {
        Compromisos[contador]= val.id_compromiso;
        contador+=1
        $('#compromiso_citas2').val(Compromisos);
      } else {
        console.log('val.id_compromiso');
      }
    });
      console.log("Los compromisos del clientes");
    })
    .fail(function() {
     console.log("error");
   })
    .always(function() {
     console.log("complete");
   });
  });
  });//evento change
});//cierre document
</script>




@endsection