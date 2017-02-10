'use strict';
function init(){
	console.log("init");
	listeners();
}
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

function listeners(){
	const addOneNodeList = document.querySelectorAll('.addOne');
	addEventListenerList(addOneNodeList, 'click', addOneToStock);

	const deleteOneNodeList = document.querySelectorAll('.deleteOne');
	addEventListenerList(deleteOneNodeList, 'click', deleteOneStock);

	const deleteProductNodeList = document.querySelectorAll('.deleteProduct');
	addEventListenerList(deleteProductNodeList, 'click', deleteProduct);

	document.querySelector('.addProduct').addEventListener('click', addProduct, false);

	$('.ui .form').on('submit', ()=>console.log('submit'));
}

function addEventListenerList(list, event, fn) {
	for (var i = 0, len = list.length; i < len; i++) {
		list[i].addEventListener(event, fn, false);
	}
}
function addOneToStock(event){
	const id = event.target.dataset.id;
	$.ajax('/products/stock/id/' + id + '/quantity/1',
	{
		method:"put"
	})
	.done(
		function(data){
			document.querySelector(".stock_"+id).innerHTML=data
		});
}

function deleteOneStock(event){
	const id = event.target.dataset.id;
	$.ajax('/products/stock/id/' + id + '/quantity/1',
	{
		method:"delete"
	})
	.done(
		function(data){
			document.querySelector(".stock_"+id).innerHTML=data
		});
}

function deleteProduct(event){
	const id = event.target.dataset.id;
	$.ajax('/products/id/' + id ,
	{
		method:"delete"
	}
	);
}

function addProduct(){
	console.log(document.querySelector('#productName'));
	$.ajax('/products/addProduct',
	{
		method:"post",
		data: {
			name: document.querySelector('#productName').value,
			price: document.querySelector('#productPrice').value,
			description: document.querySelector('#productDescription').value,
			stock: document.querySelector('#productQuantity').value,
		}
	}
	);	
}

if(document.readyState != 'loading'){
	init();
} else {
	document.addEventListener('DOMContentLoaded', init);
}