@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card row no-gutters clearfix">
                <div class="card-header bg-dark text-light">@yield('card-header')</div>

                <div class="row no-gutters">
                    <div class="card-body col-4 float-left mt-2 my-auto">
@yield('card-image')
                    </div>
                    <div class="card-body col-8 float-right p-3">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="alert alert-{{ session('status_class') ? session('status_class') : 'success' }}" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

@yield('card-content')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
