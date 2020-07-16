$(document).ready(function () {

    // setTimeout(function () {
    //     $('.loader_bg').fadeToggle();
    // }, 3000);
    // $(window).load(function(){
    //      $('.loader_bg').fadeOut();
    // });

    $(window).on('scroll',function(){
    	if($(window).scrollTop()){
    		$('.header').addClass('sticky');
    	}else{
    		$('.header').removeClass('sticky');
    	}
    });


 $('#nav').onePageNav({
    currentClass: 'active',
    changeHash: false,
    scrollSpeed: 750,
    scrollThreshold: 0.5,
    filter: '',
    easing: 'swing'
    });

 $(".menu").click(function(){
        $("ul").slideToggle(2000);
        $("#nav").addClass("show");
    });


 $(window).on('scroll',function(){
        if($(window).scrollTop()>350){
            $('.bar').each(function(){
                $(this).find('.skill').animate({
                    width:$(this).attr('data-percent')
                },3000);
            });
        }
    });

 $('a.smooth-menu,a.custom-btn,a.banner-btn').on("click", function (e) {
        e.preventDefault();
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 60
        }, 1000);
    });

 
 //carousel
$('.owl-carousel').owlCarousel({
    loop:true,
    pagination: true,
    paginationSpeed: 800,
    margin:20,
    nav:true,
    slideSpeed:800,
    smartSpeed: 500,
    autoplay:true,
    singleItem: true,
    responsive:{
        0:{
            items:1
        },
        680:{
            items:2
        },
        1000:{
            items:2
        }
    }
});


//counter 
$('.counter').counterUp({
    delay: 30,
    time: 3000
});

new WOW().init();

//ajax message
$("#message_submit").submit(function(e){
    e.preventDefault(); 
    var time;
    var data=$(this).serialize();
    var get_protocol=location.protocol;
    var get_host=location.host;
    var get_location=get_protocol+"//"+get_host+"/user/message/";
    $.ajax({
        url:get_location,
        method:'POST',
        data:data,
        success:function(response){
            data=JSON.parse(response);
            if(data.status="success ok")
            {
                setTimeout(function(){
                    $('.alert-box').removeClass("hide");
                    $('.alert-box').addClass("show");
               
                    $('.alert-box').removeClass("hidden");
               
                },1000);
                time=setTimeout(function(){
                    $('.alert-box').addClass("hide");
                    $('.alert-box').removeClass("show");
                },6000);
                $('.close-alert').click(function(){
                    $('.alert-box').addClass("hide");
                    $('.alert-box').removeClass("show");
                    clearTimeout(time);
                })
            }
        },
        error:function(error){
         
        }
    });
  
});


//ajax load more
$("#load_more").submit(function(e){
    e.preventDefault();
    $("#load_more_button").html("Loading...");
    var data=$(this).serialize();
    var get_protocol=location.protocol;
    var get_host=location.host;
    var get_location=get_protocol+"//"+get_host+"/loadmore";
    var get_locations=get_protocol+"//"+get_host;
    $.ajax({
        url:get_location,
        method:'GET',
        data:data,
        success:function(response){
            data=JSON.parse(response);
            $("#load_more_value").val(data[0]);
            if(data[0]==0)
            {
                $("#load_more_button").html("No More Data");
                setTimeout(function(){
                    $("#load_more_button").remove();
                },4000);
                
            }else{
                data[1].forEach(element => {
                    $("#show_more").append('<div class="col-25"><div class="hovereffect wow fadeInDown" data-wow-delay="0.2s"><img id="load_image" src='+get_locations+'/assets/backend/images/'+element.image+'><div class="overlay"><h2>'+element.title+'</h2><a class="info" href='+element.url+' target="blank">View</a></div></div></div>');  
                });
                $("#load_more_button").html("Load More");
            }
        },
        error:function(error){
         
        }
    });
  
});


});





