    <!-- jQuery -->
    <script src="<?=base_url()?>assets/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/admin/bootstrap/js/bootstrap.min.js"></script>

	<!-- iCheck -->
	<script src="<?=base_url()?>assets/admin/plugins/iCheck/icheck.min.js"></script>
	<script src="<?=base_url()?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap datepicker -->
    <script src="<?=base_url()?>assets/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?=base_url()?>assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="<?=base_url()?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>

	<script>
	  $(function () {
	    $('input').iCheck({
	      checkboxClass: 'icheckbox_square-blue',
	      radioClass: 'iradio_square-blue',
	      increaseArea: '20%' // optional
	    });
	    //Date picker
	    $('#datepicker').datepicker({
	      autoclose: true
	    });
	  });
	</script>

</body>

</html>
