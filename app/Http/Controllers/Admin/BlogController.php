<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Blog; 
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();  
        return view('admin.blog.indexblog', compact('blog'));
    }

    public function indexblog()
    {
        // Lấy tất cả bài viết, sắp xếp theo bài mới nhất và phân trang(mỗi trang 3 bài)

        $blogs = Blog::orderBy('created_at', 'desc')->paginate(3);

        return view('frontend.blog', compact('blogs'));
    }

    public function show($id)
    {

    // Lấy bài viết theo ID
    $blog = Blog::findOrFail($id);

    // Lấy bài viết trước và sau
    $pre = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();

    $next = Blog::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();

    return view('frontend.blogdetail', compact('blog', 'pre', 'next'));

    }

    public function creater()
    {
        return view('admin.blog.createrblog');
    }

    public function store(Request $request) 
    {

    // Validate 
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Lưu dữ liệu 
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->content = $request->content;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName(); // Đảm bảo tên file không bị trùng
            $file->move('upload/user/blog', $filename);
            $blog->image = $filename;
        }

        $blog->save();
        return redirect()->route('blog.list')->with('success', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $data = Blog::findOrFail($id);  
        return view('admin.blog.editblog', compact('data'));
    }

    public function update(Request $request, $id)  
    {
        $blog = Blog::findOrFail($id);  
        $data = $request->all();

        if($blog->update($data)) {
            return redirect('admin/blog/list');
        }
    }

    public function delete($id)
    {
        $data = Blog::findOrFail($id);  
        $data->delete();

        if($data){
            return redirect('admin/blog/list');
        }
    }
}
