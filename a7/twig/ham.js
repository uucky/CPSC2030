function ham() {
	// console.log('begin');
	let menus = document.querySelector('.menus');
	menus.classList.toggle('open');
	// console.log('end');
}

function showmore() {
    console.log('begin');
    var rows = document.querySelectorAll('tr');
    if (rows[7].style.display === 'none'){
        for (i = 6; i < rows.length; i++) {
            rows[i].style.display = 'table-row';
        }
    } else {
        for (i = 6; i < rows.length; i++) {
            rows[i].style.display = 'none';
        }
    }
	console.log('end');
}

function change() {
    var elem = document.querySelector('.showmore');
    console.log(elem.value);
	if (elem.value == 'Show less') elem.value = 'Show more';
	else elem.value = 'Show less';
}
