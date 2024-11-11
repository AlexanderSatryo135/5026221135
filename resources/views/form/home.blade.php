<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>

  function showalert()
  {
    alert("Selamat Anda memenangkan Undian") ;
  }

  function validateform(){

    var NRP = document.getElementById ("NRPKU") ; //membaca object

    if (NRP.value.length != 10) {
      alert("NRP Wajib 10 Digit")
      NRP.focus();
      return false ;
  }
    if (isNaN(NRP.value) == true) {
      alert("NRP Wajib Angka");
      NRP.focus();
      return false ;
    }

  }
</script>
</head>

<body>
  <div class="container">
    <form action="https://www.google.co.id" method="get" onsubmit="return validateform();">
      <div class="input-group">
        <span class="input-group-text">NRP</span>
        <input type="text" class="form-control" placeholder="Isikan 10 digit NRP" name="NRP" id="NRPKU">
      </div>
      <div class="input-group">
        <span class="input-group-text">Umur</span>
        <input type="text" class="form-control" placeholder="Isikan Umur Anda" name="Umur" id="Umur">
      </div>
      <div class="input-group">
        <span class="input-group-text">Nama</span>
        <input type="text" class="form-control" placeholder="Isikan Nama Lengkap" name="NRP" id="Nama">
      </div>
      <input type="reset"  class="btn btn-warning" value="Reset">
      <input type="submit" class="btn btn-success" value="Kirim">
      <input type="button" class="btn btn-default" value="Alert" onclick="showalert();">
      </form>
  </div>
</body>

</html>
