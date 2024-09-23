<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Portfolio</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.add_portfolio')}}">
              <i class="bi bi-circle"></i><span>Add Portfolio</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.view_portfolios')}}">
              <i class="bi bi-circle"></i><span>View Portfolios</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#services-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="services-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.add_service')}}">
              <i class="bi bi-circle"></i><span>Add Service</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.view_services')}}">
              <i class="bi bi-circle"></i><span>View Services</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#blogs-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Blogs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="blogs-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.add_blog')}}">
              <i class="bi bi-circle"></i><span>Add Blog</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.view_blogs')}}">
              <i class="bi bi-circle"></i><span>View Blogs</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#seo-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>SEO</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="seo-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.seo', 'home')}}">
              <i class="bi bi-circle"></i><span>Home</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.seo', 'about')}}">
              <i class="bi bi-circle"></i><span>About</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.seo', 'services')}}">
              <i class="bi bi-circle"></i><span>Services</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.seo', 'portfolio')}}">
              <i class="bi bi-circle"></i><span>Portfolio</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.seo', 'blog')}}">
              <i class="bi bi-circle"></i><span>Blog</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.seo', 'youtube')}}">
              <i class="bi bi-circle"></i><span>Youtube</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.seo', 'contact')}}">
              <i class="bi bi-circle"></i><span>Contact</span>
            </a>
          </li>          
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#emails-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Emails</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="emails-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.all_emails')}}">
              <i class="bi bi-circle"></i><span>All Emails</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.emails', 'first_email_date')}}">
              <i class="bi bi-circle"></i><span>New Email</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.emails', 'first_followUp_date')}}">
              <i class="bi bi-circle"></i><span>1st Follow Up</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.emails', 'second_followUp_date')}}">
              <i class="bi bi-circle"></i><span>2nd Follow Up</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.emails', 'third_followUp_date')}}">
              <i class="bi bi-circle"></i><span>3rd Follow Up</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.emails', 'fourth_followUp_date')}}">
              <i class="bi bi-circle"></i><span>4th Follow Up</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.emails', 'fifth_followUp_date')}}">
              <i class="bi bi-circle"></i><span>5th Follow Up</span>
            </a>
          </li>          
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#youtube-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Youtube</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="youtube-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.add_youtube_video')}}">
              <i class="bi bi-circle"></i><span>Add Youtube Video</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.view_youtube_video')}}">
              <i class="bi bi-circle"></i><span>View Youtube Video</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Components Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.contact')}}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.newsletter')}}">
          <i class="bi bi-envelope"></i>
          <span>Newsletter</span>
        </a>
      </li> 
      
    </ul>

  </aside>