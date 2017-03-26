<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
<?php include('styles.html'); ?>
</head>
<body>

<?php include('navbar.html'); ?>


<div class="container-fluid">
	<h1>Hello My Application</h1>
</div>

<div id="app" class="container">
	<h2>{{ message }}</h2>
</div>


<div id="resultset">
<?php foreach ($resultset as $result): ?>
<?php print_r($result) ?>
<?php endforeach; ?>
</div>










<?php include('scripts.html'); ?>

<script>
var app = new Vue({
	el: '#app',
	data: {
		message: 'Hello Vue!'
	}
});
</script>


</body>
</html>