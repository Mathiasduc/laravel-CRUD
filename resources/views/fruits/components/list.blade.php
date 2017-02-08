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
			<td>{{$fruit->stock}}<br>
				<div id="{{$fruit->id}}" style="display: inline-flex;">
					
						<button class="ui icon button stock"><i class="minus icon"></i></button>
						<button class="ui icon button"><i class="plus icon"></i></button>
						<button class="ui icon button"><i class="delete icon"></i></button>
					
					</form>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
