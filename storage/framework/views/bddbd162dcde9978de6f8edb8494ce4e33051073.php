

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

        <p>Name: <?php echo e($purchase->name); ?></p>
        <p>Email: <?php echo e($purchase->email); ?></p>
        <p>Mobile Number: <?php echo e($purchase->mobile); ?></p>

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
                <?php
                    $rowCount = 1;
                ?>
                <?php if($purchase->item1): ?>

                    <tr>
                        <td><?php echo e($rowCount++); ?></td>
                        <td>Pencil</td>
                        <td style="text-align: right">RM 12</td>
                        <td style="text-align: right"><?php echo e($purchase->item1); ?></td>
                        <?php
                            $total1 = $purchase->item1 * 12;
                        ?>
                        <td style="text-align: right"><?php echo e(number_format($total1 ?? 0, 2)); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($purchase->item2): ?>

                    <tr>
                        <td><?php echo e($rowCount++); ?></td>
                        <td>Book</td>
                        <td style="text-align: right">RM 15</td>
                        <td style="text-align: right"><?php echo e($purchase->item2); ?></td>
                        <?php
                            $total2 = $purchase->item2 * 15;
                        ?>
                        <td style="text-align: right"><?php echo e(number_format($total2 ?? 0, 2)); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($purchase->item3): ?>

                    <tr>
                        <td><?php echo e($rowCount++); ?></td>
                        <td>Ruler</td>
                        <td style="text-align: right">RM 2</td>
                        <td style="text-align: right"><?php echo e($purchase->item3); ?></td>
                        <?php
                            $total3 = $purchase->item3 * 2;
                        ?>
                        <td style="text-align: right"><?php echo e(number_format($total3 ?? 0, 2)); ?></td>
                    </tr>
                <?php endif; ?>
                <?php if($purchase->item4): ?>

                    <tr>
                        <td><?php echo e($rowCount++); ?></td>
                        <td>Eraser</td>
                        <td style="text-align: right">RM 2</td>
                        <td style="text-align: right"><?php echo e($purchase->item4); ?></td>
                        <?php
                            $total4 = $purchase->item4 * 1;
                        ?>
                        <td style="text-align: right"><?php echo e(number_format($total4 ?? 0, 2)); ?></td>
                    </tr>
                <?php endif; ?>


                <tr>
                    <?php
                        $total1 = $total1 ?? 0;
                        $total2 = $total2 ?? 0;
                        $total3 = $total3 ?? 0;
                        $total4 = $total4 ?? 0;

                        $total = $total1 + $total2 + $total3 + $total4;
                    ?>
                    <td colspan="4"><b>Total (RM)</b></td>
                    <td style="text-align: right"><b> <?php echo e(number_format($total ?? 0, 2)); ?></b></td>


                </tr>

            </tbody>
        </table><br>

        <a href="<?php echo e(route('purchase.index')); ?>" style="color: blue">New Purchase</a>

    </div>
</div>

<?php /**PATH C:\laragon\www\assesment-1\resources\views/purchase-show.blade.php ENDPATH**/ ?>