const cambiarMayus = ()=>{
    let apellidosAlumno = document.getElementById('apellidos');
    let apellidosTutor = document.getElementById('apellidosTutor');
    apellidosAlumno.value= apellidosAlumno.value.toUpperCase()
    apellidosTutor.value=apellidosTutor.value.toUpperCase()
}

let inputAlumno = document.getElementById('nombres');
inputAlumno.addEventListener('blur',cambiarMayus);

let inputTutor = document.getElementById('nombresTutor');
inputTutor.addEventListener('blur',cambiarMayus);