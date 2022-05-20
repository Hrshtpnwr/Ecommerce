<?php
include "common/header.php";
?><section class="container mx-5">

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Page</li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li>
        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
    </ol>
</nav>
</section>


<section class="container">
    

<div class ="row">
      <div class= "col-6">
         <div class= "row">
            <div class= "col-6">
   <div class="">First name</div>



   <div class="input-group mb-3">
  <input type="text" class="form-control my-1" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1">
</div>


            </div>

         <div class= "col-6">
         <div> Last name</div>
         <div class="input-group mb-3">
  <input type="text" class="form-control my-1" placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1">
  </div>
         </div>

<div>Country</div>
         <div><select class="form-select my-1" aria-label="Default select example">
  <option selected>Country</option>
  <option value="1">India</option>
  <option value="2">Australia </option>
  <option value="3">Usa</option>
  <option value="3">Japan</option>

</select></div>

<div>
  <div class="my-2 mx-1">Company name</div>
<div class="input-group mb-3 py-1">
  <div class="input-group-prepend">
  </div>
  <input type="text" class="form-control " placeholder="Company Name" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
<div>
<div class="">Address</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
  </div>
  <input type="text" class="form-control my-1" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>

<div>
  <div class= "my-1 mx-1">Postal/Zip</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
  </div>
  <input type="text" class="form-control" placeholder="Postal/zip" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
</div>

<div>Town/city</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
  </div>
  <input type="text" class="form-control" placeholder="Town/city" aria-label="Username" aria-describedby="basic-addon1"></div>
<div>
<div class= "row">
            <div class= "col-6">
   <div class="my-1">Email Address</div>



   <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="First Name" aria-label="Username" aria-describedby="basic-addon1">
</div>


            </div>

         <div class= "col-6">
         <div class="my-1"> Phone</div>
         <div class="input-group mb-3">
  <input type="text" class="form-control " placeholder="Last Name" aria-label="Username" aria-describedby="basic-addon1">
         </div>
         </div> 
         
         <div class="form-check my-2">
  <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label " for="flexCheckDefault"> Create an account?
  </label>
</div>

       </div>
         </div>
       </div>


       <div class= "col-4">
      <div class="aligncenter">Your Order</div>



<div class="row py-3">
  <div class="col-6 aligncenter">Product</div>

  <div class="col-6 aligncenter">Total</div>
</div>

<hr>
<div class="row py-3">
  <div class="col-6 aligncenter">Casual man wearing cool shoes * 1</div>

  <div class="col-6 aligncenter">$120</div>
</div>

<div class="row py-3">
  <div class="col-6 aligncenter">Casual man wearing cool shoes * 1</div>

  <div class="col-6 aligncenter">$120</div>
</div>
<hr>

<div class ="row">

<div class="col-6 aligncenter">Subtotal</div>


<div class="col-6 aligncenter">$400</div>

</div>


<div class ="row">

<div class="col-6 aligncenter">Shipping</div>
<div class="col-6 aligncenter">Free Shipping</div>

</div>

<hr>


<div class ="row">

<div class="col-6 aligncenter">Total</div>


<div class="col-6 aligncenter">$400</div>



</div>
<hr>
<div class="form-check ">
  <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label " for="flexCheckDefault">
Direct Bank Transfer  </label>
</div>
<p class= "px-3 lightgraycolor my-2">
Make your payment directly into our bank account.
Please use your Order ID as the payment reference.
Your order won’t be shipped until the funds have
cleared in our account.
</p>


<div class="form-check my-2 ">
  <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label " for="flexCheckDefault">
Cheque Payment  </label>
</div>
<div class="form-check my-2">
  <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label " for="flexCheckDefault">
Paypal  </label>
</div>

<button type="button" class="btn btn-success mx-3">Place order</button>

      <!-- <table class="text_decoration">
      <tbody>
           <th>Product</th>
           <td>Total</td>
      </tbody>

      <tbody>
           <th>Casual men wearing cool shoe * 1</th>
           <td>$120</td>
      </tbody>

      <tbody>
           <th>Casual men wearing cool shoe * 1</th>
           <td>$120</td>
      </tbody>


      <tbody>
           <th>Subtotal</th>
           <td>$400</td>
      </tbody>


      <tbody>
           <th>Shipping  </th>
           <td>Free shipping</td>
      </tbody>

      <tbody>
           <th>Total </th>
           <td>$400</td>
      </tbody>
      </table> -->
      
  </div>



  


</div>

<section>

</section><?php
include "common/footer.php";







