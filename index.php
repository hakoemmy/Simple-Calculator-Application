<!doctype html>
<html>
<head lang="en">
<meta charset="utf-8"/>
<title>Online Calculator</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div class="container">
<form action="#" method="POST">
<fieldset class="field_set">
<legend>Simple Calculator</legend>
<p><input type="text" name="number1" placeholder="Enter Number1"/></p>
</p><input type="text" name="number2" placeholder="Enter Number2"/></p>
<select name="operator">
 <option>None</option>
 <option>Add</option>
 <option>Subtract</option>
 <option>Multiply</option>
 <option>Divide</option>
  </select></br>
<p><input type="submit" value="Compute" name="submit"></p>
<p class="get_answer"> Answer:
<?php 
if (isset($_POST['submit'])) {
  $num1 = $_POST['number1'];
  $num2 = $_POST['number2'];
  $action = $_POST['operator'];
  switch ($action) {
  	case 'None':
  	  echo '<pre>You have not set any Operator</pre>';
  		break;
  	case 'Add' :
        $result = $num1 + $num2;
        echo $result;
  	 break;
  	case 'Subtract' :
        $result = $num1 - $num2;
        echo $result;
  	 break;
  	 case 'Multiply' :
           $result = $num1 * $num2;
        echo $result;
  	 break;
  	 case 'Divide' :
         $result = $num1 / $num2;
        echo $result;
  	 break;
  	default:
  		echo 'You have not set Operator';
  		break;
  }
}
?>
</p>
</fieldset>
</form>
<?php $year = date('Y'); ?>
&copy <?php echo $year .' Allrights reserved, H.E >> The Software Developer';
?>
</div>
</body>
</html>