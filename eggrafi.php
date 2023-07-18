<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

body{
  background-image: url(bgimglogin.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}

div{
  display: flex;
  justify-items: center;
  justify-content: center;

}

.inputGroup {
  font-family: 'Segoe UI', sans-serif;
  margin: 1em 0 1em 0;
  position: relative;
  gap: 20px;
  width: 420px;
}

.inputGroup input {
  font-size: 100%;
  padding: 0.8em;
  outline: none;
  border: 2px solid rgb(200, 200, 200);
  background-color:  #e6e6e6;
  border-radius: 20px;
  width: 100%;
  border-color: blue;
}

.inputGroup label {
  font-size: 100%;
  position: absolute;
  left: 0;
  padding: 0.8em;
  margin-left: 0.5em;
  pointer-events: none;
  color: rgb(100, 100, 100);
}


.inputGroup2 {
  font-family: 'Segoe UI', sans-serif;
  margin: 1em 0 1em 0;
  position: relative;
  width: 400px;
  justify-content: center;
}

.inputGroup2 input {
  font-size: 100%;
  padding: 0.8em;
  outline: none;
  border: 2px solid rgb(200, 200, 200);
  background-color:  #e6e6e6;
  border-radius: 20px;
  width: 100%;
  border-color: blue;
}

.inputGroup2 label {
  font-size: 100%;
  position: absolute;
  left: 0;
  padding: 0.8em;
  margin-left: 0.5em;
  pointer-events: none;
  color: rgb(100, 100, 100);
}


.inputGroup3 {
  font-family: 'Segoe UI', sans-serif;
  margin: 1em 0 1em 0;
  position: relative;
  width: 400px;
  justify-content: center;
}

.inputGroup3 input {
  font-size: 100%;
  padding: 0.8em;
  outline: none;
  border: 2px solid rgb(200, 200, 200);
  background-color:  #e6e6e6;
  border-radius: 20px;
  width: 100%;
  border-color: blue;
}

.inputGroup3 label {
  font-size: 100%;
  position: absolute;
  left: 0;
  padding: 0.8em;
  margin-left: 0.5em;
  pointer-events: none;
  color: rgb(100, 100, 100);
}

.inputGroup4 {
  font-family: 'Segoe UI', sans-serif;
  margin: 1em 0 1em 0;
  position: relative;
  width: 400px;
  justify-content: center;
}

.inputGroup4 input {
  font-size: 100%;
  padding: 0.8em;
  outline: none;
  border: 2px solid rgb(200, 200, 200);
  background-color:  #e6e6e6;
  border-radius: 20px;
  width: 100%;
  border-color: blue;
}

.inputGroup4 label {
  font-size: 100%;
  position: absolute;
  left: 0;
  padding: 0.8em;
  margin-left: 0.5em;
  pointer-events: none;
  color: rgb(100, 100, 100);
}

h2{
  justify-content: center;
  align-items: center;
  text-align: center;
  font-size: 40px;
  font-weight: bold;
  font-family:Arial, Helvetica, sans-serif ;
  color: #7b52b9;
}

.cssbuttons-io-button {
  background: #A370F0;
  color: white;
  font-family: inherit;
  padding: 0.35em;
  padding-left: 1.2em;
  font-size: 17px;
  font-weight: 500;
  border-radius: 0.9em;
  border: none;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  box-shadow: inset 0 0 1.6em -0.6em #714da6;
  overflow: hidden;
  position: relative;
  height: 2.8em;
  padding-right: 3.3em;
}

.cssbuttons-io-button .icon {
  background: white;
  margin-left: 1em;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 2.2em;
  width: 2.2em;
  border-radius: 0.7em;
  box-shadow: 0.1em 0.1em 0.6em 0.2em #7b52b9;
  right: 0.3em;
  transition: all 0.3s;
}

.cssbuttons-io-button:hover .icon {
  width: calc(100% - 0.6em);
}

.cssbuttons-io-button .icon svg {
  width: 1.1em;
  transition: transform 0.3s;
  color: #7b52b9;
}

.cssbuttons-io-button:hover .icon svg {
  transform: translateX(0.1em);
}

.cssbuttons-io-button:active .icon {
  transform: scale(0.95);
}

button {
  padding: 12.5px 30px;
  border: 0;
  border-radius: 100px;
  background-color: #2ba8fb;
  color: #ffffff;
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  cursor: pointer;
}

button:hover {
  background-color: #6fc5ff;
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);
}

button:active {
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}


.buttons {
  font-family: 'Segoe UI', sans-serif;
  margin: 1em 0 1em 0;
  position: relative;
  gap: 20px;
  width: 420px;
}

a{
  color: #fff;
  font-weight: bold;
  text-decoration: none;
  font-size: 20px;
}
</style>


</head>
<body>
    
<h2>Registration Form</h2>


<div>
<form action="signup_details.php" method="post">
<div class="inputGroup">
  <label for="fname" style="color: #fff;"></label>
  <input type="text"  name="fname" placeholder="Name">
  <label for="email" id="wrong"></label>
  <input type="text"  name="email" placeholder="Email" id="lathos"><br><br>
</div>
<div class="inputGroup2">
  <label for="username"></label><br><br>
  <input type="text" name="username" placeholder="Όνομα χρήστη"><br><br>
  </div>
  <div class="inputGroup3">
  <label for="password"></label><br>
  <input type="password" name="password" placeholder="Κωδικός"><br><br>
  </div>
  <div class="inputGroup4">
  <label for="repeat_password"></label><br>
  <input type="password" name="repeat_password" placeholder="Επιβεβαιωση κωδικού"><br><br>
  </div>

  <div class="buttons">
    <button class="cssbuttons-io-button" type="submit" name="submit"> Get started
  <div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path></svg>
  </div>

</button>
<button><a href="http://localhost/test/index.php">LogOut</a></button>
  </div>

</form> 
</div>

<?php

if(isset($_GET["error"])){
  if($_GET["error"]=="empty"){
    echo "<p> Fill in all fields</p>";
  }
  else if($_GET["error"]=="invalidemail"){
    echo "<p>Invalid Email </p>";
    echo "<style> #lathos {border: 2px solid red;}</style>";
    echo '<script>document.getElementById("wrong").innerHTML="Invalid Email"</script>';
  }
  


else if($_GET["error"]=="invaliduserid"){
  echo "<p> Invalid UserId </p>";
}
  
  else if($_GET["error"]=="none"){
    header("location: eggrafi.php");
  }
  
  else if($_GET["error"]=="passwordsdontmatch"){
    echo "<p> Passwords Dont Match </p>";
  }
}


?>



</body>
</html>