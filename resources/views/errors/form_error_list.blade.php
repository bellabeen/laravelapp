@if($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $errors)
            <li> {{ $errors }} </li>
        @endforeach
    </ul>
@endif
