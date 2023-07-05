@props([
	'item',
	'parent_id' => false,
	'indent',
	'selected' => false
])

<option value="{{ $item->id }}" {{ $selected == $item->id ? 'selected="selected"' : '' }}>
	{!! $indent !!}
	{{ $item->title }}
</option>