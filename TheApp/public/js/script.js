<script>
  document.addEventListener('DOMContentLoaded', function () {
    var submitButton = document.getElementById('submitButton');
    submitButton.addEventListener('click', validateLogin);
  });

  function validateLogin(event) {
    var userIdInput = document.querySelector('.field[placeholder="User ID"]');
    var passwordInput = document.querySelector('.field[placeholder="Password"]');

    if (userIdInput.value.trim() === '' || passwordInput.value.trim() === '') {
      alert('Please fill in all fields.');
      event.preventDefault(); // Prevent the default form submission
    } else {
      alert('Logging in...');
      // Optionally, you can redirect to the admin page
      // window.location.href = 'admin page.html';
    }
  }
</script>
