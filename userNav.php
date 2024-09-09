<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">GROUP5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#userNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
      <form class="d-flex">
        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#userModal">
          LOGOUT
        </button>
      </form>
    </div>
  </div>
</nav>

<?php
    if(isset($_SESSION['error'])){
        echo '<div class="alert alert-danger mt-3">'.$_SESSION['error'].'</div>';
        unset($_SESSION['error']);
    }
?>

<style>
    .navbar {
        background-color: #1c1c1c; /* Dark gray to match Nvidia theme */
        border-bottom: 4px solid #76b900; /* Nvidia green border */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3); /* Consistent shadow with Nvidia theme */
    }

    .navbar-brand {
        font-size: 1.5rem; /* Font size */
        font-weight: 600;
        color: #76b900; /* Nvidia green */
        text-shadow: 0 0 5px rgba(118, 185, 0, 0.8); /* Slight green shadow */
    }

    .nav-link {
        font-size: 1.2rem; /* Font size */
        color: #e1e1e1; /* Light gray text color */
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #76b900; /* Nvidia green on hover */
    }

    .btn-outline-light {
        color: #76b900; /* Nvidia green */
        border-color: #76b900; /* Nvidia green border */
    }

    .btn-outline-light:hover {
        background-color: #76b900; /* Nvidia green background on hover */
        border-color: #76b900; /* Nvidia green border on hover */
        color: #0c0c0c; /* Dark background for text contrast */
    }

    .alert-danger {
        margin-top: 20px;
        padding: 10px;
        background-color: #dc3545; /* Red background for alert */
        color: #ffffff; /* White text color */
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3); /* Consistent shadow */
    }
</style>
