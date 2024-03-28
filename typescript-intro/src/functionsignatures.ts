// let greeting: Function;

// example 1
let greeting: (a: string, b: string) => void;

greeting = (name: string, greeting: string) => {
    console.log(`${name} says ${greeting}`);
} //function follows the signature typed above

// example 2
let calc: (a: number, b: number, c: string) => number;

calc = (numOne: number, numTwo: number, action: string) => {
    if (action === 'add') {
        return numOne + numTwo
    }
    else {
        return numOne - numTwo
    }
};

// example 3
let logDetail: (obj: {name: string, age: number}) => void;

type person = {
    name: string,
    age: number
}

logDetail = (ninja: person) => {
    console.log(`${ninja.name} is ${ninja.age} years old`);
}

