@foreach($btntext as $btntext)

	@if($item->done!=done)
		$btntext = 'Mark as Done'
	@else
		$btntext = 'Mark as Undone'
	@endif

@endforeach