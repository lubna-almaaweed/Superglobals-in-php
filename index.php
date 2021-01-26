<?php
echo"QUESTION 1 :"."<br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <?php if (isset($_POST['form_submitted'])): ?> //this code is executed when the form is submitted
        <h2>Thank You <?php echo $_POST['firstname']; ?> </h2>
        <p>You have been registered as
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
        </p>
        <p>Go <a href="/registration_form.php">back</a> to the form</p>
        <?php else: ?>
            <h2>Registration Form</h2>
            <form action="registration_form.php" method="POST">
  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form5Example1" class="form-control" />
    <label class="form-label" for="form5Example1">Name</label>
  </div>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form5Example2" class="form-control" />
    <label class="form-label" for="form5Example2">Email address</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block mb-4">Subscribe</button>
</form>
<?php echo'<hr>'; ?> 

      <?php endif; ?> 
</body> 
</html>


<?php
echo "<br>"."QUESTION 2 :"."<br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Search Engine</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <?php if (isset($_GET['form_submitted'])): ?>
        <h2>Search Results For <?php echo $_GET['search_term']; ?> </h2>
        <?php if ($_GET['search_term'] == "GET"): ?>
            <p>The GET method displays its values in the URL</p>
            <?php else: ?>
            	 <p>Sorry, no matches found for your search term</p>
            <?php endif; ?>
                <p>Go <a href="/search_engine.php">back</a> to the form</p>
                <?php else: ?>
                   <h2>Simple Search Engine - Type in GET </h2>
                   <form action="search_engine.php" method="GET">
                        Search Term:
                        <input type="text" name="search_term">
                        <br>
			<input type="hidden" name="form_submitted" value="1" />
                       <input type="submit" value="Submit">
                  </form>
               <?php endif; ?>
</body>
</html>


<?php
echo "<br>"."QUESTION 3 :"."<br>";
?>
<!DOCTYPE html>
<head>
	<title>Simple Calculator Program in PHP - Tutorials Class</title>
</head>
<?php
$num1 = $_POST['first_num'];
$num2 = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case "Add":
           $result = $num1 + $num2;
            break;
        case "Subtract":
           $result = $num1 - $num2;
            break;
        case "Multiply":
            $result = $num1 * $num2;
            break;
        case "Divide":
            $result = $num1 / $num2;
    }
}
?>
<body>
    <div id="page-wrap">
	  <form action="" method="post" id="quiz-form">
            <p>
            <b>First Number</b>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $num1; ?>" /> 
            </p>
            <p>
            <b>Second Number</b>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $num2; ?>" /> 
            </p>
            <p>
            <b>Result</b>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>">
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
</body>
</html>


<?php
echo "<br>"."QUESTION 4 :"."<br>";
?>
<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
session_start();
if (!isset($_SESSION['todo_list'])) {
    $_SESSION['todo_list'] = array();
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {       
        array_push($_SESSION['todo_list'],$name);
    }
    echo "<br />";
    PrintTodoList($_SESSION['todo_list']);
}
function PrintTodoList($receivedList){
    foreach($receivedList as $todoItem){
        echo $todoItem."<br />";
    }
}
//session_destroy();
?>
</body>
</html>