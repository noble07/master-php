var url = 'http://localhost:8888/master-php/proyecto-laravel/public/'; //Aca va la URL local

window.addEventListener('load', function(){

  $('.btn-like').css('cursor', 'pointer');
  $('.btn-dislike').css('cursor', 'pointer');

  //Botón de like
  function like(){
    $('.btn-like').unbind('click').click(function(){
      console.log('like');
      $(this).addClass('btn-dislike').removeClass('btn-like');
      $(this).attr('src', url+'/img/red-heart.png');

      $.ajax({
        url: url+'/like/'+$(this).data('id'),
        type: 'GET',
        success: function(response){
          if(response.like){
            console.log('Has dado like a la publicación');
          }else{
            console.log('Error al dar like');
          }
        }
      })

      dislike();
    });
  }

  like();

  //Botón de dislike
  function dislike(){
    $('.btn-dislike').unbind('click').click(function(){
      console.log('dislike');
      $(this).addClass('btn-like').removeClass('btn-dislike');
      $(this).attr('src', url+'/img/black-heart.png');

      $.ajax({
        url: url+'/dislike/'+$(this).data('id'),
        type: 'GET',
        success: function(response){
          if(response.like){
            console.log('Has dado dislike a la publicación');
          }else{
            console.log('Error al dar dislike');
          }
        }
      })

      like();
    });
  }

  dislike();



});