const c = console.log

// const doSomething = x => y => x * y
// const a = doSomething(2)(2)
// const b = doSomething(3)
// c(doSomething(a)(b(3)))

// setTimeout(() => {
//     alert('hola')
// }, 3000)

// {
//     let prof= 'alex'
//     {
//         c(prof)
//     }
// }
// c(prof)


// function aumentar(){
//     let numero = 0
//     return function(){
//         numero++
//         c(numero)
//     }
// }
// const incrementar= aumentar()

// incrementar()
// incrementar()
// incrementar()
// incrementar()
// incrementar()

// let numero = 0 
// function aumentar(){
//     numero ++
//     c(numero)
// }

// aumentar()
// aumentar()
// aumentar()
// aumentar()
// aumentar()

// let user={
//     nombre: 'erick',
//     edad: 22,
//     getEdad(){
//         c(this.edad + this.nombre)
//     }
// }
// user.getEdad()

/* juego adivina el numero */
let randomNumber = Math.floor(Math.random() * 100) + 1

const guesses = document.querySelector('.guesses')
const lastResult = document.querySelector('.lastResult')
const lowOrHi = document.querySelector('.lowOrHi')

const guessesSubmit = document.querySelector('.guessSubmit')
const guessesField = document.querySelector('.guessField')
let msg=prompt('¿Escribe tu nombre?')
let guessesCount = 1   
let resetButton

const checkGuess = () => {
    
    let userGuess = Number(guessesField.value)
    if (guessesCount === 1) guesses.textContent = 'Intentos Anteriores: '

    guesses.textContent += userGuess + ' '
    if (userGuess === randomNumber) {
        lastResult.textContent = '¡Felicitaciones! ¡lo Adivinaste!'+msg
        lastResult.style.backgroundColor = 'rgba(0,255,0,0.5)'
        lastResult.style.padding='1rem'
        lastResult.style.fontSize='1.5rem'
        lowOrHi.textContent = ' '
        setGameOver()
    } else if (guessesCount === 10) {
        lastResult.textContent = '¡¡¡!!!Fin del Juego '+ msg +'!!!!!!!'
        setGameOver()
    } else {
        lastResult.textContent = msg+' ¡estas Equivocado!'
        lastResult.style.backgroundColor = 'rgba(255,0,0,0.5)'
        lastResult.style.padding='1rem'
        lastResult.style.fontSize='1.5rem'
        if (userGuess < randomNumber) {
            lowOrHi.textContent = '¡El numero es muy bajo!'
        } else if (userGuess > randomNumber) {
            lowOrHi.textContent = 'el numero es muy grande'
        }
    }
    guessesCount++
    guessesField.value = ''
    guessesField.focus();

}

const setGameOver = () => {
    guessesField.disabled = true
    guessesSubmit.disabled = true
    resetButton = document.createElement('button')
    resetButton.textContent = 'Iniciar nuevo juego'
    resetButton.classList.add('btn-primary');
    resetButton.style.marginLeft= '7rem'
    document.body.appendChild(resetButton)
    resetButton.addEventListener('click', resetGame)
}

const resetGame = () => {
    guessesCount = 1
    const resetParas = document.querySelectorAll('resultParas p')
    for (let i = 0; i < resetParas.length; i++) {
        resetParas[i].textContent = ''
    }
    resetButton.parentNode.removeChild(resetButton)
    guessesField.disabled = false
    guessesSubmit.disabled = false
    guessesField.value = ''
    guessesField.focus()

    lastResult.style.backgroundColor = 'rgba(0,0,0,0.5)'
    lastResult.style.padding='1rem'
    lastResult.style.fontSize='1.5rem'
    randomNumber = Math.floor(Math.random() * 100) + 13
}
guessesSubmit.addEventListener('click', checkGuess)