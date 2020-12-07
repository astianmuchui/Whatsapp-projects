<?php 
    $url = "https://api.whatsapp.com/send?phone=254797061691&text=&source=&data=&app_absent=";
    $number = $_POST['number'];
    $link = 'wa.me/';
    $code = 254;
    $final_int = $code.substr($number ,1);
    $final = $link.$code.substr($number ,1);
    
    if(isset($_POST['submit'])){
        echo '<div>
            <h2>Your whatsapp link <br></h2>
            <a href= "https://api.whatsapp.com/send?phone='.$final_int.'&text=&source=&data=&app_absent=">'.$final.'</a>
            </div>';
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wa_styles.css">
    <title>Generate your whatsapp link</title>
</head>
<body>
<div class="container">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <label>Generate whatsapp link</label> <br> <br>
            <input type="number" name="number" placeholder="enter your phone number(start with 07.....)"> <br> <br>
            <input type="submit" value="Generate your whatsapp link" name="submit">
    </form>
</div>
</body>
</html>