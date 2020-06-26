@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <textarea id="konten" name="konten" hidden></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('vendor/react/umd/react.production.min.js') }}"></script>
<script src="{{ asset('vendor/react-dom/umd/react-dom.production.min.js') }}"></script>

<script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
<script>
    const options = {
        laravelFilemanager: {
            prefix: 'laravel-filemanager' 
        }
    }
    Laraberg.init('konten', options)
</script>
@endsection