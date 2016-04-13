<h2 class="ct-h2">List of Products</h2>
<div class="danero-box">
    <div class="row">
        <div class="col-sm-12">
            <table id="product-list-dt" class="display table table-hover table-bordered" width="100%">
                <thead>
                <tr>
                    <th>Date Created</th>
                    <th>Title</th>
                    <th>Product ID</th>
                    <th>Supplier ID</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    var actionUrl = baseUrl + 'product/action';
    $(function() {
        $('#sn-product-home').parent().find('ul').addClass('in');
        $('#sn-product-list').addClass('active');

        $('#product-list-dt').dataTable({
            "destroy": true,
            "ajax": {
                "type": "POST",
                "url": actionUrl,
                "data": {action: "list"}
            },
            columns: [
                {data: "date_created", width: "20%"},
                {data: "title", width: "30%"},
                {data: "product_id", width: "15%"},
                {data: "supplier_id", width: "15%"},
                {data: "status", width: "20%"}
            ],
            "fnDrawCallback": function (oSettings) {
                var table = $("#product-list-dt").dataTable();
                $('#product-list-dt tbody tr').on('dblclick', function () {
                    var pos = table.fnGetPosition(this);
                    var data = table.fnGetData(pos);
                    window.location = "<?php echo base_url() . "product/form/" ?>" + data.product_id;
                });
            }
        });
    });
</script>