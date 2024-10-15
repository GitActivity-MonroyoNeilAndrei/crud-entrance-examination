<div id="editFormBg" class="popup-background hidden"></div>

<form id="editForm" class="create-wrapper hidden">
    <h4>Edit Employee</h4>

    <div id="editResponse"></div>
    <input type="text" id="emmployeeId-edit" name="id" class="hidden">

    <input type="text" id="fullName-edit" name="fullName-edit" placeholder="Full Name" required>
    <input type="text" id="address-edit" name="address-edit" placeholder="Address" required>
    <input type="date" id="birthdate-edit" name="birthdate-edit" placeholder="Birthdate: " required>
    <input type="number" id="age-edit" name="age-edit" placeholder="Age" required>

    <div class="gender-wrapper">
        <h5>Gender:</h5>
        <div class="gender-options">
            <div>
                <input class="gender-option-edit" type="radio" name="gender-edit" id="Male" value="Male" required>
                <label for="male">Male</label>
            </div>
            <div>
                <input class="gender-option-edit" type="radio" name="gender-edit" id="Female" value="Female" required>
                <label for="female">Female</label>
            </div>
            <div>
                <input class="gender-option-edit" type="radio" name="gender-edit" id="Other" value="Other" required>
                <label for="other">Other</label>
            </div>
        </div>
    </div>

    <div class="civilStatus-wrapper">
        <h5>Civil Status: </h5>
        
        <select name="civilStatus-edit" id="civilStatus-edit">
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Separated">Separated</option>
            <option value="Widowed">Widowed</option>
        </select>
    </div>


    <input type="text" id="contactNo-edit" name="contactNo-edit" placeholder="Contact No." required>
    <input type="number" id="salary-edit" name="salary-edit" placeholder="Salary" step="0.01" required>
    
    <div class="isActive-wrapper">
        <h5>Is Active: </h5>
        <input class="isActiveCheckbox" type="checkbox" id="status-edit" name="status-edit" value="1">
    </div>


    <div class="create-form-btn">
        <button type="submit" class="btn-success">Save Changes</button>
        <button onclick="toggleElement('editForm', 'editFormBg', true)" type="button" class="btn-danger">Cancel</button>
    </div>



</form>