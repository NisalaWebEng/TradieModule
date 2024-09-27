<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Tradie Services - White Pages Australia</title>
    <link rel="icon" type="image/x-icon" href="https://static.thenounproject.com/png/1151515-200.png">
    <style>
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
        }
        .search-bar {
            text-align: center;
            margin: 50px 0;
            animation: fadeIn 1.5s ease-in-out;
        }
        .search-bar input[type="text"] {
            width: 60%;
            padding: 15px;
            font-size: 1.2em;
            border: 1px solid #ddd;
            border-radius: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .search-bar input[type="text"]:focus {
            outline: none;
            transform: scale(1.05);
        }
        .search-bar button {
            padding: 15px 30px;
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 50px;
            font-size: 1.2em;
            margin-left: -80px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            animation: slideUp 1.5s ease-in-out;
        }
        .search-bar button:hover {
            background-color: #005bb5;
            transform: scale(1.05);
        }

        .delete {
    padding: 10px 20px;
    background-color: #e60000; /* Red color */
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.1em;
    cursor: pointer;
    margin-left: 10px; /* Add some space between View and Delete buttons */
    transition: background-color 0.3s ease, transform 0.3s ease;
}
.save {
    padding: 10px 20px;
    background-color: #28a745; /* Red color */
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.1em;
    cursor: pointer;
    margin-left: 10px; /* Add some space between View and Delete buttons */
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.delete:hover {
    background-color: #cc0000; /* Darker red on hover */
    transform: scale(1.05); /* Slight scaling on hover for effect */
}
        .results {
            margin-top: 50px;
            animation: fadeIn 2s ease-in-out;
        }
        .result-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 20px;
            transition: transform 0.3s ease;
        }
        .result-card:hover {
            transform: translateY(-10px);
        }
        .result-card h2 {
            margin-top: 0;
            font-size: 1.5em;
            color: #0073e6;
        }
        .result-card p {
            font-size: 1.1em;
            color: #555;
        }
        .result-card .cta {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #0073e6;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .result-card .cta:hover {
            background-color: #005bb5;
        }
        /* Modal Styles */
        .modal {
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
        }
        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 600px;
            text-align: center;
        }
        .modal-content h2 {
            font-size: 2em;
            color: #0073e6;
        }
        .modal-content p {
            margin: 20px 0;
            font-size: 1.2em;
            color: #555;
        }
        .close {
            background-color: #0073e6;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
        }
        .close:hover {
            background-color: #005bb5;
        }
        footer {
            background-color: #0073e6;
            color: white;
            text-align: center;
            padding: 20px 10px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from { transform: translateY(50px); }
            to { transform: translateY(0); }
        }
    </style>
    <script>
        // Fetch tradies from the API
        async function fetchTradies() {
            try {
                const response = await fetch('http://localhost:8000/api/tradies');
                const tradies = await response.json();
                displayTradies(tradies);
            } catch (error) {
                console.error('Error fetching tradies:', error);
            }
        }

        // Display tradies in the results section
        function displayTradies(tradies) {
            const resultsContainer = document.querySelector('.results');
            resultsContainer.innerHTML = ''; // Clear any existing results

            tradies.forEach(tradie => {
                const resultCard = document.createElement('div');
                resultCard.classList.add('result-card');

                resultCard.innerHTML = `
                    <h2>${tradie.name}</h2>
                    <p>${tradie.description}</p>
                    <button class="cta" onclick="openModal('${tradie.id}', '${tradie.name}', '${tradie.description}', '${tradie.email}', '${tradie.contact}', '${tradie.rate}')">View/Edit</button>
                    <button class="delete" onclick="deleteTradie(${tradie.id})">Delete</button>
                `;

                resultsContainer.appendChild(resultCard);
            });
        }

        // Open Modal
        function openModal(serviceTitle, serviceDescription, serviceType, serviceEmail, serviceMobile, serviceRate) {
            document.getElementById('modal').style.display = 'flex';
            document.getElementById('modal-title').innerText = serviceTitle;
            document.getElementById('modal-description').innerText = serviceDescription;
            document.getElementById('modal-type').innerText = serviceType;
            document.getElementById('modal-email').innerText = serviceEmail;
            document.getElementById('modal-mobile').innerText = serviceMobile;
            document.getElementById('modal-rate').innerText = serviceRate;
            document.getElementById('modal-save').setAttribute('onclick', `saveTradie(${serviceTitle})`);
        }

        async function saveTradie(tradieId) {
            const updatedTradie = {
                name: document.getElementById('modal-title').value,
                description: document.getElementById('modal-description').value,
                service: document.getElementById('modal-type').value,
                email: document.getElementById('modal-email').value,
                contact: document.getElementById('modal-mobile').value,
                rate: document.getElementById('modal-rate').value
            };

            try {
                await fetch(`http://localhost:8000/api/tradies/${tradieId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(updatedTradie)
                });
                closeModal();
                fetchTradies(); // Refresh the list
            } catch (error) {
                console.error('Error saving tradie:', error);
            }
        }

        // Delete Tradie
        async function deleteTradie(tradieId) {
            if (confirm('Are you sure you want to delete this tradie?')) {
                try {
                    await fetch(`http://localhost:8000/api/tradies/${tradieId}`, {
                        method: 'DELETE'
                    });
                    fetchTradies(); // Refresh the list after deleting
                } catch (error) {
                    console.error('Error deleting tradie:', error);
                }
            }
        }

        // Close Modal
        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        // Fetch tradies when the page loads
        window.onload = fetchTradies;
    </script>
</head>
<body>
    <header>
        <h1>Search Tradie Services - White Pages Australia</h1>
    </header>
    <nav>
        <a href="tradies">Home</a> <!-- Link back to the homepage -->
        <a href="search">Find a Tradie</a>
        <a href="register">Register Your Service</a>
        <a href="quotes">Service Quotes</a>
        <a href="#">Contact Us</a>
    </nav>
    <section class="container">
        <div class="search-bar">
            <input type="text" placeholder="Search for tradie services...">
            <button type="submit">Search</button>
        </div>
        <div class="results">
            <!-- Tradie results will be injected here by JavaScript -->
        </div>
    </section>

    <!-- Modal Structure -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h2 id="modal-title"></h2>

            <p><strong>Description:</strong> <span id="modal-description"></span></p>
            <p><strong>Service Type:</strong> <span id="modal-type"></span></p>
            <p><strong>Email:</strong> <span id="modal-email"></span></p>
            <p><strong>Mobile:</strong> <span id="modal-mobile"></span></p>
            <p><strong>Rate(Hr):</strong> <span id="modal-rate"></span></p>

            <p id="modal-email"></p>
            <p id="modal-mobile"></p>
            <p id="modal-rate"></p>
            <button id="modal-save" class="save">Save Changes</button>
            <button class="close" onclick="closeModal()">Close</button>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Tradie Services - White Pages Australia. All rights reserved.</p>
   
