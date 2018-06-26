/**
 * Created by tuyenttt on 3/19/18.
 */

(function($) {
    $(function() {
        $('.navbar-toggle').click(function(e) {
            this.classList.toggle('active');
            $('.logo-dk').toggleClass('current');
            $('.logo-mb').toggleClass('active');

        });
    });
})(jQuery);