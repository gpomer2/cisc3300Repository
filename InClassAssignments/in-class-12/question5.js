// 5. Create a JavaScript function that makes use of variables from its parent execution context.

function outerFunction() {
    // 'greeting' is defined in the outer function's execution context
    const greeting = "Hello, world!";
    
    function innerFunction() {
      // innerFunction has access to 'greeting' from its parent scope
      console.log(greeting);
    }
    
    return innerFunction;
  }
  
  const sayHello = outerFunction();
  sayHello(); // Outputs: Hello, world!
  