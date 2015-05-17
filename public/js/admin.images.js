$(function() {
    $(document.body).on('change', 'select.image-section-selector', function() {
        var sectionId = $(this).val();
        var imageId = $(this).data('image');

        var $targetSection = $('.image-section-wrapper[data-section=' + sectionId + ']').find('.panel-body');

        console.log($targetSection)

        var $imageWrapper = $(this).parent('.image-with-selector');

        var linkImageToSection = '/admin/images/link-to-section';
        $.post(linkImageToSection, {'sectionId':sectionId, 'imageId':imageId}, function (response) {
            console.log(response);
            //todo pārbaudīt response - ja viss ok tad noņemt parentu

            //varbūt uzreiz aizmest uz sekciju lejā? vai arī pārlādēt sekciju
            $imageWrapper.remove();
            $imageWrapper.prependTo($targetSection);



        });
    });
});