@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     <ul>
                         <li><a href="{{ route('register') }}">Create new admin</a></li>
                         <li><a href="{{ url('adminmail/1/edit') }}">Change Admin Email</a></li>
                         <li><a href="{{ url('participants') }}">Participants</a></li> <!-- URL because route returns undefined -->
                         <li><a href="{{ url('periods') }}">Periods</a></li> <!-- URL because route returns undefined -->

                     </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
