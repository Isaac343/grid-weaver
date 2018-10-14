<?php
$template = new Template();
class Template{
	public function __construct(){
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>GW ADMIN</title>
		<link rel="stylesheet" href="<?php echo STATIC_URL; ?>css/frame.css">
		<link rel="stylesheet" href="<?php echo STATIC_URL; ?>css/main.css">
	</head>
  <body>
		<div class="page">
<?php
  }
	public function __destruct(){
?>
		</div>
  </body>
</html>
<?php
	}
}
?>
