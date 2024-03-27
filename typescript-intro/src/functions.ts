let greet: Function; //notice capital letter

greet = () => {
    console.log('hello, world');
}
// greet = 'hello'


const add = (a: number, b: number, c?: number | string): void => {
    console.log(a + b);
    // returns void
}; // parameter with ? is optional

add(5, 10);
// add(5, '10');

const minus = (a: number, b: number) => {
    return a - b
};

let result = minus(10, 7);
// result = '...' // can't do that because ts already inferred the return type

// explicit function return type:
const plus = (a: number, b: number): number => {
    return a + b
};

let total = plus(10, 2);

