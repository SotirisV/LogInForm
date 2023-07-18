<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogInSystem</title>

   
<style>
body {
   background-image: url(logo.webp);
   background-repeat: no-repeat;
   background-position: center;
   background-size: cover;
   padding: 2%;
   height: 100vh;
}


.signup{
   padding: 10px;
   width: 200px;
   color: azure;
   background-color: rgb(20, 130, 170);
   cursor: pointer;
   border-radius: 10px;
   border: 1px solid #fff;
   justify-content: center;
   display: flex;
}

.signup:hover{
    background-color: #b800e6;
}



.login {
 appearance: none;
 background-color: transparent;
 border: 0.125em solid rgba(245, 251, 251, 0);
 border-radius: 0.9375em;
 box-sizing: border-box;
 color: rgb(15, 122, 160);
 cursor: pointer;
 display: inline-block;
 font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
 font-size: 30px;
 font-weight: bold;
 line-height: normal;
 margin: 0;
 min-height: 3em;
 width: 300px;
 min-width: 0;
 outline: none;
 padding: 10px;
 text-align: center;
 text-decoration: none;
 transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
 will-change: transform;
}

.login:disabled {
 pointer-events: none;
}

.login:hover {
 color: #fff;
 background-color: rgb(188, 54, 208);
 box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
 transform: translateY(-2px);
}

.login:active {
 box-shadow: none;
 transform: translateY(0);
}

#login{
  color: coral;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: bold;
    text-decoration: none;
    font-size: 30px;

}

 #signup{
    color: #fff;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: bold;
    text-decoration: none;
    font-size: 30px;
}

.signup {
 appearance: none;
 background-color: transparent;
 border: 0.125em solid rgba(245, 251, 251, 0);
 border-radius: 0.9375em;
 box-sizing: border-box;
 color: rgb(215, 93, 32);
 cursor: pointer;
 display: inline-block;
 font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
 font-size: 30px;
 font-weight: bold;
 line-height: normal;
 margin: 0;
 min-height: 3em;
 width: 300px;
 min-width: 0;
 outline: none;
 padding: 10px;
 text-align: center;
 text-decoration: none;
 transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
 will-change: transform;
}

.signup:disabled {
 pointer-events: none;
}

.signup:hover {
 color: #fff;
 background-color: rgb(180, 107, 34);
 box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
 transform: translateY(-2px);
}

.signup:active {
 box-shadow: none;
 transform: translateY(0);
}


.buttons{
    display: flex;
    justify-content:space-evenly ;
    gap: 20px;
    height: 100px;
}

h1{
    text-align: center;
    font-size: 40px;
    color: green;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: bold;
}

</style>
</head>
<body class="body">



<h1>Create your acount now!</h1>


<div class="buttons">
<a id="login" href="http://localhost/test/sindesi.php"> <button class="login"> <span class="text">Log In</span></button></a>
<a id="signup" href="http://localhost/test/eggrafi.php"><button class="signup"><color> Sign Up</color></button></a>
</div>

</body>
</html>