var dashboard = (function() {
	'use strict';

	var module = {
		init: function() {
			// ...
		},
		closeForm: function(selector){
			$(selector).hide();
		},
		openForm: function (selector){
			$(selector).show();
		}
	};

	return module;

}());
