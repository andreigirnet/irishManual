@extends('front.app')
@section('content')
    <div class="secondaryBannerTeam">
        <div class="secondaryBannerTeamLayer"></div>
        <div class="secondaryBannerTitle">Blog</div>
    </div>
    <div class="blogContainer">
        <div class="blogInnerSingle">
            <div class="singleBlogTitleContainer">
                <h1 class="singleBogTitle">{{$blog->title}}</h1>
            </div>
            <div class="imgSingleBlogContainer">
                <img src="{{asset('images/blogImages/'. $blog->image)}}" alt="" class="singleBlogImage" >
            </div>
            <div class="blogSingleContentContainer">
                <div class="blogSingleContent">
                    {!! $blog->content !!}
                </div>
            </div>
        </div>
    </div>

@endsection
