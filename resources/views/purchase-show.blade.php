

<head>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .card {
            background-color: #f8f9fa;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
         table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>



<div class="card" style="width: 500px">
    <div class="card-body">
        <h1 class="card-title">Purchase Details</h1>

        <p>Name: {{ $purchase->name }}</p>
        <p>Email: {{ $purchase->email }}</p>
        <p>Mobile Number: {{ $purchase->mobile }}</p>

        <h2 class="card-subtitle">Purchased Items:</h2>
        <table style="padding: 20px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $rowCount = 1;
                @endphp
                @if ($purchase->item1)

                    <tr>
                        <td>{{ $rowCount++ }}</td>
                        <td>Pencil</td>
                        <td style="text-align: right">RM 12</td>
                        <td style="text-align: right">{{ $purchase->item1 }}</td>
                        @php
                            $total1 = $purchase->item1 * 12;
                        @endphp
                        <td style="text-align: right">{{  number_format($total1 ?? 0, 2)   }}</td>
                    </tr>
                @endif
                @if ($purchase->item2)

                    <tr>
                        <td>{{ $rowCount++ }}</td>
                        <td>Book</td>
                        <td style="text-align: right">RM 15</td>
                        <td style="text-align: right">{{ $purchase->item2 }}</td>
                        @php
                            $total2 = $purchase->item2 * 15;
                        @endphp
                        <td style="text-align: right">{{  number_format($total2 ?? 0, 2)   }}</td>
                    </tr>
                @endif
                @if ($purchase->item3)

                    <tr>
                        <td>{{ $rowCount++ }}</td>
                        <td>Ruler</td>
                        <td style="text-align: right">RM 2</td>
                        <td style="text-align: right">{{ $purchase->item3 }}</td>
                        @php
                            $total3 = $purchase->item3 * 2;
                        @endphp
                        <td style="text-align: right">{{  number_format($total3 ?? 0, 2)   }}</td>
                    </tr>
                @endif
                @if ($purchase->item4)

                    <tr>
                        <td>{{ $rowCount++ }}</td>
                        <td>Eraser</td>
                        <td style="text-align: right">RM 2</td>
                        <td style="text-align: right">{{ $purchase->item4 }}</td>
                        @php
                            $total4 = $purchase->item4 * 1;
                        @endphp
                        <td style="text-align: right">{{  number_format($total4 ?? 0, 2)   }}</td>
                    </tr>
                @endif


                <tr>
                    @php
                        $total1 = $total1 ?? 0;
                        $total2 = $total2 ?? 0;
                        $total3 = $total3 ?? 0;
                        $total4 = $total4 ?? 0;

                        $total = $total1 + $total2 + $total3 + $total4;
                    @endphp
                    <td colspan="4"><b>Total (RM)</b></td>
                    <td style="text-align: right"><b> {{ number_format($total ?? 0, 2)  }}</b></td>


                </tr>

            </tbody>
        </table><br>

        <a href="{{ route('purchase.index') }}" style="color: blue">New Purchase</a>

    </div>
</div>

