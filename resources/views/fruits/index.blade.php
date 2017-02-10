@component('layout')
	
	@section('content')
	
		@component('fruits.components.menu')
		@endcomponent

		@component('fruits.components.addProductForm')
		@endcomponent

		@component('fruits.components.list', ['fruits'=>$fruits])
			
		@endcomponent

		@component('fruits.components.footer')
			<span>Ajouté depuis index</span>
		@endcomponent
		@section('scripts')
			<script src="{{asset('js/app.js')}}"></script>
		@endsection
	@endsection
@endcomponent