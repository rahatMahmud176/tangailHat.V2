<option selected disabled value="">Select your Union</option>
    @foreach ($myUnions as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option> 
    @endforeach
                                                    