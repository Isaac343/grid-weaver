<?php
$template = new Template();
class Template{
	public function __construct(){
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
<<<<<<< Updated upstream
  <title>GW ADMIN</title>
	<link rel="stylesheet" href="<?php echo STATIC_URL; ?>css/main.css">
	</head>
  <body>
=======
  <title>ITT access</title>
	<link rel="stylesheet" href="<?php echo STATIC_URL; ?>css/"> //dashboard.css
	<link rel="stylesheet" href="<?php echo STATIC_URL; ?>css/"> //main.css
	<script src="<?php echo STATIC_URL; ?>js/require.min.js"></script>
	<script>
	requirejs.config({
		baseUrl: '.'
	});
	</script>
	<script src="<?php echo STATIC_URL; ?>js/dashboard.js"></script>
	</head>
  <body>
		<div class="page">
>>>>>>> Stashed changes
<?php
  }
	public function __destruct(){
?>
<<<<<<< Updated upstream
=======
		</div>
>>>>>>> Stashed changes
  </body>
</html>
<?php
	}
}
?>
