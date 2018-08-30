@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')
   
    <div id='calendar'></div>



     @include('citas.create')
     @include('citas.editagenda')

<script type="text/javascript">
    
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            lang: 'es',
            editable: true,
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

            

           $.each(result, function(index, val) {
                
                if (val.id==calEvent.id) {

                   $('#id').val(val.id);
                   console.log($('#fecha_citas_agenda').val(val.fecha_citas));
                   $('#hora_citas').val(val.hora_citas);
                   $('#lugar_citas').val(val.lugar_citas);
                   $('#hora_final_citas').val(val.hora_final_citas);
                   $('#observacion_citas').val(val.observacion_citas);
                   $('#empresa_citas').val(val.empresa_citas);
                   console.log($('#asistio_citas_agenda').val(val.asistio_citas));
                   $('#usuario_citas').val(val.usuario_citas);
                   $('#jornada_citas').val(val.jornada_citas);
                   $('#actividad_citas').val(val.actividad_citas);
                   $('#estado_citas').val(val.estado_citas);

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

  events:'{{ route('citas_agenda') }}',

  locale: 'es'
 
});
    });
</script>




@endsection
