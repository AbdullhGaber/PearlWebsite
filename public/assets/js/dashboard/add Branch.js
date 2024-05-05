const citiesByGovernment = {
    Cairo: ["Nasr City", "Giza"],
    Dakahlia: ["Mansoura", "Bilqas"]
};

function updateCityDropdown(selectedGovernment) {
    const cityDropdown = document.getElementById('city');
    cityDropdown.innerHTML = '<option>Select a city</option>';
    if (selectedGovernment) {
        const cities = citiesByGovernment[selectedGovernment];
        cities.forEach(city => {
            const option = document.createElement('option');
            option.value = city;
            option.textContent = city;
            cityDropdown.appendChild(option);
        });
    }
}

function handleGovernmentChange(event) {
    const selectedGovernment = event.target.value;
    updateCityDropdown(selectedGovernment);
}
const taxIdInput = document.getElementById('taxIdNum');
taxIdInput.addEventListener('input', function (event) {
    let value = event.target.value.replace(/\D/g, '');
    value = value.slice(0, 9);
    let formattedValue = '';
    for (let i = 0; i < value.length; i++) {
        if (i > 0 && i % 3 === 0) {
            formattedValue += '-';
        }
        formattedValue += value.charAt(i);
    }
    event.target.value = formattedValue;
});