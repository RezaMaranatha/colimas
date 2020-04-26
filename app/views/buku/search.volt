<div class="ui middle aligned center aligned grid">
    <div class="column">
        <div class="title">
            Daftar Buku
        </div>
    </div>
</div>
<div class="ui middle aligned center aligned grid">
</div>
<form method="POST" action="{{ url('/buku/search') }}">
    <div class="ui search item">
        <div class="ui icon input">
            <input class="prompt" type="text" placeholder="Cari koleksi buku..." name="searchKey">
            <input class="circular ui brown icon button" type="submit" value="">
            <i class="search icon"></i>
        </div>
        <div class="results"></div>
    </div>
    <br>
    <select name="searchBy" class="ui dropdown">
        <option value="judul">Judul Buku</option>
        <option value="pengarang">Pengarang</option>
        <option value="penerbit">Penerbit</option>
        <option value="ISBN_ISSN">ISBN/ISSN</option>
        <option value="kategori">Kategori</option>
    </select>
    <div class="ui left pointing brown label">Advanced Search</div>
</form>
<div class="container">
    <div class="card">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>List Buku</strong>
        </div>
        <div class="card-header">
            <!-- <a href="{{url('/supirtruk/tambah')}}" class="btn btn-primary btn-sm float-left"><span
                    class="fas fa-plus" style="padding-right: 7px;"></span>Input</a> -->
            {{ flashSession.output() }}
        </div>
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-bordered table-hover table-striped table-head-fixed">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    {% for b in results %}
                    <tr>
                        <td>{{b.judul}}</td>
                        <td>{{b.penulis.nama}}</td>
                        <td>{{(b.status_buku == 1  ? 'Available' : 'Not Available') }}</td>
                        <td>
                            {% if b.status_buku == 1 %}
                            <a href="{{url('/peminjaman') }}" class="btn btn-success btn-sm" disabled>Pinjam</a>
                            {% else %}
                            <button class="btn btn-success btn-sm" disabled>Pinjam</button>
                            {% endif %}
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>