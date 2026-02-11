{{--@extends('layouts.app')--}}
@extends('adminlte::page')


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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>


@livewire('home-component')


</div>
@endsection
@section('js')
  <script src="{{ asset('js/calendario.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  {{--@vite(['resources/js/app.js', 'resources/css/app.css'])--}}

  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js"></script>
  
  <script type="text/javascript">
        //var BaseURL= { !!json_encode(url('/')) }
        var BaseURL= {!! json_encode(url('/')) !!}
      //console.log(BaseURL);
  </script>
  

  
@stop