<?php

    // Membuat array berisikan data harga
    $harga = [
        "Rp. 13000",
        "Rp. 15000",
        "Rp. 13000",
        "Rp. 1000",
        "Rp. 1000",
        "Rp. 3000",
        "Rp. 5000",
        "Rp. 4000",
        "Rp. 5000"
    ];

    // Menampilkan output ke dalam browser
    echo "<h1>Daftar Menu</h1>";

    // Membuat table agar output sejajar dan rapi
    echo "<table>
            <ul>
                <tbody>
                    <tr>
                        <td>
                            <li>Ayam Goreng</li>
                        </td>
                        <td>=</td>
                        <td>$harga[0]</td>
                    </tr>
                    <tr>
                        <td>
                            <li>Ayam Bakar</li>
                        </td>
                        <td>=</td>
                        <td>$harga[1]</td>
                    </tr>
                    <tr>
                        <td>
                            <li>Ayam Sayur</li>
                        </td>
                        <td>=</td>
                        <td>$harga[2]</td>
                    </tr>
                    <tr>
                        <td>
                            <li>Tempe Goreng</li>
                        </td>
                        <td>=</td>
                        <td>$harga[3]</td>
                    </tr>
                    <tr>
                        <td>
                            <li>Tahu Goreng</li>
                        </td>
                        <td>=</td>
                        <td>$harga[4]</td>
                    </tr>
                    <tr>
                        <td>
                            <li>Soto</li>
                        </td>
                        <td>=</td>
                        <td>$harga[5]</td>
                    </tr>
                    <tr>
                        <td>
                            <li>Nasi Putih
                        </li>
                        </td><td>=</td>
                        <td>$harga[6]</td>
                    </tr>
                    <tr>
                        <td>
                            <li>Es Teh</li>
                        </td>
                        <td>=</td>
                        <td>$harga[7]</td>
                    </tr>
                    <tr>
                        <td>
                            <li>Es Tebu</li>
                        </td>
                        <td>=</td>
                        <td>$harga[8]</td>
                    </tr>
                </tbody>
            </ul>
        </table>";
?>