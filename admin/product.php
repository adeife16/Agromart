<?php 
	$title = "View Product";
	require_once 'header.php';
?>
	<style type="text/css">
		.slider-container {
		  position: relative;
		}

		.slider {
		  width: 100%;
		  overflow: hidden;
		  border: 1px solid rgba(0, 0, 0, 0.2);
		  border-radius: 10px;
		}

		.slider img {
		  width: 100%;
		  display: none;
		  height: 400px;

		}

		.thumbnails {
		  display: flex;
		  justify-content: center;
		  margin-top: 10px;
		}

		.thumbnails img {
		  width: 80px;
		  height: 60px;
		  margin: 0 5px;
		  cursor: pointer;
		}
	</style>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Product Details</h1>
      </div>

      <div class="row justify-content-center">
      	<div class="col-md-12">
          <div class="card shadow h-100 py-2">
            <div class="card-body" id="proData">
            	<div class="row justify-content-center">
            		<div class="col-md-6 col-sm-12 p-2">
	            		 <div class="slider-container">
						</div>
            		</div>
            		<div class="col-md-6 col-sm-12">
            			<div class="details">
            				
            			</div>            			
            		</div>
            	</div>
              </div>
            </div>
          </div>
      	</div>

      	<div class="row p-3 m-3">
      		<div class="col-md-12">
          		<div class="card shadow h-100 py-2">
          			<div class="card-header">
          				Reviews
          			</div>
            		<div class="card-body" id="proData">
		      			<div class="review-div row">
		      				
		      			</div>
		      		</div>
		      	</div>
      		</div>
      	</div>

<?php 
	require_once 'footer.php';
?>