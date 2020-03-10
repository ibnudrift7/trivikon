<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing Time</title>
	
	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>
</head>
<body>
	<div data-countdown="2020/05/10"></div>
	<div data-countdown="2020/05/09"></div>
	<div data-countdown="2020/05/07"></div>
	<div data-countdown="2020/05/04"></div>

	<script type="text/javascript">
		$(function(){
			$('[data-countdown]').each(function() {
			  var $this = $(this), finalDate = $(this).data('countdown');
			  $this.countdown(finalDate, function(event) {
			    $this.html(event.strftime('%D hari %H:%M:%S'));
			  });
			});
		});
	</script>
</body>
</html>