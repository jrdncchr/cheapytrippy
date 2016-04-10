<h2 class="ct-h2">List of Products</h2>
<div class="danero-box">
    <div class="row">
        <div class="col-sm-12">
            <table id="product-list-dt" class="table table-hover table-bordered" width="100%">
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
                <tr>
                    <td>03/19/2016</td>
                    <td>Enchanted Kingdom Ticket</td>
                    <td>1234</td>
                    <td>567</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>03/21/2016</td>
                    <td>4 Days Sport Event</td>
                    <td>777</td>
                    <td>567</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>03/24/2016</td>
                    <td>Volley Ball Event</td>
                    <td>234</td>
                    <td>22</td>
                    <td>For Approval</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#sn-product-home').parent().find('ul').addClass('in');
        $('#sn-product-list').addClass('active');

        $('#product-list-dt').dataTable({

        });
    });
</script>