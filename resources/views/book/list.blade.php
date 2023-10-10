@foreach ($books as $book)
    <form action="/api/books/{{$book->id}}" method="post">
        @crsf
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$brand->name}}">
        </div>
    </form>
@endforeach

<a href="{{ url('/books/new') }}">Új könyv hozzáadása</a><br>