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

        <!-- Social  Logins -->

        <div class="row centered" style="padding-bottom:20px;">
            <div id="hsocial" class="col-lg-8 col-lg-offset-2">
                <<div class="col-md-4">
                    <a href="http://windowsvj.com/@ps/wth/modules/payment/index.php?amount=120&currency=USD"><button type="button" class="btn btn-theme btn-lg">MasterCard</button></a>
                </div>
                <div class="col-md-4">
                    <a href="paymentconfirm.php?mode=bitpay"><button type="button" class="btn btn-theme btn-lg">BitPay</button></a>
                </div>
                <div class="col-md-4">
                    <a href="paymentconfirm.php?mode=others"> <button type="button" class="btn btn-theme btn-lg">Others</button></a>
                </div>
            </div><!-- /social -->
        </div>

        <!-- OR? -->
        <div class="row centered">
            <h2> OR </h2>
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
