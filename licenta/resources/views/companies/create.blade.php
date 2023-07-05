<x-layouts.backend>

    <div class="card">
        <div class="card-body">
{{--            <h4 class="card-title">Add a new company</h4>--}}
            <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                <x-backend.companies.form-fields
                    :company="$company"
                />
            </form>
        </div>
    </div>

</x-layouts.backend>
