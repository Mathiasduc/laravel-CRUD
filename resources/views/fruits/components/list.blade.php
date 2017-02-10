{{$slot}}
<table class="ui celled table">
	<thead>		
		<tr>
			<th>Nom</th>
			<th>Prix</th>
			<th>Description</th>
			<th>Stock</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($fruits as $fruit)
		<tr>
			<td><a href="products/show/{{$fruit->id}}">
				{{$fruit->name}}
			</a></td>
			<td>{{$fruit->price or "A definir"}}</td>
			<td>{{$fruit->description}}</td>
			<td> 
				<div class="stock_{{$fruit->id}}">
					{{$fruit->stock}}
				</div>
				<div style="display: inline-flex;">

					<button data-id="{{$fruit->id}}" class="ui icon button deleteOne"><i data-id="{{$fruit->id}}" class="minus icon"></i></button>
					<button data-id="{{$fruit->id}}" class="ui icon button addOne"><i data-id="{{$fruit->id}}" class="plus icon"></i></button>

					<button data-id="{{$fruit->id}}" class="ui icon button deleteProduct"><i data-id="{{$fruit->id}}" class="delete icon"></i></button>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
