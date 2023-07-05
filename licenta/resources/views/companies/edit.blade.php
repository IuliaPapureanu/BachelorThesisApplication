<x-layouts.backend>

    {{--    <x-backend.partials.content-wrapper>--}}
    <div class="card-body">
        <form action="{{ route('companies.update',['company' => $company->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            <x-backend.companies.form-fields
                :company="$company"
            />
        </form>
    </div>
    {{--    </x-backend.partials.content-wrapper>--}}

</x-layouts.backend>
