<form action="{{route('front.convert')}}" method="POST">
    @csrf
        <x-input
            id="integer"
            type="text"
            name="integer"
            placeholder="Enter a number"
            label="Enter a number"
            required="true"
        />

    <button type="submit" class="btn btn-primary">Convert</button>

</form>
