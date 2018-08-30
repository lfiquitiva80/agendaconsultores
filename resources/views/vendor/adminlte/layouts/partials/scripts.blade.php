<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
<script src="{{ url (asset('/js/consultores.js')) }}" type="text/javascript"></script>

<script src="{{ url (asset('/js/Chart.js')) }}" type="text/javascript"></script>
<script src="{{ url (asset('/js/Chart.min.js')) }}" type="text/javascript"></script>
<script src="https://unpkg.com/ionicons@4.2.1/dist/ionicons.js"></script>


<script src='{{ url (asset('/js/fullcalendar/lib/jquery.min.js')) }}'></script>
<script src='{{ url (asset('/js/fullcalendar/lib/moment.min.js')) }}'></script>
<script src='{{ url (asset('/js/fullcalendar/fullcalendar.js')) }}'></script>
<script src='{{ url (asset('/js/fullcalendar/locale-all.js')) }}'></script>
<script src='{{ url (asset('/js/sweetalert.min.js')) }}'></script>


<!-- Se verifica el validador de formularios  -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
