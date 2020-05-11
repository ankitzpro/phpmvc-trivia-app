<?php
include_once 'dependencies.php';

?>

<h1 class="text-center">
    Trivia App
</h1>

<hr>

<form method="post" action="summary.php">

    <div class="container">
        <div class="form-row">
        <div class="col-md-12">   
        <h2>Q.2 What are the colors in the Indian national flag? Select all:</h2>
        <input type="checkbox" name="colors[]" value="White"  autofocus> White<br>
        <input type="checkbox" name="colors[]" value="Yellow"  autofocus> Yellow<br>
        <input type="checkbox" name="colors[]" value="Orange"  autofocus> Orange<br>
        <input type="checkbox" name="colors[]" value="Green"  autofocus> Green<br>
            <input type="text" name="name" value="<?php echo $_POST['name']?>" hidden>
            <input type="text" name="quesone" value="<?php echo $_POST['quesone']?>" hidden>
        <button class="btn btn-primary btn-lg">Next</button>
        </div>
        </div>
    </div>

</form>