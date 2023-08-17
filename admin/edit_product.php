<?php 
	$title = "Edit Product";
	require_once 'header.php';
?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
      </div>

      <div class="row justify-content-center">
      	<div class="col-md-8">
          <div class="card shadow h-100 py-2">
            <div class="card-body" id="proData">
							<form class="form" id="product-form" action="" method="post">
			          <div class="form-group">
			            <span for="">Product Name</span>
			            <input type="text" name="pro_name" class="form-control" id="pro_name" placeholder="Product Name">
			          </div>
			          <div class="form-group">
			            <span for="pro_cat">Category</span>
			            <select class="form-control" name="pro_cat" id="pro_cat"></select>
			          </div>
			          <div class="form-group">
			          	<span for="pro_price">Price(&#8358;)</span>
			          	<input type="text" name="pro_price" class="form-control number-separator" id="pro_price">
			          </div>
			          <div class="form-group">
			          	<span for="pro_desc">Product Description</span>
			          	<textarea class="form-control" id="pro_desc" name="pro_desc"></textarea>
			          </div>
			          <br>
			          <br>
			          <div class="form-group">
	  							<div id="preview-container"></div>
			          	<div class="upload-btn-wrapper">
							  	<button class="btn upload-label orange color-white">Add Image</button>
		  						<input type="file" id="imageUpload" multiple>
			  						<div>
				  						<small class="text-danger">Maximum number of 7 images</small>
				  						<br>
				  						<small class="text-danger">Maximum  size of 5 Megabytes</small>
			  						</div>
									</div>
			          </div>		          	
			          <div class="form-group">
			          	<button type="button" class="btn btn-success float-right" id="submit">Submit</button>
			          </div>
				</form>
              </div>
            </div>
          </div>
      	</div>
      </div>

<?php 
	require_once 'footer.php';
?>