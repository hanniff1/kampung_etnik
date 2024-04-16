<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        margin: 0;
        padding: 0;
      }

      body{
        background: #fff;
      }

      .wrapper {
        width: 500px;
        margin: auto;
        padding: 20px;
        background: #352e2e;
        margin-top: 20px;
      }

      h3 {
        color: black;
        padding: 10px;
        background: #35a9db;
        margin-bottom: 0px;
        text-align: center;
        border-radius: 5px;
      }

      table {
        width: 500px;
        color: #fff;
        border: 1px solid;
      }

      input[type="text"] {
        width: 325px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 10px 0;
      }

      input[type="telp"] {
        width: 325px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 10px 0;
      }

      input[type="email"] {
        width: 325px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 10px 0;
      }

      input[type="date"] {
        width: 325px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 10px 0;
      }

      select {
        width: 325px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid black;
        margin: 10px 0;
      }
      
      input[type="submit"]{
        width: 30%;
        padding: 4px;
        border-radius: 5px;
        background: #35a9db;
        border: 1px solid green;
        font-size: 20px;
        font-weight: bold;
        margin: 10px 0;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        margin-top: 30px;
      }

    </style>
  </head>
  <body>
    <div class="wrapper">
      <h3>Pengunjung</h3>
      <form>
        <table>
          <tr>
            <td>Nama Lengkap</td>
            <td>
              <input type="text" name="" />
            </td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>
              <textarea cols="" rows=""></textarea>
            </td>
          </tr>
          <tr>
            <td>No telp</td>
            <td>
              <input type="telp" name="" />
            </td>
          </tr>
          <tr>
            <td>Alamat Email</td>
            <td>
              <input type="email" name="" />
            </td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>
              <select>
                <option></option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>ID Wahana</td>
            <td>
              <input type="text" name="" />
            </td>
          </tr>
          <tr>
            <td>Paket Wahana</td>
            <td>
              <input type="text" name="" />
            </td>
          </tr>
          <tr>
            <td>Harga Paket</td>
            <td>
              <input type="text" name="" />
            </td>
          </tr>
          <tr>
            <td>Tanggal Kunjungan</td>
            <td>
              <form action="#">
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" />
              </form>
            </td>
          </tr>
          <tr>
            <td>Jumlah Pengunjung</td>
            <td>
              <input type="text" name="" />
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <input type="submit" name="" value="Simpan">
            </td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>