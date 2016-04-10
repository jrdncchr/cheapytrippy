<h2 class="ct-h2">Products</h2>
<div class="danero-box">
    <h1>Summary</h1>
    <div class="row">
        <div class="col-sm-12">
            <table id="summary-dt" class="table table-hover table-bordered" width="100%">
                <thead>
                <tr>
                    <th width="40%"></th>
                    <th width="15%">Week 4</th>
                    <th width="15%">Week 3</th>
                    <th width="15%">Week 2</th>
                    <th width="15%">Week 1</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Active</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>For Approval</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Expired</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br />

    <h1>Listings with Promo</h1>
    <div class="row">
        <div class="col-sm-12">
            <table id="listings-with-promo-dt" class="table table-hover table-bordered" width="100%">
                <thead>
                <tr>
                    <th width="40%"></th>
                    <th width="15%">Week 4</th>
                    <th width="15%">Week 3</th>
                    <th width="15%">Week 2</th>
                    <th width="15%">Week 1</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Adventure</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Food Trip</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Family and Friends</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#sn-product-home').addClass('active').attr('href', '#');
        $('#sn-product-home').parent().find('ul').addClass('in');


        $('#summary-dt').dataTable({
            lengthChange: false,
            info: false,
            paginate: false
        });
        $('#listings-with-promo-dt').dataTable({
            lengthChange: false,
            info: false,
            paginate: false
        });
    });
</script>