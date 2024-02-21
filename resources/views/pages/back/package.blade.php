@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">My Courses</div>
        @if(count($packages))
            <table class="styled-table">
                <thead>
                <tr>
                    <th>Action</th>
                    <th class="hiddenRows">Package ID</th>
                    <th>Course Name</th>
                    <th class="hiddenRows">Status</th>
                    <th>Certificate</th>
                </tr>
                </thead>
                <tbody>
                @foreach($packages as $package)
                    <tr>
                        <td class="actionOrder">
                            {{--                        <form class="deleteFormOrders" action="" method="POST">@csrf @method('DELETE')<button class="submitDeleteOrder"><img src="{{asset('images/icons/bin.png')}}" alt=""></button></form>--}}
                            @if($package->status === 'purchased')
                                <a href="{{route('package.share',$package->id)}}"><div class="shareCourseButton">Send Course</div></a>
                                <a href="{{route('course.index',$package->id)}}" class="startCourseButton">Start Course</a>
                            @else
                                <div class="greenMessage">This course has been completed</div>
                                <a href="{{route('course.index',$package->id)}}" class="startCourseButton">View Course</a>
                            @endif
                        </td>
                        <td class="hiddenRows" style="color: black">{{$package->id}}</td>
                        <td style="color: black">{{$package->course_name}}</td>
                        <td class="hiddenRows" style="color: black">{{$package->status}}</td>
                        @if($package->certificate_id)
                            <td><a href="{{route('certificate.download', $package->certificate_id)}}"><img class="invoiceLink" src="{{asset('images/icons/pdf.png')}}" alt=""></a></td>
                        @else
                            <td>-</td>
                        @endif
                    </tr>
                @endforeach
                {{--        <tr class="active-row">--}}
                {{--            <td>Melissa</td>--}}
                {{--            <td>5150</td>--}}
                {{--        </tr>--}}
                {{--        <!-- and so on... -->--}}
                </tbody>
            </table>
            <div class="paginationContainer">
                {{ $packages->links('paginator') }}
            </div>
        @else
            <div class="textAdmin">No Courses at the moment</div>
            <a href="/home" class="sale-button" >Buy a course here</a>
        @endif
    </div>
    <script src="{{asset('js/adminPage.js')}}"></script>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
