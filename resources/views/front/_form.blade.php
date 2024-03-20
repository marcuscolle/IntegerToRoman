<form action="{{route('front.convert')}}" method="POST">
    @csrf
        <x-input
            id="converter"
            type="text"
            name="converter"
            label="Enter a Number or Roman numeral"
            required="true"
        />

    <button type="submit" class="btn btn-primary">Convert</button>

</form>
