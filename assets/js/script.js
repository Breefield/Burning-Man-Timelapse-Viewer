$(document).ready(function() {

    $("#photos li a").fancybox({
        padding: 0,
        maxWidth: 1440,
        maxHeight: 810,
        aspectRatio: true,
        closeBtn: false,
        loop: false,
        prevEffect: 'none',
        nextEffect: 'none',
    });

    $('#photos').infinitescroll({
        navSelector: 'a.next-page',
        nextSelector: 'a.next-page',
        itemSelector: '#photos li',
        loading: {
            img: 'assets/img/ajax-loader.gif',
            finishedMsg: '',
            msgText: ''
        }
    });
});