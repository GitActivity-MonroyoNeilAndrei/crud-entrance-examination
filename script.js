
function toggleElement(elementId, elementBgId, isHide){

    $(document).ready(function(){
        if(isHide) {
            $(`#${elementId}`).addClass("hidden");
            $(`#${elementBgId}`).addClass("hidden");
        } else {
            $(`#${elementId}`).removeClass("hidden");
            $(`#${elementBgId}`).removeClass("hidden");
        }
    });
}



$('#employee-link').on('click', function() {
    $('#crudTable').removeClass('hidden');
    $('#home').addClass('hidden');
})


$('#home-link').on('click', function() {
    $('#crudTable').addClass('hidden');
    $('#home').removeClass('hidden');
})



function fetchData() {
        $.ajax({
            url: 'fetch_data.php',
            type: 'GET',
            success: function(response) {
                let employeeList = '';
                response.forEach(function(employee) {
                    employeeList += `<tr">`;
                    employeeList += `<td>${employee.fullname}</td>`;
                    employeeList += `<td>${employee.address}</td>`;
                    employeeList += `<td>${employee.birthdate}</td>`;
                    employeeList += `<td>${employee.age}</td>`;
                    employeeList += `<td>${employee.gender}</td>`;
                    employeeList += `<td>${employee.civilstat}</td>`;
                    employeeList += `<td>${employee.contactnum}</td>`;
                    employeeList += `<td>${employee.salary}</td>`;
                    employeeList += `<td>${employee.isactive}</td>`;
                    employeeList += `<td>
                                        <button onclick="loadEmployeeData(${employee.recid})" type="button" class="btn-secondary">Edit</button>
                                        <button onclick="deleteData(${employee.recid})" type="button" class="btn-danger deleteBtn">Delete</button>
                                    </td>`
                    employeeList += `</tr>`;
                }); 
                $('#employeeList').html(employeeList);
    
            },
            error: function() {
                $('#employeeList').html('An error occurred while fetching data.');
            }
        });
}

fetchData();


$(document).ready(function() {
    $('#createForm').on('submit', function(event) {
        event.preventDefault();


        $.ajax({
            url: 'add_data.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#createResponse').html(response);
                $('#createForm')[0].reset();

                fetchData();
                toggleElement('createForm', 'createFormBg', true);

            },
            error: function() {
                $('#createResponse').html('An error occurred. Please try again.');
            }
        });
    });
});


function deleteData(row) {

        const id = row;

        if (confirm('Are you sure you want to delete this employee?')) {
            $.ajax({
                url: 'delete_data.php',
                type: 'POST',
                data: { id: id },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        fetchData();
                    } else {
                        alert('Error deleting record.');
                    }
                },
                error: function() {
                    alert('Error with AJAX request.');
                }
            });
        }
}




function loadEmployeeData(id) {
    $.ajax({
        url: 'fetch_employee.php',
        type: 'GET',
        data: { id: id },
        dataType: 'json',
        success: function(employee) {
            $('#emmployeeId-edit').val(employee.recid);
            $('#fullName-edit').val(employee.fullname);
            $('#address-edit').val(employee.address);
            $('#birthdate-edit').val(employee.birthdate);
            $('#age-edit').val(employee.age);

            $('.gender-option-edit').each(function(){
                this.checked = (this.value === employee.gender);
            })

            $('#civilStatus-edit').val(employee.civilstat);
            $('#contactNo-edit').val(employee.contactnum);
            $('#salary-edit').val(employee.salary);

            $('#status-edit').prop('checked', Boolean(employee.isactive));

            toggleElement('editForm', 'editFormBg', false);
        },
        error: function() {
            alert('Error loading employee data.');
        }
    })
}

$(document).ready(function() {
    $('#editForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: "update_data.php",
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {

                fetchData();
                toggleElement('editForm', 'editFormBg', true);
                
            },
            error: function() {
                alert('Error with AJAX request.');
            }
        })
    })
})

$(document).ready(function() {
    $('#loginForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: 'login_user.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#response').html(response);

                if (response.trim() === 'success') {
                    console.log('logged in');

                    window.location.href = 'index.php';
                }
            },
            error: function() {
                $('#response').html('An error occurred while processing your request.');
            }
        });
    });
});
