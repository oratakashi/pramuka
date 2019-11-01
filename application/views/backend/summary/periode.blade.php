<div class="tab-pane fade show active" id="periode" role="tabpanel" aria-labelledby="periode-tab">
    <form action="" method="post" id="form-periode" style="margin-top:30px;margin-bottom:30px">
        <div class="row">
            <div class="col-md-4">
                <label for="">Tanggal Awal</label>
                <div class="input-group date" id="start-datepicker">
                    <input type="text" class="form-control" value="{{ date('d-m-Y') }}">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button"><i class="fa fa-calendar f14"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label for="">Tanggal Akhir</label>
                <div class="input-group date" id="end-datepicker">
                    <input type="text" class="form-control" value="{{ date('d-m-Y') }}">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button"><i class="fa fa-calendar f14"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group" style="margin-top:25px">
                    <input type="submit" value="Tampilkan" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>
    <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="periode-table">
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