@props([
	'closeButtonLink' => '',
	'buttonLabel' => __('defaults.label.save_and_close'),
	'save' => true
])

@if ($save == true)
        <button type="submit" name="save" value="save" class="btn btn-primary active m-3">
            <i class="icon-checkmark5"></i>
            Save
        </button>
@endif


<button type="submit" name="save_and_close" value="save_and_close" class="btn btn-primary active m-3">
	<i class="icon-checkmark5"></i>
    Save and close
</button>

<a href="{{ $closeButtonLink }}" class="btn btn-danger float-right active m-3">
	<i class="icon-cancel-circle2"></i>
    Close
{{--	{{ __('defaults.label.cancel') }}--}}
</a>
