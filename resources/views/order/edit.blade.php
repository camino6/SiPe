@extends('layouts.app')

@section('content')

<form action="{{ route('order.update', ['id' => $order->id]) }}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    @include('order.form')

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Modificar</button>
    </div>
</form>

@endsection
