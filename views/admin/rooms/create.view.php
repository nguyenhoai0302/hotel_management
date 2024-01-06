<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    
    .container {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    
    label {
      font-weight: bold;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-control {
      border-radius: 5px;
    }
    
    .btn-primary {
      width: 100%;
    }
  </style>
  <title>Room Form</title>
</head>
<body>
  <div class="container">
    <h2>Room Form</h2>
    <form>
      <div class="form-group">
        <label for="id">ID:</label>
        <input type="number" class="form-control" id="id" name="id" required>
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="bedroom">Bedroom:</label>
        <input type="number" class="form-control" id="bedroom" name="bedroom" required>
      </div>
      <div class="form-group">
        <label for="bathroom">Bathroom:</label>
        <input type="number" class="form-control" id="bathroom" name="bathroom" required>
      </div>
      <div class="form-group">
        <label for="livingroom">Living Room:</label>
        <input type="number" class="form-control" id="livingroom" name="livingroom" required>
      </div>
      <div class="form-group">
        <label for="type">Type:</label>
        <input type="text" class="form-control" id="type" name="type" required>
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" required>
      </div>
      <div class="form-group">
        <label for="tax">Tax:</label>
        <input type="number" step="0.01" class="form-control" id="tax" name="tax" required>
      </div>
      <div class="form-group">
        <label for="cleaning_fee">Cleaning Fee:</label>
        <input type="number" step="0.01" class="form-control" id="cleaning_fee" name="cleaning_fee" required>
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="status">Status:</label>
        <select class="form-control" id="status" name="status">
          <option value="1">Active</option>
          <option value="0">Inactive</option>
        </select>
      </div>
      <div class="form-group">
        <label for="updated_at">Updated At:</label>
        <input type="datetime-local" class="form-control" id="updated_at" name="updated_at">
      </div>
      <div class="form-group">
        <label for="created_at">Created At:</label>
        <input type="datetime-local" class="form-control" id="created_at" name="created_at">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>