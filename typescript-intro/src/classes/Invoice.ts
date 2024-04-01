import { HasFormatter } from '../interfaces/HasFormatter.js';

// classes

export class Invoice implements HasFormatter {
    // readonly client: string;
    // private details: string;
    // public amount: number;

    // constructor(c: string, d: string, a: number) {
    //     this.client = c;
    //     this.details = d;
    //     this.amount = a;
    // }

    //shorthand available when using access modifiers:
    constructor(
        readonly client: string,
        private details: string,
        public amount: number,
    ) {
    }

    format() {
        return `${this.client} owes £${this.amount} for ${this.details}`;
    }
} // all properties are public by default