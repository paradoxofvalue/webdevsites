jQuery(function($){
    var loc = window.location.pathname.split('/');
    loc = loc[loc.length - 1];
    if(loc == "widgets.php") {
        var frame,
            addImg = $('input.select-img');
        addImg.on('click', function (event) {
            console.log($(this).parent());


            var imgSrc = $(this).parent().find('input.img'),
                imgView = $(this).parent().find('img.view');

            event.preventDefault();

            // If the media frame already exists, reopen it.
            if (frame) {
                frame.open();
                return;
            }

            // Create a new media frame
            frame = wp.media({
                title: 'Select or Upload Media Of Your Chosen Persuasion',
                button: {
                    text: 'Use this media'
                },
                multiple: false  // Set to true to allow multiple files to be selected
            });


            // When an image is selected in the media frame...
            frame.on('select', function () {

                // Get media attachment details from the frame state
                var attachment = frame.state().get('selection').first().toJSON();

                imgSrc.val(attachment.url);
                imgView.attr( 'src', attachment.url );

            });

            // Finally, open the modal on click
            frame.open();
        });
    }
});