<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #5a3e1b;
        }
        .container {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    padding: 25px;
    min-height: auto;
    padding-bottom: 70px;
    margin-left: 20px;
    margin-top: 20px;
}
.container form{
    padding: 20px;
    width: 700px;
    border-radius: 10px;
}
.container form .row{
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}
.container form .row .col{
    flex:1 1 250px;
}
.container form .row .col .title{
    font-size: 20px;
    color: #4D2f1d;
    padding-bottom: 5px;
    text-transform: uppercase;
}
.container form .row .col .inputBox{
    margin: 15px 0;
}
.container form .row .col .inputBox span{
    margin-bottom: 5px;
    display: block;
    color: #87603a;
}
.container form .row .col .inputBox input{
    width: 80%;
    outline: none;
    border: 1px solid rgb(200, 200, 200);
    border-radius: 10px;
    padding: 10px 15px;
    font-size: 15px;
    text-transform: none;

    color: #000000;
}
.container form .row .col .inputBox input::placeholder{
    color: #000000;
    font-family: "Poppins",sans-serif;
}
.container form .row .col .inputBox img{
    height: 34px;
    margin-top: 5px;
    filter: drop-shadow(0 0 1px #d1d1d1);
}
.container form .submit-btn{
    width: 100%;
    height: 45px;
    background: #4D2f1d;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
}
    </style>
</head>
<body>

@include('partials.navbar') 
<div class="container">
        <form>
            <div class="row">
                <div class="col">
                    <h3 class="title">Billing Address</h3>
                    <div class="inputBox">
                        <span>First Name :</span>
                        <input type="text" placeholder="First Name">
                    </div>

                    <div class="inputBox">
                        <span>Last Name :</span>
                        <input type="text" placeholder="Last Name">
                    </div>

                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="text" placeholder="xxxx@gmail.com">
                    </div>

                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" placeholder="Street - Room">
                    </div>

                    <div class="inputBox">
                        <span>City :</span>
                        <input type="text" placeholder="City">
                    </div>
                </div>

                <div class="col">
                    <h3 class="title">Payment</h3>

                    <div class="inputBox">
                        <span>Cards accepted :</span>
                        <img src="images/paying methods.png">
                    </div>

                    <div class="inputBox">
                        <span>Name on card :</span>
                        <input type="text" placeholder="Mr. xxxx">
                    </div>

                    <div class="inputBox">
                        <span>Credit card number :</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>

                    <div class="inputBox">
                        <span>Exp month :</span>
                        <input type="text" placeholder="January">
                    </div>

                    <div class="inputBox">
                        <span>Exp year :</span>
                        <input type="number" placeholder="2024">
                    </div>

                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="number" placeholder="1234">
                    </div>
                </div>
            </div>

            <button type="submit" class="submit-btn">Proceed to checkout</button>
        </form>
    </div>
</body>
</html>