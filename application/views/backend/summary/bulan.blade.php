<div class="tab-pane fade" id="bulan" role="tabpanel" aria-labelledby="bulan-tab">
<form action="" method="post" id="form-periode" style="margin-top:30px;margin-bottom:30px">
        <div class="row">
            <div class="col-md-4">
                <label for="">Menampilkan Rekap Bulan : </label>
                <select name="bulan" id="bulan" class="form-control">
                    <option value="">Pilih Bulan</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>
        </div>
    </form>
    <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="bulan-table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Nama</th>
                    <th>Jumlah Artikel</th>
                </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
                <tr>
                    <th>Rank</th>
                    <th>Nama</th>
                    <th>Jumlah Artikel</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <p class="text-danger">Rangking di hitung berdasarkan jumlah terbanyak posting artikel dan dalam status aktif</p>
</div>