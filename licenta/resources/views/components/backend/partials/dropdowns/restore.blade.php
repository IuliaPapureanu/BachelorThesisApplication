<form action="{{ $route }}" method="POST">
	@csrf
	@method('PUT')
	<button type="submit" name="submit" value="submit" class="dropdown-item"
	onclick="return confirm('{{ $confirm }}')">
		<i class="icon-upload4"></i>
		{{ $label }}
	</button>
</form>