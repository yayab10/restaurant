
    <!DOCTYPE html>
    <html lang="en">
    <head>
     <meta charset="UTF-8">
     <title>Add Dish</title>
    </head>
    <body>
     <form action="/index.php?action=add" method="post">
     <input type="text" name="name" placeholder="Name">
     <input type="text" name="description" placeholder="Description">
     <input type="number" name="price" placeholder="Price">
     <select name="category">
     <option value="1">Appetizer</option>
     <option value="2">Main</option>
     <option value="3">Dessert</option>
     </select>
     <button type="submit">Add Dish</button>
     </form>
    </body>
    </html>