@props([
	'label' => false,
	'type' => 'checkbox',
	'name',
	'value' => '1',
	'class' => 'form-check-input',
	'id' => false,
	'autofocus' => false,
	'autocomplete' => false,
	'checked' => false,
	'disabled' => false,
	'required' => false,

])
<div class="form-check mb-0">
	<input
		type="{{ $type }}"
		name="{{ $name }}"
		value="{{ $value }}"
		class="{{ $class }}"
		{{ $id ? 'id=' . $id : '' }}
		{{ $autofocus ? 'autofocus' : '' }}
		{{ $checked ? 'checked' : '' }}
		{{ $disabled ? 'disabled' : '' }}
		{{ $required ? 'required' : ''  }}
	>

	<label for="{{ $id }}" class="form-check-label mb-0">
		{{ $label }}
	</label>
</div>