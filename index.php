<?php
/**
 * Created by PhpStorm.
 * User: vasjain
 * Date: 9/7/14
 * Time: 1:37 AM
 */
    include 'header.php';
?>


    <div id="hello" style="background-image: url('assets/img/17.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 centered">
                    <style>
                        @media only screen and (max-width: 320px) {
                            /* Small screen, non-retina */
                            #geekLogo { background-image: url("assets/logos/GeekCardLogo1.png"); width: 20%; height: 20% }
                        }
                        @media only screen and (min-width: 321px) and (max-width: 538px) {
                            /* Medium screen, non-retina */
                            #geekLogo { background-image: url("assets/logos/GeekCardLogo1.png");width: 40%; height: 40% }
                        }
                        @media only screen and (min-width: 539px) and (max-width: 768px) {
                            /* Medium screen, non-retina */
                            #geekLogo { background-image: url("assets/logos/GeekCardLogo1.png");width: 60%; height: 60% }
                        }
                        @media only screen and (min-width: 769px) {
                            /* Medium screen, non-retina */
                            #geekLogo { background-image: url("assets/logos/GeekCardLogo1.png");width: 100%; height: 100% }
                        }
                    </style>
                    <img id="geekLogo">
                    <h2>DISCOVER . CONNECT . COLLABORATE</h2>
                </div><!-- /col-lg-8 -->
            </div><!-- /row -->
            <div class="row centered" style="padding-bottom:20px;">
                <div id="hsocial" class="col-lg-8 col-lg-offset-2">
                    <div class="col-md-2">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#"><i class="fa fa-github"></i></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div><!-- /social -->
            </div>
        </div> <!-- /container -->
    </div><!-- /hello -->

    <div id="green">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 centered">
                    <img src="assets/img/iphone.png" alt="">
                </div>

                <div class="col-lg-7 centered">
                    <h3>DISCOVER</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row centered mt grid">
            <h3>CONNECT</h3>
            <div class="mt"></div>
            <div class="col-lg-4">
                <a href="#"><img src="assets/img/01.jpg" alt=""></a>
            </div>
            <div class="col-lg-4">
                <a href="#"><img src="assets/img/02.jpg" alt=""></a>
            </div>
            <div class="col-lg-4">
                <a href="#"><img src="assets/img/03.jpg" alt=""></a>
            </div>
        </div>

        <div class="row centered mt grid">
            <div class="mt"></div>
            <div class="col-lg-4">
                <a href="#"><img src="assets/img/04.jpg" alt=""></a>
            </div>
            <div class="col-lg-4">
                <a href="#"><img src="assets/img/05.jpg" alt=""></a>
            </div>
            <div class="col-lg-4">
                <a href="#"><img src="assets/img/06.jpg" alt=""></a>
            </div>
        </div>

        <div class="row mt centered">
            <div class="col-lg-7 col-lg-offset-1 mt">
                <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            </div>

            <div class="col-lg-3 mt">
                <p><button type="button" class="btn btn-theme btn-lg">Email Me!</button></p>
            </div>
        </div>
    </div>


    <div id="skills">
        <div class="container">
            <div class="row centered">
                <h3>COLLABORATE</h3>
                <div class="col-lg-3 mt">
                    <canvas id="javascript" height="130" width="130"></canvas>
                    <p>Javascript</p>
                    <br>
                    <script>
                        var doughnutData = [
                            {
                                value: 70,
                                color:"#74cfae"
                            },
                            {
                                value : 30,
                                color : "#3c3c3c"
                            }
                        ];
                        var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
                    </script>
                </div>
                <div class="col-lg-3 mt">
                    <canvas id="bootstrap" height="130" width="130"></canvas>
                    <p>Bootstrap</p>
                    <br>
                    <script>
                        var doughnutData = [
                            {
                                value: 90,
                                color:"#74cfae"
                            },
                            {
                                value : 10,
                                color : "#3c3c3c"
                            }
                        ];
                        var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
                    </script>
                </div>
                <div class="col-lg-3 mt">
                    <canvas id="wordpress" height="130" width="130"></canvas>
                    <p>Wordpress</p>
                    <br>
                    <script>
                        var doughnutData = [
                            {
                                value: 65,
                                color:"#74cfae"
                            },
                            {
                                value : 35,
                                color : "#3c3c3c"
                            }
                        ];
                        var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
                    </script>
                </div>
                <div class="col-lg-3 mt">
                    <canvas id="photoshop" height="130" width="130"></canvas>
                    <p>Photoshop</p>
                    <br>
                    <script>
                        var doughnutData = [
                            {
                                value: 50,
                                color:"#74cfae"
                            },
                            {
                                value : 50,
                                color : "#3c3c3c"
                            }
                        ];
                        var myDoughnut = new Chart(document.getElementById("photoshop").getContext("2d")).Doughnut(doughnutData);
                    </script>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /skills -->

<?php
include 'footer.php';
?>