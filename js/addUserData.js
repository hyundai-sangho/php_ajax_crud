function displayData() {
	let displayData = 'true';

	$.ajax({
		url: 'display.php',
		type: 'post',
		data: {
			displaySend: displayData,
		},
		success: (data) => {
			$('#displayDataTable').html(data);
		},
	});
}

/**
 * 사용자 이름, 이메일, 핸드폰 번호, 사는 지역 등의
 * 기본 정보 입력 함수
 */
function addUser() {
	let nameAdd = $('#completeName').val();
	let emailAdd = $('#completeEmail').val();
	let mobileAdd = $('#completeMobile').val();
	let placeAdd = $('#completePlace').val();

	if (nameAdd !== '' && emailAdd !== '' && mobileAdd !== '' && placeAdd !== '') {
		$.ajax({
			url: 'insert.php',
			type: 'post',
			data: {
				nameSend: nameAdd,
				emailSend: emailAdd,
				mobileSend: mobileAdd,
				placeSend: placeAdd,
			},
			success: function () {
				displayData();
			},
		});
	}else{
    alert('모든 항목을 입력해야만 등록이 됩니다.')
  }
}
