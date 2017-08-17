
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
}