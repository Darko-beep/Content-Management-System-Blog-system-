<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="./js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
          integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
          crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <title>test</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-sm-2 bg-light border-end min-vh-100">
        <h1 class="h4 text-primary mb-4">Dash</h1>
        <ul class="nav flex-column nav-pills">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
                <i class="bi bi-house"></i> Dashboard
            </a>
            <a class="nav-link" href="#">
                 <i class="bi bi-file-earmark-post"></i> Add Post
            </a>
            <a class="nav-link" href="#">
                <i class="bi bi-tags"></i> Categories
            </a>
            <a class="nav-link" href="#">
                <i class="bi bi-chat-dots"></i> Comments
            </a>
            <a class="nav-link" href="#">
                <i class="bi bi-person-badge"></i> Admins
            </a>
            <a class="nav-link" href="#">
                <i class="bi bi-broadcast"></i> Live Blogs
            </a>
            <a class="nav-link" href="#">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
          </li>
          <!-- other nav items here -->
        </ul>
      </div>

      <!-- Main content -->
      <div class="col-sm-10">
        <h4>About</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div><!-- /row -->
  </div><!-- /container-fluid -->

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-4">
    <div class="container">
      <p class="mb-0">&copy; 2025 My Dashboard | Built with Bootstrap</p>
      <small class="text-secondary">All rights reserved</small>
    </div>
  </footer>
</body>
</html>