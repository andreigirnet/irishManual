@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Ips</div>
        @if(count($ips))
        <ol style="margin-top: 100px; font-size: 25px">
            @foreach($ips as $ip)
                <li>{{$ip->country}} - {{$ip->ip}}</li>
            @endforeach

        </ol>
        @else
        <div style="font-size: 35px">No Ips registered for this user</div>
        @endif
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
