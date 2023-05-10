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
                                <h2 class="card-title pl- "><b>Diligencia los siguientes datos</b> </h2>
                                <h4 class="card-category text-white"><b>Creación de mallas</b></h4>
                            </div>

                            <div class=" container-fluid  m-1 p-1">
                                <form action="{{ route('mallas.store') }}" method="POST" class="form-control-sm p-1 m-1">
                                @csrf    

                                    <div class="form-row d-flex justify-content-around mt-3">
                                        <div class="form-group col-md-5 pt-0 mt-0 ">
                                            <label class="text-info" style="font-size:1.3em;" for="users_id">Nombre
                                                Asesor</label>
                                            <select name="users_id" id="users_id" class="form-control"
                                                aria-label="Default select example" required>
                                            @foreach ($usuarios as $usuario)
                                                <option value="{{ $usuario['id']}}">{{ $usuario['name']}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-5 p-4 ">
                                            <label class="text-info" style="font-size:1.3em;"
                                            for="semana">Semana-Asignada</label>
                                                <input type="week" class="form-control" name="semana" id="semana" required>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-around mt-2">

                                        <div class="form-group col-md-3">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="campaña">Campaña</label>
                                                <input type="text" class="form-control mt-3" id="campaña" name="campaña" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="text-info" style="font-size:1.3em;"
                                            for="foco">Foco</label></label>
                                            <input type="text" class="form-control mt-3" name="foco" id="foco" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="text-info" style="font-size:1.3em;"
                                            for="encargado">Encargado</label>
                                            <input type="text" class="form-control mt-3" name="encargado" id="encargado" required>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-around mt-2">

                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;" for="H-trab">Horas totales
                                                trabajadas</label>
                                            <input type="text" class="form-control mt-3" id="H-trab" disabled>
                                        </div>
                                        <div class="form-group col-md-2">
                                          
                                            <label class="text-info" style="font-size:1.3em;" for="horainicio">Hora-inicio</label>
                                            <input type="time" class="form-control mt-3" name="horainicio" id="horainicio" value="07:00:00" required>
                                                
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="H-fin">Hora-fin</label>
                                            <input type="time" class="form-control mt-3" name="horafinal" id="horafinal" value="07:00:00"
                                                required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;" for="descanso1">Descanso 1</label>
                                            <input type="time" class="form-control mt-3" name="descanso1" id="descanso1" value="07:00:00"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-around mt-2">

                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="almuerzoinicio">Hora-inicio-alm</label>
                                            <input type="time" class="form-control mt-3" name="almuerzoinicio" id="almuerzoinicio" value="07:00:00"
                                                required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="almuerzofinal">Hora-fin-alm</label>
                                            <input type="time" class="form-control mt-3" name="almuerzofinal" id="almuerzofinal" value="07:00:00"
                                                required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;" for="descanso2">Descanso
                                                2</label></label>
                                            <input type="time" class="form-control mt-3" name="descanso2" id="descanso2" value="07:00:00"
                                                required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="semana">Dia-descanso</label>
                                                <input type="date" class="form-control mt-3" name="diadescanso" id="diadescanso" required>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end m-4">

                                        <button type="submit" class="btn btn-info">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection