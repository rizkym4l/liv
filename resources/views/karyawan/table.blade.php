@extends('layouts.app')

@push('styles')
    @livewireStyles
@endpush
@push('scripts')
    @livewireScripts
@endpush


@section('contents')
@if (session()->has('success'))
<div class=" py-0 md:py-0">
    @else
<div class=" py-0 md:py-10">

    @endif
    <span>
        @if (session()->has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:text-green-400" role="alert">
        <span class="font-medium">Success alert!</span> {{session('success')}}
      </div>

  
@endif
@livewire('karyawan-table')
@endsection