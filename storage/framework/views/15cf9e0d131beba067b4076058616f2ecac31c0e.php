<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="_token" content="<?php echo e(csrf_token()); ?>" />
        <title>Grocery Store</title>
        
    </head>
    <body>
      <div class="container">
         <div class="alert alert-success" style="display:none"></div>
         <form id="myForm">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="type">active:</label>
              <input type="number" value="1" name="active" class="form-control" id="active">
            </div>
            
            <div class="form-group">
                <label for="type">descrption:</label>
                <input type="text" name="descrption"  class="form-control" id="desc">
            </div>
            <div class="form-group">
                <label for="type">sale</label>
                <input type="number" name="sale"  class="form-control" id="sale">
              </div>
              <div class="form-group">
                <label for="type">categori</label>
                <input type="text" value="phone"name="category"  class="form-control" id="categori">
              </div>
            
            <div class="form-group">
               <label for="price">Price:</label>
               <input type="text" name="price"  class="form-control" id="price">
             </div>
            <button class="btn btn-primary" id="ajaxSubmit">Submit</button>
          </form>
      </div>
      <script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous"></script>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

      <script>

            $(document).on('click','#ajaxSubmit'.function(e){

               e.preventDefault();
                var url= <?php echo e('route("ajax.offers.store")'); ?>;
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }

               jQuery.ajax({
                  url:url,
                  method: 'post',
                  data: {
                    // name:"midoooo",
                    //  active:1,
                    //  price:456,
                    //  sale:999,
                    //  Product_description:"nnnnnnn",
                    //  category_id:5,
                    //  admin_id:1,


// =========================================================
                     name: jQuery('#name').val(),
                     active: jQuery('#active').val(),
                     price: jQuery('#price').val(),
                     sale:jQuery('#sale').val(),
                     Product_description:jQuery('#desc').val(),
                     category_id:5,
                     admin_id:1,


                  },
                  success: function(result){
                     jQuery('.alert').show();
                     jQuery('.alert').html(result.success);
                  }});
               });
            });
      </script>
    </body>
</html>
<?php /**PATH /opt/lampp/htdocs/resturant/resources/views/create.blade.php ENDPATH**/ ?>