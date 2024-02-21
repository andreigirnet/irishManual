@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Your payment has been successfully processed.</div>
        <a href="{{route('package.index')}}" class="sale-button" style="margin-top: 30px">View courses</a>
    </div>
    <script src="{{asset('js/adminPage.js')}}"></script>
@endsection
