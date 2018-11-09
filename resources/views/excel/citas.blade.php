<table>
    <thead>
    <tr>
      <th>id</th>
      <th>fecha_citas</th>

      <th>lugar_citas</th>
      <th>descripcion_lugar</th>
      <th>observacion_citas</th>

      <th>hora_citas</th>
      <th>asistio_citas</th>

      <th>hora_final_citas</th>
      <th>jornada_citas</th>
      <th>descripcion_jornada</th>
      <th>actividad_citas</th>
      <th>estado_citas</th>
      <th>Estado</th>
      <th>compromiso_citas</th>
      <th>created_at</th>
      <th>updated_at</th>
      <th>empresa_citas</th>
      <th>nit</th>
      <th>nombre_cliente</th>
      <th>direccion_cliente</th>
      <th>telefono_cliente</th>
      <th>celular_cliente</th>
      <th>notas_cliente</th>
      <th>gran_contribuyente_cliente</th>
      <th>correo_cliente</th>
      <th>ciudad_cliente</th>
      <th>pais_cliente</th>
      <th>contacto_cliente</th>
      <th>clave_ingreso_DIAN_cliente</th>
      <th>clave_firma_DIAN_cliente</th>
      <th>clave_CC_cliente</th>
      <th>responsable_cliente</th>
      <th>ultimo_digito_cliente</th>
      <th>ultimos_digitos_cliente</th>
      <th>activo_cliente</th>
      <th>tipo_cliente</th>
      <th>representante_legal_cliente</th>
      <th>nombre_representante_legal_cliente</th>
      <th>valor</th>
      <th>usuario_citas</th>
      <th>name</th>
      <th>email</th>

      <th>perfil_usuario</th>

      <th>activo</th>
      <th>horas</th>
      <th>avatar</th>
      <th>notificacion</th>
      <th>habilitar_empresas</th>







    </tr>
    </thead>
    <tbody>
    @foreach($citas as $row)
        <tr>

          <td>{{ $row->id}}</td>
          <td>{{ $row->fecha_citas}}</td>

          <td>{{ $row->lugar_citas}}</td>
          <td>{{ $row->descripcion_lugar}}</td>
          <td>{{ $row->observacion_citas}}</td>

          <td>{{ $row->hora_citas}}</td>
          <td>{{ $row->asistio_citas}}</td>

          <td>{{ $row->hora_final_citas}}</td>
          <td>{{ $row->jornada_citas}}</td>
          <td>{{ $row->descripcion_jornada}}</td>

          <td>
      @php $actividad_citas = json_decode($row->actividad_citas);

                for ($i=0; $i < 12 ; $i++) {

                  try {
                    echo App\actividad::find($actividad_citas[$i])->descripcion_actividad."/";
                  } catch (\Exception $e) {
                    echo "";
                  }


                }

      @endphp</td>



          <td>{{ $row->estado_citas}}</td>
          <td>{{ $row->Estado}}</td>

          <td><?php $compromiso_citas = json_decode($row->compromiso_citas);

                for ($i=0; $i < 12 ; $i++) {

                  try {
                    echo App\compromisos::find($compromiso_citas[$i])->descripcion_compromisos."/";
                  } catch (\Exception $e) {
                    echo "";
                  }


                }

              ?></td>


          <td>{{ $row->created_at}}</td>
          <td>{{ $row->updated_at}}</td>
          <td>{{ $row->empresa_citas}}</td>
          <td>{{ $row->nit}}</td>
          <td>{{ $row->nombre_cliente}}</td>
          <td>{{ $row->direccion_cliente}}</td>
          <td>{{ $row->telefono_cliente}}</td>
          <td>{{ $row->celular_cliente}}</td>
          <td>{{ $row->notas_cliente}}</td>
          <td>{{ $row->gran_contribuyente_cliente}}</td>
          <td>{{ $row->correo_cliente}}</td>
          <td>{{ $row->ciudad_cliente}}</td>
          <td>{{ $row->pais_cliente}}</td>
          <td>{{ $row->contacto_cliente}}</td>
          <td>{{ $row->clave_ingreso_DIAN_cliente}}</td>
          <td>{{ $row->clave_firma_DIAN_cliente}}</td>
          <td>{{ $row->clave_CC_cliente}}</td>
          <td>{{ $row->responsable_cliente}}</td>
          <td>{{ $row->ultimo_digito_cliente}}</td>
          <td>{{ $row->ultimos_digitos_cliente}}</td>
          <td>{{ $row->activo_cliente}}</td>
          <td>{{ $row->tipo_cliente}}</td>
          <td>{{ $row->representante_legal_cliente}}</td>
          <td>{{ $row->nombre_representante_legal_cliente}}</td>
          <td>{{ $row->valor}}</td>
          <td>{{ $row->usuario_citas}}</td>
          <td>{{ $row->name}}</td>
          <td>{{ $row->email}}</td>

          <td>
            <?php  $result = App\perfil::find($row->perfil_usuario);
            echo $result->descripcion_perfil;?>
          </td>



          <td>{{ $row->activo}}</td>
          <td>{{ $row->horas}}</td>
          <td>{{ $row->avatar}}</td>
          <td>{{ $row->notificacion}}</td>
          <td>{{ $row->habilitar_empresas}}</td>







        </tr>
    @endforeach
    </tbody>
</table>
