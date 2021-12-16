
<script>



      function ajax_query(route){
          // *route => accept the route() of the data will by sent
          // this function do delete & add data with-out form  in DB
        $(this).on('click',function(){
                // alert('welcome');
            $.ajaxSetup({

                     headers: { 'X-CSRF-TOKEN':'{{ csrf_token() }}',}
            });

            $.ajax({

                    method:'Get',

                    url:route,

                    datatype: 'JSON',

                    data:{},

                    cache: false,
                    success:function(data){
                        // alert('successs');
                        $('#succes-msg').show().delay(1000).hide('slow');
                        setInterval('location.reload()',1200);

                    },error:function(xhr,status,error) {
                        alert(xhr.responseText);
                    }
            });// end ajax()

        });}
// */

// ######################### opload form data photo #####################
function upload_data(form_id='',route){

    // this function upload all  form Data with photo wire

  $(this).on('click',function (e) {
            e.preventDefault();

            var formData = new FormData($(form_id)[0]);
            $.ajax({
                type: 'post',

                enctype: 'multipart/form-data',

                url:route,

                data: formData,

                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {



                    $('#succes-msg').show().delay(1000).hide('slow');

                    setInterval('location.reload()',1200);

                    // location.href= history.back();

                }, error: function (reject) {

                    var response = $.parseJSON(reject.responseText);

                    $.each(response.errors, function (key, val) {

                        $("#" + key + "_error").text(val[0]);

                    });
                }
            });
        });



      }
    //   =================== set cookie ===============
function active(form_id='',route){

// this function upload all  form Data with photo wire

$(this).on('click',function (e) {
        e.preventDefault();

        var formData = new FormData($(form_id)[0]);

        // ================
        var code = $("#verification").val();
            coderesult.confirm(code).then(function (result) {
                var num= $("#number").val();

                var user = result.user;
                $.ajaxSetup({
                         headers: { 'X-CSRF-TOKEN':'{{ csrf_token() }}',}
                    });

        // =====================
        $.ajax({
            type: 'post',

            enctype: 'multipart/form-data',

            url:route,

            data: formData,

            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {



                $('#succes-msg').show().delay(1000).hide('slow');

                setInterval('location.reload()',1200);

                // location.href= history.back();

            }, error: function (reject) {

                var response = $.parseJSON(reject.responseText);

                $.each(response.errors, function (key, val) {

                    $("#" + key + "_error").text(val[0]);

                });
            }
        });
    });
})};

</script>




