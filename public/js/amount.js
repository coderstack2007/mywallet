
document.addEventListener("DOMContentLoaded", function() {
    const amountInput = document.getElementById("amountInput");
    const balanceError = document.getElementById("balanceError");
    const userBalance = {{ auth()->user()->balance }}; // баланс текущего пользователя

    amountInput.addEventListener("input", function() {
        const amount = parseFloat(amountInput.value) || 0;
        if (amount > userBalance) {
            balanceError.style.display = "block";
        } else {
            balanceError.style.display = "none";
        }
    });
});