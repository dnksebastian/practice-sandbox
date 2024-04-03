import { Invoice } from './classes/Invoice.js'
import { ListTemplate } from './classes/ListTemplate.js';
import { Payment } from './classes/Payment.js';
import { HasFormatter } from './interfaces/HasFormatter.js';

// let docOne: HasFormatter;
// let docTwo: HasFormatter;

// docOne = new Invoice('yoshi', 'web work', 250);
// docTwo = new Payment('mario', 'plumbing work', 200);

// let docs: HasFormatter[] = [];
// docs.push(docOne);
// docs.push(docTwo);

// console.log(docs);

// const anchor = document.querySelector('a')!;
// // if (anchor) {
// //     console.log(anchor.href);
// // }
// console.log(anchor.href);

// Interfaces

interface IsPerson {
    name: string;
    age: number;
    speak(a: string): void;
    spend(a: number): number;
}

const me: IsPerson = {
    name: 'shaun',
    age: 30,
    speak(text: string): void {
        console.log(text);
    },
    spend(amount: number): number {
        console.log('I spent ', amount);
        return amount
    }
}

// let someone: IsPerson;
const greetPerson = (person: IsPerson) => {
    console.log('hello', person.name);
};

// greetPerson(me)
// console.log(me);

// const invOne = new Invoice('Mario', 'work on the mario website', 250);
// const invTwo = new Invoice('Luigi', 'work on the luigi website', 300);

// let invoices: Invoice[] = []; //allows only Invoice objects to be added
// invoices.push(invOne);
// invoices.push(invTwo);

// invoices.forEach((inv) => {
//     console.log(inv.client, inv.amount, inv.format());
// })

// const form = document.querySelector('form')!;
const form = document.querySelector('.new-item-form') as HTMLFormElement;
// console.log(form.children);

// inputs
const type = document.querySelector('#type') as HTMLSelectElement;
const tofrom = document.querySelector('#tofrom') as HTMLInputElement;
const details = document.querySelector('#details') as HTMLInputElement;
const amount = document.querySelector('#amount') as HTMLInputElement;

// list template instance
const ul = document.querySelector('ul')!;
const list = new ListTemplate(ul)

form.addEventListener('submit', (e: Event) => {
    e.preventDefault();

    let values: [string, string, number];
    values = [tofrom.value, details.value, amount.valueAsNumber]

    let doc: HasFormatter;

    if (type.value == 'invoice') {
        doc = new Invoice(...values)
    } else {
        doc = new Payment(...values)
    }

    list.render(doc, type.value, 'end');
})


// Generics

const addUID = <T extends {name: string}>(obj: T) => {
    let uid = Math.floor(Math.random() * 100);
    return {...obj, uid};
}

let docOne = addUID({name: 'yoshi', age: 40})
console.log(docOne);

// with interfaces

interface Resource<T> {
    uid: number,
    resourceName: string;
    data: T;
}

const docThree: Resource<string> = {
    uid: 1,
    resourceName: 'person',
    data: 'a string'
}

const docFour: Resource<string[]> = {
    uid: 2,
    resourceName: 'shoppingList',
    data: ['bread', 'milk']
}

console.log(docThree, docFour);


// Enums
enum ResourceType {BOOK, AUTHOR, FILM, DIRECTOR, PERSON} // keywords are associated with intexes (from 0)

interface OtherResource<T> {
    uid: number;
    resourceType: ResourceType;
    data: T;
}

const docA: OtherResource<object> = {
    uid: 1,
    resourceType: ResourceType.BOOK,
    data: {title: 'name of the wind'}
}

const docB: OtherResource<object> = {
    uid: 10,
    resourceType: ResourceType.PERSON,
    data: {name: 'yoshi'}
}

console.log(docA, docB);

// tuples

let arr = ['ryu', 25, true];
arr[0] = false;
arr[1] = 'yoshi';
arr = [30, false, 'yoshi'] // all this operations can be done with normal arrays


let tup: [string, number, boolean] = ['ryu', 25, true]; // this sets fixed types for the tuple positions

let student: [string, number];
student = ['chun-li', 123]