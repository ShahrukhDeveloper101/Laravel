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
          <li class="breadcrumb-item active">SEO</li>
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
                  <h5 class="card-title">{{ isset($seo) ? 'Edit' : 'Add' }} SEO</h5>
                  <!-- Horizontal Form -->
                  <form action="{{route('admin.update_seo', $seo->id)}}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($seo))
                      @method('PUT')
                    @endif
                    <div class="row mb-3">
                        <div class="col-6">
                            <label class="col-form-label">Title</label>
                            <input type="text" class="form-control" name="title" required value="{{ $seo->title ?? '' }}">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">SEO Description</label>
                            <textarea class="form-control" name="seo_description">{!! $seo->seo_description ?? '' !!}</textarea>
                        </div>
                        <div class="col-6 position-relative">
                          <label class="col-form-label">Tags</label>
                            <input type="text" id="tagsInput" class="form-control">
                            <button id="addTag" class="btn btn-warning" type="button">Add</button>
                          <ul id="tagsList">
                            @php
                                $tags = json_decode($seo->tags); // Decode JSON to PHP array
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