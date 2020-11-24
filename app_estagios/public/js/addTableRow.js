var ids_cronograma = 0;

var addRowBtn = document.querySelector(".add-row-btn");
var cronogramaTable = document.getElementById("propostas-table");

addRowBtn.addEventListener("click", function() {

    var table_row = document.createElement("tr");

    var table_data = document.createElement("td");
    var input_field = document.createElement("input");
    input_field.id="crono_desc_tarefa_" + ids_cronograma;
    table_data.append(input_field);
    table_row.append(table_data);

    var table_data = document.createElement("td");
    var input_field = document.createElement("input");
    input_field.id="crono_duracao_" + ids_cronograma;
    table_data.append(input_field);
    table_row.append(table_data);

    var table_data = document.createElement("td");
    table_row.append(table_data);
    cronogramaTable.appendChild(table_row);

    ids_cronograma++;
});
