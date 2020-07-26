<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Orden de Trabajo:</strong>
            <input type="number" name="work_order" class="form-control" placeholder="Orden de Trabajo" value="{{ $order->work_order ?? '' }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>URL:</strong>
            <input type="text" name="url" class="form-control" placeholder="URL" value="{{ $order->url ?? '' }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Notas:</strong>
            <textarea class="form-control" style="height:200px" name="notes" placeholder="Notas">{{ $order->notes ?? '' }}</textarea>
        </div>
    </div>
</div>
