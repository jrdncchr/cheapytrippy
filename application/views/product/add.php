<h2 class="ct-h2">Add Product</h2>
<div class="danero-box">
    <div class="row">
        <div class="col-sm-12">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-right" role="tablist">
                <li role="presentation"><a href="#images" aria-controls="profile" role="tab" data-toggle="tab">Images</a></li>
                <li role="presentation"><a href="#rates" aria-controls="messages" role="tab" data-toggle="tab">Rates</a></li>
                <li role="presentation" class="active"><a href="#offers" aria-controls="settings" role="tab" data-toggle="tab">Offer</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="offers" style="padding-top: 20px;">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="offer-title">Title</label>
                            <input id="offer-title" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="offer-type">Type of Offer</label>
                            <select id="offer-type" class="form-control">
                                <option value="">Select Type</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="offer-snippet">Snippet</label>
                            <textarea id="offer-snippet" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="offer-description">Description</label>
                            <textarea id="offer-description" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="offer-supplier">Supplier</label>
                            <input id="offer-supplier" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="offer-traveler-tip">Traveller Tip</label>
                            <input id="offer-traveler-tip" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="form-group">
                            <label for="offer-duration">Duration</label>
                            <input id="offer-duration" class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Business Hours</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="offer-b-hours-from">From</label>
                                        <input id="offer-b-hours-from" type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="offer-b-hours-to">To</label>
                                        <input id="offer-b-hours-to" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Address</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="offer-street">Street</label>
                                        <input id="offer-street" class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <label for="offer-state">State</label>
                                        <input id="offer-state" class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <label for="offer-city">City</label>
                                        <input id="offer-city" class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <label for="offer-country">Country</label>
                                        <input id="offer-country" class="form-control" type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="rates" style="padding-top: 20px;">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- PRICE BASIS -->
                            <div class="form-group">
                                <label for="rates-price-basis">Price Basis</label>
                                <select id="rates-price-basis" class="form-control">
                                    <option value="">Select Price Basis</option>
                                </select>
                            </div>
                            <!-- COMMISSION -->
                            <div class="form-group">
                                <label for="rates-commission">Commission</label>
                                <input id="rates-commission" class="form-control" type="text" />
                            </div>
                            <!-- AVAILABILITY -->
                            <div class="form-group">
                                <label class="text-primary">Availability</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="rates-availability-from">From</label>
                                            <input id="rates-availability-from" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="rates-availability-to">To</label>
                                            <input id="rates-availability-to" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BLOCK OUT DATES -->
                            <div class="form-group">
                                <label class="text-primary">Block Out Dates</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            <label style="font-weight: 100 !important;"><input id="rates-bod-none" type="checkbox" />None</label>
                                            <button class="btn btn-xs btn-success pull-right"><i class="fa fa-plus-circle"></i> Add More</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="rates-bod-from-1">From</label>
                                            <input id="rates-bod-from-1" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="rates-bod-to-1">To</label>
                                            <input id="rates-bod-to-1" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- RATES: RIGHT COLUMN -->
                        <div class="col-sm-5 col-sm-offset-1">
                            <!-- NUMBER OF PARTICIPANTS -->
                            <div class="form-group">
                                <label class="text-primary">Number of Participants</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group" style="margin-bottom: 5px;">
                                            <label for="rates-nop-min">Minimum</label>
                                            <input id="rates-nop-min" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group" style="margin-bottom: 5px;">
                                            <label for="rates-nop-max">Maximum</label>
                                            <input id="rates-nop-max" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <!-- NUMBER OF PARTICIPANTS - PRICE -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="text-primary">Price</label>
                                            <div id="rates-nop-price-div">
                                                <div class="row">
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                            <label for="price-no-1"></label>
                                                            <p id="rates-price-no-1" class="form-control-static text-center" style="font-weight: bold;">1</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <label for="rates-supplier-rate-1">Supplier Rate</label>
                                                            <input id="rates-supplier-rate-1" type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                            <label></label>
                                                            <p class="form-control-static text-center"><i class="fa fa-exchange"></i></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <label for="rates-published-rate-1">Published Rate</label>
                                                            <input id="rates-published-rate-1" type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SPECIAL PRICING -->
                            <div class="form-group">
                                <label class="text-primary">Special Pricing</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group" style="margin-bottom: 5px;">
                                            <label for="rates-sp-from">From</label>
                                            <input id="rates-sp-from" type="text" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group" style="margin-bottom: 5px;">
                                            <label for="rates-sp-to">To</label>
                                            <input id="rates-sp-to" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <!-- SPECIAL PRICING - PRICE -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="text-primary">Price</label>
                                            <div id="rates-sp-pricing">
                                                <div class="row">
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                            <label for="rates-sp-price-no-1"></label>
                                                            <p id="rates-sp-price-no-1" class="form-control-static text-center" style="font-weight: bold;">1</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <label for="rates-sp-supplier-rate-1">Supplier Rate</label>
                                                            <input id="rates-sp-supplier-rate-1" type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                            <label></label>
                                                            <p class="form-control-static text-center"><i class="fa fa-exchange"></i></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                            <label for="rates-sp-published-rate-1">Published Rate</label>
                                                            <input id="rates-sp-published-rate-1" type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="images">
                    <p>Images</p>
                </div>
            </div>

            <div class="col-sm-12" style="margin-top: 10px;">
                <div class="pull-right">
                    <button class="btn btn-default btn-sm">Draft</button>
                    <button class="btn btn-default btn-sm" style="margin-right: 20px;">Publish</button>

                    <button class="btn btn-ct btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#sn-product-home').parent().find('ul').addClass('in');
        $('#sn-product-add').addClass('active');

        $('#offer-duration').durationPicker();

        $('#offer-b-hours-from').datetimepicker({
            format: 'LT'
        });
        $('#offer-b-hours-to').datetimepicker({
            format: 'LT'
        });

        $('#rates-availability-from').datetimepicker({
            format: "MMMM D, Y"
        });
        $('#rates-availability-to').datetimepicker({
            format: "MMMM D, Y",
            useCurrent: false
        });
        $("#rates-availability-from").on("dp.change", function (e) {
            $('#rates-availability-to').data("DateTimePicker").minDate(e.date);
        });
        $("#rates-availability-to").on("dp.change", function (e) {
            $('#rates-availability-from').data("DateTimePicker").maxDate(e.date);
        });

        $('#rates-bod-from-1').datetimepicker({
            format: "MMMM D, Y"
        });
        $('#rates-bod-to-1').datetimepicker({
            format: "MMMM D, Y",
            useCurrent: false
        });
        $("#rates-bod-from-1").on("dp.change", function (e) {
            $('#rates-bod-to-1').data("DateTimePicker").minDate(e.date);
        });
        $("#rates-bod-to-1").on("dp.change", function (e) {
            $('#rates-bod-from-1').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>