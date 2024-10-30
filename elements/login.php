<div class="form-p">
    <div class="row">
        <div class="container flex2">
            <div class="form-container flex">
            <p>Your organization must be registered in the marketplace before you log in.</p>
                <div class="form-toggle">
                    <button id="login-toggle" onclick="toggleForm('login')">Login</button>
                    <button id="register-toggle" onclick="toggleForm('register')">Register</button>
                </div>
                <form id="login-form" class="form">
                    <h2>Login</h2>
                    <input type="text" placeholder="Username" required>
                    <input type="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
                <form id="register-form" class="form hidden">
                    <h2>Register</h2>
                    <input type="text" placeholder="Username" required>
                    <input type="email" placeholder="Email" required>
                    <input type="password" placeholder="Password" required>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleForm(form) {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const loginToggle = document.getElementById('login-toggle');
    const registerToggle = document.getElementById('register-toggle');

    if (form === 'login') {
        loginForm.classList.remove('hidden');
        registerForm.classList.add('hidden');
        loginToggle.classList.add('active');
        registerToggle.classList.remove('active');
    } else {
        loginForm.classList.add('hidden');
        registerForm.classList.remove('hidden');
        loginToggle.classList.remove('active');
        registerToggle.classList.add('active');
    }
}

</script>