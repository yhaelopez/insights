@extends('layouts.app')

@section('main')
<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center">@lang('title-mockup') MM011</h1>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Var 1</th>
                        <th scope="col">Var 2</th>
                        <th scope="col">Var 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>15.58</td>
                        <td>P-1554</td>
                        <td>Q878-8</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>17.12</td>
                        <td>A-9875</td>
                        <td>Q787-0</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>12.12</td>
                        <td>L-5787</td>
                        <td>Q248-8</td>
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
