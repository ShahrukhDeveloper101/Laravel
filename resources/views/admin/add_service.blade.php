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
      <h1>Service</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Service</li>
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
                  <h5 class="card-title">{{ isset($service) ? 'Edit' : 'Add' }} Service</h5>
                  <!-- Horizontal Form -->
                  <form action="{{ isset($service) ? route('admin.update_service', $service->id) : route('admin.store_service') }}" method="POST" enctype="multipart/form-data" id="serviceForm">
                    @csrf
                    @if(isset($service))
                      @method('PUT')
                    @endif
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="name" required value="{{ $service->name ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" required value="{{ $service->title ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Category</label>
                            <input type="text" class="form-control" name="category" required value="{{ $service->category ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">SEO Description</label>
                            <input type="text" class="form-control" name="seo_description" required value="{{ $service->seo_description ?? '' }}">
                        </div>
                        <div class="col-6 position-relative">
                          <label class="col-form-label">Tags</label>
                            <input type="text" id="tagsInput" class="form-control">
                            <button id="addTag" class="btn btn-warning" type="button">Add</button>
                          <ul id="tagsList">
                            @php
                                $tags = json_decode($service->tags); // Decode JSON to PHP array
                            @endphp
                            @if (!empty($tags) && is_array($tags))
                              @foreach ($tags as $tag)
                                {{ $tag }} ,
                              @endforeach
                            @else
                              <p>No tags available.</p>
                            @endif
                          </ul>
                        </div>
                        <input type="hidden" name="tags" id="InputTags" value="{{ $seo->tags ?? '' }}">
                        <div class="col-6">
                            <label class="col-form-label">Logo</label>
                              @if(isset($service) && !empty($service->logo))
                                  <br>
                                  <img width="300" src="{{asset('uploads/service/'.$service->logo)}}" class="mt-2">
                                  <br>
                                  <br>
                                  <input type="file" class="form-control" name="logo">
                              @else
                                <input type="file" class="form-control" name="logo" required>
                              @endif
                          </div>
                        <div class="col-6">
                            <label class="col-form-label">Banner Image</label>
                            @if(isset($service) && !empty($service->banner_image))
                              <br>
                              <img width="300" src="{{asset('uploads/service/'.$service->banner_image)}}" class="mt-2">
                              <br>
                              <br>
                              <input type="file" class="form-control" name="banner_image" >  
                            @else
                              <input type="file" class="form-control" name="banner_image" required>  
                            @endif
                        </div>
                        <div class="col-12">
                            <label class="col-form-label">Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="10">{!! $service->description ?? '' !!}</textarea>
                        </div>
                    </div>
                    <div class="text-end">
                      <button type="submit" class="btn btn-primary">Add Service</button>
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