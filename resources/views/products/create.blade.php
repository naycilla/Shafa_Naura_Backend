<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shafa Naura - Backend</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="/products" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Price:</label><br>
        <input type="number" min="1" name="price" required><br><br>

        <label>Stock:</label><br>
        <input type="number" name="stock" min="0"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>