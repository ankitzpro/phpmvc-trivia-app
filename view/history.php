<?php
include_once 'dependencies.php';
include_once '../model/Connection.php';
include_once '../model/Datamanage.php';
$datalist=new Datamanage();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<?php  ?>
</head>
<body>

<div class="container">
	
	<h1 class="text-center"> Trivia App <i class="fa fa-ticket"></i></h1>
<hr>
<div class="row"  >
<?php foreach ($datalist->dataList() as $key =>$list): ?>
<div class="col-md-12">
           <h3>Game <?php echo $key+1;?> : <?php echo date("d F h:i a", strtotime($list['date'])); ?></h3>
        </div>
        <div class="col-md-12">
           <h3>Name: <?php echo $list['name'];?></h3>

           </div>
           <div class="col-md-12">
           <h3>Who is the best cricketer in the world?</h3>
        <h3> Answer : <?php echo $list['quesone']; ?></h3>
        </div>
        <div class="col-md-12" style="margin-bottom:30px">
           <h3>What are the colors in the national flag?</h3>
           <h3> Answer : <?php echo $list['questwo'];?></h3>
  </div>
  <?php endforeach; ?>
  <div class="col-md-12">
  <a class="btn btn-primary btn-lg" href="../index.php">Restart</a>
           </div>
</div>

</body>
</html>