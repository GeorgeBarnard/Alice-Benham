

console.log($(window).width())

if ($(window).width() > 960) {

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

}
else {
  var waypoint4 = new Waypoint({
   element: document.getElementById('blocks'),
   handler: function(direction) {
     console.log('Scrolled to waypoint 4!')
     $('.firstRow').css('display','flex')
     $('.hideBlock').css('display','none')
   },
   offset: '60%'
 })
  var waypoint5 = new Waypoint({
   element: document.getElementById('blocks'),
   handler: function(direction) {
     console.log('Scrolled to waypoint 4!')
     $('.secondRowSmall').css('display','flex')
     $('.hideBlock').css('display','none')
   },
   offset: '30%'
 })
  var waypoint6 = new Waypoint({
   element: document.getElementById('blocks'),
   handler: function(direction) {
     console.log('Scrolled to waypoint 4!')
     $('.thirdRowSmall').css('display','flex')
     $('.hideBlock').css('display','none')
   },
   offset: '-10%'
 })
 console.log('less than 960');
 $('.hideBlock').css('display','none !important');
}

console.log('waypoints-done');
