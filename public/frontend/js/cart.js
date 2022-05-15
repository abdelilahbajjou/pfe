// $(document).ready(function (){
//     $('.increment-btn').click(function (e){
//        e.preventDefault();
//     //    var inc_value=$('.quantity-input').val();
//     var inc_value=$(this).closest('.product_data').find('.quantity-input').val();
//        var value=parseInt(inc_value,10);
//        value=isNaN(value) ? 0: value;
//        if(value<10){
//            value++;
//         //    $('.quantity-input').val(value);
//            $(this).closest('.product_data').find('.quantity-input').val(value);
//        }
//     });

//     $('.decrement-btn').click(function (e){
//        e.preventDefault();
//     //    var dec_value=$('.quantity-input').val();
//        var dec_value=$(this).closest('.product_data').find('.quantity-input').val();
//        var value=parseInt(dec_value,10);
//        value=isNaN(value) ? 0: value;
//        if(value>=1){
//            value--;
//         //    $('.quantity-input').val(value);
//         $(this).closest('.product_data').find('.quantity-input').val(value);
//        }
//     });

//     $('.delete-cart-item').click(function (e){
//        e.preventDefault();
//          var product_id = $(this).closest('product_data').find('product_id').val();

//          $.ajaxSetup({
//              headers: {
//              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                       }
//                  });

//          $.ajax({
//              methode:"POST",
//              url:"delete-cart-item",
//              data:{
//                  'product_id':product_id,

//              },
//              success: function(response){
//                  window.location.reload();
//                  swal(response.status);
//              }
//          });
//     });
    
// }); 