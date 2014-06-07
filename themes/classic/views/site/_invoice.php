<div class="page">
    <div class="address-block">
        9 Bellingham Lane Great Neck, NY 11023
    </div>
    <div class="invoice-block">
        <h4>INVOICE</h4>
        <ul>
            <li><strong>Invoice # :</strong> <span id="invoice_id"><?php echo $invoice['order_id']; ?></span></li>
            <li><strong>Invoice Date :</strong> <span id="invoice_date"><?php echo $invoice['order_date'] ?></span></li>
            <li><strong>Total Due :</strong> <span id="order_price">$<?php echo $invoice['total'] ?></span></li>
            <li><strong>Due Date :</strong> On Receipt</li>
        </ul>
    </div>
    <div class="custome-block">
        <?php echo CHtml::encode($invoice['customer_address']); ?>
    </div>
    <table class="table-title">
        <tr>
            <th>QTY</th>
            <th>PRODUCT</th>
            <th>PRICE</th>
            <th style="text-align:right;">TOTAL</th>
        </tr>
        <tr>
            <td><?php echo $invoice['qty'] ?></td>
            <td><?php echo Yii::app()->params['size_label'][$invoice['size']]; ?></td>
            <td>$<?php echo $invoice['price']; ?></td>
            <td style="text-align:right;">$<?php echo $invoice['total'] ?></td>
        </tr>
    </table>
    <p class="content-page">If balance is not paid CouponDoors, Inc. can place account into collection. In the event Coupondoors places this agreement in the hands of a collection agency, Client has agreed to reimburse Coupondoors for all collection fees and expenses and attorney fees incurred. In Addition, Client has previously agreed to pay a collection fee of $200.00 plus interest at the rate of 12% upon the balance due from the date of default. The Client has agreed not to cancel this contract or otherwise be responsible balance plus for a $200.00 cancellation fee plus interest at the annual rate of twelve percent upon the balance due under this agreement from the date of default. All deposits are refundable only inthe event that not enough participants have joined our campaign. Any outstanding balance must be satisfied before the product is printed.</p>
</div>