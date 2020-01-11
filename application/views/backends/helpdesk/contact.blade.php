<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="all-tab">
    <div class="adv-table">
        <br>
        <h3>Hubungi Pengembang</h3>
        <p>Fitur ini berfungsi untuk melaporkan error / bug yang terjadi pada website ini, silahkan gunakan form di bawah untuk menghubungi pengembang untuk mendapatkan perbaikan secepatnya, pesan laporan anda akan di kirim melalui Whatsapp</p>
        <br>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ base_url('assets/backend/img/bug.svg') }}" alt="">
            </div>
            <div class="col-md-8">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Pilih Modul</label>
                        <select name="module" id="module" class="form-control">
                            <option value="">Pilih Modul</option>
                            <option value="Artikel">Modul Artikel</option>
                            <option value="Lagu">Modul Lagu</option>
                            <option value="Dokumen">Modul Dokumen</option>
                            <option value="Produk">Modul Produk</option>
                            <option value="Administratif">Modul Administratif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pilih Sub Modul</label>
                        <select name="sub-module" id="sub-module" class="form-control">
                            <option value="">Pilih Sub Modul</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Isi Pesan</label>
                        <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kirim Pesan" class="btn btn-primary float-right">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>