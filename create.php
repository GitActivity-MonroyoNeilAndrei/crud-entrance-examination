<div id="createFormBg" class="popup-background hidden"></div>

<form id="createForm" class="create-wrapper hidden">
    <h4>Create Employee</h4>

    <!-- <div id="createResponse"></div> -->

    <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
    <input type="text" id="address" name="address" placeholder="Address" required>
    <input type="date" id="birthdate" name="birthdate" placeholder="Birthdate: " required>
    <input type="number" id="age" name="age" placeholder="Age" required>


    <div class="gender-wrapper">
        <h5>Gender:</h5>
        <div class="gender-options">
            <div>
                <input class="gender-option" type="radio" id="gender" name="gender" id="Male" value="Male" required>
                <label for="male">Male</label>
            </div>
            <div>
                <input class="gender-option" type="radio" id="gender" name="gender" id="Female" value="Female" required>
                <label for="female">Female</label>
            </div>
            <div>
                <input class="gender-option" type="radio" id="gender" name="gender" id="Other" value="Other" required>
                <label for="other">Other</label>
            </div>
        </div>
    </div>

    <div class="civilStatus-wrapper">
        <h5>Civil Status: </h5>

        <select name="civilStatus" id="civilStatus">
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Separated">Separated</option>
            <option value="Widowed">Widowed</option>
        </select>
    </div>

    <input type="text" id="contactNo" name="contactNo" placeholder="Contact No." required>
    <input type="number" id="salary" name="salary" placeholder="Salary" step="0.01" required>
    
    <div class="isActive-wrapper">
        <h5>Is Active: </h5>
        <input class="isActiveCheckbox" type="checkbox" id="status" name="status" value="1">
    </div>


    <div class="create-form-btn">
        <button type="submit" class="btn-success">Create</button>
        <button onclick="toggleElement('createForm', 'createFormBg', true)" type="button" class="btn-danger">Cancel</button>
    </div>
</form>