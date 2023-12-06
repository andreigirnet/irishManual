@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="profileContent">
        <div class="userInfo">
            <div class="userImage">
                @if(auth()->user()->profilePic)
                    <img src="{{asset('images/profilePic/'. auth()->user()->profilePic)}}" alt="">
                @else
                    <img src="{{asset('images/avatars/profile.png')}}" alt="">
                @endif
            </div>
            <form action="{{route('store.profileImg')}}" method="POST" enctype="multipart/form-data" class="uploadFormImage">
                @csrf
                @method('PUT')
                <input type="file" name="image" class="inputFile">
                <button type="submit" class="adminButton">Upload</button>
            </form>
            <div class="userProfileInfo">
                <div class="userNameValue">Your UserName:</div>
                {{auth()->user()->name}}
            </div>
            <div class="userProfileInfo">
                <div class="userEmailValue">Your email:</div>
                {{auth()->user()->email}}
            </div>
            <div class="userProfileInfo">
                <div class="userEmailValue">Created at:</div>
                {{auth()->user()->created_at}}
            </div>
        </div>
        <div class="userUpdate">
            <form class="userUpdateForm" action="{{route('password.dashboard.update', auth()->user()->id)}}" method="POST">
                <div class="formTitle">Change your password</div>
                @csrf
                @method('PUT')
                <label class="formLabel" for="userName" style="font-size: 20px">Old Password</label>
                <input class="formInputProfile" type="password" name="oldPassword" style="width: 100%; height: 45px">
                <label class="formLabel" for="userName" style="font-size: 20px">New Password</label>
                <input class="formInputProfile" type="password" name="newPassword" style="width: 100%; height: 45px">
                <label class="formLabel" for="userName" style="font-size: 20px">Confirm New Password</label>
                <input class="formInputProfile" type="password" name="confirmNewPassword" style="width: 100%; height: 45px">
                <button class="adminButton" type="submit" style="font-size: 20px">Update</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
