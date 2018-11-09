@component('mail::message')
#Notificación Cerrado enviado por Auditoria


## Consultor(a) ** {{$responsable}}** , se notifica que fue cerrado, cumpliendo según el Auditor(a) **{{$auditor}}**. Con la siguiente información.


  - Auditoria para : ** {{$checklist}} **
  - Cliente : **{{$cliente}}**
  - Observaciones : **{{$Observaciones}}**
  - Fecha de Elaboración : **{{$fecha_elaboracion}}**
  - Id : **{{$id}}**

@component('mail::button', ['url' => 'http://planner.consultoresgroup.com'])
Ingresar al Sistema
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
