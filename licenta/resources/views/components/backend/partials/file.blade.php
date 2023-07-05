@props([
	'label',
	'path',
	'model',
	'sortId' => false,
	'multiple' => false,
	'destoryConfirm' => false,
	'destroyAlert' => false,
	'destroyLabel' => false,
	'destroyClass' => false,
])
<div class="row mb-3" id="{{ $sortId}}">
	<div class="col-12">
		<x-global.form.input
			type="file"
			:label="__('defaults.label.upload')"
			name="file"
			class="form-control-uniform"
			data-fouc
		/>
	</div>

	@if ( ! $multiple)
		@if($model->filename)
			<div class="col-12">
				<p>
					{{ $label }}
				</p>
			</div>

			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>
									<a href="{{ asset('storage/' . $path . '/' . $model->filename) }}" target="_blank">
										<i class="icon-file-pdf"></i>
										{{ $model->filename }}
									</a>
								</td>
								<td width="10%" class="text-right">
									<a href="{{ asset('storage/' . $path . '/' . $model->filename) }}" target="_blank"
									class="btn btn-primary btn-sm">
										<i class="icon-file-download"></i>
										{{ __('books/books.label.download') }}
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		@endif
	@elseif ($multiple)
		<div class="col-12">
			<p>
				{{ $label }}
			</p>
		</div>

		@foreach($model as $file)
			<div class="col-12 col-lg-2 sortable-thumbnail" data-id="{{ $file->id }}">
				<div class="card">
					<div class="card-img-actions mx-1 mt-1">
						<a href="{{ asset('storage/' . $path . '/' . $file->filename) }}">
							{{ $file->filename }}
						</a>
					</div>

					<div class="card-body">
						<div class="d-flex align-items-start flex-nowrap">
							<div class="list-icons list-icons-extended ml-auto">
								<div class="dropdown">
									<a href="#" class="list-icons-item text-primary dropdown-toggle" data-toggle="dropdown">
										<i class="icon-cog6"></i>
									</a>

									<div class="dropdown-menu">
										<x-backend.partials.dropdowns.destroy-anchor
											:confirm="$destoryConfirm"
											:alert="$destroyAlert"
											:label="$destroyLabel"
											:class="$destroyClass"
										/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	@endif
</div>