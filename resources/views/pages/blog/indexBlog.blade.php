@extends('front.app')
@section('content')
    <div class="secondaryBannerContact">
        <div class="secondaryBannerTeamLayer"></div>
        <div class="secondaryBannerTitle">Blog</div>
    </div>

    <div class="blogContainer">
        <div class="blogInner">
            @foreach($blogs as $blog)
                <a href="{{route('front.show.blog', $blog->slug)}}" class="card" style="color: black">
                     <div class="card__header">
                        <img src="{{asset('images/blogImages/'. $blog->image)}}" alt="" class="imgBlog" style="width: 600px">
                     </div>
                     <div class="card__body">
                       <span class="tag tag-blue">Safety</span>
                       <h4>{{$blog->title}}</h4>
                       <p>{{$blog->description}}</p>
                     </div>
                     <div class="card__footer">
                        <span style="color: black">Read more...</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div style="margin-top: 70px">
    {{ $blogs->links('paginator') }}
    </div>
@endsection
