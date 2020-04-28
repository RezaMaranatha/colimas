{% extends 'template/template.volt' %}
{% block title %}
<title>Peminjaman</title>
{%endblock%}
{% block content %}
<div class="container-fluid">
    <div div class="mx-auto" style="padding-top: 20px;">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>List Peminjaman</strong>
        </div>
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-bordered table-hover table-striped table-head-fixed">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status Peminjaman</th>
                    </tr>
                </thead>
                <tbody>
                    {% for p in peminjaman %}
                    <tr>
                        <td>{{p.buku.judul}}</td>
                        {% if p.status_peminjaman == 1 %}
                        <td>{{p.tanggal_peminjaman}}</td>
                        <td>{{p.tanggal_pengembalian}}</td>
                        <td>Dipinjam</td>
                        {% else %}
                        <td>Menunggu</td>
                        <td>Menunggu</td>
                        <td>Menunggu Konfirmasi Pustakawan</td>
                        {% endif %}
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}