type StringOrNum = string | number;
type objWithName = { name: string, uid: StringOrNum };

const logDetails = (uid: StringOrNum, item: string) => {
    console.log(`${item} has a uid of ${uid}`);
}

const greetHello = (user: {name: string, uid: string | number}) => {
    console.log(`${user.name} says hello`);
}

// const greetHelloAgain = (user: {name: string, uid: StringOrNum}) => {
//     console.log(`${user.name} says hello`);
// }

const greetHelloAgain = (user: objWithName) => {
    console.log(`${user.name} says hello`);
}


