<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"> <!-- Centering the modal -->
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-light">Are you sure you want to logout?</h4>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form action="../config/logout.php" method="post">
          <input type="submit" class="btn btn-danger" value="LOGOUT">
        </form>
      </div>
    </div>
  </div>
</div>

<style>
  /* Modal General Styles */
  .modal-content {
    background-color: #1e2023; /* Same dark background as admin modal */
    border-radius: 12px; /* Smooth, modern rounded corners */
    color: #ffffff;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5); /* Consistent shadow effect */
    border: 2px solid #76B900; /* NVIDIA green border color */
    animation: fadeIn 0.5s ease; /* Add a fade-in effect for smooth transition */
  }

  /* Modal Header and Footer */
  .modal-header, .modal-footer {
    border: none; /* Remove default bootstrap borders */
    background-color: #1e2023; /* Matching background color */
  }

  .modal-header {
    border-bottom: 2px solid #76B900; /* NVIDIA green border color */
  }

  .modal-footer {
    border-top: 2px solid #76B900; /* NVIDIA green border color */
  }

  .btn-close-white {
    filter: invert(1); /* Ensure close button is visible */
  }

  /* Button Styling */
  /* Button Styling */
.btn-danger {
    background-color: transparent; /* Transparent background */
    border: 2px solid #dc3545; /* Red border to make the button visible */
    color: #dc3545; /* Red text color to match the border */
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease; /* Smooth transitions */
}

.btn-danger:hover {
    background-color: #dc3545; /* Red background on hover */
    color: #ffffff; /* White text color on hover */
    border-color: #dc3545; /* Maintain border color on hover */
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

