
	$('#schools').select2({
		templateResult: formatOption,
		templateSelection: formatOption
	});

	function formatOption(option) {
		if (!option.id) {
			return option.text;
		}
		var img = $(option.element).data('image');
		return $('<span><img src="' + img + '" width="25px" height="25px"/> ' + option.text + '</span>');
	}
