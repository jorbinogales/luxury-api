@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Contactos Registrados')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Contactos Registrados</h4>
            <p class="card-category">Todos los contactos que se han registrado a la pagina</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Nombre
                  </th>
                  <th>
                    Apellido
                  </th>
                  <th>
                    Correo
                  </th>
                  <th>
                    Telefono
                  </th>
                  <th>
                    Fecha de Registro
                  </th>
                </thead>
                <tbody>
                @foreach ($peoples as $people)
                  <tr>
                    <td class="text-primary">{{ $people->first_name }}</td>
                    <td>{{ $people->last_name }}</td>
                    <td>{{ $people->email }}</td>
                    <td>{{ $people->phone }}</td>
                    <td>{{ $people->created_at }}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection