<x-layouts.backend>

    {{--    <x-backend.partials.content-wrapper>--}}
    <div class="card-body">
        <form action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
            <x-backend.tags.form-fields
                :tag="$tag"
            />
        </form>
    </div>
    {{--    </x-backend.partials.content-wrapper>--}}

</x-layouts.backend>
