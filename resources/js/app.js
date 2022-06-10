require('./bootstrap');

import React from 'react';
import { createRoot } from 'react-dom/client';
import 'bootstrap/dist/css/bootstrap.min.css';
import Todos from './Todos';

const container = document.getElementById('react-todos');
if(container) {
	const root = createRoot(container);
	root.render(
		<React.StrictMode>
			<Todos />
		</React.StrictMode>,
	);
}

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
