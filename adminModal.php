<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"> <!-- Centering the modal -->
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-light">Are you sure you want to logout?</h4>
        <button type="button" class="btn-close btn-close-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form action="../config/logout.php" method="post">
          <input type="submit" class="btn btn-outline-danger" value="LOGOUT">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"> <!-- Centering the modal -->
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-light">Are you sure you want to logout?</h4>
        <button type="button" class="btn-close btn-close-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form action="../config/logout.php" method="post">
          <input type="submit" class="btn btn-outline-danger" value="LOGOUT">
        </form>
      </div>
    </div>
  </div>
</div>

<style>
  /* Modal General Styles */
  .modal-content {
    background-color: #1e1f1d; /* Dark background color */
    border-radius: 12px; /* Smooth, modern rounded corners */
    color: #ffffff;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5); /* Consistent shadow effect */
    border: 2px solid #76B900; /* NVIDIA green border color */
    animation: fadeIn 0.5s ease; /* Add a fade-in effect for smooth transition */
  }

  /* Modal Header and Footer */
  .modal-header, .modal-footer {
    border: none; /* Remove default bootstrap borders */
    background-color: #1e1f1d; /* Matching background color */
  }

  .modal-header {
    border-bottom: 2px solid #76B900; /* NVIDIA green border color */
  }

  .modal-footer {
    border-top: 2px solid #76B900; /* NVIDIA green border color */
  }

  .btn-close-light {
    filter: invert(1); /* Ensure close button is visible */
  }

  /* Button Styling (Outline Danger) */
  .btn-outline-danger {
    color: #dc3545; /* Red color for text */
    border-color: #dc3545; /* Red color for border */
    font-weight: 600; /* Semi-bold text */
    padding: 10px 20px; /* Padding inside the button */
    border-radius: 5px; /* Rounded corners */
    transition: background-color 0.3s ease; /* Smooth background color transition on hover */
  }

  .btn-outline-danger:hover {
    background-color: #dc3545; /* Red background color on hover */
    color: #ffffff; /* White text color on hover */
    box-shadow: 0 0 10px #dc3545; /* Red shadow effect on hover */
  }

  /* Button Danger (if used elsewhere) */
  .btn-danger {
    background-color: #dc3545; /* Red background color */
    border: none;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 5px;
  }

  .btn-danger:hover {
    background-color: #c82333; /* Darker red background on hover */
  }

  /* Modal Animation */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: scale(0.9);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }
</style>
