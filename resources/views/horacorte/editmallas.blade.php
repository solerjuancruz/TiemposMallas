
@extends('layouts.main', ['activePage' => 'supervisor', 'titlePage' => 'Supervisor Personal'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                <h1>Esta es la vista de edit mallas</h1>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-info">
                                <h2 class="card-title text-center "><b>Diligencia los siguientes datos</b> </h2>
                                <h4 class="card-category text-white"><b>Creación de mallas</b></h4>
                            </div>

                            <div class=" container-fluid  m-1 p-1">
                                <form action="#" method="GET" class="form-control-sm p-1 m-1">
                                   <!-- selección de selects-->
                                   <script>
                                  
                                    </script>
                                    <div class="form-row d-flex justify-content-around">
                                        <div class="form-group col-md-5 pt-0 mt-0 ">
                                            <label class="text-info" style="font-size:1.3em;" for="Nombreasesor">Nombre
                                                Asesor</label>
                                            <select id="Nombreasesor" class="form-control"
                                                aria-label="Default select example" required>
                                                <option selected>Seleccionar...</option>
                                                <option>Todos</option>
                                                <option>....Dato....</option>
                                                <option>....Dato....</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-5 p-4 ">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="semanaasig">Semana-Asig</label>
                                            <input type="week" class="form-control " id="semanaasig" required>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-around mt-1">

                                        <div class="form-group col-md-3">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="Campaña">Campaña</label>
                                            <input type="text" class="form-control mt-3" id="Campaña" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="Foco">Foco</label></label>
                                            <input type="text" class="form-control mt-3" id="Foco" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="Encargado">Encargado</label>
                                            <input type="text" class="form-control mt-3" id="Encargado" required>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-around mt-1">

                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="H-trab">H-trab</label>
                                            <input type="text" class="form-control mt-3" id="H-trab" value="07:00:00">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;" for="H-ini">H-ini</label>
                                            <input type="time" class="form-control mt-3" id="H-ini" value="07:00:00"
                                                required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="H-fin">H-fin</label></label>
                                            <input type="time" class="form-control mt-3" id="H-fin" value="07:00:00"
                                                required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;" for="desc1">Desc 1</label>
                                            <input type="time" class="form-control mt-3" id="Desc1" value="07:00:00"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-around mt-2">

                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="H-alm-ini">H-ini-alm</label>
                                            <input type="time" class="form-control mt-3" id="H-alm-ini" value="07:00:00"
                                                required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="H-alm-fin">H-alm-fin</label>
                                            <input type="time" class="form-control mt-3" id="H-alm-fin" value="07:00:00"
                                                required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;" for="desc2">Desc
                                                2</label></label>
                                            <input type="time" class="form-control mt-3" id="desc2" value="07:00:00"
                                                required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="text-info" style="font-size:1.3em;"
                                                for="H-fin">H-fin</label></label>
                                            <input type="time" class="form-control mt-3" id="H-fin" value="07:00:00"
                                                required>
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