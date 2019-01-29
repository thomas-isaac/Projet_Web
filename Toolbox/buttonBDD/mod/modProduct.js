function modProduct(productId){
	var url = 'http://localhost:8081/products/';
	url += productId;
	var productData = {
		'name'		: document.getElementById(productId).getElementsByClassName('name')[0].innerHTML,
		'cost'		: document.getElementById(productId).getElementsByClassName('cost')[0].innerHTML,
		'category'	: document.getElementById(productId).getElementsByClassName('category')[0].innerHTML,
		'description'	: document.getElementById(productId).getElementsByClassName('description')[0].innerHTML,
		'image'		: document.getElementById(productId).getElementsByClassName('image')[0].innerHTML
	};
	console.log(productData);

	$.ajax({
		type		: 'POST',
		url		: url,
		data		: productData,
		dataType	: 'json',
		encode		: true
	});
};
