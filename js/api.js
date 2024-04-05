// api url
const convert = document.getElementById("convert");
const result = document.getElementById("result");
const from = document.getElementById("from");
const to = document.getElementById("to");
const amount = document.getElementById("amount");
var rate = 0;
function hi() {
  let fromCurrency = from.value;
  let toCurrency = to.value;
  let amt = amount.value;
  fetch(`https://api.exchangerate-api.com/v4/latest/${fromCurrency}`)
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      let rate = data.rates[toCurrency];
      let total = rate * amt;
      result.innerHTML = `${amt} ${fromCurrency} = ${total}
            ${toCurrency}`;
    });

  let have = from1.value;
  let want = to1.value;

 
}