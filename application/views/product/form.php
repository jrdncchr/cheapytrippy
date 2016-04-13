<h2 class="ct-h2"><span id='product-action'><?php echo isset($product) ? "View" : "Add"; ?></span> Product</h2>
<div class="danero-box">
    <div class="row">
        <div class="col-sm-12" id="product-form">
            <div class="notice"></div>

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
                            <input id="offer-title" type="text" class="form-control required"
                                   value="<?php echo isset($product) ? $product->title : '';  ?>" />
                        </div>
                        <div class="form-group">
                            <label for="offer-type">Type of Offer</label>
                            <select id="offer-type" class="form-control required">
                                <option value="">Select Type</option>
                                <?php foreach($types_of_offer as $type): ?>
                                    <option value="<?php echo $type->lookup_id; ?>" <?php echo isset($product) ? ($product->type_id == $type->lookup_id ? 'selected' : '') : ''?>><?php echo $type->value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="offer-category">Category</label>
                            <select id="offer-category" class="form-control required">
                                <option value="">Select Category</option>
                                <?php foreach($categories as $category): ?>
                                    <option value="<?php echo $category->category_id; ?>" <?php echo isset($product) ? ($product->category_id == $category->category_id ? 'selected' : '') : ''?>><?php echo $category->category; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="offer-snippet">Snippet</label>
                            <textarea id="offer-snippet" class="form-control required" rows="5"><?php echo isset($product) ? $product->snippet : '';  ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="offer-description">Description</label>
                            <textarea id="offer-description" class="form-control required" rows="5"><?php echo isset($product) ? $product->description : '';  ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="offer-supplier">Supplier</label>
                            <input id="offer-supplier" type="text" class="form-control required"
                                   value="<?php echo isset($product) ? $product->supplier_id : '';  ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="offer-traveller-tip">Traveller Tip</label>
                            <input id="offer-traveller-tip" type="text" class="form-control required"
                                   value="<?php echo isset($product) ? $product->traveller_tip : '';  ?>" />
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="form-group">
                            <label for="offer-duration">Duration</label>
                            <input id="offer-duration" class="form-control required" type="text"
                                   value="<?php echo isset($product) ? $product->duration : '';  ?>" />
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Business Hours</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="offer-b-hours-from">From</label>
                                        <input id="offer-b-hours-from" type="text" class="form-control"
                                               value="<?php echo isset($product) ? $product->business_hours_from : '';  ?>" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="offer-b-hours-to">To</label>
                                        <input id="offer-b-hours-to" type="text" class="form-control"
                                               value="<?php echo isset($product) ? $product->business_hours_to : '';  ?>" />
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
                                        <input id="offer-street" class="form-control required" type="text"
                                               value="<?php echo isset($product) ? $product->street : '';  ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="offer-state">State</label>
                                        <input id="offer-state" class="form-control required" type="text"
                                               value="<?php echo isset($product) ? $product->state : '';  ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="offer-city">City</label>
                                        <input id="offer-city" class="form-control required" type="text"
                                               value="<?php echo isset($product) ? $product->city : '';  ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="offer-country">Country</label>
                                        <input id="offer-country" class="form-control required" type="text"
                                               value="<?php echo isset($product) ? $product->country : '';  ?>"/>
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
                                <select id="rates-price-basis" class="form-control required">
                                    <option value="">Select Price Basis</option>
                                    <?php foreach($price_basis as $pb): ?>
                                        <option value="<?php echo $pb->lookup_id; ?>" <?php echo isset($product) ? ($product->price_basis == $pb->lookup_id ? 'selected' : '') : ''?>><?php echo $pb->value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- COMMISSION -->
                            <div class="form-group">
                                <label for="rates-commission">Commission</label>
                                <input id="rates-commission" class="form-control required" type="text"
                                       value="<?php echo isset($product) ? $product->commission : '';  ?>"/>
                            </div>
                            <!-- AVAILABILITY -->
                            <div class="form-group">
                                <label class="text-primary">Availability</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="rates-availability-from">From</label>
                                            <input id="rates-availability-from" type="text" class="form-control required"
                                                   value="<?php echo isset($product) ? $product->availability_from : '';  ?>"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="rates-availability-to">To</label>
                                            <input id="rates-availability-to" type="text" class="form-control required"
                                                   value="<?php echo isset($product) ? $product->availability_to : '';  ?>"/>
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
                                            <button id="add-bod-btn" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus-circle"></i> Add More</button>
                                        </div>

                                    </div>
                                </div>
                                <div id="bod-div">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label for="rates-bod-from-1">From</label>
                                                <input id="rates-bod-from-1" type="text" class="form-control bod-from" />
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label for="rates-bod-to-1">To</label>
                                                <input id="rates-bod-to-1" type="text" class="form-control bod-to" />
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <label></label>
                                                <button class="btn btn-xs btn-block" style="margin-top: 4px;"><i class="fa fa-minus-circle"></i></button>
                                            </div>
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
                <button class="btn btn-danger btn-sm" id="show-delete-btn"  <?php echo !isset($product) ? 'style="display: none;"' : ''; ?>>Delete</button>
                <div class="pull-right">
                    <button class="btn btn-default btn-sm">Draft</button>
                    <button class="btn btn-default btn-sm" style="margin-right: 20px;">Publish</button>
                    <button class="btn btn-ct btn-sm" id="save-btn">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <p class="text-danger">Are you sure to delete this product?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger btn-sm" id="delete-btn">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Templates -->
<div class="row" id="bod-template" style="display: none;">
    <div class="col-sm-5">
        <div class="form-group">
            <label>From</label>
            <input type="text" class="form-control bod-from" />
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            <label>To</label>
            <input type="text" class="form-control bod-to" />
        </div>
    </div>
    <div class="col-sm-1">
        <div class="form-group">
            <label></label>
            <button class="btn btn-xs btn-block" style="margin-top: 4px;"><i class="fa fa-minus-circle"></i></button>
        </div>
    </div>
</div>

<script>
    var actionUrl = baseUrl + "product/action";
    var productId = "<?php echo isset($product) ? $product->product_id : ''; ?>";
    var rateId = "<?php echo isset($product) ? $product->rate_id : ''; ?>";

    $(function() {
        activateInput();
        activateEvents();
    });

    function activateInput() {
        $('#sn-product-home').parent().find('ul').addClass('in');
        if(productId == '') {
            $('#sn-product-add').addClass('active');
        }

        $('#offer-duration').durationPicker();

        $('#offer-b-hours-from').datetimepicker({
            format: 'LT'
        });
        $('#offer-b-hours-to').datetimepicker({
            format: 'LT'
        });

        $('#rates-availability-from').datetimepicker({
            format: "Y-MM-DD"
        });
        $('#rates-availability-to').datetimepicker({
            format: "Y-MM-DD",
            useCurrent: false
        });
        $("#rates-availability-from").on("dp.change", function (e) {
            $('#rates-availability-to').data("DateTimePicker").minDate(e.date);
        });
        $("#rates-availability-to").on("dp.change", function (e) {
            $('#rates-availability-from').data("DateTimePicker").maxDate(e.date);
        });


        $('#add-bod-btn').on('click', function() {
            var container = $('#bod-div');
            var clone = $('#bod-template').clone();
            var id = container.find('.row').length + 1;
            clone.find('.bod-from').attr('id', 'rates-bod-from-' + id);
            clone.find('.bod-to').attr('id', 'rates-bod-to-' + id);
            clone.removeAttr('id');
            container.append(clone);
            clone.show();
            reactivateBodEvents();
        });
    }

    function reactivateBodEvents() {
        var container = $('#bod-div');
        container.find('input').each(function() {
            $(this).datetimepicker({
                format: "MMMM D, Y"
            });
        });
        container.find('.row').each(function() {
            var row = $(this);
            var from = row.find('.bod-from');
            var to = row.find('.bod-to');
            from.on("dp.change", function (e) {
                to.data("DateTimePicker").minDate(e.date);
            });
            to.on("dp.change", function (e) {
                from.data("DateTimePicker").maxDate(e.date);
            });
            row.find('button').off('click').on('click', function() {
                row.remove();
            });
        });


    }

    function activateEvents() {
        $('#save-btn').on('click', function() {
            if(validator.validateForm($('#product-form'))) {
                var data = {
                    action : 'save',
                    product : {
                        offer : {
                            title : $('#offer-title').val(),
                            type_id : $('#offer-type').val(),
                            category_id : $('#offer-category').val(),
                            snippet : $('#offer-snippet').val(),
                            description : $('#offer-description').val(),
                            supplier_id : $('#offer-supplier').val(),
                            traveller_tip : $('#offer-traveller-tip').val(),
                            duration : $('#offer-duration').val(),
                            business_hours_from : $('#offer-b-hours-from').val(),
                            business_hours_to : $('#offer-b-hours-to').val(),
                            street : $('#offer-street').val(),
                            state : $('#offer-state').val(),
                            city : $('#offer-city').val(),
                            country : $('#offer-country').val()
                        },
                        rates : {
                            price_basis : $('#rates-price-basis').val(),
                            commission : $('#rates-commission').val(),
                            availability_from : $('#rates-availability-from').val(),
                            availability_to : $('#rates-availability-to').val()
                        },
                        bo_dates : {},
                        bo_days : {},
                        sp_pricing : {},
                        nop_pricing : {}
                    }
                };

                if(productId != '') {
                    data.product.offer.product_id = productId;
                    data.product.rates.rate_id = rateId;
                }

                $.post(actionUrl, data, function(res) {
                    if(res.success) {
                        toastr.success('Saving product successful!');
                        if(res.product_id) {
                            productId = res.product_id;
                            rateId = res.rate_id;
                            $('#show-delete-btn').show();
                            $('#product-action').html("View");
                        }
                    }
                }, 'json');
            }
        });

        $('#show-delete-btn').on('click', function() {
            $('#delete-modal').modal('show');
        });

        $('#delete-btn').on('click', function() {
            var data = {
                action : 'delete',
                product_id : productId,
                rate_id : rateId
            };
            $.post(actionUrl, data, function(res) {
                if(res.success) {
                    window.location = baseUrl + 'product/all';
                }
            }, 'json');
        });
    }
</script>