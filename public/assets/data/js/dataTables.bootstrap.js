<script>
function myFunction() {
    var input, filter, tr, td, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    tr = document.getElementById("MyTr");
    td = tr.getElementsByTagName("td");
    for (i = 0; i < td.length; i++) {
        a = td[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            td[i].style.display = "";
        } else {
            td[i].style.display = "none";

        }
    }
}
</script>