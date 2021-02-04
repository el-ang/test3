jQuery(function($){
	$('.chosen-select').chosen({
		width: "100%",
		inherit_select_classes: true
	}).change(function(e){
		var name = $(this).attr('name');
		$('#form').formValidation('revalidateField', name);
	});

	$('#form').formValidation({
		framework: 'bootstrap',
		icon: {
			valid: 'fa fa-check fa-fw',
			invalid: 'fa fa-times fa-fw',
			validating: 'fa fa-refresh fa-spin fa-fw'
		},
		excluded: ':disabled',
		fields: {
			logo_image:{
				enabled: false,
				notEmpty: {
	                message: 'Please select an image'
	            },
				file:{
					extension: 'jpeg,jpg,png',
					type: 'image/jpeg,image/png',
					message: 'The selected file is not valid'
				}
			},
			site_like:{
				selector: '.site_like',
				validators: {
					callback: {
						message: 'You must enter at least one site',
						callback: function(value, validator, $field) {
							var isEmpty = true,
								// Get the list of fields
								$fields = validator.getFieldElements('site_like');
							for (var i = 0; i < $fields.length; i++) {
								if ($fields.eq(i).val() !== '') {
									isEmpty = false;
									break;
								}
							}

							if (!isEmpty) {
								validator.updateStatus('site_like', validator.STATUS_VALID, 'callback');
								return true;
							}

							return false;
						}
					},
					uri: {
						message: 'URL not valid',
						allowEmptyProtocol: true
					}
				}
			},
			'site_like_reason[]':{
				validators:{
					callback: {
						message: 'Please specific the reason',
						callback: function(value, validator, $field) {
							var url = $field.closest('.form-group').prev().find('.site_like').val();
							return (url == '') ? true : (value !== '');
						}
					}
				}
			}
		}
	}).on('success.field.fv', function(e, data) {
        var $parent = data.element.parents('.form-group');
        $parent.removeClass('has-success');
        data.element.data('fv.icon').hide();
    }).bootstrapWizard({
		tabClass: 'steps',
		nextSelector: '.button-next',
		previousSelector: '.button-prev',
		onTabClick: function(tab, navigation, index) {
			return validateTab(index);
		},
		onNext: function(tab, navigation, index) {
			var numTabs    = $('#form').find('.form-page').length,
			isValidTab = validateTab(index - 1);
			if (!isValidTab) {
				return false;
			}

			if (index === numTabs) {
				$('#form').formValidation('defaultSubmit');
			}
			return true;
		},
		onPrevious: function(tab, navigation, index) {
			return validateTab(index + 1);
		},
		onTabShow: function(tab, navigation, index) {
			var numTabs = $('#form').find('.form-page').length;
			$('#form').find('.button-next').removeClass('disabled').html(index === numTabs - 1 ? 'Submit' : 'Next');
		}
	});

	function validateTab(index) {
		var fv   = $('#form').data('formValidation'),
		$tab = $('#form').find('.form-page').eq(index);

		fv.validateContainer($tab);

		var isValidStep = fv.isValidContainer($tab);
		if (isValidStep === false || isValidStep === null) {
			return false;
		}

		return true;
	}

	$(document).on('change', '#sda', function(){
		if($(this).is(':checked')){
			$('.sda-field').each(function(){
				value = $('input[name='+$(this).attr('data-pickup')+']').val();
				$(this).val( value );
				$(this).attr('disabled', true);
			});
		} else{
			$('.sda-field').each(function(){
				$(this).val('');
				$(this).attr('disabled', false);
			});
		}
	}).on('change', '#has_logo', function(){
		if($(this).is(':checked')){
			$('.show_if_has_logo').show(300);
			$('#form').formValidation('enableFieldValidators', 'logo_image', true);
		} else{
			$('.show_if_has_logo').hide(300);
			$('#form').formValidation('enableFieldValidators', 'logo_image', false);
		}
	}).on('change', '.site_like', function(){
		$('#form').formValidation('revalidateField', 'site_like_reason[]');
	}).on('change', '#has_website', function(){
		if($(this).is(':checked')){
			$('.show_if_has_website').show(300);
		} else{
			$('.show_if_has_website').hide(300);
		}
	}).on('change', '#host_oke', function(){
		if($(this).is(':checked')){
			$('.show_if_host_no').hide(300);
		} else{
			$('.show_if_host_no').show(300);
		}
	});
})