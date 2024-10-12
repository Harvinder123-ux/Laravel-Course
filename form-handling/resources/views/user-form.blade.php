<div>
  <h1> This is User Form</h1>
  <form action="adduser" method="post">
      @csrf
    <div>
      <input type="text" name="name" placeholder="Enter your name here" id="">
    </div>
    <div>
      <input type="email" name="email" placeholder="Enter your email here" id="">
    </div>
    <div>
      <input type="text" name="pass" placeholder="Enter your password here" id="">
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
</div>

<style>
  /* Container styling */
  div {
    width: 300px;
    margin: 50px auto;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  }

  h1 {
    text-align: center;
    font-size: 24px;
    color: #333;
  }

  /* Input fields styling */
  input[type="text"],
  input[type="email"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  /* Button styling */
  button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

