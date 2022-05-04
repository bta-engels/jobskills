require('./bootstrap');

window.onload = () => {
	for(let item of document.querySelectorAll('.delsoft')) {
		item.onclick = (e) => confirm("Datensatz wirklich löschen?")
	}
}
