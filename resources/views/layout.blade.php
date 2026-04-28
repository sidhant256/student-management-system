<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Student Management</title>
    <style>
            /* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background: linear-gradient(180deg, #1a1a2e 0%, #16213e 40%, #0f3460 100%);
  position: fixed;
  height: 100%;
  overflow: auto;
}
/* Sidebar links */
.sidebar a {
  display: block;
  color: #e0e0e0;        /* light gray instead of black */
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: rgba(255, 255, 255, 0.379);
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: rgba(255, 255, 255, 0.1);
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand font-monospace" href="#"><h2>Student Management project</h2></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                  
                </div>
            </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <!-- The sidebar -->
                <div class="sidebar">
                    <a {{ request()->is('/') ? 'class=active' : '' }} href="{{ url('/') }}">Home</a>
                    <a {{ request()->is('students*') ? 'class=active' : '' }} href="{{ url('/students') }}">Student</a>
                    <a {{ request()->is('teachers*') ? 'class=active' : '' }} href="{{ url('/teachers') }}">Teacher</a>
                    <a {{ request()->is('courses*') ? 'class=active' : '' }} href="#courses">Courses</a>
                    <a {{ request()->is('enrollment*') ? 'class=active' : '' }} href="#enrollment">Enrollment</a>
                    <a {{ request()->is('payment*') ? 'class=active' : '' }} href="#payment">Payment</a>
                    <a href="#payment">User Details</a>
                </div>
            </div>
            <div class="col-md-9">
              
                    @yield('content')
                
            </div>
        </div>
    </div>
</body>
</html>