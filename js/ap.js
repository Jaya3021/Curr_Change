
var btc = document.getElementById("bitcoin");
var eth = document.getElementById("ethereum");
var ltc = document.getElementById("litecoin");
var doge = document.getElementById("dogecoin");
var teth = document.getElementById("tether");
var rip = document.getElementById("ripple");
var tron = document.getElementById("tron");

var liveprice = {
    "async": true,
    "scroosdomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Clitecoin%2Cdogecoin%2Cripple%2Ctether%2Ctron&vs_currencies=inr",

    "method": "GET",
    "headers": {}

}

$.ajax(liveprice).done(function (response){
    btc.innerHTML = response.bitcoin.inr;
    eth.innerHTML = response.ethereum.inr;
    ltc.innerHTML = response.litecoin.inr;
    doge.innerHTML = response.dogecoin.inr;
    teth.innerHTML = response.tether.inr;
    rip.innerHTML = response.ripple.inr;
    tron.innerHTML = response.tron.inr;
});