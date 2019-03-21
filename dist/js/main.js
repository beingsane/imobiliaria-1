jQuery(function($) {

    $('a[href=#localizacao]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            
            if (target.length) {
                $('html,body').animate({
                    scrollTop: (target.offset().top -120)
                }, 1000);
                
                return false;
            }
        }
    });

    jQuery("#telefone-contato, #telefone-anuncie").mask("(99) 9999-99999");


    $('#nav-icon2').click(function(){
        $(this).toggleClass('open');

        if($('.open').is(':visible')){
            $('.menu-principal').slideDown();
        }else{
            $('.menu-principal').slideUp();
        }
    });


    $('.clique-aqui').click(function(){
        $( ".nome-contato" ).focus();
    });

    $(window).scroll(function(){
        if ($(this).scrollTop() > 1) {
            $('.header').addClass('header-fixed');
            $('.bug-fix-fixed').addClass('show');
        } else {
            $('.header').removeClass('header-fixed');
            $('.bug-fix-fixed').removeClass('show');
        }
    });

})

