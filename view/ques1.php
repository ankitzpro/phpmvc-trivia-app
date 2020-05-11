<?php include_once 'dependencies.php'; 
error_reporting(0);
?>

<h1 class="text-center">
    Trivia App
</h1>

<hr>

<form method="post" action="ques2.php">

    <div class="container">
        <div class="form-row">

            

            <div class="col-md-12">
            <h2>Q.1 Who is the best cricketer in the world?</h2>
            <input type="radio"  name="quesone" value="Sachin Tendulkar" required autofocus>
            <label for="Sachin Tendulkar">Sachin Tendulkar</label><br>
            <input type="radio"  name="quesone" value="Virat Kohli" required autofocus>
            <label for="Virat Kohli">Virat Kohli</label><br>
            <input type="radio" i name="quesone" value="Adam Gilchrist" required autofocus>
            <label for="Adam Gilchrist">Adam Gilchrist</label><br>
            <input type="radio" i name="quesone" value="Jacques Kallis" required autofocus>
            <label for="Jacques Kallis">Jacques Kallis</label><br>
            
            <input type="text" name="name" value="<?php echo $_POST['name']?>" hidden>
            <button class="btn btn-primary btn-lg">Next</button>
            </div>


        </div>
    </div>

</form>

