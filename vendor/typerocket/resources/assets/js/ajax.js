// newsletter submit form
function newsletterAjaxJs(event) {

    // event.preventDefault();
    // let element = document.getElementById('name').value;
    let newsLetterForm = document.getElementById(event);
    let newsLetterInput = newsLetterForm.querySelector('[name="email"]').value;

    // Email pattern regular expression
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	var phonePattern = /^0\d{10}$/;

    if( newsLetterInput.trim() === '' ) {

        Command: toastr["error"]("لطفاً ایمیل و یا شماره خود را وارد نمایید", "خطا")
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-bottom-center",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "3000",
          "extendedTimeOut": "3000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }

	} else if (!isNaN(newsLetterInput) && !phonePattern.test(newsLetterInput)) {

		console.log("true");
		Command: toastr["error"]("لطفاً شماره خود را بصورت صحیح و با عدد 0 وارد نمایید", "خطا")
		toastr.options = {
			"closeButton": true,
			"debug": false,
			"newestOnTop": false,
			"progressBar": true,
			"positionClass": "toast-bottom-center",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "3000",
			"extendedTimeOut": "3000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}


    } else if (isNaN(newsLetterInput) && !emailPattern.test(newsLetterInput)) {

        Command: toastr["error"]("لطفاً ایمیل خود را بصورت صحیح وارد نمایید", "خطا")
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-bottom-center",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "3000",
          "extendedTimeOut": "3000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }

    } else {

        jQuery.ajax({
            url: newsletter_ajax_localize_obj.ajax_url,
            type: 'post',
            dataType: 'json',
            data: {
                action: 'newsletter_ajax_handle',
                submitted_nonce: newsletter_ajax_localize_obj.the_nonce,
                newsLetterInput: newsLetterInput,
            },
            success: function (response) {
                if( response.data.status ) {
                    Command: toastr["success"]("ایمیل یا شماره شما در خبرنامه ثبت شد", "تبریک")
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-bottom-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "3000",
                        "extendedTimeOut": "3000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                } else {
                    Command: toastr["warning"]("این ایمیل یا شماره در سایت ثبت می باشد", "توجه")
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-bottom-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "3000",
                        "extendedTimeOut": "3000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                }
            },
            error: function (response) {
                // alert('Error retrieving the information: ' + response.status + ' ' + response.statusText);
            }
        });

    }

}


function newsletterExport(event) {

    jQuery.ajax({
        url: newsletter_ajax_localize_obj.ajax_url,
        type: 'post',
        dataType: 'json',
        data: {
            action: 'newsletter_export_ajax_handle',
            submitted_nonce: newsletter_ajax_localize_obj.the_nonce,
        },
        success: function (response) {
            // console.log(response);
            alert('خروجی اکسل دانلود شد');
        },
        error: function (response) {
            // alert('Error retrieving the information: ' + response.status + ' ' + response.statusText);
        }
    });

}