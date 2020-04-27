{% extends 'template/template.volt' %}
{% block title %}
<title>Upgrade</title>
{%endblock%}
{% block content %}
<div class="container-fluid">
    <div class="card-deck" style="padding-top: 50px;">
        <div class="card">
            <img class="card-img-top" src="/images/bronze.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Bronze</h5>
                <p class="card-text">Default membership lama peminjaman sepanjang 3 hari</p>
                <a href="{{url('/upgrade/update')}}" class="btn btn-primary">Choose</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/silver.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Silver</h5>
                <p class="card-text">Perpanjangan lama peminjaman menjadi 5 hari</p>
                <a href="{{url('/upgrade/update')}}" class="btn btn-primary">Choose</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="/images/gold.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Gold</h5>
                <p class="card-text">Perpanjangan lama peminjaman menjadi 7 hari</p>
                <a href="{{url('/upgrade/update')}}" class="btn btn-primary">Choose</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}