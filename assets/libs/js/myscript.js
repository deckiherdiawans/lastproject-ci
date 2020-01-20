$('.custom-file-input').on('change', function () {
	let fileName = $(this).val().split('\\').pop();
	$(this).next('.custom-file-label').addClass("selected").html(fileName);
});

function bacaGambar(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#image-preview').attr('src', e.target.result);
		}

		reader.readAsDataURL(input.files[0]);
	}
}

$(".custom-file-input").change(function () {
	bacaGambar(this);
});

const flashDataError = $('.flash-data-error').data('flashdata');

if (flashDataError) {
	Swal.fire({
		title: flashDataError,
		text: '',
		icon: 'error'
	});
}

const flashDataSuccess = $('.flash-data-success').data('flashdata');

if (flashDataSuccess) {
	Swal.fire({
		title: flashDataSuccess,
		text: '',
		icon: 'success'
	});
}
