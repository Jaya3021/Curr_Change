const CurrencyOne = document.getElementById('currencyone');
const CurrencyTwo = document.getElementById('currencytwo');
const AmountOne = document.getElementById('amountone');
const AmountTwo = document.getElementById('amounttwo');

//calculate
function calculate(){
    const currone = CurrencyOne.value;
    const currtwo = CurrencyTwo.value;

    fetch('https://api.exchangeratesapi.io/v1/latest?base=${currone}')
    .then(res =>res.json())
    .then(data=> {
        console.log(data)
    })
}
CurrencyOne.addEventListener('change',calculate);
CurrencyTwo.addEventListener('change',calculate);
AmountOne.addEventListener('input',calculate);
AmountTwo.addEventListener('input',calculate);

console.log(CurrencyOne.value);