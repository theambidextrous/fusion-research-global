@extends('layouts.main')

@section('meta')
    @include('commons.meta')
@endsection


@section('nav')
    @include('commons.nav')
@endsection


@section('slider')
    @include('commons.slider')
@endsection

@section('about')
    <br><br>
    @include('commons.about')
@endsection

@section('services')
    @include('commons.services')
@endsection

@section('trainings')
    @include('commons.trainings')
@endsection


@section('footer')
    @include('commons.footer')
@endsection


@section('scripts')
    @include('commons.scripts')
@endsection