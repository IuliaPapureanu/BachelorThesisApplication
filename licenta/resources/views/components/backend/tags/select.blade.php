@props([
'schoolClasses' => false,
'model' => false,
'defaultOption' => false
])

<div class="form-group">
    <label for="tag_id">
        {{ __('school_classes.label.title') }}
    </label>
{{--        TO DO--}}
    <select name="tag_id"
{{--            id="{{ (--}}
{{--		request()->url() == route('school_catalogs.create') OR--}}
{{--		request()->url() == route('school_catalogs.edit', request()->segment(3)) OR--}}
{{--		request()->url() == route('teacher_clockings.create') OR--}}
{{--		request()->url() == route('teacher_clockings.edit', request()->segment(3))--}}
{{--	) ? "school_class_id_teacher" : "school_class_id"}}"--}}
            class="form-control select-search select2-hidden-accessible">

{{--        @if($defaultOption == true)--}}
{{--            <option value="">--}}
{{--                {{ __('defaults.label.select') }}--}}
{{--            </option>--}}
{{--        @endif--}}

        @foreach($allTags as $schoolClass)

            <option value="{{ $assignTag->id }}" {{ $selected }}>
                {{ $assignTag->name }}
            </option>
        @endforeach

{{--        @foreach($allTags as $assignTag)--}}
{{--            <option name="tag_id" value="{{ $assignTag->id }}">{{ $assignTag->name }}</option>--}}
{{--        @endforeach--}}

    </select>
</div>
