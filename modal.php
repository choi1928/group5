<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-light">LOGIN</h4>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="config/data.php" method="post">
          <div class="mb-3 mt-3">
            <label for="email" class="form-label text-light">Email:</label>
            <input type="email" class="form-control bg-dark text-light" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label text-light">Password:</label>
            <input type="password" class="form-control bg-dark text-light" id="password" placeholder="Enter password" name="password">
          </div>
          <div class="form-check mb-3">
            <label class="form-check-label text-light">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-nvidia-green">Submit</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-nvidia-black" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<style>
  .modal-content {
    background-color: #1a1a1a; /* Darker background for the modal */
    border-radius: 10px;
    color: #ffffff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.7); /* Deeper shadow for better contrast */
  }

  .modal-header, .modal-footer {
    border: none;
  }

  .btn-close-white {
    filter: invert(1);
  }

  .form-control {
    background-color: #333333; /* Dark background for inputs */
    border: 1px solid #4d4d4d;
    color: #ffffff;
  }

  .form-control:focus {
    background-color: #333333;
    border-color: #76B900; /* NVIDIA Green border on focus */
    box-shadow: 0 0 0 0.2rem rgba(118, 185, 0, 0.25);
  }

  .form-check-input:checked {
    background-color: #76B900; /* NVIDIA Green checkbox when checked */
    border-color: #76B900;
  }

  .btn-nvidia-green {
    background-color: #76B900;
    border: none;
  }

  .btn-nvidia-green:hover {
    background-color: #6fa200;
  }

  .btn-nvidia-black {
    background-color: #000000;
    border: none;
  }

  .btn-nvidia-black:hover {
    background-color: #1a1a1a;
  }
</style>