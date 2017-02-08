<form class="ui form" action='/products/addProduct' method="post">
	{{csrf_field()}}
	<div class="four fields">
		<div class="three wide required field">
			<label for="name">Nom</label>
			<input type="text" name="name">
		</div>
		<div class="two wide required field">
			<label for="price">Prix</label>
			<input type="number" name="price">
		</div>
		<div class="seven wide  field">
			<label for="description">Description</label>
			<input type="text" name="description">
		</div>
		<div class="two wide required field">
			<label for="stock">Stock</label>
			<input type="number" name="stock">
		</div>
		<button class="ui right labeled icon button">Créer<i class="right arrow icon"></i></button>
	</div>
	<div class="error message"></div>
</form>