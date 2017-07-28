

  var current = 1;

  setInterval(function() {
     $('.arrow-right').click();
  }, 15000);


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
  instaToken: '3174735.93c9576.27412920582742dfb6d62cacc36e2325',
  instaID: '93c9576abc2245948b068fc08f8654e0',

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
     var t = setTimeout("showPopup();", 30000);
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




 var waypoint = new Waypoint({
  element: document.getElementById('blocks'),
  handler: function(direction) {
    console.log('Scrolled to waypoint!')
    $('.firstRow').css('display','flex')
  },
  offset: '70%'
})

 var waypoint2 = new Waypoint({
  element: document.getElementById('blocks'),
  handler: function(direction) {
    console.log('Scrolled to waypoint!')
    $('.secondRow').css('display','flex')
  },
  offset: '10%'
})

 var waypoint3 = new Waypoint({
  element: document.getElementById('blocks'),
  handler: function(direction) {
    console.log('Scrolled to waypoint!')
    $('.thirdRow').css('display','flex')
  },
  offset: '-50%'
})

console.log('end of js');
