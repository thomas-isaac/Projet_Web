function delProduct(productId){
	$.ajax({
		type		: 'POST',
		url		: 'http://localhost:8081/produits',
		data		: {ID_PRODUIT: productID},
		dataType	: 'json',
		encode		: true
	});
};
