<?php 

    // echo $final_int;
    if(isset($_POST['submit'])){

        $number = $_POST['number'];
        $message = $_POST['text'];
        $code = 254;
        $final_int = $code.substr($number , 1);
        header("Location: https://api.whatsapp.com/send?phone='.$final_int.'&text=$message&source=&data=&app_absent=");

    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send a whatsapp message</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="number">Number to send to</label> <br> <br>
            <input type="number" name="number" id="number" placeholder="[start with 07...]"> <br> <br>
            <label for="number">Message</label> <br> <br>
            <textarea name="text" id="text" cols="70" rows="10" placeholder="[Write your text here......] (This area is resizable)"></textarea> <br> <br>
           <input type="submit" value="submit" name="submit">
    </form>
    <style>

body{
    box-sizing: border-box;
    padding: 100px 0;
    margin: 0;
    align-items: center;
    justify-content: center;
    text-align: center;
    align-content: center;
    border: none;
    background-color: #ccc;
    overflow: hidden;
}
*{
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}
label{
    color: black;
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
input,textarea{
    border: 1px solid transparent;
    background: rgb(0,0,0,0.1);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    border-radius: 5px;
    opacity: 1;
    height: 40px;
    width: 400px;
    color: black;
    padding: 10px;
}
textarea{
    height: 200px;
    text-align: center;
    align-items: center;
    align-content: center;
}
::placeholder{
    color: black;
    opacity: 1;
}

    </style>
</body>
</html>