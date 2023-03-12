<option selected disabled value="">Select your country</option>
    @foreach ($myUpozillas as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option> 
    @endforeach
                                                    