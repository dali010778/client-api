<h1>Clientes</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $cliente )
            <tr>
                <td>{{ $cliente['name'] }}</td>
                <td>{{ $cliente['email'] }}</td>
                <td>{{ $cliente['phone'] }}</td>
                <td>{{ $cliente['address'] }}</td>
                <td>
                  <a href="{{ route('cliente.view', $cliente['id']) }}">Ver</a>
                  <a href="{{ route('cliente.delete', $cliente['id']) }}">Borrar</a>
                </td>
            </tr>
        @endforeach
      
    </tbody>
</table>