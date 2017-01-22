function btnFunction() {
  let li = document.createElement("li");

  let inputValue = document.getElementById("task").value;

  let t = document.createTextNode(inputValue);

  li.appendChild(t);
  if (inputValue === '') {
    return;
  } else {
    document.getElementById("sheets").appendChild(li);
  }
  document.getElementById("task").value = "";
}
