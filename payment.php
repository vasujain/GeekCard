<?php
/**
 * Created by PhpStorm.
 * User: vasjain
 * Date: 9/7/14
 * Time: 1:37 AM
 */
include 'header.php';
?>

<div id="hello" style="background-image: url('assets/img/59.jpg');">
    <div class="container">
        <!-- Normal Signup Form -->

        <div class="row centered">
            <h1>PAYMENT</h1>
            <h2>Select Payment Method</h2>
        </div>

        <!-- Payment Details -->

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Amount</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="120">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Currency</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="USD" readonly>
                    </div>
                </form>
            </div><!-- /col-lg-8 -->
        </div>

        <!-- https://www.simplify.com/commerce/app#/payment -->
        <div class="row centered" style="padding-bottom:20px;">
            <div id="hsocial" class="col-lg-8 col-lg-offset-2">
                <div class="col-md-3">
                    <a href="http://windowsvj.com/@ps/wth/modules/payment/index.php?amount=50&currency=USD">
                        <button type="button" class="btn btn-theme btn-lg">MasterCard</button>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="paymentconfirm.php?mode=BitPay"><button type="button" class="btn btn-theme btn-lg">BitPay</button></a>
                </div>
                <div class="col-md-3">
                    <a href="paymentconfirm.php?mode=Others"> <button type="button" class="btn btn-theme btn-lg">Others</button></a>
                </div>
                <div class="col-md-3">
                    <a href="paymentconfirm.php?mode=PayPal"> <button type="button" class="btn btn-theme btn-lg">PayPal</button></a>
                </div>
            </div><!-- /social -->
        </div>

        <div class="row centered">
            <h2>  </h2>
        </div>

    </div><!-- /row -->
</div> <!-- /container -->
</div><!-- /hello -->

<?php
include 'footer.php';
?>
