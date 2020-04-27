{% extends 'template/template.volt' %}
{% block title %}
<title>Daftar Buku</title>
{%endblock%}
{% block content %}

<div class="container-fluid">
    <div class="mx-auto" style="padding-top: 20px;">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>List Buku</strong>
        </div>
        <div class="card-header">
            <form class="form-inline" method="POST" action="{{ url('/buku/search') }}">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Buku" aria-label="Search"
                    name="searchKey">
                <button class="btn btn-outline-success " type="submit">Search</button>
            </form>
            <br>
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
                    {% for b in buku %}
                    <tr>
                        <td>{{b.judul}}</td>
                        <td>{{b.penulis.nama}}</td>
                        <td>{{(b.status_buku == 1  ? 'Available' : 'Not Available') }}</td>
                        <td>
                            {% if b.status_buku == 1 %}
                            <a href="{{url('peminjaman/tambah/'~b.id_buku) }}" class="btn btn-success btn-sm"
                                disabled>Pinjam</a>
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
{% endblock %}