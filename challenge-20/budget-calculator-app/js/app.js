$(document).ready(function () {
  var budget = 0;
  var expenses = [];

  // Function to update budget and balance fields
  function updateBudget() {
    var totalExpenses = 0;
    expenses.forEach(function (expense) {
      totalExpenses += parseFloat(expense.amount);
    });
    var balance = budget - totalExpenses;

    if (expenses.length === 0) {
      balance = budget;
    }

    $("#budget-amount").text(budget.toFixed(2));
    $("#expense-amount").text(totalExpenses.toFixed(2));
    $("#balance-amount").text(balance.toFixed(2));
  }

  // Budget form
  $("#budget-form").submit(function (event) {
    event.preventDefault();
    var budgetInput = $("#budget-input").val();
    if (budgetInput === "" || parseFloat(budgetInput) <= 0) {
      $(".budget-feedback").text("Value cannot be empty or negative").show();
      return;
    }
    $(".budget-feedback").hide();
    budget = parseFloat(budgetInput);
    updateBudget();
  });

  // Expense form
  $("#expense-form").submit(function (event) {
    event.preventDefault();
    var expenseTitle = $("#expense-input").val();
    var expenseAmount = $("#amount-input").val();
    if (
      expenseTitle === "" ||
      expenseAmount === "" ||
      parseFloat(expenseAmount) <= 0
    ) {
      $(".expense-feedback").text("Value cannot be empty or negative").show();
      return;
    }
    $(".expense-feedback").hide();
    expenses.push({ title: expenseTitle, amount: parseFloat(expenseAmount) });
    updateBudget();

    // Create table
    if ($("#expense-table").length === 0) {
      var table = $(
        '<table id="expense-table" class="table table-bordered"></table>'
      ); // Added Bootstrap classes for table
      table.append(
        "<thead><tr><th>Expense Title</th><th>Expense Amount</th><th></th></tr></thead>"
      );
      $(".col-md-7.my-3").append(table);
    }

    // Add expense to table
    var newRow =
      '<tr><td class="text-right text-danger">' +
      expenseTitle +
      '</td><td class="text-right text-danger">$' +
      expenseAmount +
      '</td><td><span class="edit-icon fas fa-edit"></span><span class="delete-icon fas fa-trash"></span></td></tr>';
    $("#expense-table").append(newRow);

    $("#expense-input").val("");
    $("#amount-input").val("");
  });

  // Delete button
  $(document).on("click", ".delete-icon", function () {
    var row = $(this).closest("tr");
    var index = row.index();
    var expense = expenses[index - 1];
    expenses.splice(index - 1, 1);
    row.remove();
    updateBudget();
  });

  // Edit button
  $(document).on("click", ".edit-icon", function () {
    var row = $(this).closest("tr");
    var index = row.index();
    var expense = expenses[index - 1];
    $("#expense-input").val(expense.title);
    $("#amount-input").val(expense.amount);
    expenses.splice(index - 1, 1);
    row.remove();
    updateBudget();
  });
});
