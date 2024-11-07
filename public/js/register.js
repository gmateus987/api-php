const form = document.getElementById('form');
const loading = document.getElementById('loading');
const success = document.getElementById('success');
const fail = document.getElementById('fail');

function showLoading() {
    loading.style.display = "block";
    success.style.display = "none";
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
    const formData = new FormData(form);

    const jsonObject = {};
    formData.forEach((value, key) => {
        jsonObject[key] = value;
    });

    showLoading();
    setTimeout(async () => {
        try {
            const response = await fetch('http://localhost:5308/api/users/create', {
                method: 'POST',
                mode: 'cors',
                body: JSON.stringify(jsonObject)
            });

            hideLoading();
            if (!response.ok) {
                const errorData = await response.json();
                throw errorData;
            }

            const data = await response.json();

            form.style.display = "none";
            document.getElementById('success-message').innerText = data['data'];
            success.style.display = "block";
        } catch (error) {
            hideLoading();
            form.style.display = "none";
            document.getElementById('error-message').innerText = error['message'];
            fail.style.display = "block";

        }
    }, 3000);
});