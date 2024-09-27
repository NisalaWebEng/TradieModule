<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as a Tradie - White Pages Australia</title>
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
            max-width: 600px;
            margin: 50px auto;
            padding: 0 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }
        h2 {
            font-size: 2em;
            color: #0073e6;
            margin-bottom: 20px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group input:focus, .form-group textarea:focus {
            outline: none;
            border-color: #0073e6;
            box-shadow: 0 0 5px rgba(0, 115, 230, 0.5);
        }
        .btn {
            background-color: #0073e6;
            color: white;
            padding: 10px 20px;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #005bb5;
        }
        footer {
            background-color: #0073e6;
            color: white;
            text-align: center;
            padding: 20px 10px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
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
            animation: fadeIn 1s ease-in-out;
        }
        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .modal-content h2 {
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
    <script>
        // This function handles the form submission using fetch API
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

        function submitForm(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get form data
            const name = document.getElementById('name').value;
            const service = document.getElementById('service').value;
            const contact = document.getElementById('contact').value;
            const email = document.getElementById('email').value;
            const rate = document.getElementById('rate').value;
            const description = document.getElementById('description').value;

            // Create a JSON object to send to the API
            const tradieData = {
                "name": name,
                "service": service,
                "contact": contact,
                "description": description,
                "email": email, 
                "rate": rate 
            };

            // Send data to the API using fetch
            fetch('http://localhost:8000/api/tradies', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(tradieData)
            })
            .then(response => response.json())
            .then(data => {
                showSuccessModal();
                //alert('Tradie registered successfully!');
                console.log(data); // For debugging, you can view the response in the console
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while registering the tradie.');
            });
        }
    </script>
</head>
<body>
    <header>
        <h1>Tradie Services - White Pages Australia</h1>
    </header>
    <nav>
        <a href="tradies">Home</a>
        <a href="search">Find a Tradie</a>
        <a href="register">Register Your Service</a>
        <a href="quotes">Service Quotes</a>
        <a href="#">Contact Us</a>
    </nav>
    <div class="container">
        <h2>Register as a Tradie</h2>
        <form id="tradieForm" onsubmit="submitForm(event)">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="service">Service Type</label>
                <input type="text" id="service" name="service" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="tel" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="rate">Rate</label>
                <input type="text" id="rate" name="rate" required>
            </div>
            <div class="form-group">
                <label for="description">Service Description</label>
                <textarea id="description" name="description" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
    </div>
    <div id="successModal" class="modal">
        <div class="modal-content">
            <h2>Registration Successful!</h2>
            <p>Your tradie service has been registered successfully.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Tradie Services - White Pages Australia. All rights reserved.</p>
    </footer>
</body>
</html>
