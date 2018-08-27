<table>
    <thead>
    <tr>
        <th>    id  </th>
        <th>    name    </th>
        <th>    email   </th>
        <th>    password    </th>
        <th>    perfil_usuario  </th>
        <th>    remember_token  </th>
        <th>    created_at  </th>
        <th>    updated_at  </th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
        <td>{{ $user->id  }}</td>
        <td>{{ $user->name    }}</td>
        <td>{{ $user->email   }}</td>
        <td>{{ $user->password    }}</td>
        <td>{{ $user->perfil->descripcion_perfil  }}</td>
        <td>{{ $user->remember_token  }}</td>
        <td>{{ $user->created_at  }}</td>
        <td>{{ $user->updated_at  }}</td>

        </tr>
    @endforeach
    </tbody>
</table>