$(function() {
    /* Scroll to top button handle */
    $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $('.scroll-btn').fadeIn();
        } else {
            $('.scroll-btn').fadeOut();
        }
    });

    $('.scroll-btn').click(function(){
        $('html, body').animate({scrollTop : 0}, 500);
        return false;
    });

    /* Alert msg auto disappear */
    window.setTimeout(function() { $(".alert").alert('close'); }, 5000);

    /*
    * Dropzone handle
    */
    $('#dropzone').on('dragover', function() {
        $(this).addClass('hover');
    });

    $('#dropzone').on('dragleave', function() {
        $(this).removeClass('hover');
    });

    $('#dropzone input').on('change', function(e) {
        var file = this.files[0];

        $('#dropzone').removeClass('hover');

        if (this.accept && $.inArray(file.type, this.accept.split(/, ?/)) == -1) {
            return alert('File type not allowed.');
        }

        $('#dropzone').addClass('dropped');
        $('#dropzone img').remove();

        if ((/^image\/(gif|png|jpeg)$/i).test(file.type)) {
            var reader = new FileReader(file);

            reader.readAsDataURL(file);

            reader.onload = function(e) {
                var data = e.target.result,
                    $img = $('<img />').attr('src', data).fadeIn();

                $('#dropzone div').html($img);
            };
        } else {
            var ext = file.name.split('.').pop();

            $('#dropzone div').html(ext);
        }
    });
});


