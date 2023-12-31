@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Edit Order</div>
        <div class="formEdit">
            <form action="{{route('order.update', $order->id)}}" method="POST" class="registerEmployeeForm">
                @csrf
                @method('PUT')
                <label class="formLabel" for="quantity">Quantity</label>
                <input class="formInputProfile" type="number" id="quantity" name="quantity" value="{{$order->quantity}}">
                <label class="formLabel" for="adress">Address</label>
                <input class="formInputProfile" type="text" id="adress" name="address" value="{{$order->address}}">
                <label class="formLabel" for="county">County</label>
                <input class="formInputProfile" type="text" name="county" value="{{$order->county}}">
                <label class="formLabel" for="city">City</label>
                <input class="formInputProfile" type="text"  name="city" value="{{$order->city}}">
                <label class="formLabel" for="country">Country</label>
                <input class="formInputProfile" type="text" id="country" name="country" value="{{$order->country}}">
                <button type="submit" class="adminButton">Update</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
