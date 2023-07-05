@csrf
<div class="row">
	<div class="col-lg-6 p-2">
		<x-global.form.input
            :label="__('company.label.name')"
			name="name"
			:value="old('name') ?? $company->name ?? old('name')"
			required
		/>
    </div>
    <div class="col-lg-6 p-2">
		<x-global.form.input
            :label="__('company.label.address')"
			name="address"
			:value="old('address') ?? $company->address ?? old('address')"
			required
		/>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 p-2">

        <x-global.form.input
            :label="__('company.label.county')"
            name="county"
            :value="old('county') ?? $company->county ?? old('county')"
            required
        />
    </div>
    <div class="col-lg-6 p-2">
        <x-global.form.input
            :label="__('company.label.city')"
            name="city"
            :value="old('city') ?? $company->city ?? old('city')"
            required
        />
    </div>
</div>
<div class="row">
    <div class="col-lg-6 p-2">
        <x-global.form.input
            :label="__('company.label.administrator')"
            name="administrator"
            :value="old('administrator') ?? $company->administrator ?? old('administrator')"
            required
        />
    </div>
    <div class="col-lg-6 p-2">
        <x-global.form.input
            :label="__('company.label.admin_email')"
            name="admin_email"
            :value="old('admin_email') ?? $company->admin_email ?? old('admin_email')"
            required
        />
    </div>
</div>


{{--</div>--}}

{{--@dd("BUTTONS",$buttonLabel)--}}
<x-backend.partials.buttons.form-buttons
	:closeButtonLink="route('companies.index')"
/>
