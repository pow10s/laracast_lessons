@extends('app')


@section('content')
<h1>About</h1>
    @if (count($people))
        <h3>People i like:</h3>
        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam culpa ducimus exercitationem, laudantium maxime modi officia perspiciatis sint vitae? Accusantium animi corporis eligendi laudantium natus pariatur suscipit tenetur ullam!</p>
@stop