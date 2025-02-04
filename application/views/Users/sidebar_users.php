<!-- sidebar_users.php -->
<div class="d-flex flex-column p-3 bg-light" style="width: 250px; min-height: 100vh;">
  <!-- Logo or title -->
  <a href="<?= site_url('user/dashboard'); ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
    <span class="fs-4">User Dashboard</span>
  </a>
  <hr>
  
  <!-- Navigation Menu -->
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="<?= site_url('user/articles'); ?>" class="nav-link">
        <i class="bi bi-file-earmark-text"></i> View Articles
      </a>
    </li>
    <li>
      <a href="<?= site_url('user/search'); ?>" class="nav-link">
        <i class="bi bi-search"></i> Search by Category
      </a>
    </li>
    <li>
      <a href="<?= site_url('user/saved'); ?>" class="nav-link">
        <i class="bi bi-bookmark"></i> Saved Articles
      </a>
    </li>
    <li>
      <a href="<?= site_url('user/create'); ?>" class="nav-link">
        <i class="bi bi-pencil-square"></i> Create Blog
      </a>
    </li>
    <li>
      <a href="<?= site_url('user/post'); ?>" class="nav-link">
        <i class="bi bi-upload"></i> Post Blog
      </a>
    </li>
  </ul>
  <hr>
  
  <!-- Optional: User Info or Logout -->
  <div>
    <small class="d-block mb-3 text-muted">Logged in as: <?= $this->session->userdata('username'); ?></small>
    <a href="<?= site_url('user/logout'); ?>" class="btn btn-sm btn-outline-secondary">Logout</a>
  </div>
</div>
