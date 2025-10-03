// Table selection functionality
document.querySelectorAll(".table-option").forEach((option) => {
  option.addEventListener("click", function () {
    document.querySelectorAll(".table-option").forEach((opt) => {
      opt.classList.remove("selected");
    });
    this.classList.add("selected");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var bookingForm = document.getElementById("bookingForm");
  if (bookingForm) {
    var dateInput = document.getElementById("date");
    var timeInput = document.getElementById("time");

    function setMinTime() {
      var today = new Date();
      var selectedDate = new Date(dateInput.value);
      if (
        dateInput.value &&
        selectedDate.toDateString() === today.toDateString()
      ) {
        var hours = today.getHours().toString().padStart(2, "0");
        var minutes = today.getMinutes().toString().padStart(2, "0");
        timeInput.min = hours + ":" + minutes;
      } else {
        timeInput.min = "";
      }
    }

    if (dateInput && timeInput) {
      dateInput.addEventListener("change", setMinTime);
      setMinTime();
    }

    bookingForm.addEventListener("submit", function (e) {
      // Basic validation example (customize as needed)
      var isValid = true;
      var requiredFields = bookingForm.querySelectorAll("[required]");
      requiredFields.forEach(function (field) {
        if (!field.value) {
          isValid = false;
          field.classList.add("error");
        } else {
          field.classList.remove("error");
        }
      });

      if (!isValid) {
        e.preventDefault();
        // Optionally show a message to the user
        alert("Please fill in all required fields.");
        return false;
      }
      // If valid, allow submit (or add AJAX logic here)

      // Optionally, you can do AJAX here, but as requested, submit the form
      bookingForm.submit();
    });
  }
});
