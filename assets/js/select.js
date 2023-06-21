function checkboxStatusChange() {
    var multiselect = document.getElementById("mySelectLabel");
    var multiselectOption = multiselect.getElementsByTagName('option')[0];
  
    var values = [];
    var checkboxes = document.getElementById("mySelectOptions");
    var checkedCheckboxes = checkboxes.querySelectorAll('input[type=checkbox]:checked');
  
    for (const item of checkedCheckboxes) {
      var checkboxValue = item.getAttribute('value');
      values.push(checkboxValue);
    }
  
    var dropdownValue = "Ничего не выбрано";
    if (values.length > 0) {
      dropdownValue = values.join(', ');
    }
  
    multiselectOption.innerText = dropdownValue;
  }
  
  function toggleCheckboxArea(onlyHide = false) {
    var checkboxes = document.getElementById("mySelectOptions");
    var displayValue = checkboxes.style.display;
  
    if (displayValue != "block") {
      if (onlyHide == false) {
        checkboxes.style.display = "block";
      }
    } else {
      checkboxes.style.display = "none";
    }
  }