<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f0f8ff; /* Light background for the whole email */
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        border: 1px solid #cce7ff; /* Light blue border */
        border-radius: 8px;
        background-color: #ffffff; /* White background for the container */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Slight shadow for a lifted effect */
    }

    h2 {
        color: #0073e6; /* Bright blue color for the header */
        text-align: center;
        background-color: #e0f0ff; /* Light blue background for emphasis */
        padding: 10px;
        border-radius: 5px;
    }

    p {
        color: #333333;
        background-color: #f9f9f9; /* Light grey background for paragraphs */
        padding: 8px;
        border-radius: 5px;
        margin: 5px 0;
    }

    strong {
        color: #0073e6; /* Bright blue color for labels */
    }
</style>

<body>
<div class="container">
    <h2>You have new contact mail</h2>

    <p><strong>Name:</strong> {{ $contactDetails['name'] }}</p>
    <p><strong>Email:</strong> {{ $contactDetails['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $contactDetails['contact'] }}</p>
    <p><strong>Subject:</strong> {{ $contactDetails['subject'] }}</p>
    <p><strong>Message:</strong> {{ $contactDetails['message'] }}</p>
</div>
</body>
