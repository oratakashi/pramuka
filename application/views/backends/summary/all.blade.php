<div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
    <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Nama</th>
                    <th>Jumlah Artikel</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rank as $row)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $row['nama'] }}</td>
                        <td>{{ $row['jml'] }} Artikel</td>
                    </tr>
                @endforeach
            </tbody>
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