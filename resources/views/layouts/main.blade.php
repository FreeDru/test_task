<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test_task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-end">
              <a href="{{ route('lots.index') }}" class="navbar-brand d-flex align-items-center">
                <strong>Lots</strong>
              </a>
              <a href="{{ route('categories.index') }}" class="navbar-brand d-flex align-items-center">
                <strong>Categories</strong>
              </a>
            </div>
          </div>
    </header>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
              <div class="card-body py-4 px-4 px-md-5">
    
                <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                  <i class="fas fa-check-square me-1"></i>
                  <u>Test_Task</u>
                </p>  

    @yield('content')
    
</body>

</html>