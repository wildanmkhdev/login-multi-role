<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Auth Glass</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #0f172a, #071032);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1rem;
    }

    .glass {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 2rem;
      border: 1px solid rgba(255, 255, 255, 0.3);
      width: 100%;
      max-width: 400px;
      color: white;
    }

    .form-control,
    .form-select {
      background: rgba(255, 255, 255, 0.2);
      border: none;
      color: white;
    }

    .form-control:focus,
    .form-select:focus {
      background: rgba(255, 255, 255, 0.25);
      box-shadow: none;
      color: white;
    }

    .btn-primary {
      background-color: rgba(0, 123, 255, 0.8);
      border: none;
    }

    .btn-primary:hover {
      background-color: rgba(0, 123, 255, 1);
    }

    .toggle-link {
      color: #0dcaf0;
      cursor: pointer;
    }

    .toggle-link:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="glass">
    <h3 class="text-center mb-4" id="formTitle">Login</h3>
    <form id="authForm" method="post" action="proses-login.php">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
      </div>
      <div id="confirmPasswordGroup" class="mb-3 d-none">

      </div>
      <div id="roleGroup" class="mb-3 d-none">
        <label class="form-label">Role</label>
        <select class="form-select" name="role">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary w-100" name="login">Masuk</button>
    </form>
    <div class="text-center mt-3">
      <span id="toggleText">Belum punya akun?</span>
      <span class="toggle-link" id="toggleForm">Daftar</span>
    </div>
  </div>

  <script>
    const formTitle = document.getElementById('formTitle');
    const confirmPasswordGroup = document.getElementById('confirmPasswordGroup');
    const roleGroup = document.getElementById('roleGroup');
    const submitBtn = document.querySelector('button[name="kirim"]');
    const toggleForm = document.getElementById('toggleForm');
    const toggleText = document.getElementById('toggleText');

    let isLogin = true;

    toggleForm.addEventListener('click', () => {
      isLogin = !isLogin;
      if (isLogin) {
        formTitle.textContent = 'Login';
        submitBtn.textContent = 'Masuk';
        confirmPasswordGroup.classList.add('d-none');
        roleGroup.classList.add('d-none');
        toggleText.textContent = 'Belum punya akun?';
        toggleForm.textContent = 'Daftar';
      } else {
        formTitle.textContent = 'Register';
        submitBtn.textContent = 'Daftar';
        confirmPasswordGroup.classList.remove('d-none');
        roleGroup.classList.remove('d-none');
        toggleText.textContent = 'Sudah punya akun?';
        toggleForm.textContent = 'Login';
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>