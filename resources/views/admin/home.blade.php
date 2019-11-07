@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/adminPage1') }}">Admin page 1</a>
                    <a href="{{ url('/adminPage2') }}">Admin page 2 Not built Yet</a>
                    <a href="{{ url('/adminPage3') }}">Admin page 3 Not built Yet</a>

                    This is Admin Dashboard. You must be privileged to be here !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection