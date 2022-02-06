	let btnaccept = document.querySelector('#pending');
	let btnaccepted = document.querySelector('#accepted');

	btnaccept.addEventListener('click', () => {
		btnaccept.innerText = 'Accepting.....';

		setTimeout( ()=> {
			btnaccept.style.display = 'none';
			btnaccepted.style.display = 'block';
		},5000);

	});