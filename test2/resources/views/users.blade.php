<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Validation Excel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table, th, td {
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
     
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Laravel 9 Validation Excel
        </div>
        <div class="card-body">
            <h3>Validate Type A</h3>
            <form action="{{ route('running.a') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                      <div class="alert alert-danger alert-dismissible">
                          <h4><i class="icon fa fa-ban"></i> Error!</h4>
                          @foreach($errors->all() as $error)
                          {{ $error }} <br>
                          @endforeach      
                      </div>
                    </div>
                </div>
                @endif
  
                @if (Session::has('success'))
                    <div class="row">
                      <div class="col-md-8 col-md-offset-1">
                        <div class="alert alert-success alert-dismissible">
                            <h5>{!! Session::get('success') !!}</h5>   
                        </div>
                      </div>
                    </div>
                @endif

                @if (Session::has('dataA'))
                    <div class="row">
                      <div class="col-md-8 col-md-offset-1">
                        <table>
                            <thead>
                                <tr>
                                    <th>ROW</th>
                                    <th>ERROR</th>
                                </tr>
                            </thead>
                            @foreach (Session::get('dataA') as $key => $value)
                                @if (is_array($value))
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>
                                        @foreach ($value as $index => $item)
                                        {{ $item[0] }},
                                        @endforeach
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </table>
                      </div>
                    </div>
                @endif
                <input type="file" name="fileA" class="form-control">
                <br>
                <button class="btn btn-success">Check Validate</button>
            </form>
            <br>
            <h3>Validate Type B</h3>
            <form action="{{ route('running.b') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                      <div class="alert alert-danger alert-dismissible">
                          <h4><i class="icon fa fa-ban"></i> Error!</h4>
                          @foreach($errors->all() as $error)
                          {{ $error }} <br>
                          @endforeach      
                      </div>
                    </div>
                </div>
                @endif
  
                @if (Session::has('success'))
                    <div class="row">
                      <div class="col-md-8 col-md-offset-1">
                        <div class="alert alert-success alert-dismissible">
                            <h5>{!! Session::get('success') !!}</h5>   
                        </div>
                      </div>
                    </div>
                @endif

                @if (Session::has('dataB'))
                    <div class="row">
                      <div class="col-md-8 col-md-offset-1">
                        <table>
                            <thead>
                                <tr>
                                    <th>ROW</th>
                                    <th>ERROR</th>
                                </tr>
                            </thead>
                            @foreach (Session::get('dataB') as $key => $value)
                                @if (is_array($value))
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>
                                        @foreach ($value as $index => $item)
                                        {{ $item[0] }},
                                        @endforeach
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </table>
                      </div>
                    </div>
                @endif
                <input type="file" name="fileB" class="form-control">
                <br>
                <button class="btn btn-success">Check Validate</button>
            </form>
        </div>
    </div>
</div>
     
</body>
</html>