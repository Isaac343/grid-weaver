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
	<link rel="stylesheet" href="<?php echo STATIC_URL; ?>css/main.css">
	</head>
  <body>
<?php
  }
	public function __destruct(){
?>
  </body>
</html>
<?php
	}
}
?>
