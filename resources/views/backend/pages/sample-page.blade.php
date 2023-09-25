@extends('backend.app')
@section('title', 'This is Sample Page')
@prepend('styles')
@endprepend
@section('content')
    <div class="page-wrapper dashboard-wrap">

        <div class="content container-fluid">
            <div class="row justify-content-center">
                <h1 class="center">Sample Page</h1>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
@endpush
