jQuery(function($){
    var formCommentSm = $('#form-comment-sm');
    var formCommentLg = $('#form-comment-lg');
    formCommentSm.submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: formCommentSm.attr('method'),
            url: formCommentSm.attr('action'),
            data: formCommentSm.serialize()
        }).done(function (data) {
            if (typeof data !== 'undefined') {
                console.log(data.message);
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (typeof jqXHR.responseJSON !== 'undefined') {
                alert(errorThrown);
            }
        });
    });

    formCommentLg.submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: formCommentLg.attr('method'),
            url: formCommentLg.attr('action'),
            data: formCommentLg.serialize()
        }).done(function (data) {
            if (typeof data !== 'undefined') {
                console.log(data.message);
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            if (typeof jqXHR.responseJSON !== 'undefined') {
                alert(errorThrown);
            }
        });
    });
});

