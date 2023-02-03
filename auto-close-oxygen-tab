jQuery(document).ready(function($) {
    var title = $('.t-auto-close'),
        icon = $('.oxy-expand-collapse-icon'),
        expanded = $('.t-auto-close').attr('data-oxy-toggle-active-class'),
    	content = $('.t-auto-close').next();
    title.click(function(e) {
        e.stopPropagation();
        content.not($(this).next(content)).hide(400);
        $(this).next(content).toggle(400);
        icon.not($(this).find(icon)).addClass('oxy-eci-collapsed');
        $(this).find(icon).toggleClass('oxy-eci-collapsed');
        title.not($(this)).removeClass(expanded);
      	$(this).toggleClass(expanded);
    });
});
