@extends('layouts.app')

@section('content')
    @if (session('error'))
        <div class="flex justify-center">
            <div class="w-4/12 bg-white p-6 rounded-lg">

                <div class="text-red-500 mt-2 text-sm">
                    {{session(('error'))}}
                </div>
            </div>
        </div>
    @endif
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Dashboard
        </div>
        </div>
@endsection