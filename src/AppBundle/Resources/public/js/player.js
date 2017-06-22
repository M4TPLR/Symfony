jQuery(function($){

    if (window.matchMedia("(min-width: 992px)").matches && window.matchMedia("(max-width: 1200px)").matches) {
        $('#comments-block').attr('class', 'comments text-justify col-lg-4 hidden-md-down d-inline-block');
        $("#comments-block h6").attr('class', 'section-title hidden-md-down');
        $('#comments-block h6 div').attr('class', 'comments-scroll');
        $('#comments-block').insertAfter($('#video-section'));
        console.log('redimension');
    }else{
        console.log('nope');
    }
});

