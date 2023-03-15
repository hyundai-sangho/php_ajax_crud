function deleteItem(deleteId) {
	axios({
		url: 'http://localhost/ajax_crud/delete.php',
		method: 'delete',
		data: {
			deleteId: deleteId,
		},
	}).then((response) => {
		displayData();
	});
}
