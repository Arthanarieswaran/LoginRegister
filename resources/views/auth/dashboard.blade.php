@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <h1>id : {{ Auth::user()->id }}<h1>
                       <h1>Name : {{ Auth::user()->name }}<h1>
                        <h1>Email : {{ Auth::user()->email }}<h1>
                    </div>
                @else
                    <div class="alert alert-success">
                        <h1>id : {{ Auth::user()->id }}<h1>
                            <h1>Name : {{ Auth::user()->name }}<h1>
                             <h1>Email : {{ Auth::user()->email }}<h1>
                    </div>       
                @endif  
                
                    <div>
                        <a href="{{ url('users_details') }}">users</a>
                    </div>

            </div>
        </div>
    </div>    
</div>
    
@endsection