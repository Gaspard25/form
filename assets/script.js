$(document).ready(function(){

  $('#form').submit(function(event) {

    event.preventDefault();
    var postdata = $('#form').serialize();

    $.ajax({

      type: 'POST',
      url: $('#form').attr('action') ,
      data: postdata ,
      dataType: 'json',

      success: function(data){
        console.log(data);
        if (!data.nom){
          console.log('nom')
          $('#nom').addClass("error");
        }else{
          $('#nom').removeClass("error");
        }

        if (!data.prenom){
          console.log('prenom')
          $('#prenom').addClass("error");
        }else{
          $('#prenom').removeClass("error");
        }

        if (!data.email){
          console.log('email')
          $('#email').addClass("error");
        }else{
          $('#email').removeClass("error");
        }

        if (!data.telephone){
          console.log('telephone')
          $('#telephone').addClass("error");
        }else{
          $('#telephone').removeClass("error");
        }

        if (!data.message){
          console.log('message')
          $('#message').addClass("error");
        }else{
          $('#message').removeClass("error");
        }

        if(data.nom && data.prenom && data.email && data.telephone && data.message){
          $('.bon').fadeIn("slow");
          $('.bon').fadeOut( 1600, "linear");
        }

     },

      error: function(e){
        console.log(e);
    }
  })
})
})