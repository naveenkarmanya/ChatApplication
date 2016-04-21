$(document).ready(function(){
    $("#text").keydown(function(e){
        
         if(e.which == '13') {
    
    var data=$("#text").val();
   $.post('chat.php',{message:'insert',data:data});
   $("#text").val("");
    } 
    });
    function display()
    {
    $.post('chat.php',{message:'fetch'},function(data){
        $(".message").html(data);
        

    
});
    }
setInterval(function(){ display(); }, 3000);

});