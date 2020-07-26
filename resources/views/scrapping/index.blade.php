@extends('layouts.app')

@section('content')
@include('scrapping.search')

<div class="mt-3 table-responsive">
    <table class="table table-hover" id="scrappingTable">
        <thead>
            <tr>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Zona</th>
                <th scope="col">Notas</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($scrappings as $scrapping)
            <tr>
                <td class="align-middle">{{ strtoupper($scrapping->brand) }}</td>
                <td class="align-middle">{{ strtoupper($scrapping->model) }}</td>
                <td class="align-middle">{{ strtoupper($scrapping->zone) }}</td>

                <td class="align-middle">
                    {{ \Illuminate\Support\Str::limit($scrapping->notes, 50, $end='...') }}</td>
                <td>
                    <div class="p-1 mb-1">
                        <a class="btn btn-sm btn-outline-primary" href="{{ route('scrapping.show', ['id' => $scrapping->id]) }}">Ver</a>
                        <a class="btn btn-sm btn-outline-warning" href="{{ route('scrapping.edit', ['id' => $scrapping->id]) }}">Modificar</a>
                        <a class="btn btn-sm btn-outline-danger" href="{{ route('scrapping.delete', ['id' => $scrapping->id]) }}">Borrar</a>
                    </div>
                </td>
            </tr>
            @empty
            <div class="alert alert-info" role="alert">
                No hay registros
            </div>
            @endforelse
    </table>
</div>

@endsection
