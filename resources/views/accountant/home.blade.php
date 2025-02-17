@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                  <br>
                    
                    <a href="{{ url('/book-keeping') }}" class="text-sm text-gray-700 dark:text-gray-500 underline float-right">book keeping</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as Accountant!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
