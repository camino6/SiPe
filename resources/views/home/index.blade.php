@extends('layouts.app')

@section('content')

<div class="d-flex flex-column justify-content-center mt-5">
    <a href="{{ route('scrapping.index') }}" class="btn btn-primary btn-lg btn-block" role="button">DESGUACE</a>
    <a href="{{ route('order.index') }}" class="btn btn-secondary btn-lg btn-block" role="button">PEDIDOS</a>
</div>

@endsection
