@props([
	'formGroup' => true,
	'label' => false,
	'labelClass' => false,
	'type' => 'text',
	'name',
	'value' => '',
	'class' => 'form-control',
	'id' => false,
	'placeholder' => false,
	'maxlength' => '255',
	'autofocus' => false,
	'autocomplete' => false,
	'readonly' => false,
	'disabled' => false,
	'required' => false,
	'data-fouc' => false
])
@if ($formGroup == true)
	<div class="form-group">
@endif

@if ($label == true AND $type != 'checkbox')
	<label
		{{ $labelClass ? 'class=' . $labelClass : '' }}
		@if ($type == 'radio')
			for="{{ $id }}"
		@endif
	>
		{{ $label }}
	</label>
@endif

<input
	type="{{ $type ?? 'text'}}"
	name="{{ $name }}"
	value="{{ $value }}"
	class="{{ $class . ' form-control' ?? 'form-control'}}"
	{{ $id ? 'id=' . $id : '' }}
	{{-- {{ $placeholder ? 'placeholder="' . $placeholder . '"': '' }} --}}
	placeholder="{{$placeholder}}"
	maxlength="{{ $maxlength }}"
	{{ $autofocus ? 'autofocus' : '' }}
	{{ $autocomplete ? 'autocomplete=off' : '' }}
	{{ $readonly ? 'readonly' : '' }}
	{{ $disabled ? 'disabled' : '' }}
	{{ $required ? 'required' : ''  }}
>

@if ($label == true AND $type == 'checkbox')
	<label for="{{ $name }}">
		{{ $label }}
	</label>
@endif

	@error($name)
		<span class="form-response">
			{{ $message }}
		</span>
	@enderror
@if ($formGroup == true)
	</div>
@endif
