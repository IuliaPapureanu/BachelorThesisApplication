@props([
	'heading',
	'route' => false,
	'placeholder' => false,
	'buttonLink' => false,
	'buttonIcon' => false,
	'buttonLabel' => false,
	'topUserLevel' => 4
])

<div class="page-header page-header-light">
	<div class="page-header-content header-elements-md-inline">
		<div class="page-title d-flex">
			<h1>
				{{ $heading }}
			</h1>
		</div>

		<div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
			@if ($route AND $placeholder)
				<form action="{{ $route }}" method="GET" role="search">
					@csrf
					<div class="input-group wmin-md-200">
						<x-global.form.input
							:formGroup="false"
							name="search_term"
							:value="old('search_term')"
							:placeholder="$placeholder"
							required
						/>

						<div class="input-group-append">
							<button type="submit" name="search" value="search" class="btn bg-blue btn-icon">
								<i class="icon-search4"></i>
							</button>
						</div>
			@endif

			@if ($buttonLink AND $buttonIcon AND $buttonLabel AND auth()->user()->user_level <= $topUserLevel)
				<a href="{{ $buttonLink }}" class="btn bg-blue btn-labeled btn-labeled-left ml-3">
					<b>
						<i class="{{ $buttonIcon }}"></i>
					</b>
					{{ $buttonLabel }}
				</a>
			@endif

			@if ($route AND $placeholder)
					</div>
				</form>
			@endif
		</div>
	</div>
</div>