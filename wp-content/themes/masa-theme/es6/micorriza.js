import {$, w} from './constants';
import './modal'

w.load(() => {
    console.log('Hello world from El Cultivo! -- Load');

});

const video = $('video').get(0)
const audioStatus = $('#audio-status')
const imgPlay = $('.home__resource')
var x = window.matchMedia("(min-width: 768px)")

var about = $('#about');
var founders = $('#founders');
var contact = $('#contact');

$(document).ready(function() {
    console.log('Hello world from El Cultivo! --Ready');

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    var margTopRandom;
    $('.artist__thumbnail').each(function () {
        margTopRandom = $(this).css({ 'marginTop': getRandomInt(-50, 350), 'marginTop': getRandomInt(-50, 350) });
        // console.log($(this).find('img').css('height'));
    });


    var n = 0;
    $(".artist__name").mouseenter(function(){
        console.log('Ready mousenter ' + n );
        var $this = $(this);
        var $thisNext = $(this).next();
        var $thisNextImg = $thisNext.find('img');
        var $margTop = $thisNext.css('marginTop');

        $thisNext.css( "display", "block" );
        $thisNext.css( "z-index", n );

        $thisNextImg.css({ 'height': 'calc(100vh - (' + $margTop +' + 52px))' });

        n++;
    });



    // video.setMuted = function (muted) {
    //     this.muted = muted
    //     // updateAudioStatus()
    // }
    // const toggleAudio = function () {
    //     video.setMuted(!video.muted);
    // }

    // audioStatus.click(function () {
    //     // console.log('Aqui se mutuea');
    //     toggleAudio();
    // })

    about.click(function () {
        console.log('about');
        $('#aboutContainer').removeClass('hide');
        $('#aboutContainer').addClass('show');

        $('#foundersContainer').removeClass('show');
        $('#contactContainer').removeClass('show');
        $('#foundersContainer').addClass('hide');
        $('#contactContainer').addClass('hide');
    })

    founders.click(function () {
        console.log('founders');
        $('#foundersContainer').removeClass('hide');
        $('#foundersContainer').addClass('show');

        $('#aboutContainer').removeClass('show');
        $('#contactContainer').removeClass('show');
        $('#aboutContainer').addClass('hide');
        $('#contactContainer').addClass('hide');
    })

    contact.click(function () {
        console.log('contact');
        $('#contactContainer').removeClass('hide');
        $('#contactContainer').addClass('show');

        $('#foundersContainer').removeClass('show');
        $('#aboutContainer').removeClass('show');
        $('#foundersContainer').addClass('hide');
        $('#aboutContainer').addClass('hide');
    })

    mediaQueries(x)
    x.addListener(mediaQueries)
})


function mediaQueries(x) {

    if (x.matches) {
        console.log('DESKTOP');
        if(video) {
            const videoPlay = function () {
                video.play();
            }
            videoPlay();
            console.log('hay video');
        } else {
            console.log('no hay video');
        }
    }else {
        // console.log('MOBILE');
        // audioStatus.html("PLAY");
        // audioStatus.hide();
        $('#imagemovil').click(function () {
            // console.log('PLay mobile');
            $('#imagemovil').hide();
            video.play();
            // audioStatus.show();
            $('#playMovil').hide();
            // audioStatus.html("AUDIO");
        })
        $('#playMovil').click(function () {
            $('#imagemovil').hide();
            video.play();
            // audioStatus.show();
            $('#playMovil').hide();
        })

        audioStatus.click(function() {
            // audioStatus.html("AUDIO");
        })
    }

}
