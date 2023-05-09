@extends('layouts.main', ['activePage' => 'supervisor', 'titlePage' => 'Supervisor Personal'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-info">
                                <h3 class="card-title">Mallas</h3>
                                <h4 class="card-category">Creación de mallas</h4>
                            </div>
                            <div class="card-body d-flex">
                                <div class="col-12 text-right ">
                                    <h3 class="float-left">Tabla de datos </h3>
                                    <a href="{{ route('createmallas.create') }} " class="btn btn-md btn-info ">
                                        <i class="material-icons">add</i>Crear</a>
                                </div>
                            </div>

                            <div class="table-responsive table-hover p-2">
                                <table class="table ">
                                    <thead class="text-primary thead-dark">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>cedula</th>
                                        <th>H-trab</th>
                                        <th>H-inicio</th>
                                        <th>H-fin</th>
                                        <th>Desc 1</th>
                                        <th>H-alm-ini</th>
                                        <th>H-alm-fin</th>
                                        <th>Desc 2</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>dato....</td>
                                            <td>dato....</td>
                                            <td>dato....</td>
                                            <td>dato....</td>
                                            <td>dato....</td>
                                            <td>dato....</td>
                                            <td>dato....</td>
                                            <td>dato....</td>
                                            <td>dato....</td>
                                            <td>dato....</td>
                                            <td class="td-actions text-right">

                                                <form action="#" method="POST" style="display: inline-block;"
                                                    onsubmit="return confirm('Deseas editar esta(s) Malla(s) ?')">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button class="btn btn-success" type="submit" rel="tooltip">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                </form>
                                                <form action="#" method="POST" style="display: inline-block;"
                                                    onsubmit="return confirm('Deseas eliminar esta(s) Malla(s) ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" rel="tooltip">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <form action="#">
                            <button type="submit" class="btn btn-success"
                                style="border-radius: 10px; margin-left:20px"><i
                                    class="material-icons">file_download</i>Descargar</button>
                        </form>
                        <!-- <div class="card-footer mr-auto">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection