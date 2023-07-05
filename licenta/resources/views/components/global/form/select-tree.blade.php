@props([
	'formGroup' => true,
	'label' => false,
	'name' => '',
	'id' => false,
	'class' => false,
	'disabled' => false,
	'required' => false,
	'parent_id' => false,
	'options' => [],
	'selected' => false
])

@if ($formGroup == true)
	<div class="form-group">
@endif
	<label>
	   {{ $label }}
	</label>

	<select
		name="{{ $name }}"
		class="form-control form-select {{ $class }}"
		{{ $id ? 'id=' . $id : '' }}
		{{ $disabled ? 'disabled' : '' }}
		{{ $required ? 'required' : ''  }}
 	>
		<option value="" disabled>
			{{ __('defaults.label.select') }}
		</option>

		{{ $slot }}

		@php $depth = 0 @endphp
		@php $indent = '' @endphp

		@foreach($options as $option)
			<x-backend.partials.nav.select.parents
				:item="$option"
				:depth="$depth"
				:indent="$indent"
				:selected="$selected"
			/>

			@if(count($option->children))
				<x-backend.partials.nav.select.children
					:children="$option->children"
					:depth="$depth"
					:indent="$indent"
					:selected="$selected"
				/>
			@endif
		@endforeach
	</select>

	@error($name)
		<span class="form-response">
			{{ $message }}
		</span>
	@enderror
@if ($formGroup == true)
	</div>
@endif
