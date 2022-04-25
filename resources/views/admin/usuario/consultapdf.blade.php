<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            border-spacing: 0px;
            border-collapse: collapse;
        }
        td, th {
        border-style: groove;
        text-align: center;
        padding: 8px;   
        }
        
        .mb-3 {
        margin-bottom: 1rem !important;
        }


        </style>
</head>
<body>
    @isset($usuario)
    <div class="card">
        @php
            foreach(json_decode($usuario)->users as $user){
            }
        @endphp
        <div class="card-header">
            <center>
                <h2>{{$user->fullname}} </h2><hr>
                <img src="{{$user->profileimageurl}}" class="img-thumbnail" alt="">
            </center>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">firstname</th>
                        <th scope="col">lastname</th>
                        <th scope="col">username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->username}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="mb-3">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">email</th>
                            <th scope="col">phone1</th>
                            <th scope="col">phone2</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$user->email}}</td>
                            <td>@isset($user->phone1){{$user->phone1}}@endisset</td>
                            <td>@isset($user->phone2){{$user->phone2}}@endisset</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="mb-3">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Pais</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Dirección</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>@isset($user->country){{$user->country}}@endisset</td>
                                <td>@isset($user->department){{$user->department}}@endisset</td>
                                <td>@isset($user->city){{$user->city}}@endisset</td>
                                <td>@isset($user->address){{$user->address}}@endisset</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="mb-3">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Centro de Estudio</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>@isset($user->institution){{$user->institution}}@endisset</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            @isset($user->customfields)
                            @foreach ($user->customfields as $user2)
                                        <div class="mb-3">
                                            <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                              <th scope="col">{{$user2->name}}</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>{{$user2->value}}</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                        @endforeach
                                    @endisset
                                    <div class="mb-3">
                                    </div>
            </div>
        </div>
        </div>
    <div>
    @endisset
</body>
</html>