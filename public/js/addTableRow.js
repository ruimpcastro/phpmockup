var addRowBtn = document.querySelector(".add-row-btn");
var remRowBtn = document.querySelector(".rem-row-btn");
var cronogramaTable = document.getElementById("propostas-table");
var cronoCount = document.getElementById("cronoCount");
var fieldId = 0;

addRowBtn.addEventListener("click", function() {

    var table_data;
    var input_field;

    var table_row = document.createElement("tr");
    table_row.id="cronorow"+fieldId;

    table_data = document.createElement("td");
    input_field = document.createElement("input");
    input_field.name="crono_tarefa"+fieldId;
    input_field.id="crono_tarefa"+fieldId;
    input_field.type="text";
    table_data.append(input_field);
    table_row.append(table_data);

    table_data = document.createElement("td");
    input_field = document.createElement("input");
    input_field.name="crono_duracao"+fieldId;
    input_field.id="crono_duracao"+fieldId;
    input_field.type="text";
    table_data.append(input_field);
    table_row.append(table_data);

    cronogramaTable.appendChild(table_row);

    fieldId++;
    cronoCount.value=fieldId;
    console.log(cronoCount.value)
});

remRowBtn.addEventListener("click", function() {
    var lastRow = document.getElementById("cronorow"+(fieldId-1));
    lastRow.remove();
    fieldId--;
    cronoCount.value=fieldId;
    console.log(cronoCount.value)
});
