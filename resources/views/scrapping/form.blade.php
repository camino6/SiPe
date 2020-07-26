<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Marca:</strong>
            <input type="text" name="brand" class="form-control" placeholder="Sony, JVC..." value="{{ strtoupper($scrapping->brand ?? '') }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Modelo:</strong>
            <input type="text" name="model" class="form-control" placeholder="KDL-40W...." value="{{ strtoupper($scrapping->model ?? '') }}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Zona:</strong>
            <input type="text" name="zone" class="form-control" placeholder="Zona" value="{{ strtoupper($scrapping->zone ?? '') }}"> </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Notas:</strong>
            <textarea class="form-control" style="height:200px" name="notes" placeholder="Ejemplo: SE LE QUITO LA BOTONERA...">{{ $scrapping->notes ?? '' }}</textarea>
        </div>
    </div>
</div>
