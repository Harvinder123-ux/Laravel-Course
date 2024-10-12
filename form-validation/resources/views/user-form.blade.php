<!-- 
@if($errors->any())
@foreach($errors->all() as $er)
<div style="color: red">{{$er}}</div>
@endforeach -->
<!-- @endif -->
<div class="form-container">

  <h2>Add New User</h2>
  <form method="POST" action="adduser">
    @csrf
    <!-- Input Fields -->
    <div class="input-group">
      <input type="text" name="name" placeholder="Enter User Name" >
      <span style="color: red">@error('name'){{$message}}@enderror</span>
    </div>
    <div class="input-group">
      <input type="email" name="email" placeholder="Enter User Email" >
      <span style="color: red">@error('email'){{$message}}@enderror</span>
    </div>
    <div class="input-group">
      <input type="text" name="city" placeholder="Enter User City" >
      <span style="color: red">@error('city'){{$message}}@enderror</span>
    </div>
    
    <!-- Skills Section -->
    <div class="skills-group">
      <label>Skills</label>
      <div class="checkbox-group">
        <label><input type="checkbox" name="skills[]" value="PHP"> PHP</label>
        <label><input type="checkbox" name="skills[]" value="Java"> Java</label>
        <label><input type="checkbox" name="skills[]" value="Node"> Node</label>
      </div>
      <span style="color: red">@error('skills'){{$message}}@enderror</span>
    </div>

    <!-- Submit Button -->
    <div class="submit-btn">
      <button type="submit">Add New User</button>
    </div>
  </form>
</div>

<style>
  .form-container {
    width: 400px;
    margin: 50px auto;
    font-family: Arial, sans-serif;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
  }

  .input-group {
    margin-bottom: 15px;
  }

  input[type="text"],
  input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  .skills-group {
    margin: 20px 0;
  }

  .skills-group label {
    font-weight: bold;
    margin-bottom: 10px;
    display: block;
  }

  .checkbox-group label {
    margin-right: 15px;
    font-size: 16px;
    color: #333;
  }

  input[type="checkbox"] {
    margin-right: 5px;
  }

  .submit-btn {
    text-align: center;
  }

  button[type="submit"] {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  button[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
