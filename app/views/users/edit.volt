{% extends 'template/template.volt' %}
{% block title %}
<title>Daftar Buku</title>
{%endblock%}
{% block content %}
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>Edit Profil</strong>
        </div>
        <div class="card-header">
            <a href="{{url('/users/profil')}}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card-body">

            <form autocomplete="off" method="post" action="{{ url('users/update/') }}">
                {{ flashSession.output() }}
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" autocomplete="off" name="nama" class="form-control" placeholder="Username"
                        value="{{user.nama}}">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" id="laki" name="jkel" value="L" style="display: inline;" required>
                    <label for="laki" style="padding-right: 10pt;">Laki-Laki</label>
                    <input type="radio" id="perempuan" name="jkel" value="P" style="display: inline;" required>
                    <label for="perempuan">Perempuan</label>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}