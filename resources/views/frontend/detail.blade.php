@extends('layouts.frontend')

@section('content')
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home') }}" rel="nofollow">beranda</a>
                <a rel="nofollow"><span></span> detail </a>
                <span></span> {{ $mobil->nama }}
                <span></span>
            </div>
        </div>
    </div>
    
@endsection
