<?php
    include "common/header.php";
    ?><section>

    <div class="container">


        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Page</li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                <li class="breadcrumb-item active greencolor" aria-current="page">Cart</li>


            </ol>
        </nav>
    </div>

</section>

<section>


    <div class="container py-3">

        <table>
            <tr>
                <th>Procucts</th>
                <th>Colors and Size</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>

            </tr>
            <tr>
                <td><img src="imgs/blackbg.png" alt=""> Casual Man wearing cool shoe
                </td>
                <td>Size:XL <br> Color:Black</td>
                <td>2</td>
                <td>$120</td>
                <td>$120 <i class="bi bi-x-circle px-2"></i></td>

            </tr>
            <tr>
                <td><img src="imgs/blackbg.png" alt=""> Casual Man wearing cool shoe
                </td>
                <td>Size:XL <br> Color:Black</td>
                <td>2</td>
                <td>$120</td>
                <td>$120 <i class="bi bi-x-circle px-2"></i></td>
            </tr>
            <tr>
                <td><img src="imgs/blackbg.png" alt=""> Casual Man wearing cool shoe
                </td>
                <td>Size:XL <br> Color:Black</td>
                <td>2</td>
                <td>$120</td>
                <td>$120 <i class="bi bi-x-circle px-2"></i></td>
            </tr>
            <tr>
                <td><img src="imgs/blackbg.png" alt=""> Casual Man wearing cool shoe
                </td>
                <td>Size:XL <br> Color:Black</td>
                <td>2</td>
                <td>$120</td>
                <td>$120 <i class="bi bi-x-circle px-2"></i></td>
            </tr>

        </table>
    </div>
</section>



<section>

    <div class="container">
        <div class="row">
            <div class="col-6 py-3">
                <div class="px-1 py-3 font_pixel">Use Coupon Code Here</div>
                <div class="py-1 px-1 font_pixel">Enter your Coupon Code Here</div>

                <div>
                    <div class="input-group  coupon_email">
                        <input type="text" class="form-control" placeholder="Enter your coupon code here"
                            aria-label="Recipient's username with two button addons">
                        <button type="button" class="btn btn-success font_pixel">Apply</button>
                    </div>
                </div>
                <div class="col-6">

                </div>
            </div>




            <div class="col-6 py-3">
                <div class="py-3 px-1 font_pixel">Use gift voucher here</div>
                <div class="py-1 px-1 font_pixel">Enter your gift voucher code here</div>

                <div>
                    <div class="input-group  coupon_email">
                        <input type="text" class="form-control font_pixel" placeholder="Enter your gift voucher here"
                            aria-label="Recipient's username with two button addons">
                        <button type="button" class="btn btn-success font_pixel">Apply</button>
                    </div>
                </div>
                <div class="col-6">

                </div>
            </div>
        </div>

</section>




<section>
    <div class="container">
        <div class="row">


            <div class="col-6 ">

                <div class="py-2 px-1 font_pixel ">Shipping Availability</div>
                <div class="py-1 px-1 font_pixel ">Select Country</div>
                <div>
                    <select class="form-select dropdown fontpixel font_pixel" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div>
                    <div class="py-1 px-1 font_pixel ">Select State</div>
                    <div>
                        <select class="form-select dropdown  font_pixel" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>


                    <div>
                        <div class="py-3 font_pixel">Postal/zip</div>
                        <div>
                            <div class="input-group mb-3 input_label">
                                <input type="text" class="form-control font_pixel" placeholder="Postcode/ Zip"
                                    aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                        </div>
                    </div>

                    <button type="button" class="btn btn-light">Update Details</button>

                </div>



            </div>




            <div class="col-6">
                <div class="font_pixel py-4 "> Shopping Cart calculation</div>









                    <!-- <div class=" row py-2">
                        <div class="col-6 font_pixel py-1 px-5">
                            Coupon
                        </div>

                        <div class="col-6 font_pixel py-1 px-5">
                            -$50
                        </div>
                    </div>





                    <div class="row py-2 ">
                        <div class="col-6 font_pixel px-5">
                            Shipping
                        </div>

                        <div class="col-6 font_pixel  px-5">
                            Free Shipping
                        </div>
                    </div>

 -->

 <table >

<tbody>
  <th> Subtotal</th>
  <td>$450</td>
</tbody>

<tbody>
<th>Coupon</th>
  <td>-$50</td>

</tbody>

<tbody>
<th>Shipping</th>
  <td>Free Shipping</td>
</tbody>
<tbody>
  <th >Total</th>
  <td>$400</td>
</tbody>

</table>


                <button type="button py-5 font_pixel justifyclass " class="btn btn-success my-3 mx-5">Proceed to
                    checkout</button>
            </div>
        </div>

    </div>
    <div>

</section>

<section>

    <div class="container">
        <div class="row py-3">


            <div class="col-6 ">

                <div class="font_last">We're confident we've provided all the best for you.Stay connected with us.</div>

</div>
            <div class="col-6 py-1">

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