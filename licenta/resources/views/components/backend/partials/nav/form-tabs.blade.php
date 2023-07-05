@props([
	'meta' => false,
	'featuredImage' => false,
	'relatedProducts' => false,
	'options' => false,
	'productAttributes' => false,
	'file' => false,
])

<ul class="nav nav-tabs nav-tabs-highlight">
	<li class="nav-item">
		<a href="#tab-1" class="nav-link active" data-toggle="tab">
			{{ __('defaults.content') }}
		</a>
	</li>

	@if ($meta)
		<li class="nav-item">
			<a href="#tab-2" class="nav-link" data-toggle="tab">
				{{ __('defaults.meta_labels') }}
			</a>
		</li>
	@endif

	@if ($featuredImage)
		<li class="nav-item">
			<a href="#tab-3" class="nav-link" data-toggle="tab">
				{{ __('defaults.images') }}
			</a>
		</li>
	@endif

	@if ($productAttributes)
		<li class="nav-item">
			<a href="#tab-6" class="nav-link" data-toggle="tab">
				{{ __('shop/attributes.name') }}
			</a>
		</li>
	@endif

	@if ($relatedProducts)
		<li class="nav-item">
			<a href="#tab-4" class="nav-link" data-toggle="tab">
				{{ __('shop/related.name') }}
			</a>
		</li>
	@endif

	@if ($options)
		<li class="nav-item">
			<a href="#tab-5" class="nav-link" data-toggle="tab">
				{{ __('defaults.options') }}
			</a>
		</li>
	@endif

	@if ($file)
		<li class="nav-item">
			<a href="#tab-6" class="nav-link" data-toggle="tab">
				{{ __('defaults.files') }}
			</a>
		</li>
	@endif
</ul>