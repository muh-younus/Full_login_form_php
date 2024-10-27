<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    
<div class="cont1">

<h3>facebook</h3>


<main>
  <div class="head">
<h2>Create a new account</h2>
<p>it's quick and easy</p>
</div>
<hr>

<form action="">


<input type="text" placeholder="First Name">
<input type="text" placeholder="Last Name">
<p class="p1">Date of birth</p>
<select class="choice1" name="day">
    <option value="1" selected>1</option>
    <option value="2" selected>2</option>
    <option value="3" selected>3</option>
    <option value="4" selected>4</option>
    <option value="5" selected>5</option>
    <!-- Other options for days -->
  </select>

  <select  class="choice"  name="month">
    <option value="Oct" selected>Jan</option>
    <option value="Oct" selected>Feb</option>
    <option value="Oct" selected>March</option>
    <option value="Oct" selected>April</option>
    <option value="Oct" selected>May</option>
    <!-- Other options for months -->
  </select>

  <select  class="choice"  name="year">
    <option value="2024" selected>2024</option>
    <option value="2025" selected>2025</option>
    <option value="2026" selected>2026</option>
    <option value="2027" selected>2027</option>
    <option value="2028" selected>2028</option>
    <!-- Other options for years -->
  </select>

  <p>Gender</p>
  <label class="radio-button">
    <input type="radio" name="gender" value="female">
    Female
  </label>
  <label class="radio-button">
    <input type="radio" name="gender" value="female">
    Male
  </label>
  <label class="radio-button">
    <input type="radio" name="gender" value="female">
    Custom
  </label>

  <input type="text " placeholder="Mobile number or email address">
  <input type="text " placeholder="New password">
  <p>People who use our service may have uploaded your contact information to Facebook <a href="#">Learn more</a></p>
  <p>By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may receive SMS notifications from us and can opt out at any time</p>

  <button>Sign Up</button>
  <p>Already have an account</p>

</form>


</main>
</div>

</body>
</html>