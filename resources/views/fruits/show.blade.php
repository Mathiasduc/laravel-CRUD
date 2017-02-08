@component('layout')
	
	@component('fruits.components.menu')
	@endcomponent

		<span>{{$fruit->name}}, {{$fruit->description}}</span>
	
	@component('fruits.components.footer')
		<span>a la suite du footer, depuis show</span>
	@endcomponent
@endcomponent