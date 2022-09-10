function compoundGain() {
  event.preventDefault();
  let principal = parseFloat(document.getElementById("principal").value);
  let Rate = parseFloat(document.getElementById("return").value);
  Rate = Rate / 100;
  let termOfInvestment = parseFloat(document.getElementById("years").value);
  let amountRate = 1 + Rate;
  let calculation = Math.pow(amountRate, termOfInvestment);
  let amount = (principal * calculation).toFixed(2);
  document.getElementById("cgOutput-01").innerHTML = "Gain: $" + (amount - principal).toFixed(2);
  document.getElementById("cgOutput-02").innerHTML = "Total plus Gain: $" + amount;
}