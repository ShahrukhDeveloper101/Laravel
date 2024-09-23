@include('admin.components.head')
<style>
  #addTag{
    position: absolute;
    right: .55rem;
    top: 2.34rem;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    font-weight: 600;
  }
</style>
<body>
  <!-- ======= Header ======= -->
  @include('admin.components.header')
  <!-- End Header -->
  <!-- ======= Sidebar ======= -->
  @include('admin.components.sidebar')
  <!-- End Sidebar-->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Portfolio</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Portfolio</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12  ">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ isset($blog) ? 'Edit' : 'Add' }} Portfolio</h5>
                  <!-- Horizontal Form -->
                  <form action="{{ isset($blog) ? route('admin.update_blog', $blog->id) : route('admin.store_blog') }}" method="POST" enctype="multipart/form-data" id="blogForm">
                    @csrf
                    @if(isset($blog))
                      @method('PUT')
                    @endif
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" required value="{{ $blog->title ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Category</label>
                            <input type="text" class="form-control" name="category" required value="{{ $blog->category ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Industry</label>
                            <input type="text" class="form-control" name="industry" required value="{{ $blog->industry ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Banner Image</label>
                            @if(isset($blog) && !empty($blog->banner_image))
                              <br>
                              <img width="300" src="{{asset('uploads/blog/'.$blog->banner_image)}}" class="mt-2">
                              <br>
                              <br>
                              <input type="file" class="form-control" name="banner_image">
                            @else
                              <input type="file" class="form-control" name="banner_image" required>
                            @endif
                        </div>
                        <div class="col-6 position-relative">
                          <label class="col-form-label">Tags</label>
                          <input type="text" id="tagsInput" class="form-control" value="{{ $blog->tags ?? '' }}">
                          <button id="addTag" class="btn btn-warning" type="button">Add</button>
                          <ul id="tagsList"></ul>
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">SEO Description</label>
                            <textarea class="form-control" name="seo_description">{!! $blog->seo_description ?? '' !!}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="col-form-label">Main Description</label>
                            <textarea class="tinymce-editor" name="main_description">{!! $blog->main_description ?? '' !!}</textarea>
                        </div>
                        <input type="hidden" name="tags" id="InputTags" value="{{ $blog->tags ?? '' }}">
                    </div>
                    <div class="text-end">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
        </div>
      </div>
    </section>
  </main>
  @include('admin.components.footer')
<script>
  $(document).ready(function(){
    var tagsArray = [];
    $("#addTag").click(function(){
      var tag = $("#tagsInput").val().trim();
      if(tag !==""){
        tagsArray.push(tag);
        $("#tagsList").append("<li>"+tag+"</li>");
        $("#tagsInput").val("");
        $("#InputTags").val(JSON.stringify(tagsArray));
      }
    });
  });
</script>
</body>
</html>