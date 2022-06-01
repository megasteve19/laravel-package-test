console.log(`Hello, ${givenName}!`);

function sayHello(givenName)
{
    alert(`Hello, ${givenName}!`);
}

document.getElementById("say-hello").addEventListener("click", () => { sayHello(givenName); });
