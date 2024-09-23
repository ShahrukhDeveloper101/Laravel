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
                  <h5 class="card-title">{{ isset($portfolio) ? 'Edit' : 'Add' }} Portfolio</h5>
                  <!-- Horizontal Form -->
                  <form action="{{ isset($portfolio) ? route('admin.update_portfolio', $portfolio->id) : route('admin.store_portfolio') }}" method="POST" enctype="multipart/form-data" id="portfolioForm">
                    @csrf
                    @if(isset($portfolio))
                      @method('PUT')
                    @endif
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="name" required value="{{ $portfolio->name ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" required value="{{ $portfolio->title ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">SEO Description</label>
                            <input type="text" class="form-control" name="seo_description" required value="{{ $portfolio->seo_description ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Category</label>
                            <input type="text" class="form-control" name="category" required value="{{ $portfolio->category ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Industry</label>
                            <input type="text" class="form-control" name="industry" required value="{{ $portfolio->industry ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Project Type</label>
                            <input type="text" class="form-control" name="project_type" required value="{{ $portfolio->project_type ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Date</label>
                            <input type="date" class="form-control" name="date" required value="{{ $portfolio->date ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Country</label>
                            <input type="text" class="form-control" name="country" required value="{{ $portfolio->country ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Banner Image</label>
                            @if(isset($portfolio) && !empty($portfolio->banner_image))
                              <br>
                              <img width="300" src="{{asset('uploads/portfolio/'.$portfolio->banner_image)}}" class="mt-2">
                              <br>
                              <br>
                              <input type="file" class="form-control" name="banner_image">  
                            @else
                              <input type="file" class="form-control" name="banner_image" required>  
                            @endif
                        </div>
                        <div class="col-6 position-relative">
                          <label class="col-form-label">Tags</label>
                          <input type="text" id="tagsInput" class="form-control">
                          <button id="addTag" class="btn btn-warning" type="button">Add</button>
                        
                          <ul id="tagsList">
                            @if(isset($portfolio) && !empty($portfolio->tags))
                                @php
                                    $tags = json_decode($portfolio->tags); // Decode JSON to PHP array
                                @endphp
                                @if (!empty($tags) && is_array($tags))
                                    @foreach ($tags as $tag)
                                        <li>{{ $tag }}</li>
                                    @endforeach
                                @else
                                    <p>No tags available.</p>
                                @endif
                            @else
                                <p>No tags available.</p>
                            @endif
                          </ul>
                        </div>
                        
                        <input type="hidden" name="tags" id="InputTags" value="{{ isset($portfolio->tags) ? $portfolio->tags : '' }}">
                        
                        <div class="col-6">
                          <label class="col-form-label">Short Description</label>
                          <textarea class="tinymce-editor" name="short_description">{!! $portfolio->short_description ?? '' !!}</textarea>
                        </div>
                        <div class="col-6">
                          <label class="col-form-label">Main Description</label>
                          <textarea class="tinymce-editor" name="main_description">{!! $portfolio->main_description ?? '' !!}</textarea>
                        </div>
                        <div class="col-6">
                          <label class="col-form-label">Order</label>
                          <input type="text" class="form-control" name="order" required value="{{ $portfolio->order ?? '' }}">
                        </div>
                        <div class="col-12" style="margin-top: 5rem;">
                          <label class="col-form-label">All Images</label>
                          @if(isset($portfolio->all_images) && !empty($portfolio->all_images))
                            <div class="row mb-4">
                              @foreach($portfolio->all_images as $image)
                                <div class="col-6">
                                  <img src="{{asset('uploads/portfolio/'.$image)}}" class="mt-2 img-fluid">
                                </div>
                              @endforeach
                            </div>
                            <input type="file" class="form-control" name="all_images[]" multiple>
                          @else
                            <input type="file" class="form-control" name="all_images[]" multiple required>
                          @endif
                        </div>
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