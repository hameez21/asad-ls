@extends('/layouts/app')

@section('content')
    <div class='main card' style='padding:5%;'>
        <h4 class='display-4 text-center'>Welcome</h4>
        <p class='text-center'>Login to get started</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg" >Login</a>
    </div>

@endsection