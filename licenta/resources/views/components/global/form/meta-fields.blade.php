<div class="row">
	<div class="col-lg-6">
		<x-global.form.input
			:label="__('defaults.label.meta_title')"
			name="meta_title"
			:value="old('meta_title') ?? $model->meta_title ?? old('meta_title')"
		/>

		<x-global.form.textarea
			:label="__('defaults.label.meta_description')"
			name="meta_description"
			:value="old('meta_description') ?? $model->meta_description ?? old('meta_description')"
		/>
	</div>
</div>
