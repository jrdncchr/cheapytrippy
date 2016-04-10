<h2 class="ct-h2">Home</h2>
<div class="danero-box">

    <h1 class="dt-head">Summary</h1>
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
                        <td>Total Listings</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total Bookings</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total Suppliers</td>
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
    <h1 class="dt-head">Booking by Category</h1>
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

    <br />
    <h1 class="dt-head">Booking by Location of Client</h1>
    <div class="row">
        <div class="col-sm-12">
            <table id="booking-by-location-by-client-dt" class="table table-hover table-bordered" width="100%">
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
                    <td>Metro Manila</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Region III</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Region II</td>
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
        $('#sn-home').addClass('active');

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
        $('#booking-by-location-by-client-dt').dataTable({
            lengthChange: false,
            info: false,
            paginate: false
        });
    });
</script>