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
            <h1>Payment Processed Successfully using <?php echo $_GET["mode"]; ?></h1>
            <h2>Thank You</h2>
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
