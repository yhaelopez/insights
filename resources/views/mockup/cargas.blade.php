@extends('layouts.app')

@section('main')
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center">Cargas</h1>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            MAZE
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                            <p><span class="badge bg-warning">Proximo a Auditar</span></p>
                            <p class="blockquote-footer">Auditar el 02/20/2022</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            MB51
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                            <p><span class="badge bg-danger">Atrasado</span></p>
                            <p class="blockquote-footer">Auditoría atrasada 3 días</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            ZPUR040
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                            <p><span class="badge bg-success">Auditado</span></p>
                            <p class="blockquote-footer">Auditado el 01/30/2022</cite></p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            MM011
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                            <p><span class="badge bg-success">Auditado</span></p>
                            <p class="blockquote-footer">Auditado el 02/16/2022</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Archivo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Periodo</th>
                        <th scope="col">Fecha de Auditoría</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>maze-021622.csv</td>
                        <td>MAZE</td>
                        <td>Semanal</td>
                        <td>02/16/2022</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>mm011-02012022.csv</td>
                        <td>MM011</td>
                        <td>Mensual</td>
                        <td>02/01/2022</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>mb51-01182022.csv</td>
                        <td>MB51</td>
                        <td>Semanal</td>
                        <td>15/12/2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group row mb-0 justify-content-center">
                    <div class="col-md-3 mb-3">
                        <a type="button" href="/mockup" class="btn btn-primary btn-md w-100">
                            Regresar
                        </a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
