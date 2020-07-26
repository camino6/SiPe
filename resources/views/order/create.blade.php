@extends('layouts.app')

@section('content')

<form action="{{ route('order.store') }}" method="POST">
    @include('order.form')

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>
</form>

@endsection
