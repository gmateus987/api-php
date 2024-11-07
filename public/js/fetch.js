const form = document.getElementById('form');
const loading = document.getElementById('loading');
const fail = document.getElementById('fail');

function showLoading() {
    loading.style.display = "block";
    fail.style.display = "none";
    form.style.display = "none";
}

function closeButton() {
    location.reload();
}

function hideLoading() {
    loading.style.display = "none";
    form.style.display = "block";
}

form.addEventListener('submit', async event => {
    event.preventDefault();

    const email = document.getElementById('email');
    const name = document.getElementById('name');

    const token = sessionStorage.getItem("session");
    showLoading();

    setTimeout(async () => {
        try {
            const response = await fetch("http://localhost:5308/api/users/fetch", {
                method: "GET",
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
            const formattedData = data['data'];
            name.value = formattedData['name'];
            email.value = formattedData['email'];
        } catch (error) {
            hideLoading();
            form.style.display = "none";
            document.getElementById('error-message').innerText = error['message'];
            fail.style.display = "block";
        }
    }, 3000);

})