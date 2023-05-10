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
                                <h3 style="font-size:2.5em;" class="card-title"><b>Gestion de Mallas</b></h3>
                                <h4 class="card-category">Creación de mallas</h4>
                            </div>
                            <div class="card-body d-flex">
                                <div class="col-12 text-right">
                                    <h3 class="float-left">Tabla de datos </h3>
                                    <a href="{{ route('mallas.create') }} " class="btn btn-md btn-info ">
                                        <i class="material-icons mr-1">add</i>Crear</a>
                                </div>
                            </div>

                            <div class="table-responsive table-hover p-2">
                                <table class="table ">
                                    <thead class="text-primary thead-dark text-center">
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
                                        <th class="text-center">Acciones</th>
                                    </thead>
                                    <tbody class="text-center">
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
                                            <td class="td-actions text-center">

                                                <form action="#" method="" style="display: inline-block;"
                                                    onsubmit="return confirm('Deseas editar esta(s) Malla(s) ?')">
                                                    
                                                    <button href=" #" class="btn btn-success" >
                                                        <i class="material-icons">edit</i></button>
                                                </form>
                                                <form action="#" method="" style="display: inline-block;"
                                                    onsubmit="return confirm('Deseas eliminar esta(s) Malla(s) ?')">
                                                   
                                                    <button href="" class="btn btn-danger" rel="tooltip">
                                                        <i class="material-icons">close</i></button>
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
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection