@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Edit Blog</div>
        <div class="formEdit">
            <form action="{{route('blog.update', $blog->id)}}" method="POST" class="registerEmployeeForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if($blog->image)
                    <img src="{{asset('images/blogImages/'. $blog->image)}}" alt="" style="width: 100%">
                @endif
                <input type="file" name="fileInput">
                <label class="formLabel" for="editName">Blog Title</label>
                <input class="formInputProfile" type="text" id="editName" name="title" value="{{$blog->title}}">
                <label class="formLabel" for="editName">Blog Slug</label>
                <input class="formInputProfile" type="text" id="editName" name="slug" value="{{$blog->slug}}">
                <label class="formLabel" for="editName">Blog Description</label>
                <input class="formInputProfile" type="text" id="editName" name="description" value="{{$blog->description}}">
                <label class="formLabel" for="editEmail">Content</label>
                <!-- Place the first <script> tag in your HTML's <head> -->
                <script src="https://cdn.tiny.cloud/1/pgal37qe4cgquwsgonvp0ix3ld3pjrui1uioy8u9v5p02mt9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

                <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
                <script>
                    tinymce.init({
                        selector: 'textarea',
                        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                    });
                </script>
                <textarea name="blogContent" >
                    {{$blog->content}}
                </textarea>
                <button type="submit" class="adminButton">Update</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
