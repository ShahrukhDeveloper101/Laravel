@include('admin.components.head')
@php
$segments = request()->segments();
$lastSegment = end($segments);

// Remove the last 4 characters ("date") and replace with "sent"
if (substr($lastSegment, -4) === 'date') {
    $modifiedSegment = substr_replace($lastSegment, 'sent', -4);
} else {
    $modifiedSegment = $lastSegment; // Fallback in case "date" is not at the end
}
@endphp
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
                <div class="row">
                  @if (Session::has('success'))
                    <div class="col-md-10 alert alert-success mx-4">
                        {{Session::get('success')}}
                    </div>
                @endif
                    <div class="col">
                        <h5 class="card-title">Today Penidng Emails</h5>
                    </div>
                    <div class="col text-end pt-3">
                        <form action="{{ route('admin.start_emailing') }}" method="post">
                            @csrf
                            <input type="hidden" name="segment" value="{{$lastSegment}}">
                            <input type="hidden" name="modifiedSegment" value="{{$modifiedSegment}}">
                            <button type="submit" class="btn btn-primary">Start Emailing</button>
                        </form>
                        {{-- <div id="remainingEmails">0</div> --}}
                    </div>
                </div>

                <table class="table table-borderless datatable text-center">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Website</th>
                      <th scope="col">Project Type</th>
                      <th scope="col">Email is</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if ($emails->isNotEmpty())
                      @foreach ($emails as $key)
                        <tr>
                          <th scope="row"># {{$key->id}} </th>
                          <td><?php if($key->name==""){ echo "-";}else{ echo $key->name; }?></td>
                          <td><a href="#" class="text-primary">{{$key->email}}</a></td>
                          <td><a target="_blank" href="{{$key->website}}">Website</a> </td>
                          <td>{{$key->project_type}}</td>
                          <td>{{ $lastSegment }}</td>
                          <td><?php if($key->$modifiedSegment=="yes"){ echo "<span class='text-success fw-bold'>Sent</span>";}else{ echo "<span class='text-warning fw-bold'>Pending</span>";} ?></td>
                          <td> 
                            <a class="btn btn-danger btn-sm" onclick="delete_email({{$key->id}})">Delete</a>
                            <form action="{{route('admin.delete_email',$key->id)}}" method="post" id="email-{{$key->id}}">
                              @csrf
                              @method('delete')
                            </form> 
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
    // function startEmailing(segment, modifiedSegment) {
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     $.ajax({
    //         url: "{{ route('admin.start_emailing') }}",
    //         type: 'POST',
    //         data: {
    //             segment: segment,
    //             modifiedSegment: modifiedSegment
    //         },
    //         success: function(response) {
    //             if (response.success) {
    //                 // updateRemainingEmails();
    //             } else {
    //                 alert(response.message);
    //             }
    //         },
    //         error: function(xhr) {
    //             console.log("Error Response:", xhr.responseJSON);
    //         }
    //     });
    // }

    // function updateRemainingEmails() {
    //     $.ajax({
    //         url: "{{ route('admin.get_remaining_emails') }}",
    //         type: 'GET',
    //         success: function(response) {
    //             $('#remainingEmails').text(response.remaining);
    //         },
    //         error: function(xhr) {
    //             console.log("Error Response:", xhr.responseJSON);
    //         }
    //     });
    // }
    function delete_email(id){
      if(confirm("Are you sure want to delete this portfolio?")){
        document.getElementById("email-"+id).submit();
      }
    }

</script>

</body>

</html>