<?php include 'components/header.php'?>

    <div class="container mt-5">
        <form>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class=""mb-3>
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedy="emailHelp">
            <div id="emaiHelp" Class="form-text">We'll Keep safe your data.</div>
        </div>
        <div class=""mb-3>
            <label for="exampleInputEmail1" class="form-label">Kirim Pesan</label>
            <textarea style="display:block;" placeholder="ketik pesan disini"></textarea>
        </div>
    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>

</div>

<?php include 'components/footer.php'?>