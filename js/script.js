const modalBg = $('.modalBg');


$(document).ready(function(){

   $("#btn").on('click',function(){
       modalBg.fadeIn();
       document.body.style.overflow = 'hidden';
   })

   $('.closeBtn').on('click', function(){
       modalBg.hide();
       document.body.style.overflow = 'visible';
   })
   // $(document).on('click', 'ul li', function(){
   //     $(this).addClass('active').siblings().removeClass('active');
   // })

})