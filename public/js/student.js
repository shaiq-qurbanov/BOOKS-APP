$(document).ready(function(){
  let action;
  let updated;
  let user_id;

  $("#student").click(function(){
      action = 'create';
    let country = $("#country").val();
    let city = $("#city").val();
    let street = $("#street").val();

    console.log($("#street").val());
    let data = {
    country:country,
    city:city,
    street:street,
    };
  console.log(data);
  $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
   $.ajax({
    type:'POST',
    url: location.origin + "/api/student/create", 
    data:data,
    dataType: "aplication/json",
    success: function(data) {
       console.log(data);
     },
     error:function(err){
   console.log(err);
     }
    })
   })
   //update;
   $(".tableS").on('click','#updateUp',function() {
     action='update';
     user_id=$(this).data('id');
     $("#country").val($(this).parent().parent().children().eq(1).text());
     $("#city").val($(this).parent().parent().children().eq(2).text());
     $("#street").val($(this).parent().parent().children().eq(3).text());
     console.log(88888);
   })
 
   $("#updated_s").on('click',function(){
     let country = $("#country").val();
     let city = $("#city").val();
     let street = $("#street").val();
     let id = user_id;

     updated = {
       country:country,
       city:city,
       street:street,
       id:user_id
     };
      console.log(updated);
     $.ajax({
      type:'POST',
      url: "api/student/update",
      data: updated,
      contenttype: "aplication/json",
      success: function(data){
        $("#table_s").load(location.href + ' #table_s > *');
        console.log(9999);
      }
     })     
   })

   //delete
  
   $("#table_s").on('click','#delS',function(){
    console.log(999);
    let data = $(this).data('id');
    console.log(data);

    $.ajax({
      type:'POST',
      url: "api/student/delete",
      data: {id:data},
      dataType:"aplication/json",
      success: function(data){
        console.log(data)
      }
    })
   })
});