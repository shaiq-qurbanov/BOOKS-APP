//dadabase
$(document).ready(function() {
  $("#test").click(function() {
    let name = $("#name").val();
    let lname = $("#lname").val();
    let email = $("#email").val();
    console.log($("#email").val());

     $.ajax ({
       type:"POST",
       url: location.href + "api/create/book",
       data: {
         name:name,
         lname:lname,
         email:email,
       },
       contenType: "aplication/json",
       succsess: function(data) {
         console.log(data);
       }
     })
  })
  //delete
$(".table").on('click','.del',function() {
  let data=$(this).data("id");
  console.log(data);

$.ajax({
type:'POST',
url: location.href + "api/delete/book",
data: {id:data},
contenType: "aplication/json",
success: function(data) {
  console.log(data);
} 

})

})


});
    


