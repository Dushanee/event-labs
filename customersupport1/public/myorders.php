<!DOCTYPE html>
<html>
    <head>
        <title>My orders</title>
        <link rel="stylesheet" href="./css/addtocart.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <div style="height: 200px">
            to nav bar
        </div>
        <div class="cart-page">
            <div class="fLine">
                <h3 class="title" style="margin-left: 10%">My Orders</h3>
                <select name="dates" id="dates">
                    <option value="Last 14 days">Last 14 days</option>
                    <option value="Last 30 days">Last 30 days</option>
                    <option value="Last 2 months">Last 2 months</option>
                    <option value="Last year">Last year</option>
                </select>
            </div>
        <table class="ordersList">
            <tr>
                <th>ORDER NO.</th>
                <th>EVENT DATE</th>
                <th>PAYMENT STATUS</th>
                <th>AMOUNT</th>
                <th>ADDRESS</th>
                <th>ORDER DATE</th>
                <th>STATUS</th>
            </tr>
            <tr>
                <td>300</td>
                <td>9-Jan-2022</td>
                <td>Not Paid</td>
                <td>150,000</td>
                <td>Kundasale, Kandy</td>
                <td>1-Jan-2022</td>
                <td>On hold</td>
            </tr>
            <tr>
                <td>310</td>
                <td>9-Jan-2022</td>
                <td>Advance Paid</td>
                <td>237,000</td>
                <td>138, Highlevel street</td>
                <td>2-Jan-2022</td>
                <td>Confirmed</td>
            </tr>
        </table>
    </div>
    </body>
</html>