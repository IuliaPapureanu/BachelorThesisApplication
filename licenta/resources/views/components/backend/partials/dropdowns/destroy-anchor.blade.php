{{--
Certain elements are placed inside a form (e.g. deleting a product image, inside the edit product form)
so the form cannot be used here, while being inside another form
--}}

@props([
	'route' => false,
	'confirm' => false,
	'alert' => false,
	'label' => false,
	'class'
])

<a href="{{ $route }}" class="dropdown-item {{ $class }}"
onclick="return confirm('{{ $confirm }}')" data-alert="{{ $alert}}">
	<i class="icon-trash"></i>
	{{ $label }}
</a>
