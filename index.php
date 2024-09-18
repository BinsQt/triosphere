<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend\style\style.css">
    <title>Triosphere</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="frontend/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">



</head>
<body class="sm:container alice-regular sm:max-w-xl w-full font-primary text-white mx-auto sm:rounded-3xl sm:my-10">
  <!-- <img class="absolute h-screen opacity-20 z-10" src="./frontend/img/smoke.png" alt=""> -->
    <?php 
     include('frontend/main.php')
    ?>

<script>
    tailwind.config = {
      theme: {
        extend: {
            fontFamily: {
                // sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                primary: ['"Alice"'],

            },
            backgroundImage: {
                'smoke': "url('frontend/img/smoke.png')",

               }
        }
      }
    }
  </script>
  
</body>
</html>