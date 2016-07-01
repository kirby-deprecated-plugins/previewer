(function($) {
	$.fn.previewer = function() {
		return this.each(function() {
			var field = $(this);
			var fieldname = 'previewer';

			if(field.data( fieldname )) {
				return true;
			} else {
				field.data( fieldname, true );
			}

			var href = field.attr('data-previewer-href');

			$('[data-shortcut="p"]').attr('href', href);
		});
	};
})(jQuery);