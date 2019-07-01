import {$, w} from './constants';

w.load(() => {

    // Modal que abre una galería
    const modalGallery = $('.modal-gallery')

    if(modalGallery.length) {

        modalGallery.slick({
            autoplay: false,
            arrows: true,
            dots: false,
            prevArrow: $('.galeria-prev'),
            nextArrow: $('.galeria-next'),
        })

        const modal = $('#modal')

        $('.modalOpen').click(function() {
            console.log($(this).data("position"));
            console.log(typeof $(this).data("position"));
            modal.css('display', 'flex')
            modalGallery.slick('slickGoTo', $(this).data("position"),false);
        });

        $('.close').click(function() {
            modal.css('display', 'none')
        })

        modalGallery.click(function () {
            modal.css('display', 'none')
        })

    }
});
$(document).on('keydown', function(e) {
                if(e.keyCode == 37) {
                    $('.modal-gallery').slick('slickPrev');
                }
                if(e.keyCode == 39) {
                    $('.modal-gallery').slick('slickNext');
                }
            });
