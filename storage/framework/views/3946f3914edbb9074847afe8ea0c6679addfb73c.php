
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./public/assets/front/js/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./public/assets/front/js/slick/slick-theme.css"/>
    <link rel="stylesheet" href="./public/assets/front/css/media.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
    <style>
      body {
        overflow-x: hidden;
      }
    </style>
</head>
<body>



<?php echo $__env->make('front.includes.top-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('front.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div style="
position: fixed;
margin: 0;
padding: 0;
bottom: 50px;
right: 80px;
background-color:white;
width: 70px;
height: 70px;
border-radius:100px;
background: rgb(55, 219, 121);
box-shadow: rgb(0 0 0 / 16%) 0px 2px 5px 0px, rgb(0 0 0 / 12%) 0px 2px 10px 0px;
display: flex;
justify-content: center;
align-items: center;
">
  <i style="font-size:20px;" class="fab fa-whatsapp text-white"></i>
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./js/slick/slick.min.js"></script>
<script src="./public/assets/front/js/script.js"></script>

<?php echo $__env->make('ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH /opt/lampp/htdocs/resturant/resources/views/layouts/site.blade.php ENDPATH**/ ?>