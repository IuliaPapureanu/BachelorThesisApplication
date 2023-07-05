<form action="{{ $route }}" method="POST">
	@csrf
	@method('DELETE')
	<button type="submit" name="submit" value="submit" class="dropdown-item"
	onclick="return confirm('{{ $confirm }}')">
		<i class="icon-trash"></i>
		{{ $label }}
	</button>
</form>