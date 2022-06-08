$(document).ready(function(){
  let action;
let updated;
let user_id;
$("#test").click(function() {
  action = 'create';
  let name = $("#name").val();
  let lname = $("#lname").val();
  let email = $("#email").val();
  console.log($("#email").val());
  console.log(name);
  data = {
    name:name,
    lname:lname,
    email:email,
  };
  console.log(data);

   $.ajax({
     method: 'POST',
     url: location.href + 'api/book/create',
     data: data,
     dataType: 'application/json',
     succsess: function(data) {
     console.log(data);
     }
   });
   console.log(9999);
});


$(".table").on('click','.del',function() {
let data=$(this).data("id");
console.log(data);

$.ajax({
type:'POST',
url: location.href + "api/book/delete",
data: {id:data},
dataType: "aplication/json",
success: function(data) {
console.log(data);
} 

})

})  

//update

$(".table").on('click','#update',function() {
  action="update";
  user_id=$(this).data("id");
  $("#name").val($(this).parent().parent().children().eq(1).text());
$("#lname").val($(this).parent().parent().children().eq(2).text());
$("#email").val($(this).parent().parent().children().eq(3).text());
console.log(user_id);

$("#updated").on('click',function(){
// let user_id=$(this).data("id");
let name=$("#name").val();
let lname=$("#lname").val();
let email=$("#email").val();
let id = user_id;
updated={
name:name,
lname:lname,
 email:email,
 id:user_id,
 };
console.log(updated);

  $.ajax ({
    type:'POST',
    url: "api/book/update",
    data: updated,
    dataType:'json',
    success: function(data) {
      $('#table').load(location.href +'  #table > *');
      console.log(data)
    }
    })



})
})

}) 