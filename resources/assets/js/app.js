
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


if(jQuery){
    $('#login-open').click(function(){
        $login = $('.login');
        $login.fadeIn();

        $login.click(function(){
           $(this).fadeOut();
        });
        $('.login_form').click(function(e){
            e.stopPropagation();
        });
    });
    /**
     * Thumbs click action
     * @type {*}
     */
    var $img_list = $('.field-image-list a');
    var $img_list_big = $('.field-image-big img');

    if($img_list.length > 0){
        $img_list.each(function(){
           $(this).click(function(){
               $img_list_big.removeClass('active');
               $('#'+$(this).data('target')).addClass('active');
           });
        });
    }
}