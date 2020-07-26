@extends('layouts.app')

@section('content')

<div class="mt-3 row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID:</strong>
            {{ $order->id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Orden de Trabajo:</strong>
            {{ $order->work_order }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>URL:</strong>
            <a href="{{ $order->url }}">{{ $order->url }}</a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Notas:</strong>
            {{ $order->notes }}
        </div>
    </div>
</div>

@endsection