<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Quotes - White Pages Australia</title>
    <link rel="icon" type="image/x-icon" href="https://static.thenounproject.com/png/1151515-200.png">
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            overflow-x: hidden;
        }
        header {
            background-color: #0073e6;
            color: white;
            padding: 20px 10px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        header h1 {
            margin: 0;
            font-size: 2em;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #005bb5;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #004494;
            border-radius: 5px;
        }
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            animation: fadeIn 1.5s ease-in-out;
        }
        .quote-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .quote-header h2 {
            font-size: 2.5em;
            color: #0073e6;
        }
        .quote-header p {
            font-size: 1.2em;
            color: #555;
        }
        .quote-form {
            margin-top: 40px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .quote-form label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #0073e6;
        }
        .quote-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 1.1em;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .quote-form button {
            padding: 15px 30px;
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .quote-form button:hover {
            background-color: #005bb5;
            transform: scale(1.05);
        }
        footer {
            background-color: #0073e6;
            color: white;
            text-align: center;
            padding: 20px 10px;
            margin-top: 50px;
        }
        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1001;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 100px;
        }
        .modal-content {
            background-color: #fff;
            margin: auto;
            padding: 20px;
            width: 50%;
            border-radius: 10px;
            position: relative;
        }
        .modal h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .service-item {
            margin-bottom: 15px;
        }
        .service-item input[type="checkbox"] {
            margin-right: 10px;
        }
        /* Total Cost Styling */
        .total-cost {
            text-align: center;
            font-size: 1.5em;
            margin-top: 20px;
            font-weight: bold;
        }
        .modal button {
            padding: 15px 30px;
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: block;
            margin: 10px auto;
        }
        .modal button:hover {
            background-color: #005bb5;
            transform: scale(1.05);
        }

         /* Success Modal Styles */
         .modals {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
            animation: fadeIn 1s ease-in-out;
        }
        .modal-contents {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .modal-contents h2 {
            font-size: 2em;
            color: #0073e6;
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <header>
        <h1>Set Your Service Quotes - White Pages Australia</h1>
    </header>
    <nav>
        <a href="tradies">Home</a>
        <a href="search">Find a Tradie</a>
        <a href="register">Register Your Service</a>
        <a href="quotes">Service Quotes</a>
        <a href="#">Contact Us</a>
    </nav>
    <section class="container">
        <div class="quote-header">
            <h2>Select a Tradie and Add Services</h2>
            <p>Select the tradie and add the services they offer along with their quotes.</p>
        </div>
        <form class="quote-form" id="quoteForm">
            <label for="tradie">Select Tradie:</label>
            <select id="tradie" name="tradie">
                <option value="">Select a tradie</option>
            </select>
            <button type="button" id="addServicesButton" disabled>Add Services</button>
        </form>
    </section>
    
    <div id="serviceModal" class="modal">
        <div class="modal-content">
            <h2>Select Services for <span id="tradieName"></span></h2>
            <div id="serviceContainer">
                <!-- Services with checkboxes will be populated here dynamically -->
            </div>
            <div class="total-cost">
                Total Cost: $<span id="totalCost">0</span>
            </div>
            <button id="submitServicesButton">Generate Quote</button>
        </div>
    </div>
    <div id="successModal" class="modals">
        <div class="modal-contents">
            <h2>Quote Generation Successful!</h2>
            <p>Your tradie service quote has been generated successfully.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Tradie Services - White Pages Australia. All rights reserved.</p>
    </footer>

    <script>
        // Prices associated with each service
        const servicePrices = {
            'Electric': 100,
            'Water': 80,
            'Plumber': 150
        };

        // Fetch the tradies from the API and populate the select box
        document.addEventListener('DOMContentLoaded', () => {
            fetch('http://localhost:8000/api/tradies')
                .then(response => response.json())
                .then(data => {
                    populateTradieSelectBox(data);
                })
                .catch(error => console.error('Error fetching tradies:', error));
        });

        function showSuccessModal() {
            const modal = document.getElementById('successModal');
            modal.style.display = 'flex';  // Show the modal

            // Automatically close the modal after 3 seconds
            setTimeout(() => {
                modal.style.animation = 'fadeOut 1s ease-in-out';
                setTimeout(() => {
                    modal.style.display = 'none'; // Hide the modal
                }, 1000); // Wait for the fade-out animation to complete
            }, 3000);  // Modal will be visible for 3 seconds
        }
        // Function to populate tradie select box
        function populateTradieSelectBox(tradies) {
            const tradieSelect = document.getElementById('tradie');
            tradies.forEach(tradie => {
                const option = document.createElement('option');
                option.value = tradie.id;
                option.textContent = tradie.name;
                tradieSelect.appendChild(option);
            });
        }

        // Show the modal and populate services for the selected tradie
        document.getElementById('addServicesButton').addEventListener('click', () => {
            const tradieSelect = document.getElementById('tradie');
            const tradieId = tradieSelect.value;
            const tradieName = tradieSelect.options[tradieSelect.selectedIndex].text;
            if (tradieId) {
                document.getElementById('tradieName').textContent = tradieName;
                showServiceModal();
                populateServices();
            }
        });

        // Function to show the service modal
        function showServiceModal() {
            const modal = document.getElementById('serviceModal');
            modal.style.display = 'block';
        }

        // Function to populate services checkboxes dynamically
        function populateServices() {
            const services = ['Electric', 'Water', 'Plumber'];
            const serviceContainer = document.getElementById('serviceContainer');
            serviceContainer.innerHTML = ''; // Clear any previous content

            services.forEach(service => {
                const div = document.createElement('div');
                div.classList.add('service-item');

                const checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.value = service;

                const label = document.createElement('label');
                label.textContent = `${service} - $${servicePrices[service]}`;

                div.appendChild(checkbox);
                div.appendChild(label);
                serviceContainer.appendChild(div);

                // Event listener to update total cost when service is selected
                checkbox.addEventListener('change', updateTotalCost);
            });
        }

        // Update total cost based on selected services
        function updateTotalCost() {
            const selectedServices = Array.from(document.querySelectorAll('#serviceContainer input[type="checkbox"]:checked'))
                .map(checkbox => checkbox.value);

            let totalCost = selectedServices.reduce((sum, service) => sum + servicePrices[service], 0);

            document.getElementById('totalCost').textContent = totalCost;
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const modal = document.getElementById('serviceModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }

        // Enable Add Services button when tradie is selected
        document.getElementById('tradie').addEventListener('change', () => {
            const tradieId = document.getElementById('tradie').value;
            document.getElementById('addServicesButton').disabled = !tradieId;
        });

        // Handle form submission
        document.getElementById('submitServicesButton').addEventListener('click', () => {
            const selectedServices = Array.from(document.querySelectorAll('#serviceContainer input[type="checkbox"]:checked'))
                .map(checkbox => checkbox.value);

            const tradieId = document.getElementById('tradie').value;
            if (selectedServices.length > 0) {
                console.log('Selected Tradie:', tradieId);
                console.log('Selected Services:', selectedServices);

                // API submission logic

                document.getElementById('serviceModal').style.display = 'none';
                showSuccessModal();
            } else {
                alert('Please select at least one service.');
            }
        });
    </script>
</body>
</html>
