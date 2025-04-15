<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Struk Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 40px;
        }

        h2 {
            margin-bottom: 0;
        }

        .info {
            margin-bottom: 20px;
        }

        .info p {
            margin: 2px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        thead {
            background-color: #f0f0f0;
        }

        th,
        td {
            padding: 8px 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .total {
            background-color: #f0f0f0;
            padding: 15px;
        }

        .total-table td {
            border: none;
            padding: 5px 0;
        }

        .total-label {
            font-weight: bold;
        }

        .right {
            text-align: right;
        }

        .footer {
            font-size: 12px;
            color: gray;
            margin-top: 30px;
            text-align: center;
        }

        .thank-you {
            margin-top: 10px;
            font-weight: bold;
            color: #444;
        }
    </style>
</head>

<body>

    <h2>Indo April</h2>

    <div class="info">
        <p><strong>Member Status</strong> : Member</p>
        <p><strong>No. HP</strong> : 08974567898</p>
        <p><strong>Bergabung Sejak</strong> : 14 April 2025</p>
        <p><strong>Poin Member</strong> : 30000</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>QTY</th>
                <th>Harga</th>
                <th>Sub Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kacamatamoo</td>
                <td>3</td>
                <td>Rp. 1.000.000</td>
                <td>Rp. 3.000.000</td>
            </tr>
        </tbody>
    </table>

    <div class="total">
        <table class="total-table" style="width: 100%;">
            <tr>
                <td class="total-label">Total Harga</td>
                <td class="right"><strong>Rp. 3.000.000</strong></td>
            </tr>
            <tr>
                <td>Poin Digunakan</td>
                <td class="right">0</td>
            </tr>
            <tr>
                <td class="total-label">Harga Setelah Poin</td>
                <td class="right"><strong>Rp. 0</strong></td>
            </tr>
            <tr>
                <td class="total-label">Total Kembalian</td>
                <td class="right"><strong>Rp. 17.000.000</strong></td>
            </tr>
        </table>
    </div>

    <div class="footer">
        2025-04-14T07:27:14.000000Z | Petugas<br>
        <div class="thank-you">Terima kasih atas pembelian Anda!</div>
    </div>

</body>

</html>
