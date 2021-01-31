@extends('layouts.app')

@section('page-title','Privacy Policy')
@section('header','Our Privacy Policy')

@section('content')
@php
    $policy = App\Models\Policy::first();
@endphp

<div class="ltn__404-area ltn__404-area-1 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-404-inner text-center">
                    {{-- <h1 class="error-404-title">404</h1> --}}
                    <h2>Privacy Policy</h2>
                    <article>
                        {{ $policy->details }}
                    </article>
                    <!-- <h3>Oops! Looks like something going rong</h3> -->
                    {{-- <p>Oops! The page you are looking for does not exist. It might have been moved or deleted.</p> --}}
                    <div class="btn-wrapper">
                        <a href="{{ route('home') }}" class="btn btn-transparent"><i class="fas fa-long-arrow-alt-left"></i> BACK TO HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
