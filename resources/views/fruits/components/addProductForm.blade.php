<div class="ui form">
	<div class="four fields">
		<div class="three wide required field">
			<label for="name">Nom</label>
			<input id="productName" type="text" name="name">
		</div>
		<div class="two wide required field">
			<label for="price">Prix</label>
			<input id="productPrice" type="number" name="price">
		</div>
		<div class="seven wide  field">
			<label for="description">Description</label>
			<input id="productDescription" type="text" name="description">
		</div>
		<div class="two wide required field">
			<label for="stock">Stock</label>
			<input id="productQuantity" type="number" name="stock">
		</div>
		<button class="ui right labeled icon button addProduct">Créer<i class="right arrow icon"></i></button>
	</div>
	<div class="error message"></div>
</div>