<x-layouts.backend>


    @error('tag_id')
    <div class="alert alert-danger" role="alert">
        You must choose a company tag!
    </div>
    @enderror
    <div class="card m-2">
        <div class="card-body">
            <h2 class="card-title">Send Message</h2>
            <form action="{{ route('messages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-3">
                        <div class="m-2">
                            <label for="tag_id">Select Company Tag</label>
                            <select class="form-control form-select" name="tag_id" aria-label="Default select example" required>
                                <option selected disabled>Select tag</option>
                                @foreach($allTags as $assignTag)
                                    <option name="tag_id" value="{{ $assignTag->id }}">{{ $assignTag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="m-2">
                            <x-global.form.input
                                :label="__('messages.label.subject')"
                                name="subject"
                                :value="old('subject') ?? '' ?? old('subject')"
                                required
                            />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg">
                        <div class="m-2">
                            <x-global.form.textarea
                                :label="__('messages.label.content')"
                                name="message_content"
                                id="message_content"
                                :value="old('message_content') ?? '' ?? old('message_content')"
                                required
                            >
                            </x-global.form.textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-danger active m-2" onclick="return confirm('Are you sure you want to send this email?')"> Send Message</button>
            </form>
        </div>
    </div>

</x-layouts.backend>
