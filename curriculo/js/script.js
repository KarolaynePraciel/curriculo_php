document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('curriculoForm');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const data = Object.fromEntries(formData);

        localStorage.setItem('curriculoData', JSON.stringify(data));

        form.submit();
    });

    const savedData = JSON.parse(localStorage.getItem('curriculoData'));

    if (savedData) {
        for (const [key, value] of Object.entries(savedData)) {
            const field = document.querySelector(`[name="${key}"]`);
            if (field) {
                field.value = value;
            }
        }
    }
});
