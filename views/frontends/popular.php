<!-- Start Popular Menu List  -->
<div class="main pt-5" id="pmenu">
	<div class="main container mt-5">
		<h2 class="text-center py-5">Popular Menu</h2>
		<div class="row mt-5">
			<?php foreach($menus as $menu) { ?>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 px-0">
					<div class="d-flex flex-lg-row justify-content-center">
						<div class="col-lg-3 col-md-3 col-sm-3 col-3 my-auto image1">
                            <img src="./assets/images/menus/popular/<?= $menu['image']?>" style="width: 70px; height: 70px;">
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 col-5 mt-3 text-left">
                            <h4><?= $menu['title']?></h4>
							<p><?= $menu['item_one']?> <br>
								<?= $menu['item_two']?>
							</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$ <?= $menu['price_one']?><br>
							  
							</p>		
							<p> <?= $menu['price_two']?></p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>			
                
					<!-- <div class="row mt-5 text-center">
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
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 pb-3">
							<img src="./assets/images/coffee/c1.png" width="80px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Irish</h4>
							<p>1 cup</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$8</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div>

					<div class="row mt-5 text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-3 image1">
							<img src="./assets/images/coffee/c10.png" width="60px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 text-left mt-3 pb-3">
							<h4>Cappuccino</h4>
							<p>1 cup </p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$6</p>
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

					<div class="row mt-5 text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-4 image1">
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
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 pb-3">
							<img src="./assets/images/coffee/c3.png" width="80px" >
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Peppermint Mocha</h4>
							<p>1 cup</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$3</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div>

					<div class="row mt-5  text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-3 image1">
							<img src="./assets/images/coffee/c6.png" width="70px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Espresso</h4>
							<p>1 cup</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$6</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>

						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-3 image1">
							<img src="./assets/images/food/f5.png" width="65px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Potato Stick</h4>
							<p>1 table (regular) <br> 1 table (special) </p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$5 <br> $8</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div> -->
			<!-- </div>		
		</div> -->
		<!-- End Popular Menu List  -->