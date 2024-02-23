<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(9);
        return view('pages.blog.indexBlog', compact('blogs'));
    }

    public function adminIndex()
    {
        $blogs = Blog::latest()->paginate(9);
        return view('pages.admin.blog.index', compact('blogs'));
    }

    public function searchBlog(Request $request)
    {
        $blogs = DB::select("SELECT * FROM blogs WHERE title LIKE '" . $request->title . "%' OR id LIKE '" . $request->title . "%'");
        if ($blogs === []){
            return redirect()->back()->with('success', 'No record has been found with this email');
        }
        return view('pages.admin.blog.search')->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'blogContent' => 'required',
            'fileInput' => 'required'
        ]);

        if($request->fileInput){
            $imageName = time().'.'.$request->fileInput->extension();
            $request->fileInput->move(public_path('images/blogImages'), $imageName);
        }

        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->slug = str_replace(' ', '-', $request->input('title'));
        $blog->description = $request->input('description');
        $blog->content = $request->input('blogContent');
        $blog->image = $imageName;
        // You may also associate the blog with a user if you have a user relationship

        $blog->save();

        $blogUrl = url("/blog/{$blog->slug}");
        $blogUrl = str_replace("http://", "https://", $blogUrl);
        $sitemapPath = public_path('site-map.xml'); // Update this based on your actual sitemap path

        if (File::exists($sitemapPath)) {
            $sitemapContent = File::get($sitemapPath);

            // Add the new URL to the sitemap
            $newUrl = "<url><loc>{$blogUrl}</loc><changefreq>daily</changefreq><priority>0.8</priority></url>";
            $sitemapContent = str_replace('</urlset>', $newUrl.'</urlset>', $sitemapContent);

            // Update the last modification date if needed
            // $sitemapContent = preg_replace('/<lastmod>.*?<\/lastmod>/', '<lastmod>'.now().'</lastmod>', $sitemapContent);

            // Save the updated sitemap
            File::put($sitemapPath, $sitemapContent);
        }
        return redirect(route('admin.blogs.index'))->with('success', 'Blog has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('pages.blog.singleBlog', compact('blog'));
    }

    public function showAdmin($id)
    {
        $blog = Blog::find($id);
        return view('pages.admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('pages.admin.blog.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if($request->fileInput){
            $imageName = time().'.'.$request->fileInput->extension();
            $request->fileInput->move(public_path('images/blogImages'), $imageName);
        }else{
            $imageName = $blog->image;
        }


        $blog->update([
            'title' =>$request->title,
            'slug' =>str_replace(' ', '-', $request->slug),
            'description'=>$request->description,
            'content'=>$request->blogContent,
            'image' =>$imageName
        ]);
        return redirect(route('admin.blogs.index'))->with('success', 'Blog has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect(route('admin.blogs.index'))->with('success', 'Blog has been removed');
    }
}
