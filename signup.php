<?php

// $firstname = $_POST["firstname"] ?? "";
// $lastname = $_POST["lastname"] ?? "";
// $email = $_POST["email"] ?? "";
// $password = $_POST["password"] ?? ""; 
// $age = $_POST["age"] ?? ""; 
// $role = "user";


// $error = "";

// if ($email != "" && $password != "") {  
//     $fp = fopen("./file.txt", "a");
//     $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
//     fwrite($fp, "\n{$role}, {$email},{$hashedPassword}, {$password}, {$firstname}, {$lastname}, {$age}");
//     fclose($fp);

//     header("Location: signin.php");
// }
// else {
//     $error = "Please enter you email and password!";
// }

$firstname = $_POST["firstname"] ?? "";
$lastname = $_POST["lastname"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? ""; 
$age = $_POST["age"] ?? ""; 
$role = "user";


$error = "";

if ($email != "" && $password != "") {  
    $fp = fopen("./file.txt", "a");
    
    fwrite($fp, "\n{$role}, {$email}, {$password}, {$firstname}, {$lastname}, {$age}");
    fclose($fp);

    header("Location: signin.php");
}
else {
    $error = "Please enter you email and password!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign up</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<form action="signup.php" class=" container w-50 mt-5" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="firstname"name="firstname" class="form-control" />
        <label  class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="lastname" name="lastname" class="form-control" />
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" name="email" class="form-control" />
    <label class="form-label" for="email">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="password" name="password" class="form-control" />
    <label class="form-label" for="form3Example4">Password</label>
  </div>
  <p><a href="signin.php">Sign in</a></p>
  <p >
  <?php echo $error;?>
  </p>
  
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

  </div>
</form>
</body>
</html>

