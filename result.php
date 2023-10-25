<?php
require_once 'convertNumber.php';
require_once 'filterNumber.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>RESULT</title>
</head>

<body>
    <div id="wrapper">
        <div id="container">
            <div class="row justify-content-around">
                <form id="form_reg" class="col-md-6 bg-light p-3 my-3" action="convertNumber.php" method="get">
                    <h1 class="text-center text-uppercase h3 py-3">FILTERED NUMBER</h1>
                    <div class="form-group">
                        <label for="listNoDuplicate">LIST NO DUPLICATE</label><br>
                        <textarea contenteditable="true" cols="50" rows="4"><?php echo $listNoDuplicate; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="listDuplicate">LIST DUPLICATE</label><br>
                        <textarea contenteditable="true" cols="50" rows="4"><?php echo $listDuplicate; ?></textarea>
                        <input type="submit" value="FILTER AGAIN" class="btn-danger btn btn-block p-2 text-uppercase" name="btnBack" onclick="goToHome();">
                </form>
            </div>





            <div class="row">
                <div class="col-6 align-self-center">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="10" style=" text-align: center;">LIST ĐÃ CHUYỂN</th>
                            </tr>
                            <tr>
                                <th style=" text-align: center;">ĐẦU 2</th>
                                <th style=" text-align: center;">VOS</th>
                                <th style=" text-align: center;">GỬI MAIL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style=" text-align: center;">
                                    <textarea contenteditable="true" cols="30" rows="10"><?php echo $ListNumberStock; ?></textarea>
                                </td>
                                <td style=" text-align: center;">
                                    <textarea contenteditable="true" cols="30" rows="10"><?php echo $ListNumber; ?></textarea>
                                </td>
                                <td style=" text-align: center;">
                                    <textarea contenteditable="true" cols="30" rows="10"><?php echo $ListNumberSend; ?></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <style>
                body {
                    display: flex;
                    justify-content: center;
                    /* Căn bảng ra giữa trang ngang */
                    align-items: center;
                    /* Căn bảng ra giữa trang dọc */
                    height: 100vh;
                    /* Chiều cao 100% của viewport */
                    margin: 0;
                    /* Loại bỏ margin mặc định */
                }

                table {
                    width: 50%;
                    margin: 0 auto;
                    border-collapse: collapse;
                }

                th,
                td {
                    border: 1px solid rgb(219, 20, 20);
                    padding: 10px;
                    text-align: center;
                }

                th {
                    background-color: #b1f563;
                }
            </style>
        </div>
    </div>
</body>

</html>