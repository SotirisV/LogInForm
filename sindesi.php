<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>

<style>

body{
  background-image: url(sindesibgimg.avif);
   background-repeat: no-repeat;
   background-position: center;
   background-size: cover;
   height: 100vh;
   padding: 20px;
}

div{
  width: 400px;
  height: 400px;
  background-color: #fff;
  justify-content: center;
  display: flex;
  align-items: center;
  position: relative;
  top: 20%;
  left: 20%;
  border-radius: 10px;
}

.input {
  background-color: #e6e6e6;
  width: 290px;
  height: 40px;
  padding: 5px;
  gap: 10px;
  /* text-align: center; */
  border: 2px solid white;
  border-radius: 5px;
  /* box-shadow: 3px 3px 2px rgb(249, 255, 85); */
}

.input:focus {
  color:  #0099e6;
  background-color: #ccccff;
  outline-color: #bf80ff;
  box-shadow: -3px -3px 15px #bf80ff;
  transition: .1s;
  transition-property: box-shadow;
}

label{
  font-size: 20px;
  font-weight: bold;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
}

.submit {
 font-size: 17px;
 padding: 0.5em 2em;
 border: transparent;
 box-shadow: 2px 2px 4px rgba(0,0,0,0.4);
 background: dodgerblue;
color: #fff;
 cursor: pointer;
 border-radius: 4px;
 font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
 font-weight: bold;
}

.submit:hover {
 background: rgb(2,0,36);
 background: linear-gradient(90deg, rgba(30,144,255,1) 0%, rgba(0,212,255,1) 100%);
}

.submit:active {
 transform: translate(0em, 0.2em);
}
</style>

</head>
<body>

<button class="cursor-pointer duration-200 hover:scale-125 active:scale-100" title="Go Back">
 <a href="http://localhost/test/index.php"><svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" class="stroke-blue-300">
    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M11 6L5 12M5 12L11 18M5 12H19"></path>
  </svg>
 </a>
</button>

<div>
<form action="login_details.php" method="post">


  <label for="email" id="wrong">Email</label><br>
  <input type="text" class="input"  name="email" placeholder="Email" id="lathos"><br><br>

  <label for="password">Password</label><br>
  <input type="password" class="input" name="password" placeholder="Κωδικός"><br><br><br><br>
  <button class="submit" type="submit" name="submit" value="Εγγραφή" style="color: #E213CD;">Log In</button>

</form>
</div>



</body>
</html>

