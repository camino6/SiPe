@extends('layouts.app')

@section('content')

<form action="{{ route('scrapping.update', ['id' => $scrapping->id]) }}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    @include('scrapping.form')

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-danger">Borrar</button>
    </div>
</form>

@endsection
