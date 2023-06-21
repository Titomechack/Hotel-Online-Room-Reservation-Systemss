<!DOCTYPE html>
<html>
<head>
    <title>Hotel Online Room Reservation System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
       
    
</head>
<body>
    <header>
     
        <nav>
        
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="loginform.php">Login</a></li>
                <li><a href="signupform.php">Signup</a></li>
            </ul>
        </nav>
    </header>
     
 <br><br>
    <h2>LOGIN</h2>
    <form method="post" action="login.php">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" >
        </div>
        <br><br>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
        </div>
        <br><br>
        <div class="form-group">
            <label for="category">Category:</label>
            <select id="category" name="category">
                <option value="Admin">Admin</option>
                <option value="guest">Guest</option>
                
            </select>
            <br><br>
        </div>
        <input type="submit" value="LOGIN" class="btn-submit">
        <br><br>
    </form>
</body>
</html>
