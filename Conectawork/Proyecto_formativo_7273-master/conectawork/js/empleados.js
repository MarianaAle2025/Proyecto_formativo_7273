let empleados = JSON.parse(localStorage.getItem("empleados")) || [];
let editIndex = -1;

// MOSTRAR TABLA
function mostrar(){
    const tabla = document.getElementById("tablaEmpleados");
    tabla.innerHTML = "";

    empleados.forEach((emp, i) => {
        tabla.innerHTML += `
        <tr>
            <td>${emp.nombre}</td>
            <td>${emp.cedula}</td>
            <td>${emp.cargo}</td>
            <td>
                <button onclick="editar(${i})">✏ Editar</button>
                <button class="delete" onclick="eliminar(${i})">🗑 Eliminar</button>
            </td>
        </tr>
        `;
    });

    localStorage.setItem("empleados", JSON.stringify(empleados));
}

// AGREGAR O EDITAR
function agregarEmpleado(event){
    event.preventDefault();

    const nombre = document.getElementById("nombre").value;
    const cedula = document.getElementById("cedula").value;
    const cargo = document.getElementById("cargo").value;

    if(editIndex === -1){
        // CREAR
        empleados.push({nombre, cedula, cargo});
    } else {
        // EDITAR (ESTO ERA LO QUE TE FALTABA)
        empleados[editIndex] = {nombre, cedula, cargo};
        editIndex = -1;
    }

    event.target.reset();
    mostrar();
}

// EDITAR (CARGA DATOS EN INPUTS)
function editar(index){
    document.getElementById("nombre").value = empleados[index].nombre;
    document.getElementById("cedula").value = empleados[index].cedula;
    document.getElementById("cargo").value = empleados[index].cargo;

    editIndex = index;
}

// ELIMINAR
function eliminar(index){
    empleados.splice(index, 1);
    mostrar();
}

// INICIAR
mostrar();