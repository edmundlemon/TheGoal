document.addEventListener("DOMContentLoaded", function() {
    const selectedVehicle = JSON.parse(localStorage.getItem("selectedVehicle"));

    if (selectedVehicle) {
        document.getElementById("vehicle-image").src = selectedVehicle.image;
        document.getElementById("vehicle-name").textContent = selectedVehicle.name;
        document.getElementById("vehicle-price").textContent = selectedVehicle.price;

        const specsList = document.getElementById("vehicle-specs");
        selectedVehicle.specs.forEach(spec => {
            const listItem = document.createElement("li");
            listItem.textContent = spec;
            specsList.appendChild(listItem);
        });
    }
});
