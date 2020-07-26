<div class="mt-3 row">
    <div class="col-6">
        <input type="text" class="form-control float-left" id="searchModel" onkeyup="filterByModel()" placeholder="Buscar modelo: KDL-40...">
    </div>
    <div class="col-4">
        <a class="btn btn-primary" href="{{ route('scrapping.create') }}">Crear Nuevo</a>
    </div>
</div>

<script defer>
    function filterByModel() {
        // Declare variables
        var modelColumnNumber = 1;

        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchModel");
        filter = input.value.toUpperCase();
        table = document.getElementById("scrappingTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[modelColumnNumber];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

</script>
