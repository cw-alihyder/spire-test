<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="fw-bolder">Address Validator</h4>
                        <h5 class="fw-light">Validate/Standardizes addresses using USPS</h5>
                        <hr>
                        <form id="uspsForm">
                            <div class="mb-3">
                              <label for="" class="form-label">Address Line 1</label>
                              <input type="text" name="address_line_1" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">Address Line 2</label>
                              <input type="text" name="address_line_2" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">City</label>
                              <input type="text" name="city" id="" class="form-control" placeholder="City">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">State</label>
                                <select class="form-select form-select-lg" name="state">
                                    <option value="">Select one</option>
                                    <option value="California">California</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="North Carolina">North Carolina</option>
                                </select>
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">Zipcode</label>
                              <input type="text" name="zipcode" class="form-control" placeholder="Zipcode">
                            </div>
                            <div class="mb-3 container d-flex align-items-center justify-content-center">
                                <button type="submit" class="btn btn-primary">Validate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- address format modal -->
    <div class="modal fade" id="formatModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-fullscreen-md-down" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Save Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    
                </div>
                <div class="modal-body">
                    <h5>Which address format do you want to save?</h5>
                    <div class="btn-group mb-3 address-format-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-primary active original" onclick="addressFormat('original')">ORIGINAL</button>
                        <button type="button" class="btn  standardized" onclick="addressFormat('standardized')">STANDARDIZED (USPS)</button>
                    </div>

                    <div class="mb-3">
                        <div class="card">
                            <div class="card-body addressFormatCard">
                            </div>
                        </div>

                        <div class="alert alert-success success_message d-none"  role="alert">
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary save-location">Save</button>
                </div>
            </div>
        </div>
    </div>
    
    
    


  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script src="./script.js"></script>