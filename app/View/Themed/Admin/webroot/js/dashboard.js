var dashboard = (function() {
	'use strict';

	var module = {
		init: function() {
			// ...
		},
		closeForm: function(selector){
			$(selector).css("display", "none");
		},
		showForm: function (selector){
			$(selector).css("display", "block");
		}
	};

	return module;

}());
