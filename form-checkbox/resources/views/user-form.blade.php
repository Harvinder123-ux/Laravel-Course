<div>
    <form action="adduser" method="post">
        @csrf
       <div>
       <h3>User Skill</h3>
            <input type="checkbox" name="skill[]" value="php" id="php"> 
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="node" id="node"> 
            <label for="node">NODE</label>
            <input type="checkbox" name="skill[]" value="cpp" id="cpp"> 
            <label for="cpp">CPP</label>
            <input type="checkbox" name="skill[]" value="java" id="java"> 
            <label for="java">JAVA</label>
       </div>
       <div>
       <h3>Gender</h3>
            <input type="radio" name="gender[]" value="male" id="male"> 
            <label for="male">Male</label>
            <input type="radio" name="gender[]" value="female" id="female"> 
            <label for="female">Female</label>
       </div>
       <div>
       <h3>City</h3>
            <select name="city[]" id="">
                <option value="">Select City</option>
                <option value="ptk">Pathankot</option>
                <option value="mohali">Mohali</option>
            </select>
       </div>
       <div>
        <button type="submit">Submit</button>
       </div>
    </form>
</div>
