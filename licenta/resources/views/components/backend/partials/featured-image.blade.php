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
			name="image"
			class="form-control-uniform"
			data-fouc
		/>
	</div>

	@if ( ! $multiple)
		@if($model->image)
			<div class="col-12">
				<p>
					{{ $label }}
				</p>
			</div>

			<div class="col-lg-4">
				<img src="{{ asset('storage/' . $path . '/' . $model->image) }}" alt="" class="thumbnail img-fluid" />
			</div>
		@endif
	@elseif ($multiple)
		<div class="col-12">
			<p>
				{{ $label }}
			</p>
		</div>

		@foreach($model as $image)
			<div class="col-12 col-lg-3 sortable-thumbnail" data-id="{{ $image->id }}">
				<div class="card">
					<div class="card-img-actions mx-1 mt-1">
						<a href="{{ asset('storage/' . $path . '/' . $image->image) }}" data-popup="lightbox" rel="group">
							<div class="image-ratio" style="background-image:url('{{ asset('storage/' . $path . '/' . $image->image) }}')">
							</div>
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