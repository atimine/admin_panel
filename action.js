$(document).ready(function () {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function () {
        if (this.checked) {
            checkbox.each(function () {
                this.checked = true;
            });
        } else {
            checkbox.each(function () {
                this.checked = false;
            });
        }
    });
    checkbox.click(function () {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
});

// script.js

var data = [
    {
        name: "Hardy",
        surname: "Thomas",
        email: "thomashardy@mail.com",
        age: "89 Chiaroscuro Rd, Portland, USA",
        password: "(171) 555-2222",
    },
    {
        name: "Hardy",
        surname: "Thomas",
        email: "thomashardy@mail.com",
        age: "89 Chiaroscuro Rd, Portland, USA",
        password: "(171) 555-2222",
    },
    {
        name: "Hardeeey",
        surname: "Thomas",
        email: "thomashardy@mail.com",
        age: "89 Chiaroscuro Rd, Portland, USA",
        password: "(171) 555-2222",
    },
    {
        name: "Hardy",
        surname: "Thomas",
        email: "thomashardy@mail.com",
        age: "89 Chiaroscuro Rd, Portland, USA",
        password: "(171) 555-2222",
    },
    {
        name: "Hardy",
        surname: "Thomas",
        email: "thomashardy@mail.com",
        age: "89 Chiaroscuro Rd, Portland, USA",
        password: "(171) 555-2222",
    },
];
const json = {"result":true, "count":42};
// const obj = JSON.parse(json);

// let jsonformat = JSON.parse(data);
console.log(typeof json);

function addRow(rowData) {
    var table = document.getElementById("myTable");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    cell1.innerHTML = rowData.name;
    cell2.innerHTML = rowData.surname;
    cell3.innerHTML = rowData.email;
    cell4.innerHTML = rowData.age;
    cell5.innerHTML = rowData.password;
}

function clearTable() {
    var table = document.getElementById("myTable");
    while (table.rows.length > 1) {
        table.deleteRow(1);
    }
}

document.getElementById("form-check").addEventListener("change", function () {
    clearTable();
    var selectedOption = parseInt(this.value);
    for (var i = 0; i < selectedOption; i++) {
        addRow(data[i]);
    }
});
