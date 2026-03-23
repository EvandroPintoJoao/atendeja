@if (session()->has('success'))
    <p
        style="color: rgb(43, 193, 70); border:2px solid rgb(22, 177, 51);border-radius: 5px; text-align: center;padding: 4px; width: 400px;">
        {{ session()->get('success') }}</p>
@endif

@if (session()->has('error'))
    <p
        style="color: rgb(198, 36, 11); border:2px solid rgb(198, 36, 11);border-radius: 5px; text-align: center;padding: 4px; width: 400px;">
        {{ session()->get('error') }}</p>
@endif

@if ($errors->any())
    <ul
        style="color: rgb(198, 36, 11); border:2px solid rgb(198, 36, 11);border-radius: 5px; text-align: center;padding: 4px; width: 400px;">

        @foreach ($errors->all() as $error)
            <li> {{ $error }} <br></li>
        @endforeach
    </ul>
@endif
