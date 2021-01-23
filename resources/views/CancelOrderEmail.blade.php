<h2>Order <span style="color: red"> #{{str_pad($order->id, 6, '0', STR_PAD_LEFT)}} </span> Declined</h2>
<br/>
<img src="http://staging.lovlinsquad.com/assets3/image/logo.png" style="margin-left:100px; height: 100px;">
<p>We would like to inform you that your order <span style="color: red"> #{{str_pad($order->id, 6, '0', STR_PAD_LEFT)}} </span> have been rejected as order exceed 24 hours. Details as below:</p>
<table style="margin-left: 100px">
    <tr>
        <td>Order No</td>
        <td>:</td>
        <td>#{{str_pad($order->id, 6, '0', STR_PAD_LEFT)}}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>:</td>
        <td>{{$user->name}}</td>
    </tr>
    <tr>
        <td>Total</td>
        <td>:</td>
        <td>RM {{$order->total}}</td>
    </tr>
    <tr>
        <td>Shipping Address</td>
        <td>:</td>
        <td>{{$order->shipping_address}},<br/>{{$order->postcode}}, {{$order->city}}, {{$order->state}}, {{$order->country}}</td>
    </tr>
</table>
<br/>
<p>Please kindly login to our system to purchase again. Sorry for the inconvenience.</p>
<br/>
Thank You,
<br/>
<b>Lovlin Essential HQ</b>
<br/>
<b> Ivoris Eco Majestic, 65-G, Jln Eco Majestic 9/1A, 43500 Semenyih, Selangor</b>
<br/>
<b>03-8727 8287</b>

<br/>
<br/>
<p>**************************************************************************</p>
<p>
    Please do not reply to this email as it was automatically generated.
</p>
<p>**************************************************************************</p>
