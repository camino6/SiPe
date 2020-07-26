@extends('layouts.app')

@section('content')

<form action="{{ route('scrapping.store') }}" method="POST">
    @include('scrapping.form')

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>
</form>

@endsection
