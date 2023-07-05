@csrf
<div class="row">
    <div class="col-lg-6">
        <x-global.form.input
            :label="__('tags.label.name')"
            name="name"
            :value="old('name') ?? $tag->name ?? old('name')"
            required
        />
    </div>
</div>

{{--@dd("BUTTONS",$buttonLabel)--}}
<x-backend.partials.buttons.form-buttons
    :closeButtonLink="route('companies.index')"
/>
