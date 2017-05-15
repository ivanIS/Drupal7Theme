(function ($) {
    Drupal.behaviors.search = {
        attach: function (context, settings) {
            $(window).load(function(){
                l = window.location.pathname;
                $(".element").typed({
                    strings: ["<span class='question-left'>How can</span><span class='question-right'> we help you?</span>"],
                    typeSpeed: 80
                });
                $(".main-container").css("padding-bottom", '500px');

                if (l === '/') {
                    $('html, body').animate({scrollTop: $("#flexslider-1").offset().top}, 1000);
                }
                setTimeout(function(){
                    $("#block-views-first-question-block").find('.view').find('.view-content').css("display", 'block');
                    if (l === '/') {
                        $('html, body').animate({scrollTop: $("#block-views-first-question-block").offset().top}, 1000);
                    }
                }, 4500);

                setTimeout(function() {
                    $("#block-views-first-question-block").find('.views-row-1').fadeIn(1500).css("display", 'inline-block');
                }, 5500);

                setTimeout(function() {
                    $("#block-views-first-question-block").find('.views-row-2').fadeIn(1500).css("display", 'inline-block');
                }, 7000);

                setTimeout(function() {
                    $("#block-views-first-question-block").find('.views-row-3').fadeIn(1500).css("display", 'inline-block');
                }, 8500);

                setTimeout(function() {
                    $("#block-views-first-question-block").find('.views-row-4').fadeIn(1500).css("display", 'inline-block');
                }, 10000);

                setTimeout(function() {
                    $("#block-views-first-question-block").find('.views-row-5').fadeIn(1500).css("display", 'inline-block');
                }, 11500);
            });
            $("#block-views-first-question-block").find('.view').find('.views-row').click(function() {
                $('.clicked').removeClass('clicked').css('background-color', '#004b87');
                $(this).addClass('clicked').css('background-color', '#77BC1F');
                $(".main-container").css("padding-bottom", '987px');
                $("#block-views-second-question-block").find('.view').find('.view-header').css("display", 'block');

                if (l === '/') {
                    $('html, body').animate({scrollTop: $("#block-views-second-question-block").offset().top}, 1000);
                    //return false;
                }
                $(".element-2").typed({
                    strings: ["<span class='question-left'>How are you currently</span><span class='question-right'> treating your diabetes?</span>"],
                    typeSpeed: 80
                });

                if (l === '/') {
                //window.scrollTo( 100, 1100 );
                }

                setTimeout(function(){
                    $(".main-container").css("padding-bottom", '987px');
                    $("#block-views-second-question-block").find('.view').find('.view-content').css("display", 'block');
                    if (l === '/') {
                    //window.scrollTo( 100, 1300 );
                    }
                }, 5000);
                setTimeout(function() {
                    $("#block-views-second-question-block").find('.views-row-1').fadeIn(1500).css("display", 'inline-block');
                }, 7000);

                setTimeout(function() {
                    $("#block-views-second-question-block").find('.views-row-2').fadeIn(1500).css("display", 'inline-block');
                }, 8500);

                setTimeout(function() {
                    $("#block-views-second-question-block").find('.views-row-3').fadeIn(1500).css("display", 'inline-block');
                }, 10000);

                setTimeout(function() {
                    $("#block-views-second-question-block").find('.views-row-4').fadeIn(1500).css("display", 'inline-block');
                }, 11500);

                setTimeout(function() {
                    $("#block-views-second-question-block").find('.views-row-5').fadeIn(1500).css("display", 'inline-block');
                }, 13000);


            });


            $("#block-views-second-question-block").find('.view').find('.views-row').click(function() {
                $("#block-views-second-question-block").find('.clicked').removeClass('clicked').css('background-color', '#004b87');
                $(this).addClass('clicked').css('background-color', '#77BC1F');

                $(".page-before-bot").css("display", 'block');

                if (l === '/') {
                    $('html, body').animate({scrollTop: $(".page-before-bot").offset().top}, 800);
                }
            });

            $('.navbar-toggle').css("display", 'none');
            $('#search-icon').hover(
                function() {
                $('#search-svg').css("fill", '#002554');
                    $('.btn__search-text').css("color", '#002554')},
                function() { $('#search-svg').css("fill", '#ffffff');
                    $('.btn__search-text').css("color", '#ffffff')
            } )
                .click(function() {
                    $(this).css("display", 'none');
                    $('#close-search-icon').css("display", 'inline-block');
                    $('.search-form').css("display", 'inline-block');
                    $('#search-svg-c-h').next().css("display", 'none');
                });
                $('#close-search-icon').hover(
                    function() {
                        $('#search-svg-c').css("display", 'none');
                        $('#search-svg-c-h').css("display", 'inline-block');
                        $('.btn__close-text').css("color", '#0085CA')},
                    function() {
                        $('#search-svg-c').css("display", 'inline-block');
                        $('#search-svg-c-h').css("display", 'none');
                        $('.btn__close-text').css("color", '#ffffff')
                    } )
                    .click(function() {
                        $(this).css("display", 'none');
                        $('#search-icon').css("display", 'inline-block');
                        $('.search-form').css("display", 'none');
                    })

         }
    };
})(jQuery);