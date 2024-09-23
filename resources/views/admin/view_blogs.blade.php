@include('admin.components.head')
<style>
  /* Dropdown Button */
.dropbtn {
  font-size: 16px;
  cursor: pointer;
  border: none;
  background: transparent
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 80px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
<body>

  <!-- ======= Header ======= -->
  @include('admin.components.header')

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.components.sidebar')

  <!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              {{-- <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div> --}}

              <div class="card-body">
                <h5 class="card-title">Portfolios</h5>
                @if (Session::has('success'))
                    <div class="col-md-10 alert alert-success mx-4">
                        {{Session::get('success')}}
                    </div>
                @endif
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Banner</th>
                      <th scope="col">Industry</th>
                      <th scope="col">Category</th>
                      <th scope="col">Tags</th>
                      <th scope="col">Created at</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($blog->isNotEmpty())
                      @php $count = 0; @endphp
                      @foreach ($blog as $key)
                        @php
                          $count++;
                          $tags = json_decode($key->tags); // Decode JSON to PHP array
                        @endphp
                        <tr>
                          <th scope="row"># {{$count}} </th>
                          <td>{{$key->title}}</td>
                          <td><img src="../uploads/blog/{{$key->banner_image}}" width="100"></td>
                          <td>{{$key->industry}}</td>
                          <td>{{$key->category}}</td>
                          <td>
                            @if (!empty($tags) && is_array($tags))
                              @foreach ($tags as $tag)
                                {{ $tag }} ,
                              @endforeach
                            @else
                              <p>No tags available.</p>
                            @endif
                          </td>
                          <td>{{$key->created_at}}</td>
                          <td>
                            <div class="dropdown">
                              <button onclick="myFunction({{$key->id}})" class="dropbtn"> 
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                             
                              <div id="myDropdown{{$key->id}}" class="dropdown-content">
                                <a href="{{route('admin.blog',$key->id)}}">View</a>
                                <a href="{{route('admin.blog_edit',$key->id)}}">Edit</a>
                                <a onclick="delete_blog({{$key->id}})">Delete</a>
                                <form action="{{route('admin.delete_blog',$key->id)}}" method="post" id="blog-{{$key->id}}">
                                  @csrf
                                  @method('delete')
                                </form>
                              </div>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->
        <!-- Right side columns -->
        
      </div>
    </section>

  </main><!-- End #main -->

   

  <!-- Vendor JS Files -->
@include('admin.components.footer')
 
<script>
  /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction(id) {
  document.getElementById("myDropdown"+id).classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function delete_blog(id){
  if(confirm("Are you sure want to delete this blog?")){
    document.getElementById("blog-"+id).submit();
  }
}
</script>
</body>

</html>