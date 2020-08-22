// JavaScript source code
alert("Loaded");

var preset = "<?php echo $userName ?>";
var txtEmail = document.getElementById("InputEmail");
if (preset != null) {
    txtEmail.value = preset;
    txtEmail.style.backgroundColor = "#ffffcc";
    document.getElementById("txtpsw").focus();
}

if (txtEmail.value == "") {
    txtEmail.style.backgroundColor = "#ffffff";
}

function emailChange() {
    txtEmail.style.backgroundColor = "#ffffff";
}