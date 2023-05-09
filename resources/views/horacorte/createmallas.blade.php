<h2>esta es la vista de create </h2>
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


                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header card-header-info">
                                            <h3 class="modal-title" id="staticBackdropLabel"><b>Diligencia los
                                                    siguientes datos</b></h3>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="nombre">Nombre</label>
                                                        <input type="text" class="form-control" id="nombre">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="Asesor">Asesor</label>
                                                        <input type="text" class="form-control" id="Asesor">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="Asesor">Asesor</label>
                                                        <input type="text" class="form-control" id="Asesor">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="semana">Semana-Asig</label></label>
                                                    <input type="week" class="form-control" id="semana">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputAddress2">Address 2</label>
                                                    <input type="text" class="form-control" id="inputAddress2"
                                                        placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputCity">City</label>
                                                        <input type="text" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputState">State</label>
                                                        <select id="inputState" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label for="inputZip">Zip</label>
                                                        <input type="text" class="form-control" id="inputZip">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-info">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection