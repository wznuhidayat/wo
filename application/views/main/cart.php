<!-- Shopping Cart -->
	<div class="shopping-cart section mt-4">
		<div class="container">
			<div class="row">
				<div class="col-9">
					<!-- Shopping Summery -->
					
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						
						<tbody>
							<?php foreach ($product as $items) : ?>
							<tr>
								<td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#"><?= $items->name ?></a></p>
								</td>
								<td class="price" data-title="Price"><span>Rp. <?= number_format($items->price,0,',','.') ?></span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<!-- <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="<?= $items->qty ?>"> -->
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<!-- 	 -->
								<td class="action" data-title="Remove"><a href="<?= base_url('main/removeItem/'.$items->id_wishlist) ?>"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
				<div class="col-lg-3">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span>Rp. <?= number_format($this->cart->total(),0,',','.') ?></span></li>
										<li>Shipping<span>Free</span></li>
										<li>You Save<span>$20.00</span></li>
										<li class="last">You Pay<span>$310.00</span></li>
									</ul>
									<div class="button5">
										<a href="#" class="btn btn-danger">Checkout</a>
										<a href="#" class="btn btn-danger">Continue shopping</a>
									</div>
								</div>
							</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div>
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span>$330.00</span></li>
										<li>Shipping<span>Free</span></li>
										<li>You Save<span>$20.00</span></li>
										<li class="last">You Pay<span>$310.00</span></li>
									</ul>
									<div class="button5">
										<a href="#" class="btn">Checkout</a>
										<a href="#" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!--/ End Total Amount -->
					
				</div>

			</div>
		</div>
	</div>