@extends('layouts.app')

@section('content')

<div class="mt-3 row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Marca:</strong>
            {{ strtoupper($scrapping->brand) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Modelo:</strong>
            {{ strtoupper($scrapping->model) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Zona:</strong>
            {{ strtoupper($scrapping->zone )}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Notas:</strong>
            {{ strtoupper($scrapping->notes) }}
        </div>
    </div>
</div>

@endsection
