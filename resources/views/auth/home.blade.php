@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}

                    <a href="{{ url('/create-accountant') }}" class="text-sm text-gray-700 dark:text-gray-500 underline float-right">create accountant</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as Admin!') }} <br> <br>

                  <p> <b>Items</b></p>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ( $items as $i  => $y)
                          <tr>
                            <th scope="row">{{ $i +1}}</th>
                            <td>{{$y["item"]}}</td>
                            <td>{{$y["type"]}}</td>
                            <td>{{$y["price"]}}</td>
                          </tr>
                            
                          @endforeach
                        </tbody>
                      </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
