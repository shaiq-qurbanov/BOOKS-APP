//dadabase
$(document).ready(function() {
  let action;
  let updated;
  let user_id;
  $("#test").click(function() {
    $action = 'create';
    let name = $("#name").val();
    let lname = $("#lname").val();
    let email = $("#email").val();
    // console.log($("#email").val());

     $.ajax ({
       type:"POST",
       url: location.href + "api/book/create",
       data: {
         name:name,
         lname:lname,
         email:email,
       },
       contenType: "aplication/json",
       succsess: function(data) {
        //  console.log(data);
       }
     })
  })
  //delete
$(".table").on('click','.del',function() {
  let data=$(this).data("id");
  // console.log(data);

$.ajax({
type:'POST',
url: location.href + "api/book/delete",
data: {id:data},
contenType: "aplication/json",
success: function(data) {
  // console.log(data);
} 

})

})
//update

$(".table").on('click','.update',function() {
  action = 'update';
   user_id = $(this).data("id");
$("#name").val($(this).parent().parent().children().eq(1).text());
$("#lname").val($(this).parent().parent().children().eq(2).text());
$("#email").val($(this).parent().parent().children().eq(3).text());


 

})
$("#updated").on('click',function(){
  let name=$("#name").val();
  let lname=$("#lname").val();
  let email=$("#email").val();
  let id=user_id;
 
 updated = {
   name:name,
   lname:lname,
   email:email,
   id:user_id,
   };
  console.log(666);
    $.ajax ({
      type:'POST',
      url: location.href + "api/book/update",
      data: updated,
      contenType: "aplcation/json",
      success: function(data) {
        $('.table').load(location.href +'  .table > *');
        console.log(888)
      }
      })
      
  
  
  })
  

});
    


