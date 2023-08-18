
  </div>
  <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website <?php echo date('Y'); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        	<p class="text-danger">Delete User? This action is irreversible.</p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="confirm">Confirm Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
    <script src="js/toastr.min.js"></script>


  <?php if ($title == "Dashboard"): ?>
	  <!-- Page level plugins -->
	  <script src="vendor/chart.js/Chart.min.js"></script>

	  <!-- Page level custom scripts -->
    <script type="text/javascript" src="ajax/dashboard.js"></script>
    <script type="text/javascript" src="scripts/dashboard.js"></script>
  <?php endif ?>


  <?php if ($title == "Create Product"): ?>
  	<script type="text/javascript" src="ajax/create_product.js"></script>
  	<script type="text/javascript" src="scripts/create_product.js"></script>
	<link rel="stylesheet" type="text/css" href="plugins/custom-uploader/uploader.css">
	<script type="text/javascript" src="plugins/custom-uploader/uploader.js"></script>
  	<script type="text/javascript" src="plugins/easy-number-separator.js"></script>
  <?php endif ?>


  <?php if ($title == "Catalog"): ?>
  	<script type="text/javascript" src="ajax/catalog.js"></script>
  	<script type="text/javascript" src="scripts/catalog.js"></script>
  <?php endif ?>

  <?php if ($title == "Edit Product"): ?>
	<link rel="stylesheet" type="text/css" href="plugins/custom-uploader/uploader.css">
	<script type="text/javascript" src="plugins/custom-uploader/uploader.js"></script>
  	<script type="text/javascript" src="ajax/edit_product.js"></script>
  	<script type="text/javascript" src="scripts/edit_product.js"></script>
  <?php endif ?>

  <?php if ($title == "View Product"): ?>
  	<link rel="stylesheet" type="text/css" href="plugins/desoslide-master/dist/css/jquery.desoslide.min.css">
  	<script type="text/javascript" src="plugins/desoslide-master/dist/js/jquery.desoslide.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="plugins/desoslide-master/dist/css/animate.min.css">
  	<script type="text/javascript" src="ajax/product.js"></script>
  	<script type="text/javascript" src="scripts/product.js"></script>
  <?php endif ?>

  <?php if ($title == "Customers"): ?>
  	<script type="text/javascript" src="ajax/customers.js"></script>
  	<script type="text/javascript" src="scripts/customers.js"></script>
  <?php endif ?>

  <?php if ($title == "Moderators"): ?>
  	<script type="text/javascript" src="ajax/moderators.js"></script>
  	<script type="text/javascript" src="scripts/moderators.js"></script>
  <?php endif ?>

  <?php if ($title == "Create Moderator"): ?>
  	<link rel="stylesheet" type="text/css" href="plugins/image-upload.css">
  	<script type="text/javascript" src="plugins/image-upload.js"></script>
  	<script type="text/javascript" src="ajax/create_mod.js"></script>
  	<script type="text/javascript" src="scripts/create_mod.js"></script>
  <?php endif ?>

  <?php if ($title == "Orders"): ?>
    <script type="text/javascript" src="ajax/orders.js"></script>
    <script type="text/javascript" src="scripts/orders.js"></script>
  <?php endif ?>
</body>

</html>
