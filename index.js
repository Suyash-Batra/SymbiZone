function srch() {
  const el = document.querySelector("#srch-bar");
  let st = el.style.display;
  if (st == "none") {
    el.style.display = "inline-block";
  } else {
    el.style.display = "none";
  }
}

var form = document.getElementById("formId");
function submitForm(event) {
  event.preventDefault();
}

form.addEventListener("submit", submitForm);
