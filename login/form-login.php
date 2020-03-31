<!DOCTYPE html>
<html>
<head>
<style>
    html, body, div, tr, td, input, label, form {
        padding = 0;
        margin = 0;
    }
    body {
        background-image : url("login.jpg");
        background-size : cover;
        }
    #class {
        background-color: rgba(122, 156, 255, 0.42);
        height: 340px;
        border: 2px solid #6A82FB;        
    }
    .header {
        width: 335px;
        height: 230px;
        padding: 180px 0px 90px 480px;
    }
    h1 {
        text-align : center;
    }
    .login {
    font-family: 'Open Sans Condensed', sans-serif;
    height: 40px;
    width: 260px;
    text-align: center;
    color: black;
    font-size: 17px;
    border-radius: 8px;
    background-color: rgba(255, 225, 225, 0.4);
    border: 3px solid #0288D1;
    position: absolute;
    left: 39%;
    top: 47%;
    }

    .login1 {
    font-family: 'Open Sans Condensed', sans-serif;
    height: 40px;
    width: 260px;
    text-align: center;
    color: black;
    font-size: 17px;
    border-radius: 8px;
    background-color: rgba(255, 225, 225, 0.4);
    border: 3px solid #0288D1;
    position: absolute;
    left: 39%;
    top: 57%;
    }

    .button {
    width: 260px;
    height: 40px;
    text-align: center;
    background-color: #0288D1;
    color: white;
    font-size: 20px;
    border: 2px solid #0288D1;
    position: absolute;
    left: 39%;
    top: 67%;
    font-family: 'Open Sans Condensed', sans-serif;
    border-radius: 20px;
    }

    .button:hover {
    width: 260px;
    height: 40px;
    text-align: center;
    background-color: #3f2b96;
    color: white;
    font-size: 20px;
    border: 2px solid #3f2b96;
    position: absolute;
    left: 39%;
    top: 67%;
    font-family: 'Open Sans Condensed', sans-serif;
    border-radius: 20px;
    transition: 0.5s;
    }

    #gambar {
        position : absolute;
        left : 45%;
        top: 30%;
        padding-bottom : 30px;
    }
</style>

</head>


<body>
 
    <div class="header">
    <div id="class">
    <form action="login.php" method="post">
    <img id="gambar" src="user.png" alt="" width="100px" height="100px"> <br> <br>

    <tr>
    <td> <input type="text" name="username" class="login" placeholder="Username"></td>
    </tr> <br>

    <tr>
    <td> <input type="password" name="password" class="login1" placeholder="Password"></td>
    </tr> <br>

    <tr> <input type="submit" value="Login" class="button"></tr>
    </form>
    
    </div>
    </div>

</body>

</html>