<div class="mt-3 row">
    <div class="col-6">
        <input type="text" class="form-control float-left" id="searchWorkOrder" onkeyup="filterByWorkOrder()" placeholder="Buscar OT">
    </div>
    <div class="col-4">
        <a class="btn btn-primary" href="{{ route('order.create') }}">Crear Nuevo</a>
    </div>
</div>

<script defer>
    function filterByWorkOrder() {
        // Declare variables
        var workOrderColumnNumber = 0;

        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchWorkOrder");
        filter = input.value.toUpperCase();
        table = document.getElementById("ordersTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[workOrderColumnNumber];
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
