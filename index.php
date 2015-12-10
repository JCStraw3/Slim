<!-- <!DOCTYPE html>
<html>
<head>
	<title>Slim test</title>
</head>
<body>

<script src="/app.php"></script>

</body>
</html> -->

<?php

require 'vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function(){
});

$app->run();