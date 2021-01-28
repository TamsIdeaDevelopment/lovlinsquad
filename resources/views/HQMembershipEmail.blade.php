<h2>Lovlin Automate Monthly Reminder</h2>
<br/>
<img src="https://lovlinsquad.com/assets3/image/logo.png" style="margin-left:100px; height: 100px;">
{{--<p>We noticed that <span style="color: red"> haha </span> haven't restock your product for 3 months. Details as below:</p>--}}
<p>We noticed that <span style="color: red"> {{$user->name}} </span> haven't restock your product for 3 months. Details as below:</p>
<br/>
<table style="margin-left: 100px">
    <tr>
        <td>Name</td>
        <td>:</td>
        <td>{{$user->name}}</td>
    </tr>
    <tr>
        <td>Membership</td>
        <td>:</td>
        <td>LN{{str_pad($agent->member_no, 5, '0', STR_PAD_LEFT)}}</td>
    </tr>
    <tr>
        <td>Phone No</td>
        <td>:</td>
        <td>{{$user->phone_no}}</td>
    </tr>
</table>
<br/>
<p>Please kindly contact them to ensure they remain active as your agent.</p>
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
