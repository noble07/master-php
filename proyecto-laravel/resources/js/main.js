window.addEventListener('load', function(){

  $('.btn-like').css('cursor', 'pointer');
  $('.btn-dislike').css('cursor', 'pointer');

  //Botón de like
  function like(){
    $('.btn-like').unbind('click').click(function(){
      console.log('like');
      $(this).addClass('btn-dislike').removeClass('btn-like');
      $(this).attr('src', 'img/red-heart.png');
      dislike();
    });
  }

  like();

  //Botón de dislike
  function dislike(){
    $('.btn-dislike').unbind('click').click(function(){
      console.log('dislike');
      $(this).addClass('btn-like').removeClass('btn-dislike');
      $(this).attr('src', 'img/black-heart.png');
      like();
    });
  }

  dislike();



});