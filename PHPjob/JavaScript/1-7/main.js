class Taiyaki {
    constructor(flaver) {
        this.flaver = flaver;
    }
}
let anko = new Taiyaki('あんこ');
let cream = new Taiyaki('クリーム');
let cheese = new Taiyaki('チーズ');

console.log(`中身は${anko.flaver}です。`);
console.log(`中身は${cream.flaver}です。`);
console.log(`中身は${cheese.flaver}です。`);

