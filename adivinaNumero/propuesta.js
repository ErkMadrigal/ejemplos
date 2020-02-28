let im=console.log
const respuesta = document.querySelector('.respuesta')
const btnRespuesta = document.querySelector('.btnRespuesta')
const text = document.querySelector('.textField')
// let msg=prompt('¿Escribe tu nombre mi amor?')
let texto
let resetButton

const Respuesta = () => {
    let txt = (text.value).trim().toLowerCase()

    im(txt)
    if (txt === 'si') {
        respuesta.textContent = 'Me encantas mi amor gracias por ser lo mejor de mi vida <3'
        respuesta.style.backgroundColor = 'rgba(0,0,255,0.5)'
        respuesta.classList.add('h4');
        respuesta.style.padding = '1rem'
        respuesta.style.boxShadow='5px 8px 15px 4px rgba(0,0,0,0.6)'
        respuesta.style.borderRadius= '10px'
        setBloquear()
    } else if (txt === 'no') {
        respuesta.textContent = ':"( porque me dijiste que no, No me quieres :('
        respuesta.style.backgroundColor = 'rgba(255,0,0,0.5)'
        respuesta.style.padding = '1rem'
        respuesta.style.boxShadow='5px 8px 15px 4px rgba(0,0,0,0.6)'
        respuesta.style.borderRadius= '10px'
        respuesta.classList.add('h4');
    } else if (txt === '') {
        respuesta.textContent = ':"( porque no me escribiste algo:('
        respuesta.style.backgroundColor = 'rgba(255,0,0,0.5)'
        respuesta.style.padding = '1rem'
        respuesta.style.boxShadow='5px 8px 15px 4px rgba(0,0,0,0.6)'
        respuesta.style.borderRadius= '10px'
        respuesta.classList.add('h4');
    }else{
        respuesta.textContent = 'culquier otro tipo de respuesta no es valida mi amor :)'
        respuesta.style.backgroundColor = 'rgba(255,0,0,0.5)'
        respuesta.style.padding = '1rem'
        respuesta.style.boxShadow='5px 8px 15px 4px rgba(0,0,0,0.6)'
        respuesta.style.borderRadius= '10px'
        respuesta.classList.add('h4');
    }
}
const setBloquear = () => {
    btnRespuesta.disabled = true
    text.disabled = true
    texto = document.createElement('div')
    texto.classList.add('h4');
    texto.textContent = 'desde el primer dia que te vi supe que tu ivas a ser el amor de mi vida'
    texto.style.marginLeft = '7rem'
    document.body.appendChild(texto)
}

btnRespuesta.addEventListener('click', Respuesta)