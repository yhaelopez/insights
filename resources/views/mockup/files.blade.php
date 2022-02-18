@extends('layouts.app')

@section('main')
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center">@lang('title-mockup')</h1>
            </div>
            <div class="col-10 col-sm-7 col-md-6 col-lg-5 col-xl-4 p-1 text-center">
               
                <div class="form-group row my-4">
                    <div class="col-md-12">
                        <select class="form-select form-select-lg" aria-label="type-file">
                            <option selected>Tipo de Archivo</option>
                            <option value="1">MAZE (Semanal)</option>
                            <option value="2">MB51 (Semanal)</option>
                            <option value="3">ZPUR040 (Semanal)</option>
                            <option value="3">MM011 (Mensual)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-md-12">
                        <input id="file" type="file" class="form-control form-control-lg " name="file" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12 mb-3">
                        <a type="button" href="/mockup-resultado" class="btn btn-primary btn-lg w-100">
                            Cargar
                        </a>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-12 mb-3">
                        <a type="button" href="/mockup-cargas" class="btn btn-primary btn-lg w-100">
                            Historial
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
