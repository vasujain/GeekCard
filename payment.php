<?php
/**
 * Created by PhpStorm.
 * User: vasjain
 * Date: 9/7/14
 * Time: 1:37 AM
 */
include 'header.php';
?>


	<div id="hello" style="padding-top: 100px !important;">
	    <div class="container">
	    	<div class="row">
	    		<!-- /col-lg-8 -->
                   <br/><br/>
	    			<h1>PAYMENT</h1>
	    			<h2>Select Payment Method</h2>

                    <div class="row centered">
                        <div class="col-md-4">
                            <a href="http://windowsvj.com/@ps/wth/modules/payment/index.php?amount=120&currency=USD"><button type="button" class="btn btn-theme btn-lg">MasterCard</button></a>
                        </div>
                        <div class="col-md-4">
                            <a href="paymentconfirm.php?mode=bitpay"><button type="button" class="btn btn-theme btn-lg">BitPay</button></a>
                        </div>
                        <div class="col-md-4">
                            <a href="paymentconfirm.php?mode=others"> <button type="button" class="btn btn-theme btn-lg">Others</button></a>
                        </div>

                    </div>

                </div><!-- /col-lg-8 -->
	    	</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /hello -->

<?php
include 'footer.php';
?>
