@props([
	'icon' => false,
	'name' => false,
	'route' => false,
])
<div class="col-12 col-md-6 col-xl-3">
	<div class="sticky-note">
		<div class="card-body text-center">
			<p class="mt-5 mb-0 pt-4">
				<i class="{{ $icon }} icon-2x text-danger border-danger border-3 rounded-round p-2 mb-1 mt-1"></i>
			</p>

			<h2>
				<span class="text-10 text-grey">
					{{ $slot }}
				</span>
			</h2>

			<p class="text-4 text-grey font-weight-bold">
				{{ $name }}
			</p>

			<a href="{{ $route }}" class="btn btn-sm bg-danger">
				{{ __('defaults.label.view') }}
				<i class="icon-circle-right2 pl-1"></i>
			</a>
		</div>
	</div>
</div>