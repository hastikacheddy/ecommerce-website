<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    
</head>
<body>
   <script src="signup.js"></script>
    <div class="wrapper">
        <div class="title">
           <img src="loginicon.png" width="100" alt="login icon">
        </div>
        <form action="register.php" method="post">
            <div class="field">
                <input type="text" required name="firstname"> 
                <label>First name</label>
             </div>
             <div class="field">
                <input type="text" required name="lastname">
                <label>Last name</label>
             </div>
           <div class="field">
              <input type="text" required name="email">
              <label>Email Address</label>
           </div>
           <div class="field">
              <input type="password" required name="password">
              <label>Password</label>
              <i class="bi bi-eye-slash" id="togglePassword"></i>
              
           </div>
           <div class="field">
            <input type="password" required>
            <label>Confirm password</label>
            <i class="bi bi-eye-slash" id="togglePassword"></i>
         </div>
        
           <div class="content">
           </div>
           <div class="field">
              <input type="submit" value="Sign up">
           </div>
           <div class="signup-link">
              Already a member? <a href="login.html">Login</a now</a>
           </div> 
           
</body>
</html>