<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">NVIDIA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <button type="button" class="btn btn-outline-nvidia" data-bs-toggle="modal" data-bs-target="#myModal">
          Login
        </button>
      </form>
    </div>
  </div>
</nav>

<?php
    if(isset($_SESSION['error'])){
        echo '<div class="alert alert-nvidia-danger mt-3">'.$_SESSION['error'].'</div>';
        unset($_SESSION['error']);
    }
?>

<style>
    .navbar {
        background-color: #000000; /* Black background */
        border-bottom: 4px solid #76B900; /* NVIDIA Green border */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4); /* Deeper shadow */
    }

    .navbar-brand {
        font-size: 24px;
        font-weight: bold;
        color: #76B900; /* NVIDIA Green for brand */
    }

    .navbar-brand:hover {
        color: #a1d231; /* Slightly lighter green on hover */
    }

    .nav-link {
        font-size: 18px;
        color: #f8f9fa; /* Light gray for links */
    }

    .nav-link:hover {
        color: #76B900; /* NVIDIA Green on hover */
    }

    .btn-outline-nvidia {
        color: #76B900; /* NVIDIA Green for button text */
        border-color: #76B900; /* NVIDIA Green border */
    }

    .btn-outline-nvidia:hover {
        background-color: #76B900; /* NVIDIA Green on hover */
        color: #ffffff;
    }

    .alert-nvidia-danger {
        padding: 10px;
        background-color: #dc3545; /* Red for danger alerts */
        color: #ffffff;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>
