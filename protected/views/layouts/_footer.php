<footer class="text-muted nfooters">
  
  <div class="py-2"></div>

  <div class="container">
    <p class="float-right btn_totop">
      <a href="#" class="back_to_top"><i class="fa fa-chevron-up"></i> &nbsp;Back to top</a>
    </p>
    <p class="copyrights">develop by shauqina partner with jaya mas.</p>
  </div>
</footer>

<script type="text/javascript">
	$(function(){
		
		var letak_text = $('.dataTables_wrapper .dataTables_info');
		var ncols = $(letak_text).text();
		var res = ncols.split(" ");
		var lengths_arr = parseInt(res.length) - 2;

		console.log(res[lengths_arr]);
		
		$(letak_text).html('Total: '+ res[lengths_arr] + ' Data');

		return false;
	});
</script>