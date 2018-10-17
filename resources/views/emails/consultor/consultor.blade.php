@component('mail::message')
#Notificación Rectificación enviado por Auditoria


## Consultor(a) ** {{$responsable}}** , se envia la siguiente información enviada por el Señor(a) **{{$auditor}}**, para la correspondiente rectificación.

  
  - Auditoria para : ** {{$checklist}} **
  - Cliente : **{{$cliente}}**
  - Observaciones Auditoria : **{{$Observaciones}}**
  - Fecha de Elaboración : **{{$fecha_elaboracion}}**
  - Id : **{{$id}}**

@component('mail::button', ['url' => 'http://planner.consultoresgroup.com'])
Ingresar al Sistema
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
