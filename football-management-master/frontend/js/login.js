document.getElementById('loginForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    const response = await fetch('/api/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username, password })
    });

    const result = await response.json();

    if (result.success) {
        // Redirect to the next page (index.html)
        window.location.href = result.redirectUrl; // Redirect based on backend response
    } else {
        document.getElementById('loginMessage').innerText = result.message;
    }
});
