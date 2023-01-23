<?php
session_start();
session_name();
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <title>Home</title>
    <link rel="stylesheet" href="/system/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/system/css/style_index.css">
    <style>
        body {
            background-image: url("index_back.png");
    background-size: 100% 100%;
    background-position: center center;
    height: 100vh;
    width: 100vw;
        }
    </style>
</head>

 <body>
    
 <section class="index-intro"> 
        <div class="navbar">
            <a href="http://www.ispgaya.pt"><img src="Logo_ispgaya.png" alt="Logo_ispgaya" class="logo"></a>
                <ul>
                    <li><a href="login.php">Log in</a></li>
                </ul>
        </div>

        <div class="texto">
            <h1>Preparado para te divertires e conhecer pessoas novas?</h1>
            <h2>Partipa já nos nossos eventos!</h2>
        </div>




        <div class="suporte">
            <div class="conteiner-fluid border" style="text-align:center">
            <a href="mailto:contactus.gfandrafaelentinclc@gmail.com" data-type="mailto" data-id="mailto:contactus.gfandrafaelentinclc@gmail.com" target="_blank" rel="noreferrer noopener">Contact us</a>
            </div>
        </div>
 </section>    
</body>
</html>