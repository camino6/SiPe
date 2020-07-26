@extends('layouts.app')

@section('content')
@include('order.search')

<div class="mt-3 table-responsive">
    <table class="table table-hover" id="ordersTable">
        <thead>
            <tr>
                <th scope="col">Orden Trabajo</th>
                <th scope="col">URL</th>
                <th scope="col">Notas</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
            <tr>
                <td class="align-middle">{{ $order->work_order }}</td>
                <td class="align-middle"><a href="{{ $order->url }}">{{ \Illuminate\Support\Str::limit($order->url, 20, $end='...') }}</a>
                </td>
                <td class="align-middle">
                    {{ \Illuminate\Support\Str::limit($order->notes, 50, $end='...') }}</td>
                <td>
                    <div class="p-1 mb-1">
                        <a class="btn btn-sm btn-outline-primary" href="{{ route('order.show', ['id' => $order->id]) }}">Ver</a>
                        <a class="btn btn-sm btn-outline-warning" href="{{ route('order.edit', ['id' => $order->id]) }}">Modificar</a>
                        <a class="btn btn-sm btn-outline-danger" href="{{ route('order.delete', ['id' => $order->id]) }}">Borrar</a>
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
