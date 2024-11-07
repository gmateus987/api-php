const form = document.getElementById('form');
const loading = document.getElementById('loading');
const success = document.getElementById('success');
const fail = document.getElementById('fail');
const confirmDelete = document.getElementById('confirm');

function showLoading() {
    loading.style.display = "block";
    success.style.display = "none";
    fail.style.display = "none";
    confirmDelete.style.display = "none"
}

function closeButton() {
    location.reload();
}

function hideLoading() {
    loading.style.display = "none";
}

form.addEventListener('submit', async event => {
    event.preventDefault();

    const token = sessionStorage.getItem("session");
    showLoading();

    setTimeout(async () => {
        try {
            const response = await fetch("http://localhost:5308/api/users/delete", {
                method: "DELETE",
                headers: {
                    'Authorization': `Bearer ${token}`,
                    "Content-Type": "application/json"
                }
            });

            hideLoading();

            if (!response.ok) {
                const errorData = await response.json();
                throw errorData;
            }

            const data = await response.json();
            sessionStorage.removeItem("session");
            document.getElementById('success-message').innerText = data['message'];
            success.style.display = "block";

        } catch (error) {
            hideLoading();
            document.getElementById('confirm').style.display = "none";
            document.getElementById('error-message').innerText = error['message'];
            fail.style.display = "block";

        }
    }, 3000); 
});