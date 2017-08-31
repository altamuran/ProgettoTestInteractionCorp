@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading   col-md-12">
                <div class="col-md-3"><a href="{{route('home')}}">TABLE</div></a>
                <div class="col-md-3"><a href="{{route('handle')}}">HANDLE</div></a>
                <div class="col-md-3"><a href="{{route('user')}}">USER</div></a>
                <div class="col-md-3"><a href="{{route('stat')}}">STAT</div></a></div>
                </div>

                <div class="panel-body">
                    <div class="col-md-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    <div class="col-md-9">
                        @include('layouts.table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
