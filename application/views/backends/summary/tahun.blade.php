<div class="tab-pane fade" id="tahun" role="tabpanel" aria-labelledby="tahun-tab">
<form action="" method="post" id="form-tahun" style="margin-top:30px;margin-bottom:30px">
        <div class="row">
            <div class="col-md-4">
                <label for="">Menampilkan Rekap Tahun : </label>
                <select name="tahun" id="tahun" class="form-control">
                    <option value="">Pilih Tahun</option>
                    @php $dates = date('Y');  @endphp
                    @for ($i = $dates; $i >= 2019; $i--)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
        </div>
    </form>
    <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="tahun-table">
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