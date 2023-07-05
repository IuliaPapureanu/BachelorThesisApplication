@if (config('locale.multilingual') == true)
	<x-global.form.select
		:label="__('defaults.label.locale')"
		name="locale"
		:options="config('locale.languages')"
		:selected="old('locale') ?? $model->locale ?? old('locale')"
	>
	</x-global.form.select>
@else
	<x-global.form.input
		:formGroup="false"
		type="hidden"
		name="locale"
		:value="$model->locale ?? config('app.locale') ?? $model->locale"
	/>
@endif