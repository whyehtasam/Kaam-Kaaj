<?php
include 'config.php';
include 'track.php';
include 'rendermsg.php';
// include 'sms.php';
// include 'rendermsg.php';


// echo $msgworker;
$h = $_SESSION['hire'];
if (isset($_POST['confirm'])) {
    // sendmsg($hire, $msghire);
    // sendmsg($worker, $msgworker);
    header("location success.php");
}
?>

<?php
            require_once 'vendor/autoload.php';
            use Twilio\Rest\Client;
        
            $accountSid = 'AC2a95733fb2fff2f298645fc001f8c3eb';
            $authToken = '6efa673cd03ae2d8b6243e565d232b06';
        
            $twilio = new Client($accountSid, $authToken);
            $message = $twilio->messages->create(
                '+916200348730', //receiver phone's number 
                [
                    'from' => '+16204458605',
                    'body' => $msgworker, //data to be sent 
                ]
            );
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

    <link rel="stylesheet" href="css/invoice.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="receipt" id="myDiv">
            <h1>Kaam Kaaj </h1>
            <!-- <p>Central Canteen</p> -->

            <div class="time-date">

                <!-- <div class="date" id="dt"><?php echo $orders['date'] ?></div>
                <div class="time" id="tm"><?php echo $orders['time'] ?></div> -->
            </div>
            <hr>
            <!-- <div class=" "> -->
            <div class="description">
                <table class="table" style="text-align: justify;">
                    <tr>
                        <th scope="row">Worker</th>
                        <td><?php echo $h->wname ?></td>
                    </tr>
                    <tr>
                        <th scope="row"> Profession</th>
                        <td><?php echo $h->proff ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Date</th>
                        <td><?php echo $h->date ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Time</th>
                        <td><?php echo $h->time ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Hired By</th>
                        <td><?php echo $h->hname ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Mobile No.</th>
                        <td><?php echo $h->wnum ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Advance Payment </th>
                        <td><?php echo $h->base_p ?></td>
                    </tr>

                </table>
            </div>
            <hr>




            <hr>

            <span id="orderid" style="display:none"><?php echo $h->hid; ?></span>

            <h3>Thanks for hiring worker using <br> Kaam Kaaj</h3>
            <button onclick="printDiv()">Download Receipt to PDF</button>
        </div>
    </div>


    <script>
        const d = new Date();
        const t = new Date();
        // var get = document.getElementById('dt').innerHTML = d.getDate() + "/" + (d.getMonth() + 1) + "/" + d.getFullYear();
        // document.getElementById('tm').innerHTML = t.getHours() + ":" + t.getMinutes() + ":" + t.getSeconds();

        function printDiv() {
            // Get the div element by its ID
            var divToPrint = document.getElementById("myDiv");

            const name = document.getElementById('orderid').innerHTML;
            console.log(name);
            // Set the options for the PDF
            var options = {
                filename: name,
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'letter',
                    orientation: 'portrait'
                }
            };

            // Use html2pdf to generate the PDF
            html2pdf().from(divToPrint).set(options).save();
        }
    </script>
</body>

</html>