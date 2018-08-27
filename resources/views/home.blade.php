@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
   
    <div id='calendar'></div>



    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Asignar Agenda</h4>
                </div>
                <div class="modal-body">

                    <form action="" method="POST" role="form">
                        <legend>Form title</legend>
                    
                        <div class="form-group">
                            <label for="">label</label>
                            <input type="text" class="form-control" id="fecha" placeholder="Input field">
                        </div>
                        <div class="form-group">
                            <label for="">label</label>
                            <input type="text" class="form-control"  placeholder="Input field">
                        </div>

                         <div class="form-group">
                            <label for="">label</label>
                            <input type="text" class="form-control"  placeholder="Input field">
                        </div>

                        <select name="" id="input" class="form-control" required="required">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        
                        
                    
                        
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    
    $(document).ready(function() {
        $('#calendar').fullCalendar({
  header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },

      dayClick: function(date) {
            jQuery.noConflict(); 
            $('#myModal').modal();
        // var fecha=$(this).val();
        $('#fecha').val(date.format());

       // alert(date.format());



  },

  events:'https://fullcalendar.io/demo-events.json',

  locale: 'es'
 
});
    });
</script>




@endsection
