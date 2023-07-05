@props([
	'title',
	'content',
	'card' => false,
])

@if($card)
	<div class="col">
		<div class="card">
@endif

<div class="card-body text-center">
	<i class="icon-folder-search icon-2x text-danger-400 border-danger-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
	<h3 class="card-title">
		{{ $title }}
	</h3>
	<p class="mb-3">
		{{ $content }}
	</p>
</div>

@if($card)
		</div>
	</div>
@endif
