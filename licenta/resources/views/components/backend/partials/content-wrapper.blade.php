@props([
	'id' => false,
	'card' => true,
	'model' => false
])

<div class="content">
	<div class="row" {{ $id ? 'id=' . $id : '' }}>
		@if ($card)
			<div class="col">
				<div class="card">
				@endif
					{{$slot}}
				@if ($card == true)
				</div>
			</div>
		@endif
	</div>

	@if ($model == true)
		{{ $model->onEachSide(config('pagination.on_each_side'))->links() }}
	@endif
</div>