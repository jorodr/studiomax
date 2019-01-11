jQuery(function($){
//Open jQuery

    function hide_menu(){
            $('.menu').css('transform', 'translate(-400px)');
    }

    $(document).ready(function(){
            console.log('working..');

            $('.menu-colappser').click(function(){
                    $('.menu').css('transform', 'translate(0px)');
                    $('.close-button').addClass('visible');		
            });

            $('.close-button').click(function(){
                    $('.menu').css('transform', 'translate(-400px)');
                    $('.close-button').removeClass('visible');	
            });
            
            // *************** Menu items click ***************
            
            if ( window.location.pathname === '/' ){
                //code for index page
                $('#about-link').click(function(){
                        $.scrollTo('#about-section', 800,{
                                onAfter: function() {
                                        requestAnimationFrame(function() {
                                                $('.menu').css('transform', 'translate(-400px)');
                                                $('.close-button').removeClass('visible');
                                        });
                                  }
                        });		
                });
            }
            
            if (window.location.pathname === '/') {
                //code for index page
                $('#home-link').click(function(){
                    $.scrollTo('#top-section', 800,{
                            onAfter: function() {
                                    requestAnimationFrame(function() {
                                            $('.menu').css('transform', 'translate(-400px)');
                                            $('.close-button').removeClass('visible');
                                    });
                              }
                    });
                });
            }

            if (window.location.pathname === '/') {
                //code for index page
                $('#services-link').click(function () {
                    $.scrollTo('#services-section', 800, {
                        onAfter: function () {
                            requestAnimationFrame(function () {
                                $('.menu').css('transform', 'translate(-400px)');
                                $('.close-button').removeClass('visible');
                            });
                        }
                    });
                });
            }

            if (window.location.pathname === '/') {
                //code for index page
                $('#portfolio-link').click(function () {
                    $.scrollTo('#portfolio-section', 800, {
                        onAfter: function () {
                            requestAnimationFrame(function () {
                                $('.menu').css('transform', 'translate(-400px)');
                                $('.close-button').removeClass('visible');
                            });
                        }
                    });
                });
            }

            if (window.location.pathname === '/') {
                //code for index page
                $('#contact-link').click(function () {
                    $.scrollTo('#contact-form', 800, {
                        onAfter: function () {
                            requestAnimationFrame(function () {
                                $('.menu').css('transform', 'translate(-400px)');
                                $('.close-button').removeClass('visible');
                            });
                        }
                    });
                });
            }
            
    });
    
// Close JQuery
});

