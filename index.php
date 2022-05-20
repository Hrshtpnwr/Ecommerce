<?php
include "common/header.php";
?><section>

    <div class="container">

        <div class=""><img src="imgs/bg1.png" alt=""></div>
    </div>
</section>

<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">


            <div class="carousel-item active ">
                <img src="imgs/img1.png" class="d-block w-100 " alt="...">
                <div class="card-img-overlay ">
                    <div class="container">
                        <div>
                            <img src="imgs/e-comlogo.png" alt="" class="py-5 px-4">
                            <p class="card-text    text_colortop">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do<br>eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button type="button" class="btn btn-outline-secondary mx-5">Buy now</button>

                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/img2.jpg" class="d-block w-100 " alt="...">
                <div class="card-img-overlay ">


                    <div class="container">
                        <div>
                            <img src="imgs/e-comlogo.png" alt="" class="py-5 px-4">
                            <p class="card-text mx-3   text_colortop">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do<br>eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button type="button" class="btn btn-outline-secondary mx-5 ">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/img3.jpg" class="d-block w-100" alt="...">
                <div class="card-img-overlay ">


                    <div class="container">
                        <div>
                            <img src="imgs/e-comlogo.png" alt="" class="py-5 px-4">
                            <p class="card-text  mx-3   text_colortop">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <button type="button" class="btn btn-outline-secondary mx-5">Buy now</button>
                        </div>
                    </div>


                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/img3.jpg" class="d-block w-100" alt="...">
                <div class="card-img-overlay ">
                    <div class="container">
                        <div>
                            <img src="imgs/e-comlogo.png" alt="" class="py-5 px-4">
                            <p class="card-text mx-3  text_colortop">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do<br>eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button type="button" class="btn btn-outline-secondary mx-5 ">Buy now</button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</section>



<section>

    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-2">

                <div>
                    <div class="font_description ">BEST SELLERS</div>
                    <div class="font_pro ">The best productions from us.</div>
                </div>

                <div class="font_assign px-3 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna<br> aliqua.</div>
            </div>


            <div class="col-lg-10 ">

                <div class="row py-3"><?php 
                        for($i = 1; $i <= 4; $i++) {
                        ?><div class="col-lg-3 col-sm-6 "><?php
                            include "common/product.php";
                        ?></div><?php
                        }
                    ?></div>
            </div>
        </div>
    </div>
</section>



<section>

    <div class="row py-5">

        <div class="container">
            <div class="row">

                <div class="col-3 background_colour py-5">
                    <div class="alignment py-2"><img src="imgs/diamond.png" alt=""></div>
                    <div class="alignment">
                        <div>Big Offers</div>
                        <div class="font_col">Shop big Save big</div>
                    </div>

                </div>
                <div class="col-3 background_colour py-5">
                    <div class="alignment py-2"><img src="imgs/plane.png" alt=""></div>
                    <div class="alignment">
                        <div>Free Delievery</div>
                        <div class="font_col">On orders above $99</div>
                    </div>
                </div>
                <div class="col-3 background_colour py-5">
                    <div class="alignment py-2"><img src="imgs/arrow.png" alt=""></div>
                    <div class="alignment">
                        <div>30 days return</div>
                        <div class="font_col">Policy we offers</div>
                    </div>
                </div>
                <div class="col-3 background_colour py-5">
                    <div class="alignment py-2"><img src="imgs/rocket.png" alt=""></div>
                    <div class="alignment">
                        <div>Fastest Shopping</div>
                        <div class="font_col">2 days express</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</section>

<section>
    <div class="row text ">

        <div class="col-4">
            <div class="card bg-dark text-white">
                <img src="imgs/1.png" class="card-img w-100" alt="...">
                <div class="card-img-overlay ">
                    <img src="imgs/summer.png" alt="" class="w-100">
                </div>
            </div>

        </div>



        <div class="col-4">
            <div class="card bg-dark text-white">
                <img src="imgs/1.png" class="card-img w-100" alt="...">
                <div class="card-img-overlay ">

                    <img src="imgs/off_img.png" alt="" class="w-100">
                </div>
            </div>

        </div>


        <div class="col-4">
            <div class="card bg-dark text-white">
                <img src="imgs/1.png" class="card-img w-100" alt="...">
                <div class="card-img-overlay ">

                    <img src="imgs/percent-off.png" alt="" class="w-100">
                </div>
            </div>

        </div>
    </div>
</section>




<section>

    <div class="py-4">

        <div class="aligncenter font_feature ">Featured Products</div>
        <div class="aligncenter font_pro">Newest trends from top brands</div>

    </div>

    <div class="container">
        <div>


            <div class="row">
                <?php
                    for($i = 1; $i <= 10; $i++) {
                    ?>
                <div class="col-lg col-sm-6 mb-3 ">
                    <?php
                        include "common/product.php";
                    ?>
                </div>
                <?php
                        if($i % 5 == 0) {
                            echo '<div class="w-100 d-none d-lg-block"></div>';
                        }
                    }
                    ?>

            </div>

        </div>
    </div>


</section>



<section class="container-fluid">

    <div>
        <div class="row">

            <div class="col-6 py-3">



                <div class="card bg-dark text-white">
                    <img src="imgs/imagebg.png" class="card-img" alt="...">
                    <div class="card-img-overlay ">
                        <h5 class="card-title aligncenter">Get Out special Discount</h5>
                        <p class="card-text aligncenter font_size1 py-1">Donec eu tristique felis.Duis augue mi,auctor
                            ut puris et, dignissim aliquet quam.</p>
                        <p class="card-text aligncenter ">Register you email for news and special offers. </p>




                        <form class="form-inline">


                            <div class=" d-flex">

                                <div class="form-group mx-sm-3 mb-2 email-lab">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <input type="password" class="form-control" id="inputPassword2"
                                        placeholder="Email Address">
                                </div>
                                <div class="btnColour">
                                    <button type="button" class="btn btn-success">Get coupon now</button>

                                </div>

                            </div>

                        </form>



                    </div>
                </div>
            </div>
            <div class="col-6 py-3">

                <div class="text-white">

                    <div>


                        <div class="row ">
                            <div class="col-3 mt-5 ">
                                <img src="imgs/a.png" alt="" class="dimensions ">
                            </div>
                            <div class="col-3 mt-5 ">
                                <img src="imgs/b.png" alt="" class="dimensions">
                            </div>
                            <div class="col-3 mt-5">
                                <img src="imgs/c.png" alt="" class="dimensions">
                            </div>
                            <div class="col-3 mt-5  ">
                                <img src="imgs/d.png" alt="" class="dimensions">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</section>


<section>

    <div class="container">
        <div class="row">


            <div class="col-8 ">

                <div class="font_last">We're confident we've provided all the best for you.Stay connected with us.</div>

            </div>
            <div class="col-4 py-1">

                <div class="row  px-5 ">
                    <p class="col-2 px-1 font_last"><i class="fa fa-facebook-f "></i> </p>
                    <p class="col-2 px-1 font_last"><i class="fa fa-twitter "></i> </p>
                    <p class="col-2 px-1 font_last"><i class="fa fa-instagram"></i></p>
                    <p class="col-2 px-1 font_last"><i class="fa fa-linkedin  "></i> </p>
                    <p class="col-2 px-1 font_last"><i class="fa fa-behance "></i> </p>
                </div>

            </div>
        </div>
    </div>
</section><?php
include "common/footer.php";