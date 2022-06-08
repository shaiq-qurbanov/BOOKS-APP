$(document).ready(function(){
    let action;
    let up;
    $("#cre").click(function(){
        action = 'create';
        console.log(666);
        let tel = $("#tel").val();
        let login = $("#login").val();
        let specialty = $("#specialty").val();
        let id = $("#student_id").val();
        console.log(login)
    const data = {"tel":tel,"login":login,"specialty":specialty, "id":id};
 
     console.log(data);
    $.ajax ({
        method:'POST',
        url: location.origin + '/api/student/' + id +'/create',
        data: JSON.stringify(data),
        contentType: "application/json; charset=utf-8",
        success: function(d){
            $('#info').load(location.href +'  #info > *');
            console.log(d)
            console.log(9999);
        },
        error:function(e){
            console.log(e)
        }         


    })

})
$("#up").click(function(){
    action = 'update';
    $("#tel").val($(this).parent().parent().children().eq(2).text());
    $("#login").val($(this).parent().parent().children().eq(3).text());
    $("#specialty").val($(this).parent().parent().children().eq(4).text());
    console.log($("#tel").val())

    $("#uptel").click(function(){
    let tel=$("#tel").val();
    let login=$("#login").val();
    let  specialty=$("#specialty").val();
    let id=$("#student_id").val();
    console.log(tel);

    data = {tel:tel, login:login, specialty:specialty,id:id};

    console.log(data);

    $.ajax ({
        method: 'POST',
        url: location.origin + '/api/student/' + id + '/update',
        data: JSON.stringify(data),
        contentType: "application/json; charset=utf-8",
        success: function(d){
            console.log(d)
            console.log(9999);
        } 
        
    })

}) 

})


})