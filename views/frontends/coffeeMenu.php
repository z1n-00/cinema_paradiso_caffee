<!-- Start Coffee Menu List  -->
<div class="main pt-5" id="cmenu">
	<div class="main container mt-5">
		<h2 class="text-center py-5">Coffee Menu</h2>
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
              

<!-- <div class="main pt-5 " id="cmenu" >
				<div class="container mt-5" >
					<h2 class="text-center py-5" >Coffee Menu</h2>
					<div class="row mt-5 text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-2 image1 text-center">
							<img src="./assets/images/coffee/c2.png" width="60px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Americano</h4>
							<p>1 cup</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$10</p>
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

					<div class="row mt-5 text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-2">
							<img src="./assets/images/coffee/c4.png" width="48px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Cafe Latte</h4>
							<p>1 cup</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$5</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>

						<div class="col-lg-1 col-md-3 col-sm-3 col-3 my-2 mt-3">
							<img src="./assets/images/coffee/c5.png" width="40px" >
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Latte Macchiato</h4>
							<p>1 cup</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$6</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div>

					<div class="row mt-5 text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-3 image1">
							<img src="./assets/images/coffee/c6.png" width="70px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-4 text-left">
							<h4>Espresso</h4>
							<p>1 cup</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-4 price">
							<h4>Price</h4>
							<p>$6</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>

						<div class="col-lg-1 col-md-3 col-sm-3 col-3 pb-2 mt-3 image1">
							<img src="./assets/images/coffee/c7.png" width="60px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-4 text-left">
							<h4>Glace</h4>
							<p>1 cup</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-4 price">
							<h4>Price</h4>
							<p>$5</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div>

					<div class="row mt-5 text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-2 image1">
							<img src="./assets/images/coffee/c8.png" width="42px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Frappe</h4>
							<p>1 cup</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$4</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>

						<div class="col-lg-1 col-md-3 col-sm-3 col-3 py-2 image1">
							<img src="./assets/images/coffee/c9.png" width="65px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left">
							<h4>Freddo</h4>
							<p>1 cup</p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$5</p>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-2 col-2 blank">
						</div>
					</div>

					<div class="row mt-5 text-center">
						<div class="col-lg-1 col-md-3 col-sm-3 col-3 mt-3 image1">
							<img src="./assets/images/coffee/c10.png" width="60px">
						</div>
						<div class="col-lg-3 col-md-5 col-sm-5 col-5 mt-3 text-left pb-3">
							<h4>Cappuccino</h4>
							<p>1 cup </p>
						</div>
						<div class="col-lg-1 col-md-2 col-sm-2 col-2 mt-3 price">
							<h4>Price</h4>
							<p>$6</p>
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
				</div>
			</div> -->
<!-- End Coffee Menu List  -->
