/* 問1:isEven関数を実行して、以下の配列から偶数だけが出力されるように実装してください。 */
let numbers = [2, 5, 12, 13, 15, 18, 22];

for (let i = 0; i < numbers.length; i++) {
    if(numbers[i] % 2 == 0){
        isEven(numbers[i]);
    }
}

function isEven(num) {
    console.log(num + 'は偶数です');
}


/* 問2:以下の要件を満たすように実装してください。 */


class Car {
    constructor(gass,num) {
        this.gass = gass;
        this.num = num;
    }
    getNumGas(){
        console.log(`ガソリンは${this.gass}です。ナンバーは${this.num}です。`);
    }
}
let car1 = new Car(20.5,1234);
car1.getNumGas();

