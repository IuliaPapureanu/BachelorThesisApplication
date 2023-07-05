@props([
	'route',
	'label',
	'blank' => false
])

<a href="{{ $route }}" class="dropdown-item" {{ $blank ? 'target="_blank"' : '' }}>
	<i class="icon-search4"></i>
	{{ $label }}
</a>