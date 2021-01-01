<?php
    function GenerateWhatsappLink($number){
        if(!empty($number)){
            //
        }else{
            echo "<h1>Please Enter Mobile Number</h1> <br>";
        }
        if(strlen($number) > 10 ){
            echo '<h1>Please write a number below 10 characters </h1> <br>';
        }
    }
    if(isset($_POST['submit'])){
        $number = htmlspecialchars($_POST['number']);
        $url = 'wa.me/254';
        $trim = substr($number,1);
        $final = $url.$trim;
        if(GenerateWhatsappLink($number) !==false){
            echo '
            <div class="whatsapp">
            <h4>Your link was generated, Click to test</h4>
            <a href="https://api.whatsapp.com/send?phone=254'.$trim.'&text=&source=&data=&app_absent=">'.$final.'</a>
            </div> <br> <br>
            ';
        }else{
            echo '<h1>Link not generated</h1>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate link</title>
</head>
<body>
    <center>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" placeholder="Start with 07" name="number"> <br> <br>
         <input type="submit" value="Generate Link" name="submit">

    </form> 
    </center>
    
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
    background-color: #cccc;
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
.whatsapp{
    background-color: lightgreen;
    padding: 10px 20px;
    width: 50%;
    margin-left: 22%;
}
a{
    color: black;
    text-decoration: none;
    font-size: 20px;
}
    </style>
</body>
</html>