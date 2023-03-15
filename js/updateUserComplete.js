async function updateUser(updateId) {
	let name = document.querySelector('#name').value;
	let email = document.querySelector('#email').value;
	let mobile = document.querySelector('#mobile').value;
	let place = document.querySelector('#place').value;

	await axios({
		url: 'http://localhost/ajax_crud/updateProcess.php',
		method: 'put',
		data: {
			updateId: updateId,
			name: name,
			email: email,
			mobile: mobile,
			place: place,
		},
	}).then(() => {
		window.location.href = 'http://localhost/ajax_crud/';
	});
}
