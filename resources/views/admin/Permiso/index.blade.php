@extends("theme.$theme.vista")

@section('titulo')
    permiso
@endsection

@section('contenido')
<div class="container mt-3">
    <div class="row shadow-lg p-3 mb-5 bg-white border-top border-primary">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Permisos</h3>
                </div>
                <div class="box-body">
                    <table class="table table-hover table-striped">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">nombre</th>
                            <th scope="col">slug</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($permisos as $permiso)
                          <tr>
                          <th scope="row">{{$permiso->id}}</th>
                            <td>{{$permiso->nombre}}</td>
                            <td>{{$permiso->slug}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection