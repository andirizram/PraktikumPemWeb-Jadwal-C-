<form id="mahasiswa_list">
    <label for="Prodi">
        Prodi
    </label>
    <select name="Prodi" onchange="showUser(this.value)" id="Prodi">
        <option value=""> Pilih program studi </option>
        <option value="IF"> Teknik Informatika </option>
        <option value="EL"> Teknik Elektro </option>
        <option value="ME"> Teknik Mesin </option>
        <option value="TG"> Teknik Geofisika </option>
        <option value="GL"> Teknik Geologi </option>
    </select>
</form>
<div id="Show_Data"><p>Pilih Program Studi Untuk Menampilkan Data Mahasiswa</p></div>
<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
    integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin = "anonymous">
</script>
<script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("Show_Data").innerHTML = "Pilih Program Studi Untuk Menampilkan Data Mahasiswa";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("Show_Data").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","Show_Data_To_Screen.php?q="+str,true);
            xmlhttp.send();
        }
        }
</script>