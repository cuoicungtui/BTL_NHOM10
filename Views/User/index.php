<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Thông tin cá nhân </h1>
        <div class="row">
            <div class="col-4">
                <img src="Views/img/a1.jpeg" width="250px" height="250px" style="object-fit: cover" alt="" class="rounded-circle">
            </div>
            <div class="col-8">
                <form action="http://localhost/BTL_NHOM10/?controller=User&acction=UpdateUser" method ="POST">

                    <div class="mb-3 row">
                    
                        <div class="col-sm-10">
                            <label for="name" class="col-sm-2 col-form-label ">Họ tên</label>
                            <input type="text " name="name" class="form-control " id="name">
                        </div>
                    </div>
                        <div class="mb-3 row">
                    
                            <div class="col-sm-10">
                                <label for="datetime" class="col-sm-2 col-form-label col-3">Năm sinh</label>
                                <input type="date" class="form-control col-4" id="datetime">
                            </div>
                           
                        </div> 
                        <div class="mb-3 row">
                                       
                            <div class="col-sm-10">
                                <label for="number" class="col-sm-2 col-form-label col-3">Số CCCD</label>
                                <input type="number" class="form-control col-4" id="number">
                            </div>
                        </div>
                        <div class="mb-3 row">
                                       
                            <div class="col-sm-10">
                                <label for="number" class="col-sm-2 col-form-label col-3">Số thẻ BHYT</label>
                                <input type="number" class="form-control col-4" id="number">
                            </div>
                        </div>
                        <label for=""class="col-2">
                            Giới tính
                        </label>
                        
                        <div class="form-check form-check-inline col-1">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Nam</label>
                          </div>
                          <div class="form-check form-check-inline col-6">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Nữ</label>
                          </div>
                              
                        <div class="mb-3 row">
                                    
                                    <div class="col-sm-10">
                                        <label for="number" class="col-sm-2 col-form-label col-3">Số điện thoại</label>
                                        <input type="number" class="form-control col-4" id="number">
                                    </div>
                                </div>
                        <div class="mb-3 row">
                                       
                                        <div class="col-sm-10">
                                            <label for="mail" class="col-sm-2 col-form-label col-3">Email</label>
                                            <input type="email" class="form-control col-4" id="mail">
                                        </div>
                                    </div>

                                        <div class="mb-3 row">
                                       
                                            <div class="col-sm-10">
                                                <label for="text" class="col-sm-2 col-form-label col-3">Địa chỉ</label>
                                                <input type="text" class="form-control col-4" id="text">
                                            </div>
                                        </div>  
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button class ="btn btn-primary" id="btn-update" type ="submit">Lưu lại</button>
                                            
                                          </div>
     
                                        
                </form>
                

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>