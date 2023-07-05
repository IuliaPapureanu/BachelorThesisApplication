@props([
	'formGroup' => true,
	'defaultOption' => false,
	'label' => false,
	'name' => '',
	'id' => false,
	'class' => false,
	'disabled' => false,
	'required' => false,
	'optionName' => 'title',
	'optionDescription' => false,
	'options' => [],
	'selected' => false,
	'dynamic' => false
])

@if ($formGroup)
	<div class="form-group">
@endif

@if ($label)
	<label>
		{{ $label }}
	</label>
@endif

	<select
		name="{{ $name }}"
		class="form-control form-select {{ $class }}"
		{{ $id ? 'id=' . $id : '' }}
		{{ $disabled ? 'disabled' : '' }}
		{{ $required ? 'required' : ''  }}
 	>
		@if ($defaultOption == true)
			<option value="">
				{{ __('defaults.label.select') }}
			</option>
		@endif

		{{ $slot }}

		@if ($dynamic)
			@foreach($options as $option)
				<option value="{{ $option->id }}" {{ $selected == $option->id ? 'selected' : '' }}>
					{{ $option->$optionName }}
					@if ($optionDescription AND $option->$optionDescription)
						({{ $option->$optionDescription }})
					@endif
				</option>
			@endforeach
		@else
			@foreach($options as $key => $value)
				<option value="{{ $key }}" {{ $selected == $key ? 'selected' : '' }}>
					{{ $value }}
				</option>
			@endforeach
		@endif
	</select>

	@error($name)
		<span class="form-response">
			{{ $message }}
		</span>
	@enderror
@if ($formGroup)
	</div>
@endif
