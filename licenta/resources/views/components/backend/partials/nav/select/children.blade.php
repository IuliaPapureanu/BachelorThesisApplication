@props([
	'item',
	'indent',
	'depth',
	'children',
	'selected' => false
])

@php $depth = $depth + 1 @endphp
@php $indent = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $depth) @endphp

@foreach($children as $child)
	<x-backend.partials.nav.select.parents
		:item="$child"
		:depth="$depth"
		:indent="$indent"
		:selected="$selected"
	/>

	@if(count($child->children))
		<x-backend.partials.nav.select.children
			:children="$child->children"
			:depth="$depth"
			:indent="$indent"
			:selected="$selected"
		/>
	@endif
@endforeach