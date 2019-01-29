function delProduct(productId){
var url = 'http://localhost:8081/products/';
//var id = productId;
url += productId;

console.log(url);
	$.ajax({
		type		: 'DELETE',
		url		: url,
		data		: {ID_PRODUIT: productId},
		dataType	: 'json',
		encode		: true
	});
};
