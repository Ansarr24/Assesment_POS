
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
    </style>
</head>


<h1>Select Items to Purchase</h1>

<form action="{{ route('purchase.store') }}" method="POST" style="width: 700px; " >
    @csrf

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Please fill the form</h5>
                        <form action="{{ route('purchase.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile Number:</label>
                                <input type="tel" class="form-control" name="mobile" id="mobile" required>
                            </div>

                            <div class="center" style="display: flex; flex-direction: column; align-items: left;">
                                <label for="items">Items:</label>
                                <div style="display: flex; align-items: center;">
                                    <label for="item1" style="margin-right: 10px;">Pencil</label>
                                    <input type="number" name="item1"  id="item1" min="0" style="width: 50px;">
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <label for="item2" style="margin-right: 10px;">Book</label>
                                    <input type="number" name="item2"  id="item2" min="0" style="width: 50px;">
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <label for="item3" style="margin-right: 10px;">Ruler</label>
                                    <input type="number" name="item3"  id="item3" min="0" style="width: 50px;">
                                </div>
                                <div style="display: flex; align-items: center;">
                                    <label for="item4" style="margin-right: 10px;">Eraser</label>
                                    <input type="number" name="item4"  id="item4" min="0" style="width: 50px;">
                                </div>
                                <button type="submit" style="margin-top: 10px;">Purchase</button>
                            </div>

                        </form>
                        {{-- <div>
                            <a href="{{ route('purchase.list') }}" class="btn btn-primary"
                            style=" margin: 1%">Go to Purchase Detail</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if(session('success'))
        <div class="alert alert-success" style="color: green">
            {{ session('success') }}
        </div>
    @endif
</form>
