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
        afterLoad: function() {
            if(!$(this.element).hasClass('clicked')) {
                sendAction(this.element.id, 'view');
            } else {
                $(this.element).removeClass('clicked');
            }
        }
    });

    function sendAction(id, action) {
        $.ajax({
            url: root + 'clicks/' + action + ':photo=' + id
        });
    }

    function afterLoad() {
        $.each($('#photos .open'), function(i, el) {
            $(el).unbind('click').bind('click', function() {
                sendAction($(el).attr('id'), 'initial');
                $(el).addClass('clicked');
            });
        });
    }
    afterLoad();

    if($('a.next-page').length) {
        $('#photos').infinitescroll({
            navSelector: 'a.next-page',
            nextSelector: 'a.next-page',
            itemSelector: '#photos li',
            loading: {
                img: 'assets/img/ajax-loader.gif',
                finishedMsg: '',
                msgText: ''
            }
        }, afterLoad);
    }
});