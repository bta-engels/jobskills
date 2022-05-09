require('./bootstrap');

window.onload = () => {
	let item;
	for(item of document.querySelectorAll('.delsoft')) {
		item.onclick = (e) => confirm("Datensatz wirklich löschen?")
	}

	for(item of document.querySelectorAll('.alert')) {
		item.onclick = (e) => e.target.style.display = "none"
		window.setTimeout((e) => {
			item.style.display = "none"
		}, 3000)
	}
}
