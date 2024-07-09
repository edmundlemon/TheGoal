document.addEventListener('DOMContentLoaded', function() {
    // Initialize the date picker
    flatpickr("#date-picker", {
        minDate: "today",
        enableTime: false,
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
            loadTimeSlots(dateStr);
        }
    });

    // Function to load time slots based on selected date
    function loadTimeSlots(date) {
        const timeSlotSelect = document.getElementById('time-slot');
        timeSlotSelect.innerHTML = '<option value="">Select a time slot</option>';

        // Example time slots - these can be fetched from a server based on the date
        const timeSlots = [
            '09:00 AM - 10:00 AM',
            '10:00 AM - 11:00 AM',
            '11:00 AM - 12:00 PM',
            '01:00 PM - 02:00 PM',
            '02:00 PM - 03:00 PM',
            '03:00 PM - 04:00 PM'
        ];

        timeSlots.forEach(slot => {
            const option = document.createElement('option');
            option.value = slot;
            option.textContent = slot;
            timeSlotSelect.appendChild(option);
        });
    }
});
