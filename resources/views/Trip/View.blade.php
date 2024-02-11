<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Trip ID:0{{ $Trip->id }}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Transport Management System</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Trip ID:0{{ $Trip->id }}</span> <br>
                    <span>Date: {{date('d / m / y')}}</span> <br>
                    <span>PIN Code : 370-001</span> <br>
                    <span>Address: Bhuj</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Information</th>
                <th width="50%" colspan="2">Trip Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Customer:</td>
                <td>{{ $Trip->customer }}</td>

                <td>Model/Vehicle:</td>
                <td>{{ $Trip->Model}}</td>
            </tr>
            <tr>
                <td>Driver:</td>
                <td>{{ $Trip->Driver}}</td>

                <td>From:</td>
                <td>{{ $Trip->From}}</td>
            </tr>
            <tr>
                <td>Start Date:</td>
                <td>{{$Trip->F_Date}}</td>

                <td>To:</td>
                <td>{{ $Trip->To}}</td>
            </tr>
            <tr>
                <td>Completed Date:</td>
                <td>{{$Trip->T_Date}}</td>

                <td>Route:</td>
                <td>{{ $Trip->Route}}</td>
            </tr>
            <tr>
                <td>Cash Given:</td>
                <td>{{ $Trip->Cash}}</td>

                <td>Status:</td>
                <td>{{ $Trip->Status}}</td>
            </tr>
            @php
                 $total = $Trip->FE + $Trip->OE + $Trip->RE;
                 $Remaning =  $Trip->Cash - $total;
            @endphp
            <tr>
                <td>Cash Spent:</td>
                <td>{{ $total}}</td>

                <td>Mileage:</td>
                <td>{{ $Trip->Mileage}}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Expenses
                </th>
            </tr>
            <tr class="bg-blue">
                <th>No.</th>
                <th>Expenses Name</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="10%">1</td>
                <td>
                    Food Expenses
                </td>
                <td width="10%">{{ $Trip->FE}}</td>
            </tr>
            <tr>
                <td width="10%">2</td>
                <td>
                    Fuel Expenses
                </td>
                <td width="10%">{{ $Trip->RE}}</td>

            </tr>

            <tr>
                <td width="10%">3</td>
                <td>
                    Other Expenses
                </td>
                <td width="10%">{{ $Trip->OE}}</td>

            </tr>


            <tr>
                <td width="10%">Total</td>
                <td>
                   Total Expenses
                </td>
                <td width="10%">{{ $total }}</td>

            </tr>


            <tr>
                <td colspan="2" class="total-heading">Remaning Amount <small>In Cash:</small> </td>
                <td colspan="1" class="total-heading">{{$Remaning}}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <p class="text-center">
        #Trip Completed
    </p>

</body>
</html>