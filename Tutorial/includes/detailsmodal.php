<!--Details modal-->
<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		     <div class="modal-header">
			      <button class="close" type="button" data-dismiss="modal" aria-label="close">
				     <span aria-hidden="true">&times;</span>
			      </button>
			      <h4 class="modal-title text-center">Levis Jeans</h4>
		     </div> 
		       <div class="modal-body">
			     <div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="center-block">
							<img src="images/products/men4.png" alt="Levis Jeans" class="Details img-responsive">
						</div>
					</div>
					<div class="col-md-6">
						<h4>details</h4>
						<p>these jeans are amaizing! they are straight leg, fit great and look sexy. Get a pair while they last!</p>
						<hr>
						<p>price:$34.99</p>
						<p>Brand: Levis</p>
                        <form action="add_cart.php" method="post">
                        	<div class="form-group">
                        		<div class="col-xs-3">
                        			<label form="quantity">Quantity:</label>
                        			<input type="text" class="form-control" id="quantity" name="quantity">
                        		</div>
                        		<div class="col-xs-9"></div>
                        		<p>Available: 3</p>
                        	</div><br><br>
                        	<div class="form-group">
                        		<label for="size"></label>
                        		<select name="size" id="size" class="form-control">
                        			<option value=""></option>
                        			<option value="28">28</option>
                        			<option value="32">32</option>
                        			<option value="36">36</option>
                        		</select>
                        	</div>
                        </form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-default" data-dismiss="modal"> close</button>
			<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span></button>
	 </div>
   </div>
 </div>
</div>