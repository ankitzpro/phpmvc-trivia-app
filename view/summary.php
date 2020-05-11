<?php include_once 'dependencies.php'; 
include '../controller/insert_data.php';
error_reporting(0);
?>

<h1 class="text-center">
    Trivia App
</h1>

<hr>


    <div class="container">
        <div class="form-row" style="text-align:center;">
        <div class="col-md-12">
           <h2>Hello, <?php echo $_POST['name'];?></h2>
        </div>
        <div class="col-md-12">
           <h2>Here are the answers selected:</h2>

           </div>
           <div class="col-md-12">
           <h2>Who is the best cricketer in the world?</h2>
        <h3> Answer : <?php echo $_POST['quesone']; ?></h3>
        </div>
        <div class="col-md-12">
           <h2>What are the colors in the national flag?</h2>
           <h3> Answer : <?php $colors=$_POST['colors'];
      $color=''; if(!empty($colors)) {$N = count($colors);
        for($i=0; $i < $N; $i++){if($i==0){
            $color= $colors[$i];
        }
        else{
        $color= $color.",".$colors[$i];
        }}}
  echo $color;?></h3>

<div class="row">
  <div class="col-md-6">
  <a class="btn btn-primary btn-lg" href="../index.php">Finish</a>
  </div>
  <div class="col-md-6">
  <a class="btn btn-primary btn-lg" href="history.php">History</a>
  </div>
  </div>
  </div>
        </div>
    </div>



