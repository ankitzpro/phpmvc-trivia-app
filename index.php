<?php
include_once 'view/dependencies.php';
include_once 'model/Connection.php';
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="container">
	
	<h1 class="text-center"> Trivia App <i class="fa fa-ticket"></i></h1>
<hr>
<form action="view/ques1.php" method="post">
<div class="row">
<div class="col-md-3">
</div>
	<div class="col-md-6">
                Name: <i class="fa fa-user"></i>
                <input type="text" class="form-control" name="name" required autofocus>
                <br>
            </div>
			</div>

			<div class="col-md-12 text-center">
                <button class="btn btn-primary btn-lg">
                    Next
                </button>
            </div>
			</form>
</div>

</body>
</html>
