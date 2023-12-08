@extends('front.app')
@section('content')
    <div class="secondaryBannerTeam">
        <div class="secondaryBannerTeamLayer"></div>
        <div class="secondaryBannerTitle">Blog</div>
    </div>

    <div class="blogContainer">
        <div class="blogInner">
            @foreach($blogs as $blog)
                     <div class="card">
                        <div class="card__header">
                            <img src="{{asset('images/blogImages/'. $blog->image)}}" alt="" class="imgBlog" style="width: 600px">
                        </div>
                        <div class="card__body">
                            <span class="tag tag-blue">Safety</span>
                            <h4>{{$blog->title}}</h4>
                            <p>{{$blog->description}}</p>
                        </div>
                        <div class="card__footer">
                            <a href="{{route('front.show.blog', $blog->id)}}" style="color: black">Read more...</a>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection