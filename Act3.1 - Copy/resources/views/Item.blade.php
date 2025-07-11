<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Page</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: blue; }
        nav a:hover { text-decoration: underline; }
        .content { margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <h1>Item Page</h1>
        <nav>
            <a href="{{ route('customer.page') }}">Customer</a>
            <a href="{{ route('item.page') }}">Item</a>
            <a href="{{ route('order.page') }}">Order</a>
            <a href="{{ route('order.details.page') }}">Order Details</a>
        </nav>
    </header>

    <div class="content">
        <p>This is the main content area for the Item page.</p>
        <p>Below are some sample HTML elements (not working since we are only showing the routings based on the instructions, click the links above).</p>
        <form>
            <label for="item_name">Item Name:</label><br>
            <input type="text" id="item_name" name="item_name"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>