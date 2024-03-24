let character = 'mario';
let age = 30;
let isBlackBelt = false;

// TS infers types of variables above...

// character = 20;
character = 'luigi'

// age = 'yoshi'
age = 30

// isBlackBelt = 'yes'
isBlackBelt = true;

const circ = (diameter: number) => {
  return diameter * Math.PI
};

// console.log(circ('hello'))
console.log(circ(7.5));


// arrays
let names = ['luigi', 'mario', 'yoshi']

// names = 'hello'

names.push('toad');
// names.push(3)
// names[0] = 3

let numbers = [10, 20, 30, 40]
numbers.push(25)
// numbers.push('lorem')
// numbers[1] = 'ipsum'

let mixed = ['ken', 4, 'chun-li', 8, 9, true]; // ts now infers the array can have 3 types
mixed.push('ryu')
mixed.push(10);
mixed[0] = 3;


// objects
let ninja = {
  name: 'mario',
  belt: 'black',
  age: 30
}

ninja.age = 40
ninja.name = 'ryu'

// ninja.age = '30'
// ninja.skills = ['fighting', 'sneaking'] // cant add new properties once we define an object
// ninja = [] // cant change the type of object

// object has to have the same structure of initial object
ninja = {
  name: 'yoshi',
  belt: 'orange',
  age: 40,
  // skills: []
}

