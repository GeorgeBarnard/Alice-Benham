

  var current = 1;

  setInterval(function() {
     $('.arrow-right').click();
  }, 15000);

$('.menu-box-inner').click(function(){
  window.location = '/';
});

$('.arrow-right').click(function() {

    $('.description1').fadeOut(100);
    $('.title1').fadeOut(300).hide(function() {
        current++
        if (current == 5) {
            current = 1
        }
        // $('.img' + current).fadeIn(300);
        pageTriggers();
    })
});
$('.arrow-left').click(function() {
    $('.description1').fadeOut(100);
    $('.title1').fadeOut(300).hide(function() {
        current--
        if (current == 0) {
            current = 4
        }
        // $('.img' + current).fadeIn(300);
        pageTriggers()
    })

});
// })

function pageTriggers(){
  if(current === 1){
    $('.opaque').css('background-color', 'rgba(226, 190, 193, 0.7)')
    $('.title1').text("'Story'").show('slow');
    $('.description1').text('Tell the story of your business').fadeIn(900);
  }
  if(current === 2){
    $('.opaque').css('background-color', 'rgba(200, 200, 200, 0.61)')
    $('.title1').text("'Engage'").show('slow');
    $('.description1').text('Engage with your customers online').fadeIn(900);
  }
  if(current === 3){
    $('.opaque').css('background-color', 'rgb(214, 175, 195)')
    $('.title1').text("'Grow'").show('slow');
    $('.description1').text('Grow your mailing list and online following ').fadeIn(900);
  }
  if(current === 4){
    $('.opaque').css('background-color', 'rgba(242, 229, 210, 0.7)')
    $('.title1').text("'Learn'").show('slow');
    $('.description1').text('Learn to use Social Media strategically ').fadeIn(900);
  }
}



var Spectra = {
  instaToken: '3174735.edbbd53.573c6fca3f994b318f58c328058aea11',
  instaID: 'edbbd537f0eb4778a61d61bef1ee272d',

  init: function () {
    $.fn.spectragram.accessData = {
      accessToken: this.instaToken,
      clientID: this.instaID
    };

    $('.feed').spectragram('getUserFeed',{
      max: 8,
      query: 'alice_benham',
      wrapEachWith: '<div class="photo">'
    });

    // $('.feed').spectragram('getRecentTagged',{
    //   max: 5,
    //   query: 'matterapp',
    //   wrapEachWith: '<div class="photo tagged">'
    // });
  }
}

Spectra.init();

// Handler for .ready() called.
   $(".blog-text").text(function(index, currentText) {
     return currentText.substr(0, 175) + '...';
 });

 $(document).ready(function(){
     timeOut();
 });

 function timeOut() {
     var t = setTimeout("showPopup();", 3000000);
 }

 function showPopup() {
     $('#popup').show();
 }

 $('.close-button').click(function(){
   $('#popup').hide();
 });

 $('#sidebar-signup').click(function(){
    $('#popup').show();
 });
 $('.signup-button').click(function(){
    $('#popup').show();
 });

var menu = false;


$('.small-bars').click(function(){
  if(menu == false){
  $('.mobile-nav-bar').css('margin-top','0px');
  menu = true;
  }
  else if(menu == true){
    $('.mobile-nav-bar').css('margin-top','-600px');
    menu = false;
  }
})

console.log('anime')
var lineDrawing = anime({
  targets: '#lineDrawing .lines path',
  strokeDashoffset: [anime.setDashoffset, 0],
  easing: 'easeInQuad',
  duration: 2000,
  delay: function(el, i) { return i * 250 },
  direction: 'alternate',
  loop: false
});
setTimeout(function() {
   $('.st0').css('transition','ease-in 0.3s')
   $('.st0').css('fill','rgba(226, 190, 193, 0.7)')
}, 2300);


console.log('end of js');
