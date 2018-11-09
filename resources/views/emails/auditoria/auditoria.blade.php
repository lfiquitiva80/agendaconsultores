@component('mail::message')
#Notificación envio para Auditoria


## Señor(a) **{{$auditor}}**, se envia la siguiente información enviada por el Consultor(a) ** {{$responsable}}**, para la correspondiente auditoria.


  - Auditoria para : ** {{$checklist}} **
  - Cliente : **{{$cliente}}**
  - Observaciones : **{{$Observacion}}**
  - Fecha de Elaboración : **{{$fecha_elaboracion}}**
  - Id : **{{$id}}**

@component('mail::button', ['url' => 'http://planner.consultoresgroup.com'])
Ingresar al Sistema
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
