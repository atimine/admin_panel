
var data = [
    { id: 1, name: "John", surname: "Johnbek", email: "john@example.com", password: "123admin" },
    { id: 2, name: "Jane", surname: "Janejon", email: "jane@example.com", password: "123admin" },
    { id: 3, name: "Doe", surname: "Doebek", email: "doe@example.com", password: "123admin" },
    { id: 4, name: "Doe4", surname: "Doe4bek", email: "doe4@example.com", password: "1234admin" }
  ];
  
  function addRow(rowData) {
    var table = document.getElementById("myTable");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    cell1.innerHTML = rowData.id;
    cell2.innerHTML = rowData.name;
    cell3.innerHTML = rowData.surname;
    cell4.innerHTML = rowData.email;
    cell5.innerHTML = rowData.password;
  }
  
  function clearTable() {
    var table = document.getElementById("myTable");
    while (table.rows.length > 1) {
      table.deleteRow(1);
    }
  }
  
  document.getElementById("selectOptions").addEventListener("change", function() {
    clearTable();
    var selectedOption = parseInt(this.value);
    for (var i = 0; i < selectedOption; i++) {
      addRow(data[i]);
    }
  });
  