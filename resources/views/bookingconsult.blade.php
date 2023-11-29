<!-- resources/views/consultation/form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Consultation</title>
</head>
<body>

    <h1>Book a Consultation</h1>

    <form method="post" action="{{ route('consultation.submit') }}">
        @csrf

        <label for="name">Your Name:</label>
        <input type="text" name="name" required>

        <label for="email">Your Email:</label>
        <input type="email" name="email" required>

        <label for="service">Select a Service:</label>
        <select name="service" required>
            <option value="service_1">Service 1</option>
            <option value="service_2">Service 2</option>
            <!-- Add more options as needed -->
        </select>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
