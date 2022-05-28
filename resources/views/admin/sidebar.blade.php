<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="../../index.html"><img src="{{asset('assets')}}/admin/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="../../admin/index.html"><img src="{{asset('assets')}}/admin/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset('assets')}}/admin/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin">
                <i class="mdi mdi-home"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-calendar-blank"></i>
              </span>
                <span class="menu-title">Appointment</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../index.html">New Appointment</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../index.html">Accepted Appointment</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../index.html">Completed Appointment</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/category">
                <i class="mdi mdi-apps"></i>
                Categories
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/service">
                <i class="mdi mdi-apps"></i>
                Services
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/comment">
                <i class="mdi mdi-comment"></i>
                Comments
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/faq">
                <i class="mdi mdi-comment-question-outline"></i>
                FAQ
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.message.index')}}">
                <i class="mdi mdi-message"></i>
                Messages
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/user">
                <i class="mdi mdi-account"></i>
                Users
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/social">
                <i class="mdi mdi-apps"></i>
                Social
            </a>
        </li>
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
            <a href="/admin/setting" class="nav-link">
                <i class="mdi mdi-settings"></i>
                Settings
            </a>
        </li>

    </ul>
</nav>
