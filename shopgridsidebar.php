<?php
include "common/header.php";
?><section class="mx-5">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Page</li>
            <li class="breadcrumb-item active" aria-current="page">Shop</li>
            <li class="breadcrumb-item active" aria-current="page">Category</li>
        </ol>
    </nav>
</section>

<section>


<div class="container">

<div class= "aligncenter">Show 1-12 of 44 pages</div>
<div class="row">


<div class="col-4">
<div class="div"></div>
   <ul>
<li class ="list-style_prop  py-2"><h5>Categories</h5></li>
<li class ="list-style_prop"><a href="" class="text_decoration">Accessories</a>
</li>
<li class ="py-1 list-style_prop  "><a  href="" class="text_decoration font_btn ">Dresses</a> </li>
<li class ="py-1 list-style_prop "><a href="" class="text_decoration font_btn">Men</a></li>
<li class ="py-1 list-style_prop"><a href="" class="text_decoration font_btn">Women</a></li>
<li class ="py-1 list-style_prop"> <a href="" class="text_decoration font_btn">Watch</a></li>
<li class= "py-1 list-style_prop"><a href="" class="text_decoration font_btn">Clothing</a></li>
<li class= "py-1 list-style_prop "><a  href="" class="text_decoration font_btn">Bags</a> </li>
   </ul>

   <hr class ="my-3">

   <label for="customRange2" class="form-label mx-5"><h5>Price Filter</h5></label>

   <input type="range" class="form-range range_slider" min="0" max="5" id="customRange2">

   <div class="row py-2">

<!--  -->




  
  
  













<!--  -->

     <div class ="col-4">


     <div class="form-group">
    <input type="email" class="form-control labelhw mx-3" id="exampleFormControlInput1" placeholder="$30">
  </div>
     </div>
<div class= "col-4">

<div class="form-group">
    <input type="email" class="form-control labelhw" id="exampleFormControlInput1" placeholder="$3000">
  </div>

</div>

<div class= "col-4">

<button type="button" class="btn btn-success mx-5  margin_button_left"><i class="fa-solid fa-magnifying-glass"></i></button>
</div>


   </div>


<div class ="py-3 mx-3"><h5>Size</h5></div>

<div class= "py-2">

<button type="button" class="btn btn-outline font_btn">XS</button>
<button type="button" class="btn btn-outline font_btn">S</button>
<button type="button" class="btn btn-outline-success font_btn">M</button>
<button type="button" class="btn btn-outline font_btn">L</button>
<button type="button" class="btn btn-outline font_btn">SL</button>
<button type="button" class="btn btn-outline font_btn">XL</button>
<button type="button" class="btn btn-outline font_btn">XXL</button>


<hr class ="my-3 mx-3">

<div class="py-3 mx-3"><h5>Colors</h5></div>

<div class="form-check  mx-2">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label font_btn" for="flexCheckDefault">
Black  </label>
</div>
<div class="form-check py-1 mx-2">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label font_btn" for="flexCheckChecked">
Sky Blue  </label>
</div>

<div class="form-check py-1 mx-2">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label font_btn" for="flexCheckDefault">
WHite  </label>
</div>
<div class="form-check py-1 mx-2">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label font_btn" for="flexCheckDefault">
Red  </label>
</div>
<div class="form-check py-1 mx-2">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label font_btn" for="flexCheckDefault">
Green  </label>
</div>
<div class="form-check py-1 mx-2">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label font_btn " for="flexCheckDefault">
Yellow  </label>
</div>

<hr class ="my-3">

<div class ="py-3 px-5"><h5>TOP RATED</h5></div>
<ul>
<li class ="list-style_prop">
<div class= "row py-2 ">


<div class=" col-6 ">
<img src="imgs/black_eighty.png" alt="" class= "w-100">
</div>


<div class= " col-6">

<div class= "py-5 ">
<div>Casual Men wearing cool shoes</div>
<div>$250</div>
</div>

</div>
</div>
</li>


<li class= "list-style_prop">
<div class= "row py-2">


<div class=" col-6 ">
<img src="imgs/black_eighty.png" alt="" class= "w-100">
</div>


<div class= " col-6 ">

<div class= "py-5">
<div>Casual Men wearing cool shoes</div>
<div>$250</div>
</div>

</div>
</div>
</li>
<li class= "list-style_prop">
<div class= "row py-2">


<div class=" col-6">
<img src="imgs/black_eighty.png" alt="" class= "w-100">
</div>


<div class= " col-6 ">

<div class= "py-5">
<div>Casual Men wearing cool shoes</div>
<div>$250</div>
</div>

</div>
</div>
</li>

</ul>

<hr class ="my-3">



<div class="relative mx-3"><img src="imgs/boy.png" alt="" class="w-100 boy_image">
  <div class="absolute mx-3"><img src="imgs/absolute1.png" alt="" class="w-100 boy_image"></div>
</div>


<div></div>

</div>


</div>

    <div class="col-8">
        <div class="col-lg-10 ">

            <div class="row py-3"><?php 
                for($i = 1; $i <= 12; $i++) {
                ?><div class="col-lg-4 col-sm-6 "><?php
                    include "common/product.php";
                ?></div><?php
                }
            ?></div>
        </div>
    </div>
</div>

</div>

</section>

<section>

</section><?php
include "common/footer.php";