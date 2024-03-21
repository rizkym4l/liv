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
    

    @livewire('detail-karyawan',[
        'id' => $id
    ])

    </div>
@endsection
