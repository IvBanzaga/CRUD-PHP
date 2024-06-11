var already = false; // already verifica si ya se presionó el botón Verifica la Fecha.

function verify() // Esta función verifca si la fecha está bien formada.
{
    if (!already) // Si already está a false, es la primera vez que se presionó el botón Verifica la Fecha.
    {
        already = true; // Pongo already a true.
        let array_month = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]; // Array de los meses.
        let array_day = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"]; // Array de los días de la semana.
        let result = document.getElementById("result"); // Elemento h3 con ID result.
        let extra = document.getElementById("extra"); // Elemento div con ID extra.
        let date_verify = document.getElementById("date_verify"); // Elemento button con ID date_verify.
        let day = document.getElementById("day").value; // Valor en el Elemento input type number con ID day.
        let month = document.getElementById("month").value; // Valor en el Elemento input type number con ID month.
        let year = document.getElementById("year").value; // Valor en el Elemento input type number con ID year.
        let dy = document.getElementById("day"); // Elemento input type number con ID day.
        let mth = document.getElementById("month"); // Elemento input type number con ID month.
        let yr = document.getElementById("year"); // Elemento input type number con ID year.
        let ok = false; // Defino y asigno el valor false a la variable ok.

        switch (day) // Hago un switch al día introducido.
        {
            case "31": // Si es 31
                if (month != 2 && month != 4 && month != 6 && month != 9 && month != 11) // Verifico que el mes introducido no sea el 2, 4, 6, 9 ú 11.
                {
                    ok = true; // Si el mes no era ninguno de los anteriores es que es un mes de 31 días, pongo ok a true.
                }
                else // Si el mes es uno de los de la lista.
                {
                    already = false;
                    toast(1, "Error en el Número de Día",  "Has puesto 31 días pero el mes seleccionado no tiene 31 días, tienes que cambiar algún número."); // Muestro un mensaje de error.
                    return false; // Retorno false para que no se envíe el formulario.
                }
                break; // Llega aquí si ok se puso a true, de lo contrario sale del switch al encontrar el return.
            case "30": // Si el día es 30
                if (month == 2) // Solo verifico si el mes es 2, ya que los demás meses tienen todos 30 días.
                {
                    already = false;
                    toast (1, "Error en el Número de Día", "Has puesto 30 días pero el mes de Febrero solo tiene 29 días en años bisiestos o 28 días, tienes que cambiar algún número.");
                    return false; // Si el mes es 2 muestro un mensaje de error y retorno false.
                }
                else // Si no.
                {
                    ok = true; // El mes introducido tiene al menos 30 días, pongo ok a true.
                }
                break; // Salgo del switch.
            case "29": // Si el día es 29
                if (month != 2) // Verifico si el mes no es 2.
                {
                    ok = true; // Pongo ok a true.
                }
                else // Si el mes introducido es 2.
                {
                    if (year % 4 == 0 && year % 100 != 0) // Verifico por los módulos si el año introducido es bisiseto.
                    {
                        ok = true; // Si pasa la verificación, el año es bisiesto, pongo ok a true
                    }
                    else // Si no pasa la verificación anterior aun falta una verificación, los años que son módulo de 400 son bisiestos.
                    {
                        if (year % 400 == 0) // Si el año es módulo de 400
                        {
                            ok = true; // Pongo ok a true.
                        }
                        else // Si el año no es bisiesto.
                        {
                            already = false;
                            result.innerHTML = "Este Año no es bisiesto, Febrero solo tiene 28 días."; // Muestro en el h3 con ID result que ese año no es bisiesto.
                            return false; // Retorno false para que no se envíe el formulario.
                        }
                    }
                }
                break; // Salgo del switch.
            default: // Por defecto entra cuando el día es 28 o menor.
                ok = true; // Pongo ok a true.
        }
        if (ok) // Si ok está a true.
        {
            dy.readOnly = true; // Hago que el input con ID dy sea de solo lectura para que no se pueda cambiar el día.
            mth.readOnly = true; // Hago que el input con ID mth sea de solo lectura para que no se pueda cambiar el mes.
            yr.readOnly = true; // Hago que el input con ID yr sea de solo lectura para que no se pueda cambiar el año.
            var dt = new Date(year, month - 1, day); // Declaro y asigno a la variable dt una fecha con el año introducido, el mes menos 1 introducido, ya que javascript cuenta los meses desde 0 y el día introducido.
            var my_day = dt.getDay(); // Declaro y asigno a la variable my_day el día de la semana que corresponde a la fecha introducida(asigna el valor en números).
            let month_name = document.createElement("input"); // Creo un elemento input con el nombre month_name
            let day_name = document.createElement("input"); // Creo un elemento input con el nombre day_name

            month_name.name = "month_name"; // Al elemento month_name le pongo el nombre month_name.
            month_name.type = "hidden"; // Lo hago de tipo hidden(Oculto).
            month_name.value = array_month[month - 1]; // Le asigno el valor del mes que está en el array_month.
            extra.appendChild(month_name); // Lo agrego al div con ID extra.

            day_name.name = "day_name"; // Al elemento day_name le pongo el nombre day_name.
            day_name.type = "hidden"; // Lo hago de tipo hidden(Oculto).
            day_name.value = array_day[my_day]; // Le asigno el valor del array de los días de la semana.
            extra.appendChild(day_name); // Lo agrego al div con ID extra.

            result.innerHTML = `La Fecha Seleccionada es: ${array_day[my_day]} ${day} de ${array_month[month - 1]} de ${year}`; // Muestro la fecha en el h3 con ID result.
            date_verify.value = "Almacena la Fecha en la Base de Datos."; // Cambio el texto del botón con ID date_verify.
            date_verify.className = "btn btn-danger btn-lg"; // Cambio el estilo del botón con ID date_verify.
            return false; // Retorno false para que no se envíe el formulario.
        }
    }
    else // Si ya se comprobó la fecha.
    {
        return true; // Retorno true para enviar el formulario.
    }
}

function checkpass() // Esta función verifica que las contraseñas sean iguales.
{
    let pass = document.getElementById("pass1").value; // Asigno a la variable pass el valor en el input con ID pass1.
    let pass2 = document.getElementById("pass2").value; // Asigno a la variable pass2 el valor en el input con ID pass2.

    if (pass != pass2) // Si pass es diferente de pass2.
    {
        toast(1, "Las Contraseñas no Coinciden", "Has Escrito: " + pass + " y " + pass2); // Muestro un mensaje de error.
        return false; // Retorno false, el formulario no se envía.
    }
    else // Si son iguales
    {
        return true; // Retorno true se envía el formulario.
    }
}

function toast(warn, ttl, msg) // Función para mostrar el Dialogo con los mensajes de alerta, recibe, Código, Título y Mensaje.
{
    var alerta = document.getElementById("alerta"); // La ID del botón del dialogo.
    var title = document.getElementById("title"); // Asigno a la variable title el h4 con id title.
    var message = document.getElementById("message"); // Asigno a la variable message el h5 con id message;
    if (warn == 1) // Si el código es 1, es una alerta.
    {
        title.style.backgroundColor = "#000000"; // Pongo los atributos, color de fondo negro.
        title.style.color = "yellow"; // Y color del texto amarillo.
    }
    else if (warn == 0) // Si no, si el código es 0 es un mensaje satisfactorio.
    {
        title.style.backgroundColor = "#FFFFFF"; // Pongo los atributos, color de fondo blanco.
        title.style.color = "blue"; // Y el color del texto azul.
    }
    else // Si no, viene un 2, es una alerta de error.
    {
        title.style.backgroundColor = "#000000"; // Pongo los atributos, color de fondo negro.
        title.style.color = "red"; // Y color del texto rojo.
    }
    title.innerHTML = ttl; // Muestro el Título del dialogo.
    message.innerHTML = msg; // Muestro los mensajes en el diálogo.
    alerta.click(); // Lo hago aparecer pulsando el botón con ID alerta.
}

function screenSize() // Función para dar el tamaño máximo de la pantalla a las vistas.
{
    let view1 = document.getElementById("view1"); // view1 es la ID del div view1.
    let view2 = document.getElementById("view2");
    let view3 = document.getElementById("view3");
    let height = innerHeight; // innerHeight es el tamaño vertical de la pantalla.

    if (view1.offsetHeight < height) // Si el tamaño vertical de la vista es menor que el tamaño vertical de la pantalla.
    {
        view1.style.height = height + "px"; // Asigna a la vista el tamaño vertical de la pantalla.

        if (view2 != null) // Si existe el div view2
        {
            if (view2.offsetHeight < height)
            {
                view2.style.height = height + "px";
            }

            if (view3 != null)
            {
                if (view3.offsetHeight < height)
                {
                    view3.style.height = height + "px";
                }
            }
        }
    }
}

function screen() // Esta función comprueba si el ancho de la pantalla es de Ordenador o de Teléfono, ara los menues.
{
    let mobile = document.getElementById("mobile"); // Asigno a la variable mobile el elemento con ID mobile.
    let pc = document.getElementById("pc"); // Asigno a la variable pc el elemento con ID pc.
    let width = innerWidth; // innerWidth es el tamaño horizontal de la pantalla.
    if (width < 965) // Si el ancho es inferior a 965.
    {
        pc.style.visibility = "hidden"; // Oculta el menú de Ordenador
        mobile.style.visibility = "visible"; // Muestra el menú de Teléfono.
    }
    else // Si es mayor o igual a 965;
    {
        pc.style.visibility = "visible"; // Muestra el menú para Ordenador
        mobile.style.visibility = "hidden"; // Oculta el menú para Teléfono.
    }
    reloadPage();
}

function reloadPage() // Función que recarga la página después de 2 segundos si se modifica el tamaño horizontal.
{
    var currentDocumentTimestamp = new Date(performance.timing.domLoading).getTime(); // El tiempo que tarda la página en cargar, OjO! está obsoleto.
    var now = Date.now(); // Obtiene la fecha en milisegundos.
    var twoSec = 2 * 1000; // Declaro y asigo 2 segundos a la variable twoSec.
    var plusTwoSec = currentDocumentTimestamp + twoSec; // Declaro y agrego 2 segundos al tiempo que tardó en cargar la página en la variable plusTwoSec.
    if (now > plusTwoSec) // Si la fecha al cargar la página es mayor que el tiempo que tardó la página en cargar más 2 segundos.
    {
        location.reload(); // Recarga la página.
    }
}

function goThere() // Cuando cambia el selector del menú para Teléfono.
{
    var change = document.getElementById("change").value; // Change obtiene el valor en el selector.
    switch(change)
    {
        case "view3": // Si llega view3
            window.open("index.php#view3", "_self"); // Salta a la vista3.
            break;
        case "view2":
            window.open("index.php#view2", "_self"); // Salta a la vista2.
        break;
        default :
            window.open("index.php#view1", "_self"); // Salta a la vista1.
        break;
    }
}

function showEye(which) // Función para mostrar el ojo de los input de las contraseñas, recibe el número del elemento que contiene el ojo.
{
    let eye = document.getElementById("toggle" + which); // Asigno a eye la id del elemento que contiene el ojo.
    eye.style.visibility = "visible"; // Hago visible el elemento, el ojo.
}

function spy(which) // Función para el ojito de las Contraseñas al hacer click en el ojito, recibe el número de la ID del input de la password.
{
    const togglePassword = document.querySelector('#toggle' + which); // Asigno a la constante togglePassword el input con ID togglePassword + which.
    const password = document.querySelector('#pass' + which); // Asigno a password la ID del input con ID pass + which.
    
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password'; // Asigno a type el resultado de un operador ternario, si presiono el ojito y el tipo del input es password
    // lo cambia a text, si es text lo cambia a password.
    password.setAttribute('type', type); // Le asigno el atributo al input password.
    togglePassword.classList.toggle('fa-eye-slash'); // Cambia el aspecto del ojito, al cambiar el input a tipo texto, el ojo aparece con una raya.
}