<x-layouts.backend>

    {{--    <x-backend.partials.content-wrapper>--}}
    <div class="card-body">
        <form action="{{ route('tags.update',['tag' => $tag->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            <x-backend.tags.form-fields
                :tag="$tag"
            />
        </form>
    </div>
    {{--    </x-backend.partials.content-wrapper>--}}

</x-layouts.backend>
