<?php 
    $number = $_POST['number'];
    $message = $_POST['text'];
    $code = 254;
    $final_int = $code.substr($number , 1);
    // echo $final_int;
    if(isset($_POST['submit'])){
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
</body>
</html>