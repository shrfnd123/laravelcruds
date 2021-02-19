@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<table>
<tr>
<th>user ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th></tr>
<tr>
<td>{{Auth::user()->id}}</td>
<td>{{Auth::user()->name}}</td>
<td>{{Auth::user()->email}}</td>
<td><a href>Action</a></td>
</tr>
</table>
                   <!-- You are logged in! {{Auth::user()->name}} -->
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
