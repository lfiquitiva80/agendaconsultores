<head>
    <meta charset="UTF-8">
    <title> Agenda Consultores - @yield('htmlheader_title', 'Agenda Consultores') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="" rel="stylesheet" type="text/css" />
  
   
    
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/js/fullcalendar/fullcalendar.css') }}">
     <link rel="stylesheet" href="{{asset('/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

        <script src="../../../../../../node_modules/admin-lte/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../../../node_modules/admin-lte/dist/css/AdminLTE.min.css">

    
    <!--<link rel='stylesheet' href='/js/fullcalendar/fullcalendar.css' />-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='{{ url (asset('/js/fullcalendar/locale/locale-all.js')) }}'></script>
    <script src='{{ url (asset('/js/fullcalendar/lib/jquery.min.js')) }}'></script>
    
<script src='{{ url (asset('/js/fullcalendar/lib/moment.min.js')) }}'></script>

<script src='{{ url (asset('/js/fullcalendar/fullcalendar.js')) }}'></script>
<script src='{{ url (asset('/js/sweetalert.min.js')) }}'></script>


<script src="https://unpkg.com/ionicons@4.2.1/dist/ionicons.js"></script>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <script>
        //See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
        window.trans = @php
            // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
            $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
            $trans = [];
            foreach ($lang_files as $f) {
                $filename = pathinfo($f)['filename'];
                $trans[$filename] = trans($filename);
            }
            $trans['adminlte_lang_message'] = trans('adminlte_lang::message');
            echo json_encode($trans);
        @endphp
    </script>
</head>
