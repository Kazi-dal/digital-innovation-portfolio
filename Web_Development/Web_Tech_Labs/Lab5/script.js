// Create a calculation function, called calculate(), that performs basic
// arithmetic calculations, such as subtract, add, multiply, divide

function calculate(a, b, operation){
	switch (operation){
		case 'add':
			result = a + b;
			console.log(result);
			return result;
			break;
		case 'subtract':
			result = a - b;
			console.log(result);
			return result;
			break;
		case 'multiply':
			result = a * b;
			console.log(result);
			return result;
		case 'divide':
			result = a / b;
			console.log(result);
			return result;
		default:
            console.log("Use an appropriate operation(add, subtract, divide, multiply)")
            return "Use an appropriate operation(add, subtract, divide, multiply)"
    }
}


// Create a function called evenodd() that accepts a number and determines
// whether the number is even or odd

function evenodd(num){
    if(num%2 == 0){
        console.log("even");
        return "even";
    }else{
        console.log("odd");
        return "odd";
    }
}

// Create a function called evenoddarray(), that accepts an array of numbers,
// and checks each individual number in order to log whether each number
// is even or odd

function evenoddarray(numbers){
    let result = numbers.map(num => (num % 2 === 0 ? 'even' : 'odd'));
  	console.log(result.join(', '));
}

// BONUS: 
// Create a function called evenoddarrayItems(), that accepts an array of numbers,
// and checks whether the Array is either even or odd based on the total number
// of items in the array

function evenoddarrayItems(numbers){
    let lengthIsEven = numbers.length % 2 === 0 ? 'even' : 'odd';
    console.log(lengthIsEven);
  }
