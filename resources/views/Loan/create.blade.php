<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Loan</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Create Loan</h1></center>
    <form action="/loan/store" method="post">
    {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="no_loan" class="form-label">No Loan</label>
                                <input type="text" class="form-control" name="no_loan" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="member_id" class="form-label">Member ID</label>
                                <input type="text" class="form-control" name="member_id" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="payment_method_id" class="form-label">Payment Method ID</label>
                                <input type="text" class="form-control" name="payment_method_id" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" name="description" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="loan_amount" class="form-label">Loan Amount</label>
                                <input type="text" class="form-control" name="loan_amount" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="loan_interest" class="form-label">Loan Interest</label>
                                <input type="text" class="form-control" name="loan_interest" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="admin_fee" class="form-label">Admin Fee</label>
                                <input type="text" class="form-control" name="admin_fee" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="total_loan" class="form-label">Total Loan</label>
                                <input type="text" class="form-control" name="total_loan" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="total_installment" class="form-label">Total Installment</label>
                                <input type="text" class="form-control" name="total_installment" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="tenor" class="form-label">Tenor</label>
                                <select class="form-select" aria-label="Default select example" name="tenor" required="required">
                                    <option>choose</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="6">6</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="start_at" class="form-label">Start At</label>
                                <input type="datetime-local" class="form-control" name="start_at" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="end_at" class="form-label">End At</label>
                                <input type="datetime-local" class="form-control" name="end_at" required="required">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Data</button>
                            <a href="loan" type="" class="btn btn-primary">Kembali</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    
    <br>
    <br>
    
 
</body>
</html>