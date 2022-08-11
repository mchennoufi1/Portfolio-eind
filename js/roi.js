document.getElementById("roi-form").addEventListener("submit", computeResults);

function computeResults(e) {
  // UI

  const UIamount = document.getElementById("amount").value;
  const UIreturn = document.getElementById("return").value;
  const UIyears = document.getElementById("years").value;

  // Calculate

  const principal = parseFloat(UIamount);
  const CalculateReturn = parseFloat(UIreturn) / 100 / 12;
  const calculatedPayments = parseFloat(UIyears) * 12;

  //Compute monthly Payment

  const x = Math.pow(1 + CalculateReturn, calculatedPayments);
  const monthly = (principal * x * CalculateReturn) / (x - 1);
  const monthlyPayment = monthly.toFixed(2);

  //Compute Returns

  const totalReturn = (monthly * calculatedPayments - principal).toFixed(2);

  //Compute Total Payment

  const totalPayment = (monthly * calculatedPayments).toFixed(2);

  //Show results

  document.getElementById("monthlyPayment").innerHTML = "$" + monthlyPayment;

  document.getElementById("totalReturn").innerHTML = "$" + totalReturn;

  document.getElementById("totalPayment").innerHTML = "$" + totalPayment;

  e.preventDefault();
}