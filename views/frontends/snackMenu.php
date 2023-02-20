<!-- Start Snack Menu List  -->
<div class="main pt-5" id="smenu">
	<div class="main container mt-5">
		<h2 class="text-center py-5">Snack Menu</h2>
		<div class="row mt-5">
			<?php foreach($menus as $menu) { ?>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 px-0">
					<div class="d-flex flex-lg-row justify-content-center">
						<div class="col-lg-3 col-md-3 col-sm-3 col-3 my-auto image1">
                            <img src="./assets/images/menus/<?= $menu['image']?>" style="width: 70px; height: 70px;">
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 col-5 mt-3 text-left">
                            <h4><?= $menu['title']?></h4>
							<p>1 cup <br> 1 cup</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$ <?= $menu['price']?><br> $ <?= $menu['price']?> </p>		
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>			
<!-- End Snack Menu  -->

</div>
	<!-- End Main Menu -->


<!-- <div class="main pt-5" id="smenu">
			<div class="container my-5">
					<h2 class="text-center py-5">Snacks Menu</h2>
					<div class="row mt-5 text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-4 image1">
							<img src="./assets/images/food/f1.png" width="65px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Red Brownies</h4>
							<p>1 piece <br> 1 table (5 pieces)</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$2 <br> $10 </p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>

						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-4 image1">
							<img src="./assets/images/food/f2.png" width="65px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Burger</h4>
							<p>burger + vegetable <br> burger + meal + vegetable or not </p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$5 <br> $10</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div> 

					<div class="row mt-5  text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-3 image1">
							<img src="./assets/images/food/f3.jpg" width="65px" class="rounded-circle">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Pizza</h4>
							<p>1 table + vegetable <br> 1 table + meal + vegetable or not </p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$15<br>$25</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>

						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-2 image1">
							<img src="./assets/images/food/f5.png" width="65px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4> Potato Stick</h4>
							<p>1 table (regular) <br> 1 table (special) </p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$5 <br> $8</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div>

					<div class="row mt-5 text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-3 image1">
							<img src="./assets/images/food/f6.png" width="65px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Colorful Donuts</h4>
							<p> 1 piece  <br> 1 table (6 pieces)</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$1 <br> $6</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>

						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-3 image1">
							<img src="./assets/images/food/f7.png" width="65px" class="rounded-circle">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Fried Chicken</h4>
							<p>1 piece <br> 1 table (5 pieces)</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$2 <br> $10</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div>

					<div class="row mt-5 pt-2 text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-3 image1">
							<img src="./assets/images/food/f4.jpg" width="65px" class="rounded-circle">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Hot Dog</h4>
							<p>1 piece <br> 1 table (3 pieces)</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$2 <br> $6</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>

						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-3 image1">
							<img src="./assets/images/food/f8.png" width="65px" class="rounded-circle">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Chocolate Cake</h4>
							<p>1 piece <br> 1 table (5 pieces)</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$1 <br> $5</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div>

					<div class="row mt-5  text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-4 image1">
							<img src="./assets/images/food/f9.png" width="65px" class="rounded-circle">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Cheese Sandwich </h4>
							<p>1 piece <br> 1 table (8 pieces)</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$1 <br> $8</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>

						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-4 image1">
							<img src="./assets/images/food/f10.png" width="65px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Croissant</h4>
							<p>1 lone <br> 1 table (5 lones)</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$3 <br> $15</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div>
			</div>		
		</div> -->
		<!-- End Snack Menu List  -->
