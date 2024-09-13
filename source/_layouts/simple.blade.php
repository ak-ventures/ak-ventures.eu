@extends('_layouts.master')

@section('body')
<div class="flex justify-center bg-gold-100 text-gray-600 px-4 py-20">
    <div class="container max-w-3xl markdown">
        @yield('content')
    </div>
</div>
@endsection

