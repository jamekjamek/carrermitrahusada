$(document).ready(() => {
	const flashdata = $(".flashdata").data("flashdata");
	const type = $(".flashdata").data("type");
	if (flashdata) {
		Swal.fire({
			text: flashdata,
			icon: type,
			showCancelButton: false,
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
		})
	}

	function deleteQuestion(url, text) {
		Swal.fire({
			text: text,
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yakin'
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = url;
			}
		})
	}

	$(".delete-family").on("click", function () {
		var id = $(this).data("id");
		var url = `${base_url}profile/family/delete/${id}`;
		deleteQuestion(url, 'Yakin akan menghapus data ini !');
	})
	
    $(".delete-jobhistory").on("click", function () {
		var id = $(this).data("id");
		var url = `${base_url}profile/jobhistory/delete/${id}`;
		deleteQuestion(url, 'Yakin akan menghapus data ini !');
	})

	$('.get-regency').select2({
		placeholder: 'Cari nama kabupaten',
		minimumInputLength: 3,
		ajax: {
			url: `${base_url}profile/getregency`,
			dataType: 'JSON',
			type: 'POST',
			data: function (params) {
				return {
					search: params.term
				}
			},
			processResults: function (data) {
				return {
					results: data
				}
			},
			cache: true
		},
	});



    //ETC
    $('input:radio[name=questionTwo]').change(function() {
        if (this.value == '1') {
            $('.whenqustionTwo').removeClass("d-none");
            $('.positionQuestionTwo').removeClass("d-none");
        }
        else if (this.value == '0') {
            $('.whenqustionTwo').addClass("d-none");
            $('.positionQuestionTwo').addClass("d-none");
        }
    });

    $('input:radio[name=qustionThree]').change(function() {
        if (this.value == '1') {
            $('.positionQuestionThree').removeClass("d-none");
        }
        else if (this.value == '0') {
            $('.positionQuestionThree').addClass("d-none");
        }
    });

    $('input:radio[name=questionFive]').change(function() {
        if (this.value == '1') {
            $('.whereQuestionFive').removeClass("d-none");
            $('.positionQuestionFive').removeClass("d-none");
        }
        else if (this.value == '0') {
            $('.whereQuestionFive').addClass("d-none");
            $('.positionQuestionFive').addClass("d-none");
        }
    });
    
    $('input:radio[name=questionSix]').change(function() {
        if (this.value == '1') {
            $('.whenQuestionSix').removeClass("d-none");
            $('.diseaseQuestionSix').removeClass("d-none");
        }
        else if (this.value == '0') {
            $('.whenQuestionSix').addClass("d-none");
            $('.diseaseQuestionSix').addClass("d-none");
        }
    });
})
