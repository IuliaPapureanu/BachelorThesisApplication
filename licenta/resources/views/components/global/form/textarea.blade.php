@props([
	'formGroup' => true,
	'label' => false,
	'name',
	'value' => '',
	'id' => false,
	'placeholder' => false,
	'maxlength' => '65000',
	'rows' => '4',
	'autofocus' => false,
	'autocomplete' => false,
	'readonly' => false,
	'disabled' => false,
	'required' => false,
])
@if ($formGroup == true)
	<div class="form-group">
@endif
	<label>
	   {{ $label }}
	</label>

	<textarea
		name="{{ $name }}"
        style="height: 200px;"
		class="form-control h-5"
		{{ $id ? 'id=' . $id : '' }}
		{{ $placeholder ? 'placeholder=' . $placeholder : '' }}
		maxlength="{{ $maxlength }}"
		rows="{{ $rows }}"
		{{ $autofocus ? 'autofocus' : '' }}
		{{ $autocomplete ? 'autocomplete' : '' }}
		{{ $readonly ? 'readonly' : '' }}
		{{ $disabled ? 'disabled' : '' }}
		{{ $required ? 'required' : ''  }}
	>{{ $value }}</textarea>

	@error($name)
		<span class="form-response">
			{{ $message }}
		</span>
	@enderror
@if ($formGroup == true)
	</div>
@endif
