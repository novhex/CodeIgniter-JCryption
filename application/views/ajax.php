<!DOCTYPE html>
<html>
<head>
	<title> RSA </title>
	<script type="text/javascript" src="<?php echo base_url('jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('jquery.jcryption.3.1.0.js'); ?>"></script>
</head>
<body>

<form id="ajaxtest" method="POST" action="<?php echo base_url('rsa/test2_res');?>">
	<input type="text" name="firstname" id="firstname"/>
	<input type="password" name="pw" id="pw" />
	<button type="submit" id="btntest" name="btntest"> Submit Form</button>
</form>
	<?php echo CI_VERSION; ?>
		<script type="text/javascript">
			$(function() {
				$("#ajaxtest").jCryption();

			});
		</script>
	</body>
</html>
