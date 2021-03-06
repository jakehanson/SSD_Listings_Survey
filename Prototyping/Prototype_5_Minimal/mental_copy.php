<!DOCTYPE html>
<html>
    
<head>

    <title>SSD Listings Survey</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css" />  <!-- Check with Doug --> 

    <!-- Add Bootstrap Style Sheet (for buttons) --> 
    <link rel="bootstrap stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="app.js" defer></script>


</head>

<body>

<div class="container">
  
  <div class="page-header">
    <h1 style="text-align:center">12.00: Mental Disorders</h1>


  <div class="container">
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="6.66" aria-valuemin="0" aria-valuemax="100" style="width:6.66%"></div>
    </div>
  </div>

</div>

<!-- Load Previous data into session using PHP -->
<?php

// Connect to server

$servername = "localhost";
$username = "SSD_DB";
$password = "disability12!";
$dbname = "Clients";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Store variables from previous form as session vars
session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['age'] = $_POST['age'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone'];

?>


<!-- Mental Disorders Primary Questionnaire -->

<form class="form-horizontal" action="followup.php" method="post" id="mental_disorders">

  <h3>Please answer the following questions to the best of your ability:</h3>


  <div class="checkbox" id="12.02">
      <label><input type="checkbox" name="check_list[]" value="12.02"> Have you experienced a significant decline in your mental abilities over the years? (12.02)</label>
      <br>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.03"> Have you been diagnosed with Schizophrenia, schizoaffective disorder or any other pyschotic disorder? (12.03)</label>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.04"> Do you suffer from depression or bipolar disorder? (12.04)</label>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.05"> Do you have a learning disability? (12.05)</label>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.06a"> Do you have anxiety? (12.06a)</label>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.06b">Do you have obsessive-compulsive disorder (OCD)? (12.06b)</label>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.06c"> Are you afraid of large crowds (agoraphobia)? (12.06c)</label>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.07"> Do you have altered motor or sensory function that is not explained by any other medical condition? (12.07)</label>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.09"> Have you been diagnosed with a personality disorder (12.09)</label>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.11">Do you have attention deficity hyperactivity disorder (ADHD)? (12.11)</label>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.13"> Do you have an eating disorder? (12.13)</label>
  </div>

  <div class="checkbox">
      <label><input type="checkbox" name="check_list[]" value="12.15"> Do you suffer from trauma or a stress related disorder? (12.15)</label>
  </div>
  <br>

  <button type="submit" class="pager_copy" formaction="index.html">Previous</button>
  <button type="submit" class="pager_copy">Next</button>


</form> 

</div>
</body>
</html>