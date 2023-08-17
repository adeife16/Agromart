<?php 
	$title = "Catalog";
	require_once 'header.php';
?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product Catalog</h1>
      </div>

      <div class="row justify-content-center">
      	<div class="col-md-9">
          <div class="card shadow h-100 py-2">
            <div class="card-body">
            	<div class="table-responsive">
            		<table class="table">
	            		<thead>
	            			<tr>
	            				<th>Picture</th>
	            				<th>Name</th>
	            				<th>Price</th>
	            				<th>Category</th>
	            				<th>Rating</th>
	            				<th>Action</th>
	            			</tr>
	            		</thead>
	            		<tbody id="proData">
	            			<tr align="center">
	            				<td colspan='5' class="text-danger">No Products available</td>
	            			</tr>
	            		</tbody>
            		</table>
            	</div>
              </div>
            </div>
          </div>
      	</div>
      </div>

<?php 
	require_once 'footer.php';
?>