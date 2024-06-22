<ul className={{$listStyle}} id={{$id}}>
    @foreach ($errors as $error)
        <li key={{$error}} aria-roledescription="alert" className={{$errorStyle}}>{{$error->message}}</li>
    @endforeach
</ul>