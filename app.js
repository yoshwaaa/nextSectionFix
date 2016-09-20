var listy = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', ' seventh'];
function sayList(listItem) {
	for (var i = 0; i <= listy.length; i++) {
		if (listy[i] === listItem) {
			console.log(listy[i - 1]);
			console.log(listy[i + 1]);
		}
	}
}

sayList('third');