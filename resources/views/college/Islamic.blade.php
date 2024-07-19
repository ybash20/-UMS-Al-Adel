@extends('layouts.master')
@section('title')
    @if (App::getLocale() == 'ar')
        {{ $college->Name_Arabic }}
    @else
        {{ $college->Name_English }}
    @endif
@endsection
@section('islamic', 'active')
@section('college', 'active')

@section('main')
@section('main')
@if (App::getLocale() == 'ar')
<link rel="stylesheet" href="{{ asset('css/cssAr/css_college.css') }}"> 
@else
<link rel="stylesheet" href="{{ asset('css/cssEN/css_college.css') }}"> 
@endif
<div class="container">
    <div class="content-q4i p-cby">
        <div class="row-nvg item-dr7">
            <div class="box-content p-4">
                <div class="row align-items-xl-center">
                    <div class="col-9">
                        <h2 class="font-weight-normal text-6">{{ cbLang('Dean speech') }}&nbsp;<br>
                            @if (App::getLocale() == 'ar')
                                <strong class="font-weight-extra-bold">{{ $college->Dean_Arabic }}</strong>
                            @else
                                <strong class="font-weight-extra-bold">{{ $college->Dean_English }}</strong>
                            @endif
                        </h2>
                    </div>
                </div>
                <div class="row py-4 text-end">
                    <div class="col">
                        @if (App::getLocale() == 'ar')
                            <p class="text-3-4">{!! $college->Dean_Speech_Arabic !!}</p>
                        @else
                            <p class="text-3-4">{!! $college->Dean_Speech_English !!}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-q4i p-cby">
        <div class="row-nvg item-dr7">
            <div class="col-qxc">
                <div class="col-qxc">
                    <div class="box-content p-4">
                        <div class="row align-items-xl-center">
                            <div class="col-9">
                                <h2 class="font-weight-normal text-6">{{ cbLang('About the college') }}&nbsp;<br></h2>
                            </div>
                        </div>
                        <div class="row py-4 text-end">
                            <div class="col">
                                @if (App::getLocale() == 'ar')
                                    <p class="text-3-4">{!! $college->Description_Arabic !!}</p>
                                @else
                                    <p class="text-3-4">{!! $college->Description_English !!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="res-i5c" class="section-j6v">
        <div class="section-header">
            <div class="section-header-inner">
                <h2 class="font-weight-normal text-6">{{ cbLang('Sections') }}&nbsp;<br>
            </div>
        </div>
        <div class="content">
            @foreach($college->majors as $major)
                <div id="major-{{ $major->id }}" class="section1">
                    <h2 class="h2">
                        @if (App::getLocale() == 'ar')
                            {{ $major->Name_Arabic }}
                        @else
                            {{ $major->Name_English }}
                        @endif
                    </h2>
                    <p>
                        @if (App::getLocale() == 'ar')
                            {!! $major->Description_Arabic !!}
                        @else
                            {!! $major->Description_English !!}
                        @endif
                    </p>
                </div>
            @endforeach
        </div>
    </section>
    <section id="res-i5c" class="section-j6v">
        <div class="section-header">
            <div class="section-header-inner">

               <h2 class="font-weight-normal text-6">{{ cbLang('Objectives') }}&nbsp;<br></h2>
            </div>
        </div>
        <div class="container">
            <div class="content-q4i p-cby">
                <div class="row-nvg item-dr7">
                    <div class="col-qxc">
                        <div class="box-content p-4">
                            <div class="row align-items-xl-center">
                            </div>
                            <div class="row py-4 text-end">
                                <div class="col">
                                    <p class="text-3-4">
                                        @if (App::getLocale() == 'ar')
                                            {!! $college->Objectives_Arabic !!}
                                        @else
                                            {!! $college->Objectives_English !!}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    @endsection