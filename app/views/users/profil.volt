{% extends 'template/template.volt' %}
{% block title %}
<title>Daftar Buku</title>
{%endblock%}
{% block content %}

<link rel="stylesheet" href="/css/profil.css">


<body>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="{{url(user.profile_pict)}}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{ user.nama }}
                        </h5>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">About</a>
                            </li>
                        </ul>
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="row ">
                                <div class="col-md-3">
                                    <label>Username</label>
                                </div>
                                <div class="col-md-4">
                                    <p>{{ user.nama }}</p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-3">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-4">
                                    <p>{{ user.email }}</p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-3">
                                    <label>Gender</label>
                                </div>
                                <div class="col-md-4">
                                    {% if user.jenis_kel  == 'L' %}
                                    <p>Laki-Laki</p>
                                    {% else %}
                                    <p>Perempuan</p>
                                    {% endif %}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Member</label>
                                </div>
                                <div class="col-md-4">
                                    {% if user.membership_type  == 1 %}
                                    <p>Bronze</p>
                                    {% elseif user.membership_type  == 2 %}
                                    <p>Silver</p>
                                    {% elseif user.membership_type  == 3 %}
                                    <p>Gold</p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="{{url('/users/edit') }}" class="profile-edit-btn">Edit Profile</a>
                    <!-- <input class="profile-edit-btn" name="btnAddMore" value="Edit Profile"
                        onclick="{{url('/users/edit') }}" /> -->
                    <a href="{{url('/upgrade') }}" class="profile-edit-btn">Upgrade Member</a>
                </div>
            </div>
            <!-- <div class="container">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                    </div>
                </div>
            </div> -->
        </form>
    </div>
    {% endblock %}