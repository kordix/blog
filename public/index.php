<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        #wyloguj{
            display:block;
        }

        #app {
            text-align:justify;
        }
    </style>
</head>
<body>

<div id="app">
<?php  include 'navbar.php' ?>
    
    <div  class="container" id="app" style="padding:1% 5%">
    
    <article>    
    <div style="display:flex;justify-content:space-between">   
        <div class="articleheader">
        <a href="articles/covid.php"><h1>Przemyślenia o covid </h1></a>
            <p class="data">30-08-2022</p>
            <hr>
            W internecie czy gdziekolwiek w miediach cieżko znaleźć racjonalny głoś odnośnie pandemii covid. Mamy do czynienia albo z "oficjalną narracją" , która najczęściej wiąże się z gównopaniką, albo z teoriami spiskowymi lub zupełnym "olewactwem" niemałego też zagrożenia...
            <p><a href="articles/covid.php" class="readmore">Czytaj więcej</a></p>
         </div>
        <a href="articles/covid.php"> <img src="/images/covid.jpg" class="articleimage" alt=""> </a>
    </div>
    </article>


    <article>    
    <div style="display:flex;justify-content:space-between">   
        <div class="articleheader">
        <a href="articles/ukraina.php"><h1>Przemyślenia o Ukrainie </h1></a>
            <p class="data">30-06-2022</p>
            <hr>
            Putin może być człowiekiem złym , bardzo złym, szalonym albo niesamowicie głupim - tak czy inaczej takie rzeczy trzeba
            kalkulować. Jeśli Ukraina będzie się pchać do UE i NATO - będzie wojna - i Putin wielokrotnie to oznajmiał...
            <p><a href="articles/ukraina.php" class="readmore">Czytaj więcej</a></p>
         </div>
         <a href="articles/ukraina.php"> <img src="/images/ukraina.jpg" class="articleimage" alt=""></a>
    </div>
    </article>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



    <?php //include 'articles/covid.html' ?>

    <?php //include 'articles/ukraina.html'?>



</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    

<script src="script.js"></script>

</body>
</html>