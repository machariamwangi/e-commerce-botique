<?php
require_once 'core/init.php'; 
include 'includes/head.php';
include 'includes/navigation.php';
include 'includes/headerfull.php'; 
include 'includes/leftbar.php';

$sql = "SELECT * FROM products WHERE featured =1";
$Featured  = $db->query($sql);
?>
	<!--main content -->
	<div class="col-md-8"> 
		<div class="row">
			<h2 class="text-center">Feature Products</h2>
			<?php while ($product =mysqli_fetch_assoc($featured)) : ?>
				<?php var_dump($product); ?>
			<div class="col-md-3">
				<h4>Levis Jeans</h4>
				<img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb" />
		<p class="list-price text-danger">List price: <s>$54.99</s></p>
		<p class="price">Our Price:$19.99</p>
		<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1"> Details</button>
	</div>
  <?php endwhile; ?>
	</div>
	</div>

<?php
include 'includes/detailsmodal.php';
include 'includes/rightbar.php';
include 'includes/footer.php';
?>	
