<?php $cs = Yii::app()->getClientScript(); ?>
<?php $cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/payment.css'); ?>
<?php $cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/validationEngine.jquery.css'); ?>
<?php $cs->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false'); ?>
<?php $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.validationEngine.js'); ?>
<?php $cs->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.validationEngine-en.js'); ?>


<div class="inner-wrapper wrap-payment">
    <div class="the-show div-clear fl">
        <form action="<?php echo Yii::app()->createUrl('site/saveSignUp'); ?>" method="post" enctype="multipart/form-data" id="submit-form">
            <input type="hidden" name="Orders[order_id]" id="orders_order_id" value="" />
            <input type="hidden" name="Customers[customer_id]" id="customers_customer_id" value="" />

            <div class="sign-up-progress div-clear fl">
                <div class="form-step form-step-1 div-inline fl">
                    <div class="inner-wrapper">
                        <h2 class="page-title div-clear fl"><span class="sprited title-maps">Maps</span></h2>
                        <div class="div-clear fl main-page">
                            <div class="maps-intro div-inline fl">
                                <p>CouponDoors is distributed to select neighborhoods in New York every season.</p>
                                <label class="div-clear">
                                    <span>Enter your zip codes (Ex: 90210 90211 90212)</span>
                                    <input type="text" name="Orders[zipcode]" id="zip-selected" value="" placeholder="Zipcode(s)">
                                </label>
                                <ul class="list-check">
                                    <li>
                                        <input type="radio" class="custome-check" value="90210">
                                        Manhattan, NY
                                    </li>
                                    <li>
                                        <input type="radio" class="custome-check" value="90211">
                                        Long Island, NY
                                    </li>
                                    <li>
                                        <input type="radio" class="custome-check" name="" value="90212">
                                        Bay Ridge, Brooklyn, NY
                                    </li>
                                    <li>
                                        <input type="radio" class="custome-check" name="" value="90213">
                                        Marine Park, Brooklyn, NY
                                    </li>
                                    <li>
                                        <input type="radio" class="custome-check" name="" value="90214">
                                        Midwood, Brooklyn, NY
                                    </li>
                                    <li>
                                        <input type="radio" class="custome-check" name="" value="90215">
                                        Fresh Meadowns, Brooklyn, NY
                                    </li>
                                    <li>
                                        <input type="radio" class="custome-check" name="" value="90216">
                                        Whitestone, Queens, NY
                                    </li>
                                </ul>
                            </div>
                            <div class="show-map div-inline fr">
                                <div id="map_canvas" style="width:488px;height:479px;"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- /form-step-1 -->
                <div class="form-step form-step-2 div-inline fl" style="opacity:0;">
                    <div class="inner-wrapper">
                        <h2 class="page-title div-clear fl"><span class="sprited title-prices">Prices</span></h2>
                        <div class="div-clear fl main-page">
                            <div class="price-options div-inline fl">
                                <ul class="list-options">
                                    <li class="list-items">
                                        <h4>
                                            <input type="checkbox" class="custome-check change-price" name="price" value="295" checked data-size="small" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/small.png">
                                            Small
                                        </h4>
                                        <ol>
                                            <li><strong>Size:</strong> 3.0" H x 4.0" W</li>
                                            <li><strong>Distribution:</strong> 10,000 Homes</li>
                                            <li><strong>Price:</strong> $295</li>
                                            <li><strong>Deal:</strong> 1 Deal Allowed</li>
                                        </ol>
                                    </li>
                                    <li class="list-items">
                                        <h4>
                                            <input type="checkbox" class="custome-check change-price" name="price" value="595" data-size="large" data-image="<?php echo Yii::app()->theme->baseUrl; ?>/images/large.png">
                                            Large
                                        </h4>
                                        <ol>
                                            <li><strong>Size:</strong> 6.0" H x 4.0" W</li>
                                            <li><strong>Distribution:</strong> 10,000 Homes</li>
                                            <li><strong>Price:</strong> $595</li>
                                            <li><strong>Deal:</strong> 2 Deal Allowed</li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-option-preview div-inline fr">
                                <center><a href="" title="" class="zoom"><strong>Small</strong> <span class="sprited"></span></a></center>
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/small.png" alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- /form-step-2 -->
                <div class="form-step form-step-3 div-inline fl" style="opacity:0;">
                    <div class="inner-wrapper">
                        <div class="div-clear calender fl">
                            <div class="calender-options div-clear fl">
                                <h2 class="page-title div-clear fl"><span class="sprited title-calender">Calender</span></h2>
                                <p>CouponDoors is distributed every season, four times a year.</p>
                                <ul class="list-seasons">
                                    <li>
                                        <input type="checkbox" class="custome-check" name="Orders[season][]" value="spring" checked>
                                        Spring
                                    </li>
                                    <li>
                                        <input type="checkbox" class="custome-check" name="Orders[season][]" value="summer">
                                        Summer
                                    </li>
                                    <li>
                                        <input type="checkbox" class="custome-check" name="Orders[season][]" value="fall">
                                        Fall
                                    </li>
                                    <li>
                                        <input type="checkbox" class="custome-check" name="Orders[season][]" value="winter">
                                        Winter
                                    </li>
                                </ul>
                                <div class="show-calendar">
                                    <a href="go:spring;" title="" class="spring">Spring</a>
                                    <a href="go:summer;" title="" class="summer">Summer</a>
                                    <a href="go:fall;" title="" class="fall">Fall</a>
                                    <a href="go:winter;" title="" class="winter">Winter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /form-step-3 -->
                <div class="form-step form-step-4 div-inline fl" style="opacity:0;">
                    <div class="inner-wrapper">
                        <h2 class="page-title div-clear fl"><span class="sprited title-design">Design</span></h2>
                        <div class="div-clear fl main-page">
                            <?php if (!empty($businessTypes)): ?>
                                <div class="div-clear fl">
                                    <div class="selecttype" status="close">
                                        <div class="placeholder">Select Business Type</div>
                                        <a href="" title="" status="close" class="select-arrow sprited"></a>
                                        <ul>
                                            <?php foreach ($businessTypes as $id => $name): ?>
                                                <li value="<?php echo $id; ?>"><span><?php echo CHtml::encode($name); ?></span></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <input type="hidden" name="Customers[business_type_id]" value="">
                                    </div>
                                </div>
                                <div class="business-slide div-clear fl">
                                    <?php $first = true; ?>
                                    <?php foreach ($businessTypeImages as $type => $images): ?>
                                        <div class="show-cat-image" type="<?php echo $type; ?>" <?php echo $first ? '' : 'style="display:none;"'; ?> shownavi="0" playloop="2000" thumbsize="13" scrollnav="left" timer="400">
                                            <?php $first = false; ?>
                                            <?php foreach ($images as $src): ?>
                                                <a href="" title="" class=""><img src="<?php echo Yii::app()->baseUrl . '/' . $src; ?>" width="357" height="245" alt=""></a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <div class="div-clear business-form fl">
                                <div class="haft-page div-inline fl">
                                    <ul>
                                        <li><input type="text" name="Customers[business_name]" value="" placeholder="Enter name of Business"></li>
                                        <li><input type="text" name="Customers[contact_person]" value="" placeholder="Enter contact person"></li>
                                        <li><input type="text" name="Customers[address]" value="" placeholder="Enter address"></li>
                                        <li><input type="text" name="Customers[email]" value="" placeholder="Enter email"></li>
                                        <li><input type="text" name="Customers[website]" value="" placeholder="Website"></li>
                                        <li>
                                            <span class="div-inline fl haft-four"><input type="text" name="Customers[phone]" value="" placeholder="Phone"></span>
                                            <span class="div-inline fr haft-four"><input type="text" name="Customers[mobile]" value="" placeholder="Mobile"></span>
                                        </li>
                                        <li><input type="text" name="Customers[sale_agent]" value="" placeholder="Sales Agent"></li>
                                    </ul>
                                </div>
                                <div class="haft-page div-inline fr">
                                    <ul>
                                        <li class="upload">
                                            <input type="text" name="" class="input-select" inputtype="logo" placeholder="Upload Logo" disabled="disabled">
                                            <div class="browse sprited" inputtype="logo" title=""></div>
                                            <input type="file" class="typefile" name="logo" value="">
                                            <a href="" class="capture sprited" title=""></a>
                                        </li>
                                        <li class="upload">
                                            <input type="text" name="" class="input-select" inputtype="images[]" placeholder="Upload images" disabled="disabled">
                                            <div class="browse sprited" inputtype="images[]" title=""></div>
                                            <input type="file" class="typefile" name="images[]" multiple value="">
                                            <a href="" class="capture sprited" title=""></a>
                                        </li>
                                        <li><input type="text" name="Customers[headlines]" value="" placeholder="Do you have any Headlines ?"></li>
                                        <li><input type="text" name="Customers[coupon_deal]" value="" placeholder="What is your coupon deal ?"></li>
                                        <li><input type="text" name="Customers[disclaimers]" value="" placeholder="Do you have any disclaimers ?"></li>
                                        <li><input type="text" name="Customers[addition_info_1]" value="" placeholder="Any additional info to include on coupon ?"></li>
                                        <li><input type="text" name="Customers[addition_info_2]" value="" placeholder="Any additional info to include on coupon ?"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /form-step-4 -->
                <div id="invoice_info" class="form-step form-step-5 div-inline fl" style="opacity:0;">
                    <div class="page">
                        <div class="address-block">
                            9 Bellingham Lane Great Neck, NY 11023
                        </div>
                        <div class="invoice-block">
                            <h4>INVOICE</h4>
                            <ul>
                                <li><strong>Invoice # :</strong> <span id="invoice_id">4954</span></li>
                                <li><strong>Invoice Date :</strong> <span id="invoice_date">01/02/2014</span></li>
                                <li><strong>Total Due :</strong> <span id="order_price">$345.00</span></li>
                                <li><strong>Due Date :</strong> On Receipt</li>
                            </ul>
                        </div>
                        <div class="custome-block">
                            Royal Optix
                            7516 3rd Ave
                            Brooklyn NY 11209
                        </div>
                        <table class="table-title">
                            <tr>
                                <th>QTY</th>
                                <th>PRODUCT</th>
                                <th>PRICE</th>
                                <th style="text-align:right;">TOTAL</th>
                            </tr>
                            <tr>
                                <td>1.00</td>
                                <td>Small Coupon (3.0"H x 4.0"W)</td>
                                <td>$495.00</td>
                                <td style="text-align:right;">$495.00</td>
                            </tr>
                        </table>
                        <p class="content-page">If balance is not paid CouponDoors, Inc. can place account into collection. In the event Coupondoors places this agreement in the hands of a collection agency, Client has agreed to reimburse Coupondoors for all collection fees and expenses and attorney fees incurred. In Addition, Client has previously agreed to pay a collection fee of $200.00 plus interest at the rate of 12% upon the balance due from the date of default. The Client has agreed not to cancel this contract or otherwise be responsible balance plus for a $200.00 cancellation fee plus interest at the annual rate of twelve percent upon the balance due under this agreement from the date of default. All deposits are refundable only inthe event that not enough participants have joined our campaign. Any outstanding balance must be satisfied before the product is printed.</p>
                    </div>	
                </div><!-- /form-step-5 -->
                <div class="form-step form-step-6 div-inline fl" style="opacity:0;">
                    <h2 class="page-title div-clear fl"><span class="sprited title-payment">Payment</span></h2>
                    <div class="div-clear fl main-page">
                        <ul class="payment-method">
                            <li class="pay-visa">
                                <span class="sprited">Visa</span>
                                <input type="checkbox" class="custome-check" name="payment" value="visa" checked>Visa
                            </li>
                            <li class="pay-master">
                                <span class="sprited">MasterCard</span>
                                <input type="checkbox" class="custome-check" name="payment" value="master">MasterCard
                            </li>
                            <li class="pay-aex">
                                <span class="sprited">American Express</span>
                                <input type="checkbox" class="custome-check" name="payment" value="amex">American Express
                            </li>
                            <li class="pay-paypal">
                                <span class="sprited">Paypal</span>
                                <input type="checkbox" class="custome-check" name="payment" value="paypal">Paypal
                            </li>
                            <li class="pay-check">
                                <span class="sprited">Check</span>
                                <input type="checkbox" class="custome-check" name="payment" value="check">Check
                            </li>
                            <li class="pay-cash">
                                <span class="sprited">Cash</span>
                                <input type="checkbox" class="custome-check" name="payment" value="cash">Cash
                            </li>
                        </ul>
                        <div class="payment-selected div-clear fl">
                            <div class="pay-methods visa-select">
                                <input type="text" name="" class="visa-card-num" value="" placeholder="CARD NUMBER">
                                <input type="text" name="" class="visa-date" value="" placeholder="MM/YY">
                                <input type="text" name="" class="visa-zipcode" value="" placeholder="ZIP CODE">
                                <input type="text" name="" class="visa-cardholder" value="" placeholder="CARDHOLDER NAME">
                                <input type="text" name="" class="visa-sign" maxlength="4" value="" placeholder="CVV2">
                            </div>
                            <div class="pay-methods master-select">
                                <input type="text" name="" class="visa-card-num" value="" placeholder="CARD NUMBER">
                                <input type="text" name="" class="visa-date" value="" placeholder="MM/YY">
                                <input type="text" name="" class="visa-zipcode" value="" placeholder="ZIP CODE">
                                <input type="text" name="" class="visa-cardholder" value="" placeholder="CARDHOLDER NAME">
                                <input type="text" name="" class="visa-sign" maxlength="4" value="" placeholder="CVV2">
                            </div>
                            <div class="pay-methods amex-select">
                                <input type="text" name="" class="amex-card-num" value="" placeholder="CARD NUMBER">
                                <input type="text" name="" class="amex-date" value="" placeholder="MM/YY">
                                <input type="text" name="" class="amex-zipcode" value="" placeholder="ZIP CODE">
                                <input type="text" name="" class="amex-cardholder" value="" placeholder="CARDHOLDER NAME">
                                <input type="text" name="" class="amex-sign" maxlength="4" value="" placeholder="CVV2">
                            </div>
                            <div class="pay-methods check-select">
                                <input type="text" name="" class="check-title" value="Royal Optix" placeholder="">
                                <input type="text" name="" class="check-road" value="7516 3rd Ave" placeholder="">
                                <input type="text" name="" class="check-city" value="Brooklyn NY 11209" placeholder="">
                                <input type="text" name="" class="check-date" value="05 /26 /2014" placeholder="MM /DD /YYYY">
                                <input type="text" name="" class="check-number" value="2563" placeholder="">
                                <input type="text" name="" class="check-orderof" value="CouponDoors, Inc" placeholder="">
                                <input type="text" name="" class="check-total-text" value="Two Hundred Ninety Five Only" placeholder="">
                                <input type="text" name="" class="check-total-number" value="$295.00" placeholder="">
                                <input type="text" name="" class="check-invoice-id" value="Invoice # : 4954" placeholder="">
                                <div class="check-sigature">Signature</div>
                                <input type="text" name="" class="check-routing-name" value="A8675309000A" placeholder="">
                                <input type="text" name="" class="check-acount-number" value="c9166526775c" placeholder="">
                                <input type="text" name="" class="check-check-number" value="2563c" placeholder="">
                            </div>
                            <div class="pay-methods cash-select">
                                <input type="text" name="" value="" placeholder="">
                            </div>
                        </div>
                    </div>
                </div><!-- /form-step-6 -->
                <div class="form-step form-step-7 div-inline fl" style="opacity:0;">
                    <div class="show-invoice">
                        <div class="div-clear invoice-pager">
                            <div class="iv-header div-clear fl"></div>
                            <div class="iv-content div-clear fl">
                                <div class="in-content">
                                    <div class="in-head div-clear">
                                        <h2>CouponDoors</h2>
                                        <p>19 Bellingham Lane</p>
                                        <p>Great Neck, NY 11023</p>
                                    </div>
                                    <div class="in-ctn div-clear">
                                        <table class="table-1">
                                            <tr>
                                                <td>08-11-2014</td>
                                                <td>17:12</td>
                                                <td>0196-2020811-020</td>
                                                <td>17:12</td>
                                            </tr>
                                        </table>
                                        <table class="table-2">
                                            <tr>
                                                <td>Small Coupon (3.0"H x 4.0"W)</td>
                                                <td>(x 1)</td>
                                                <td>495.00</td>
                                            </tr>
                                        </table>
                                        <table class="table-3">
                                            <tr>
                                                <td>Merchandise</td>
                                                <td class="td-right">$ 495.00</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td class="td-right">$ 495.00</td>
                                            </tr>
                                            <tr>
                                                <td>Pmt - Cash</td>
                                                <td class="td-right">$ 495.00</td>
                                            </tr>
                                            <tr>
                                                <td>Chg - Cash</td>
                                                <td class="td-right">$ 495.00</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="in-foot div-clear">
                                        <h3>CUSTOMER RECEIPT</h3>
                                        <p>*A recept is required for all Problems.*</p>
                                    </div>
                                </div>
                            </div>
                            <div class="iv-footer div-clear fl"></div>
                        </div>
                    </div>
                </div><!-- /form-step-7 -->
            </div>
        </form>
    </div>
    <div class="sign-up-step fl">
        <a href="javasctipt:void();" title="" class="btn-step step-back ok-step-back">Back</a>
        <span class="btn-step step-progress step-1">Step progress</span>
        <a href="javasctipt:void();" title="" class="btn-step step-next ok-step-next">
            <div class="next-error"></div>
        </a>
    </div>
</div>