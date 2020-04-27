{% extends 'template/template.volt' %}
{% block title %}
<title>Daftar Buku</title>
{%endblock%}
{% block content %}
<div class="container-fluid">
    <div class="card-deck" style="padding-top: 50px;">
        <div class="card">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body">
                <h5 class="card-title">Bronze</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
        </div>
        <div class="card">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body">
                <h5 class="card-title">Silver</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
        </div>
        <div class="card">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body">
                <h5 class="card-title">Gold</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This card has even longer content than the first to show that equal height action.</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
        </div>
    </div>
</div>
{% endblock %}