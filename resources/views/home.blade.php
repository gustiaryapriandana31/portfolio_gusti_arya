<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portofolio Web | M. Gusti Arya Priandana </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row welcome">
                <div class="clock">
                  <span id="hours">00</span> :
                  <span id="minutes">00</span> : 
                  <span id="seconds">00</span>
                </div>
                <h1 id="greeting">SELAMAT DATANG UNTUK KAMU</h1>
                <h5 class="text-center">Saya harap kamu penasaran dengan website ini</h5>
                <a href="/about">Click Here</a>
            </div>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        <script src="js/typeit.js"></script>
        <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
        <script>
          // Halaman Home
          const child = document.querySelector('.welcome a');
          child.addEventListener('mouseenter', function() {
            const h1 = document.getElementById('greeting');
            const h5 = document.querySelector('.welcome h5');
            const parent = document.querySelector('.welcome');
            parent.style.backgroundImage = "url('img/angkasa3.jpg')";
            parent.style.backgroundSize = "cover";
            parent.style.opacity = "1";
            h1.style.color = "black";
            h5.style.color = "black";
            h1.style.fontWeight = "bold";
            h5.style.fontWeight = "bold";
            h5.style.textShadow = "none"
          });
          
          child.addEventListener('mouseleave', function() {
            const h1 = document.getElementById('greeting');
            const h5 = document.querySelector('.welcome h5');
            const parent = document.querySelector('.welcome');
            parent.style.backgroundImage = "url('img/angkasa2.jpeg')";
            parent.style.backgroundSize = "contain";
            parent.style.opacity = "0.9";
            h1.style.color = "white";
            h1.style.fontWeight = "normal";
            h5.style.color = "white";
            h5.style.fontWeight = "normal";
            h5.style.textShadow = "4px 4px rgb(1, 54, 129)";
          });
        </script>
    </body>
    
</html>




